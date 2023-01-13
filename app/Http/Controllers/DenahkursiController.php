<?php

namespace App\Http\Controllers;

use App\Models\Denahkursis;
use Illuminate\Http\Request;

class DenahkursiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $denahkurses = Denahkursis::all();
        return view('denahkursi.index', compact("denahkurses"));
        // untuk tampilan api, silahkan di uncomment
        // return Denahkursis::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('denahkursi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Denahkursis::create($request->all());
        return redirect('/denahkursi');
        // untuk tampilan api, silahkan di uncomment
        // return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Denahkursis  $denahkurses
     * @return \Illuminate\Http\Response
     */
    public function show(Denahkursis $denahkurses)
    {
        return view('denahkursi.show', compact('denahkurses'));
        // untuk tampilan api, silahkan di uncomment
        // return $denahkurses;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Denahkursis  $denahkurses
     * @return \Illuminate\Http\Response
     */
    public function edit(Denahkursis $denahkurses)
    {
        return view('denahkursi.edit', compact("denahkurses"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Denahkursis  $denahkurses
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Denahkursis $denahkurses)
    {
        Denahkursis::where('id', $denahkurses->id)
                    ->update([
                        'zona_kursi' => $request->zona_kursi,
                        'kapasitas' => $request->kapasitas,
                        'id_venue' => $request->id_venue,
                    ]);
        return redirect('/denahkursi');
        // untuk tampilan api, silahkan di uncomment
        // return $request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Denahkursis  $denahkurses
     * @return \Illuminate\Http\Response
     */
    public function destroy(Denahkursis $denahkurses)
    {
        Denahkursis::destroy($denahkurses->id);
        return redirect('/denahkursi');
        // untuk tampilan api, silahkan di uncomment
        // return $denahkurses;
    }
}
