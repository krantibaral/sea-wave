<?php

namespace App\Http\Controllers\Admin;

use App\Models\CateringMenuCategory;
use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;

class CateringMenuCategoryController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->title = "Catering Menu Category";
        $this->resources = "admin.catering-menu-categories.";
        $this->route = "catering-menu-categories.";
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->crudInfo();
        $data['items'] = CateringMenuCategory::latest()->get();
        return view($this->indexResource(), $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = $this->crudInfo();
        return view($this->createResource(), $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required',
            'image' => 'nullable|image|max:10240',
        ]);

        $category = CateringMenuCategory::create([
            'category_name' => $request->category_name,
        ]);

        if ($request->hasFile('image')) {
            $category->addMediaFromRequest('image')->toMediaCollection('catering_menu_category_images');
        }

        return redirect()->route($this->indexRoute())
            ->with('success', 'Catering Menu Category added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = $this->crudInfo();
        $data['item'] = CateringMenuCategory::findOrFail($id);
        return view($this->showResource(), $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = $this->crudInfo();
        $data['item'] = CateringMenuCategory::findOrFail($id);
        return view($this->editResource(), $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'category_name' => 'required',
            'image' => 'nullable|image|max:10240',
        ]);

        $category = CateringMenuCategory::findOrFail($id);
        $category->update([
            'category_name' => $request->category_name,
        ]);

        if ($request->hasFile('image')) {
            $category->clearMediaCollection('catering_menu_category_images');
            $category->addMediaFromRequest('image')->toMediaCollection('catering_menu_category_images');
        }

        return redirect()->route($this->indexRoute())
            ->with('success', 'Catering Menu Category updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $category = CateringMenuCategory::findOrFail($id);
            $category->clearMediaCollection('catering_menu_category_images');
            $category->delete();
            return redirect()->route($this->indexRoute())
                ->with('success', 'Catering Menu Category deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->route($this->indexRoute())
                ->with('error', 'There was an error deleting the Catering Menu Category.');
        }
    }
}
