<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use App\Models\Menu;
use App\Models\MenuCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MenuController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->title = "Menu";
        $this->resources = "admin.menus.";
        $this->route = "menus.";
    }

    public function index()
    {
        $data = $this->crudInfo();
        $data['items'] = Menu::with('category')->orderBy('created_at', 'desc')->paginate(10);
        return view($this->indexResource(), $data);
    }

    public function create()
    {
        $data = $this->crudInfo();
        $data['menuCategories'] = MenuCategory::all();
        return view($this->createResource(), $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'category_id' => 'required|exists:menu_categories,id',
            'description' => 'nullable|string',
            'food_image' => 'nullable|image|max:2048',
            'special_menu' => 'nullable|boolean', // Validate special_menu field
        ]);

        try {
            $slug = Str::slug($request->name);
            $existingMenu = Menu::where('slug', $slug)->first();

            if ($existingMenu) {
                $slug = $slug . '-' . Str::random(5); 
            }

            $menu = new Menu();
            $menu->name = $request->name;
            $menu->price = $request->price;
            $menu->category_id = $request->category_id;
            $menu->description = $request->description;
            $menu->slug = $slug;
            $menu->special_menu = $request->has('special_menu') ? $request->special_menu : false; // Set default value to false

            $menu->save();

            if ($request->hasFile('food_image')) {
                $menu->addMediaFromRequest('food_image')->toMediaCollection('food_images');
            }

            return redirect()->route($this->indexRoute())
                ->with('success', 'Menu item created successfully.');
        } catch (\Exception $e) {
            return redirect()->route($this->indexRoute())
                ->with('error', 'There was an error creating the menu item.');
        }
    }

    public function show(Menu $menu)
    {
        $data = $this->crudInfo();
        $data['item'] = $menu;
        return view($this->showResource(), $data);
    }

    public function edit(Menu $menu)
    {
        $data = $this->crudInfo();
        $data['item'] = $menu;
        $data['menuCategories'] = MenuCategory::all();
        return view($this->editResource(), $data);
    }

    public function update(Request $request, Menu $menu)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'category_id' => 'required|exists:menu_categories,id',
            'food_image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'banner_image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'special_menu' => 'nullable|boolean', // Validate special_menu field
        ]);

        $menu->update($request->except(['food_image', 'banner_image']));

        // Update the special_menu field
        $menu->special_menu = $request->has('special_menu') ? $request->special_menu : false;

        if ($request->hasFile('food_image')) {
            $menu->clearMediaCollection('food_images');
            $menu->addMedia($request->file('food_image'))->toMediaCollection('food_images');
        }

        if ($request->hasFile('banner_image')) {
            $menu->clearMediaCollection('banner_images');
            $menu->addMedia($request->file('banner_image'))->toMediaCollection('banner_images');
        }

        return redirect()->route($this->indexRoute())
            ->with('success', 'Menu item updated successfully.');
    }

    public function destroy(Menu $menu)
    {
        try {
            $menu->clearMediaCollection('food_images');
            $menu->clearMediaCollection('banner_images');
            $menu->delete();
            return redirect()->route($this->indexRoute())
                ->with('success', 'Menu item deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->route($this->indexRoute())
                ->with('error', 'There was an error deleting the menu item.');
        }
    }
}
