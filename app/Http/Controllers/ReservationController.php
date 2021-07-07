<?php

namespace App\Http\Controllers;

use App\Mail\ReservationInfoMail;
use App\Mail\ReservationWarningMail;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('rendez-vous.rendez-vous');
    }

    public function allReservations()
    {
        $reservations = Reservation::all();

        return view('admin.dashboard.reservations.index', compact('reservations'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function valide(Reservation $reservation)
    {

        $reservation->update([
            'status' => 'accepted',
        ]);


        $mail =  new ReservationInfoMail($reservation, route('dashboard'));

        Mail::to($reservation->user->email)->send($mail);

        return back();
    }

    public function revoke(Reservation $reservation)
    {
        $reservation->update([
            'status' => 'revoked',
        ]);


        $mail =  new ReservationWarningMail($reservation, route('dashboard'), 'Service indisponible');

        Mail::to($reservation->user->email)->send($mail);

        return back();
    }
    public function ended(Reservation $reservation)
    {
        $reservation->update([
            'status' => 'ended',
        ]);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        //
    }
}
