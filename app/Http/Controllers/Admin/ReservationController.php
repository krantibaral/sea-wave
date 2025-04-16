<?php

namespace App\Http\Controllers\Admin;

use App\Models\Reservation;
use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;

class ReservationController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->title = "Reservation";
        $this->resources = "admin.reservations.";
        $this->route = "reservation.";
    }

    /**
     * Display a listing of the reservations.
     */
    public function index()
    {
        $data = $this->crudInfo();
        $data['items'] = Reservation::orderBy('created_at', 'desc')->get();
        return view($this->indexResource(), $data);
    }

    /**
     * Show the form for editing reservation status.
     */
    public function edit($id)
    {
        $data = $this->crudInfo();
        $data['item'] = Reservation::findOrFail($id);
        return view($this->editResource(), $data);
    }

    /**
     * Update the status of the reservation.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:pending,confirmed,cancelled',
        ]);

        $reservation = Reservation::findOrFail($id);
        $reservation->status = $request->status;
        $reservation->save();

        return redirect()->route($this->indexRoute())
            ->with('success', 'Reservation status updated successfully.');
    }
}
