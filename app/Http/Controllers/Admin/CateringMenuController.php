<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use App\Models\CateringMenu;
use App\Models\CateringMenuCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CateringMenuController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->title = "Catering Menu";
        $this->resources = "admin.catering-menus.";
        $this->route = "catering-menus.";
    }

    public function index()
    {
        $data = $this->crudInfo();
        $data['items'] = CateringMenu::with('category')->orderBy('created_at', 'desc')->paginate(10);
        return view($this->indexResource(), $data);
    }

    public function create()
    {
        $data = $this->crudInfo();
        $data['menuCategories'] = CateringMenuCategory::all();
        return view($this->createResource(), $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'menu_name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'catering_menu_category_id' => 'required|exists:catering_menu_categories,id',
            'description' => 'nullable|string',
            'special_menu' => 'nullable|boolean',
        ]);

        try {
            $slug = Str::slug($request->menu_name);
            $existingMenu = CateringMenu::where('slug', $slug)->first();

            if ($existingMenu) {
                $slug .= '-' . Str::random(5);
            }

            $menu = new CateringMenu();
            $menu->menu_name = $request->menu_name;
            $menu->price = $request->price;
            $menu->catering_menu_category_id = $request->catering_menu_category_id;
            $menu->description = $request->description;
            $menu->slug = $slug;
            $menu->special_menu = $request->has('special_menu') ? $request->special_menu : false;

            $menu->save();

            return redirect()->route($this->indexRoute())
                ->with('success', 'Catering menu item created successfully.');
        } catch (\Exception $e) {
            return redirect()->route($this->indexRoute())
                ->with('error', 'There was an error creating the catering menu item.');
        }
    }

    public function show(CateringMenu $cateringMenu)
    {
        $data = $this->crudInfo();
        $data['item'] = $cateringMenu;
        return view($this->showResource(), $data);
    }

    public function edit(CateringMenu $cateringMenu)
    {
        $data = $this->crudInfo();
        $data['item'] = $cateringMenu;
        $data['menuCategories'] = CateringMenuCategory::all();
        return view($this->editResource(), $data);
    }

    public function update(Request $request, CateringMenu $cateringMenu)
    {
        $request->validate([
            'menu_name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'catering_menu_category_id' => 'required|exists:catering_menu_categories,id',
            'description' => 'nullable|string',
            'special_menu' => 'nullable|boolean',
        ]);

        $cateringMenu->update([
            'menu_name' => $request->menu_name,
            'price' => $request->price,
            'catering_menu_category_id' => $request->catering_menu_category_id,
            'description' => $request->description,
            'special_menu' => $request->has('special_menu') ? $request->special_menu : false,
        ]);

        return redirect()->route($this->indexRoute())
            ->with('success', 'Catering menu item updated successfully.');
    }

    public function destroy(CateringMenu $cateringMenu)
    {
        try {
            $cateringMenu->delete();
            return redirect()->route($this->indexRoute())
                ->with('success', 'Catering menu item deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->route($this->indexRoute())
                ->with('error', 'There was an error deleting the catering menu item.');
        }
    }
}
