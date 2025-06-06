<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use App\Models\StoreDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class StoreDetailsController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->title = "Store Details";
        $this->resources = "admin.store-details.";
        $this->route = "store-details.";
    }

    public function index()
    {
        $data = $this->crudInfo();
        $data['items'] = StoreDetails::orderBy('created_at', 'desc')->paginate(10);
        return view($this->indexResource(), $data);
    }

    public function create()
    {
        $data = $this->crudInfo();
        return view($this->createResource(), $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'location' => 'nullable|string|max:255',
            'phone_number' => 'nullable|string|max:50',
            'map_link' => 'nullable|string',
            'youtube_link' => 'nullable|url',
            'insta_link' => 'nullable|url',
            'tiktok_link' => 'nullable|url',
            'facebook_link' => 'nullable|url',
            'catering_image' => 'nullable|image|max:2048',
        ]);

        try {
            $mapLink = $this->extractMapSrc($request->map_link);

            $storeDetails = StoreDetails::create(array_merge(
                $request->except('catering_image', 'map_link'),
                [
                    'map_link' => $mapLink,
                    'youtube_link' => $request->youtube_link,
                ]
            ));

            if ($request->hasFile('catering_image')) {
                $storeDetails->addMediaFromRequest('catering_image')->toMediaCollection('catering_images');
            }

            return redirect()->route($this->indexRoute())
                ->with('success', 'Store details created successfully.');
        } catch (\Exception $e) {
            return redirect()->route($this->indexRoute())
                ->with('error', 'There was an error creating the store details.');
        }
    }

    public function show($id)
    {
        $data = $this->crudInfo();
        $data['item'] = StoreDetails::findOrFail($id);
        return view($this->showResource(), $data);
    }

    public function edit($id)
    {
        $data = $this->crudInfo();
        $data['item'] = StoreDetails::findOrFail($id);
        return view($this->editResource(), $data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'location' => 'nullable|string|max:255',
            'phone_number' => 'nullable|string|max:50',
            'map_link' => 'nullable|string',
            'youtube_link' => 'nullable|url',
            'insta_link' => 'nullable|url',
            'tiktok_link' => 'nullable|url',
            'facebook_link' => 'nullable|url',
            'catering_image' => 'nullable|image|max:2048',
        ]);

        try {
            $storeDetails = StoreDetails::findOrFail($id);

            $mapLink = $this->extractMapSrc($request->map_link);

            $storeDetails->update(array_merge(
                $request->except('catering_image', 'map_link'),
                [
                    [
                        'map_link' => $mapLink,
                        'youtube_link' => $request->youtube_link,
                    ]
                ]
            ));

            if ($request->hasFile('catering_image')) {
                $storeDetails->clearMediaCollection('catering_images');
                $storeDetails->addMediaFromRequest('catering_image')->toMediaCollection('catering_images');
            }

            return redirect()->route($this->indexRoute())
                ->with('success', 'Store details updated successfully.');
        } catch (\Exception $e) {
            return redirect()->route($this->indexRoute())
                ->with('error', 'There was an error updating the store details.');
        }
    }

    public function destroy($id)
    {
        try {
            $storeDetails = StoreDetails::findOrFail($id);
            $storeDetails->clearMediaCollection('catering_images');
            $storeDetails->delete();

            return redirect()->route($this->indexRoute())
                ->with('success', 'Store details deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->route($this->indexRoute())
                ->with('error', 'There was an error deleting the store details.');
        }
    }

    /**
     * Extract the src value from an iframe or return the original if it's already a valid embed link.
     */
    private function extractMapSrc(?string $mapInput): ?string
    {
        if (empty($mapInput)) {
            return null;
        }

        // If user pastes full iframe, extract src
        if (Str::contains($mapInput, '<iframe')) {
            preg_match('/src="([^"]+)"/', $mapInput, $matches);
            return $matches[1] ?? null;
        }

        // If user pastes an embed URL directly
        if (Str::startsWith($mapInput, 'https://www.google.com/maps/embed?')) {
            return $mapInput;
        }

        // Invalid or unsupported format
        return null;
    }
}
