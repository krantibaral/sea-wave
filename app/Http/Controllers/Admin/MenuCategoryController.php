<?php

namespace App\Http\Controllers\Admin;

use App\Models\MenuCategory;
use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;

class MenuCategoryController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->title = "Menu Category";
        $this->resources = "admin.menu-categories.";
        $this->route = "menu-categories.";
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->crudInfo();
        $data['items'] = MenuCategory::orderBy('created_at', 'desc')->get();
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
        ]);

        MenuCategory::create($request->all());

        return redirect()->route($this->indexRoute())
            ->with('success', 'Menu Category added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = $this->crudInfo();
        $data['item'] = MenuCategory::findOrFail($id);
        return view($this->showResource(), $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = $this->crudInfo();
        $data['item'] = MenuCategory::findOrFail($id);
        return view($this->editResource(), $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'category_name' => 'required',
        ]);

        $data = MenuCategory::findOrFail($id);
        $data->update($request->all());

        return redirect()->route($this->indexRoute())
            ->with('success', 'Menu Category updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $data = MenuCategory::findOrFail($id);
            $data->delete();
            return redirect()->route($this->indexRoute())
                ->with('success', 'Menu Category deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->route($this->indexRoute())
                ->with('error', 'There was an error deleting the Menu Category.');
        }
    }
}