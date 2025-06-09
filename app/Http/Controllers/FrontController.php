<?php

namespace App\Http\Controllers;

use App\Models\CateringMenu;
use App\Models\CateringMenuCategory;
use App\Models\FoodTruckCategory;
use App\Models\FoodTruckMenu;
use App\Models\Menu;
use App\Models\Reservation;
use App\Models\StoreDetails;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

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
        $cateringSpecialMenus = CateringMenu::with('category')
            ->where('special_menu', true)
            ->latest()
            ->take(4)
            ->get();


        $foodTruckSpecialMenus = FoodTruckMenu::with('category')
            ->where('special_menu', true)
            ->latest()
            ->take(4)
            ->get();

        $specialMenus = $cateringSpecialMenus
            ->merge($foodTruckSpecialMenus)
            ->sortByDesc('created_at')
            ->take(4)
            ->values();

        $testimonials = Testimonial::latest()->get();
        $storeDetails = StoreDetails::first();



        return view('welcome', compact('menus', 'specialMenus', 'testimonials', 'groupedMenus', 'storeDetails'));
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


    public function under_maintenance()
    {
        return view('front.under_maintenance');
    }

    /**
     * Show the Menu partial view.
     */
    public function menu()
    {

        $cateringSpecialMenus = CateringMenu::with('category')
            ->where('special_menu', true)
            ->latest()
            ->take(4)
            ->get();


        $foodTruckSpecialMenus = FoodTruckMenu::with('category')
            ->where('special_menu', true)
            ->latest()
            ->take(4)
            ->get();

        $specialMenus = $cateringSpecialMenus
            ->merge($foodTruckSpecialMenus)
            ->sortByDesc('created_at')
            ->take(4)
            ->values();

        $cateringCategories = CateringMenuCategory::all();
        $foodTruckCategories = FoodTruckCategory::all();

        return view('front.menu', compact('specialMenus', 'cateringCategories', 'foodTruckCategories'));
    }




    public function menuDetails($slug)
    {
        $categoryName = ucwords(str_replace('-', ' ', $slug));


        $cateringCategory = CateringMenuCategory::where('category_name', 'LIKE', $categoryName)->first();
        $cateringMenus = $cateringCategory
            ? CateringMenu::with('category')
                ->where('catering_menu_category_id', $cateringCategory->id)
                ->get()
            : collect();


        $foodTruckCategory = FoodTruckCategory::where('category_name', 'LIKE', $categoryName)->first();
        $foodTruckMenus = $foodTruckCategory
            ? FoodTruckMenu::with('category')
                ->where('food_truck_category_id', $foodTruckCategory->id)
                ->get()
            : collect();

        $menus = $cateringMenus->merge($foodTruckMenus);

        return view('front.menu-details', compact('menus', 'categoryName'));
    }



    public function contact()
    {
        $storeDetails = StoreDetails::first();
        return view('front.contact', compact('storeDetails'));
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
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'nullable|string',
            'message' => 'required|string',
        ]);

        Mail::to('seawavebistro@gmail.com')->send(new ContactFormMail($validated));

        return back();
    }

}

