<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FrontController extends Controller
{
    //
    public function index()
    {
        $menus = Menu::with('category')->get();
        // Group menus by category name
        $groupedMenus = $menus->groupBy(function ($menu) {
            return optional($menu->category)->category_name ?? 'Uncategorized';
        });
        $specialMenus = Menu::with('category')
            ->where('special_menu', true)
            ->latest()
            ->take(4)
            ->get();

        $testimonials = Testimonial::latest()->get();



        return view('welcome', compact('menus', 'specialMenus', 'testimonials', 'groupedMenus'));
    }


    public function about()
    {
        return view('front.about');
    }

    /**
     * Show the Testimonials page.
     */
    public function testimonial()
    {
        return view('front.testimonial');
    }

    public function error404()
    {
        return view('front.404');
    }

    /**
     * Show the Menu partial view.
     */
    public function menu()
    {
        $menus = Menu::with('category')->get();
        return view('front.menu', compact('menus'));
    }



    public function menuDetails($slug)
    {
        $menus = Menu::with('category')
            ->whereHas('category', function ($query) use ($slug) {
                $query->where('category_name', 'LIKE', str_replace('-', ' ', $slug));
            })->get();

        $categoryName = ucwords(str_replace('-', ' ', $slug));

        return view('front.menu-details', compact('menus', 'categoryName'));
    }


    public function contact()
    {
        return view('front.contact');
    }



}
