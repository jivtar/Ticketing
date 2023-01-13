<?php

namespace App\Http\Controllers;

use App\Models\Hargatikets;
use Illuminate\Http\Request;

class HargatiketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hargatikets = Hargatikets::all();
        return view('hargatiket.index', compact("hargatikets"));
        // untuk tampilan api, silahkan di uncomment
        // return Hargatikets::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hargatiket.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Hargatikets::create($request->all());
        return redirect('/hargatiket');
        // untuk tampilan api, silahkan di uncomment
        // return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hargatikets  $hargatikets
     * @return \Illuminate\Http\Response
     */
    public function show(Hargatikets $hargatikets)
    {
        return view('hargatiket.show', compact('hargatikets'));
        // untuk tampilan api, silahkan di uncomment
        // return $hargatikets;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hargatikets  $hargatikets
     * @return \Illuminate\Http\Response
     */
    public function edit(Hargatikets $hargatikets)
    {
        return view('hargatiket.edit', compact("hargatikets"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hargatikets $hargatikets
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hargatikets $hargatikets)
    {
        Hargatikets::where('id', $hargatikets->id)
                    ->update([
                        'id_jadwal' => $request->id_jadwal,
                        'id_tempatduduk' => $request->id_tempatduduk,
                        'tiket_habis' => $request->tiket_habis,
                        'sisa_tiket' => $request->sisa_tiket,
                        'harga' => $request->harga,
                    ]);
        return redirect('/hargatiket');
        // untuk tampilan api, silahkan di uncomment
        // return $request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hargatikets  $hargatikets
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hargatikets $hargatikets)
    {
        Hargatikets::destroy($hargatikets->id);
        return redirect('/hargatiket');
        // untuk tampilan api, silahkan di uncomment
        // return $hargatikets;
    }
}
