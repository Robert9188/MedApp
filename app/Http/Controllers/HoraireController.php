<?php

namespace App\Http\Controllers;

use App\Models\Day;
use App\Models\Horaire;
use App\Models\Service;
use Exception;
use Illuminate\Http\Request;

class HoraireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $horaires = Horaire::all();

//        dd($horaires);
        return view('employee.horaires.index', compact('horaires'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $days = Day::all();
        return view('admin.dashboard.days-hours.hours.create', compact('days'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request);

        $horaire = new Horaire();

        $horaire->denomination = $request->denomination;
        $horaire->horaire = $request->horaire;
        $horaire->day_id = $request->day;

        $horaire->save();

        return redirect()->route('employee.days');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Horaire  $horaire
     * @return \Illuminate\Http\Response
     */
    public function show(Horaire $horaire)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Horaire  $horaire
     * @return \Illuminate\Http\Response
     */
    public function edit(Horaire $horaire)
    {
        return view('admin.dashboard.days-hours.hours.edit', [
            'horaire' => $horaire,
            'days' => Day::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Horaire  $horaire
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Horaire $horaire)
    {
        $horaire->denomination = $request->denomination;
        $horaire->horaire = $request->horaire;
        $horaire->day_id = $request->day;

        $horaire->save();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Horaire  $horaire
     * @return \Illuminate\Http\Response
     */
    public function destroy(Horaire $horaire)
    {
        $horaire->delete();

        return redirect()->route('employee.days');
    }
}
