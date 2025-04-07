<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    //
    public function index()
    {
        return view('front.index');
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
        return view('front.menu');
    }

}
