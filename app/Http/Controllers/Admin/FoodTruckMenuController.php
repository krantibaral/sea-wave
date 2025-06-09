<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use App\Models\FoodTruckCategory;
use App\Models\FoodTruckMenu;
use App\Models\FoodTruckMenuCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FoodTruckMenuController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->title = "Food Truck Menu";
        $this->resources = "admin.food-truck-menus.";
        $this->route = "food-truck-menus.";
    }

    public function index()
    {
        $data = $this->crudInfo();
        $data['items'] = FoodTruckMenu::with('category')->orderBy('created_at', 'desc')->paginate(10);
        return view($this->indexResource(), $data);
    }

    public function create()
    {
        $data = $this->crudInfo();
        $data['menuCategories'] = FoodTruckCategory::all();
        return view($this->createResource(), $data);
    }

    public function store(Request $request)
    {

        // dd($request->all());
        try {
            $slug = Str::slug($request->menu_name);
            $existingMenu = FoodTruckMenu::where('slug', $slug)->first();
            if ($existingMenu) {
                $slug .= '-' . Str::random(5);
            }

            $menu = new FoodTruckMenu();
            $menu->menu_name = $request->menu_name;
            $menu->price = $request->price;
            $menu->food_truck_category_id = $request->food_truck_category_id;
            $menu->description = $request->description;
            $menu->slug = $slug;
            $menu->special_menu = $request->boolean('special_menu');

            \Log::info('Saving menu:', $menu->toArray());

            if (!$menu->save()) {
                \Log::error('Menu not saved');
                return redirect()->route($this->indexRoute())->with('error', 'Menu not saved.');
            }

            return redirect()->route($this->indexRoute())
                ->with('success', 'Food truck menu item created successfully.');
        } catch (\Exception $e) {
            \Log::error('Exception saving menu: ' . $e->getMessage());
            return redirect()->route($this->indexRoute())
                ->with('error', 'There was an error creating the food truck menu item.');
        }

    }

    public function show(FoodTruckMenu $foodTruckMenu)
    {
        $data = $this->crudInfo();
        $data['item'] = $foodTruckMenu;
        return view($this->showResource(), $data);
    }

    public function edit(FoodTruckMenu $foodTruckMenu)
    {
        $data = $this->crudInfo();
        $data['item'] = $foodTruckMenu;
        $data['menuCategories'] = FoodTruckCategory::all();
        return view($this->editResource(), $data);
    }

    public function update(Request $request, FoodTruckMenu $foodTruckMenu)
    {
        $request->validate([
            'menu_name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'food_truck_category_id' => 'required|exists:food_truck_categories,id',
            'description' => 'nullable|string',
            'special_menu' => 'nullable|boolean',
        ]);

        $foodTruckMenu->update([
            'menu_name' => $request->menu_name,
            'price' => $request->price,
            'food_truck_category_id' => $request->food_truck_category_id,
            'description' => $request->description,
            'special_menu' => $request->has('special_menu') ? $request->special_menu : false,
        ]);

        return redirect()->route($this->indexRoute())
            ->with('success', 'Food truck menu item updated successfully.');
    }

    public function destroy(FoodTruckMenu $foodTruckMenu)
    {
        try {
            $foodTruckMenu->delete();
            return redirect()->route($this->indexRoute())
                ->with('success', 'Food truck menu item deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->route($this->indexRoute())
                ->with('error', 'There was an error deleting the food truck menu item.');
        }
    }
}
