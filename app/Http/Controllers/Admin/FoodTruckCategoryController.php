<?php

namespace App\Http\Controllers\Admin;

use App\Models\FoodTruckCategory;
use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;

class FoodTruckCategoryController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->title = "Food Truck Category";
        $this->resources = "admin.food-truck-categories.";
        $this->route = "food-truck-categories.";
    }

    public function index()
    {
        $data = $this->crudInfo();
        $data['items'] = FoodTruckCategory::latest()->get();
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
            'category_name' => 'required',
            'image' => 'nullable|image|max:10240',
        ]);

        $category = FoodTruckCategory::create([
            'category_name' => $request->category_name,
        ]);

        if ($request->hasFile('image')) {
            $category->addMediaFromRequest('image')->toMediaCollection('food_truck_category_images');
        }

        return redirect()->route($this->indexRoute())
            ->with('success', 'Food Truck Category added successfully.');
    }

    public function show($id)
    {
        $data = $this->crudInfo();
        $data['item'] = FoodTruckCategory::findOrFail($id);
        return view($this->showResource(), $data);
    }

    public function edit($id)
    {
        $data = $this->crudInfo();
        $data['item'] = FoodTruckCategory::findOrFail($id);
        return view($this->editResource(), $data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'category_name' => 'required',
            'image' => 'nullable|image|max:10240',
        ]);

        $category = FoodTruckCategory::findOrFail($id);
        $category->update([
            'category_name' => $request->category_name,
        ]);

        if ($request->hasFile('image')) {
            $category->clearMediaCollection('food_truck_category_images');
            $category->addMediaFromRequest('image')->toMediaCollection('food_truck_category_images');
        }

        return redirect()->route($this->indexRoute())
            ->with('success', 'Food Truck Category updated successfully.');
    }

    public function destroy($id)
    {
        try {
            $category = FoodTruckCategory::findOrFail($id);
            $category->clearMediaCollection('food_truck_category_images');
            $category->delete();

            return redirect()->route($this->indexRoute())
                ->with('success', 'Food Truck Category deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->route($this->indexRoute())
                ->with('error', 'There was an error deleting the Food Truck Category.');
        }
    }
}
