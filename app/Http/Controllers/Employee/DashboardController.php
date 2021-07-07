<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use App\Models\Role;
use App\Models\Service;
use Laratrust\Laratrust;

class DashboardController extends Controller
{
    public function __construct()
    {
        /*
         * Uncomment the line below if you want to use verified middleware
         */
        //$this->middleware('verified:employee.verification.notice');
    }


    public function index(){

        $reservationsAcceted = Reservation::where('status', 'accepted')->count();
        $reservationsPending = Reservation::where('status', 'pending')->count();
        $reservationsEnded = Reservation::where('status', 'ended')->count();
        $reservationsRejected = Reservation::where('status', 'rejected')->count();

        $reservations = Reservation::where('status', 'pending')->take(4)->get();

        $services = Service::latest()->take(4)->get();

        return view('admin.dashboard.dashboard', [
            'reservations' => $reservations,
            'services' => $services,
            'pending' => $reservationsPending,
            'accepted' => $reservationsAcceted,
            'ended' => $reservationsEnded,
            'rejected' => $reservationsRejected,
        ]);
    }
}
