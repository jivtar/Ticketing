<?php

namespace App\Http\Controllers;

use App\Models\Jadwalevents;
use Illuminate\Http\Request;

class JadwalEventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jadwalevents = Jadwalevents::all();
        return view('jadwalevent.index', compact('jadwalevents'));
        // untuk tampilan api, silahkan di uncomment
        // return Jadwalevents::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jadwalevent.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Jadwalevents::create($request->all());
        return redirect('/jadwalevent');
        // untuk tampilan api, silahkan di uncomment
        // return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jadwalevents  $jadwalevents
     * @return \Illuminate\Http\Response
     */
    public function show(Jadwalevents $jadwalevents)
    {
        return view('jadwalevent.show', compact('jadwalevents'));
        // untuk tampilan api, silahkan di uncomment
        // return $jadwalevents;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jadwalevents  $jadwalevents
     * @return \Illuminate\Http\Response
     */
    public function edit(Jadwalevents $jadwalevents)
    {
        return view('jadwalevent.edit', compact('jadwalevents'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jadwalevents  $jadwalevents
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jadwalevents $jadwalevents)
    {
        Jadwalevents::where('id', $jadwalevents->id)
                    ->update([
                        'id_event' => $request->id_event,
                        'id_tempatduduk' => $request->id_tempatduduk,
                        'id_artis' => $request->id_artis,
                        'tanggal' => $request->tanggal,
                        'waktu_mulai' => $request->waktu_mulai,
                        'waktu_selesai' => $request->waktu_selesai,
                    ]);
        return redirect('/jadwalevent');
        // untuk tampilan api, silahkan di uncomment
        // return $request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jadwalevents  $jadwalevents
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jadwalevents $jadwalevents)
    {
        Jadwalevents::destroy($jadwalevents->id);
        return redirect('/jadwalevent');
        // untuk tampilan api, silahkan di uncomment
        // return $jadwalevents;
    }
}
