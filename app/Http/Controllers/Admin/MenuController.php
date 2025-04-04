<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use App\Models\Menu;
use App\Models\MenuCategory;
use Illuminate\Http\Request;

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
        $data['items'] = Menu::with('category')->orderBy('created_at', 'desc')->get();
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
            'name' => 'required',
            'price' => 'required|numeric',
            'category_id' => 'required|exists:menu_categories,id',
            'food_image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'banner_image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);

        $menu = Menu::create($request->except(['food_image', 'banner_image']));
        
        if ($request->hasFile('food_image')) {
            $menu->addMedia($request->file('food_image'))->toMediaCollection('food_images');
        }
        
        if ($request->hasFile('banner_image')) {
            $menu->addMedia($request->file('banner_image'))->toMediaCollection('banner_images');
        }

        return redirect()->route($this->indexRoute())
            ->with('success', 'Menu item added successfully.');
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
        ]);

        $menu->update($request->except(['food_image', 'banner_image']));
        
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
