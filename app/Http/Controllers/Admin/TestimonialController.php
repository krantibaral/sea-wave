<?php

namespace App\Http\Controllers\Admin;

use App\Models\Testimonial;
use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;

class TestimonialController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->title = 'Testimonials';
        $this->resources = 'admin.testimonials.';
        $this->route = 'testimonials.';
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->crudInfo();
        $data['items'] = Testimonial::orderBy('id', 'DESC')->get();
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
            'name' => 'required',
            'comment' => 'required'  
        ]);

        Testimonial::create($request->all());

        if ($request->image) {
            $testimonial = Testimonial::latest()->first();
            $testimonial->addMediaFromRequest('image')
                ->toMediaCollection();
        }

        return redirect()->route($this->indexRoute())
            ->with('success', 'Testimonial added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = $this->crudInfo();
        $data['item'] = Testimonial::findOrFail($id);
        return view($this->showResource(), $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = $this->crudInfo();
        $data['item'] = Testimonial::findOrFail($id);
        return view($this->editResource(), $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'comment' => 'required'  
        ]);

        $testimonial = Testimonial::findOrFail($id);
        $testimonial->update($request->all());

        if ($request->image) {
            $testimonial->clearMediaCollection();
            $testimonial->addMediaFromRequest('image')
                ->toMediaCollection();
        }

        return redirect()->route($this->indexRoute())
            ->with('success', 'Testimonial updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $testimonial = Testimonial::findOrFail($id);
            $testimonial->clearMediaCollection();
            $testimonial->delete();

            return redirect()->route($this->indexRoute())
                ->with('success', 'Testimonial deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->route($this->indexRoute())
                ->with('error', 'There was an error deleting the Testimonial.');
        }
    }
}
