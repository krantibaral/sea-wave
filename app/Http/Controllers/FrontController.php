<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Reservation;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

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
        $specialMenus = Menu::with('category')
            ->where('special_menu', true)
            ->latest()
            ->get();
        return view('front.menu', compact('menus', 'specialMenus'));
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


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'date' => 'required|date|after_or_equal:today',
            'time' => 'required|date_format:H:i',
            'person' => 'required|integer|min:1',
            'accept_terms' => 'accepted',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        Reservation::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'date' => $request->date,
            'time' => $request->time,
            'person' => $request->person,
            'status' => 'pending',
            'accept_terms' => true,
        ]);

        return redirect()->back()->with('success', 'Reservation submitted successfully!');
    }

    // public function store(Request $request)
    // {
    //     dd($request->all());
    // }


}

