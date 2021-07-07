<?php

namespace App\Http\Controllers\Patient;

use App\Helpers\SetRdvDate;
use App\Http\Controllers\Controller;
use App\Models\Day;
use App\Models\Horaire;
use App\Models\Reservation;
use App\Models\Service;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservations = Reservation::all();

        $reservationsAcceted = Reservation::where('status', 'accepted')->where('user_id', auth()->user()->id)->count();
        $reservationsPending = Reservation::where('status', 'pending')->where('user_id', auth()->user()->id)->count();
        $reservationsEnded = Reservation::where('status', 'ended')->where('user_id', auth()->user()->id)->count();
        $reservationsRejected = Reservation::where('status', 'rejected')->where('user_id', auth()->user()->id)->count();

        return view('personnel.dashboard.dashboard', [
            'reservations' => $reservations,
            'pending' => $reservationsPending,
            'accepted' => $reservationsAcceted,
            'ended' => $reservationsEnded,
            'rejected' => $reservationsRejected,
        ]);
    }

    public function dashReservations()
    {
        $reservations = Reservation::where('user_id', auth()->user()->id)->latest()->get();
        return view('personnel.dashboard.reservations.index', compact('reservations'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $horaires = Horaire::all();
        return view('personnel.dashboard.reservations.create', compact('horaires'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hour = Horaire::findOrFail($request->input('hour'));

        $reservation = new Reservation();

        $date = SetRdvDate::setDate($hour->day->name);
        $reservation->date =  $date;

        $reservation->heure =  $hour->horaire;
        $reservation->status =  "pending";
        $reservation->employee_id =  $hour->day->service->employees[0]->id;
        $reservation->user_id =  auth()->user()->id;

        $reservation->save();

        return redirect()->route('dashboard.reservations');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        $reservation->delete();

        return back();
    }
}
