<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Reservation;
use Carbon\Carbon;


class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }



    public function index()
    {
        $specialMenus = Menu::where('special_menu', true)
            ->with('media')
            ->latest()
            ->take(4)
            ->get();

        $reservationsCount = Reservation::count();
        $recentReservations = Reservation::latest()->take(5)->get();

        // Next 7 days data for the chart
        $labels = collect();
        $data = collect();

        // Loop through the next 7 days starting from today
        for ($i = 0; $i < 7; $i++) {
            $date = Carbon::now()->addDays($i)->format('M j'); // Use addDays for future dates
            $count = Reservation::whereDate('date', Carbon::now()->addDays($i)->toDateString())->count();

            $labels->push($date);
            $data->push($count);
        }

        return view('home', compact(
            'specialMenus',
            'reservationsCount',
            'recentReservations',
            'labels',
            'data'
        ));
    }



}
