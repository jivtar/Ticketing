<?php

namespace App\Http\Controllers;

use App\Models\Adartis;
use Illuminate\Http\Request;

class AdartisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adartis = Adartis::all();
        return view('adartis.index', compact("adartis"));
        // untuk tampilan api, silahkan di uncomment
        // return Adartis::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adartis.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Adartis::create($request->all());
        return redirect('/adartis');
        // untuk tampilan api, silahkan di uncomment
        // return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Adartis  $adartis
     * @return \Illuminate\Http\Response
     */
    public function show(Adartis $adartis)
    {
        return view('adartis.show', compact('adartis'));
        // untuk tampilan api, silahkan di uncomment
        // return $adartis;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Adartis  $adartis
     * @return \Illuminate\Http\Response
     */
    public function edit(Adartis $adartis)
    {
        return view('adartis.edit', compact("adartis"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Adartis  $adartis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Adartis $adartis)
    {
        Adartis::where('id', $adartis->id)
                    ->update([
                        'nama' => $request->nama,
                        'jk' => $request->jk,
                        'ttl' => $request->ttl,
                    ]);
        return redirect('/adartis');
        // untuk tampilan api, silahkan di uncomment
        // return $request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Adartis  $adartis
     * @return \Illuminate\Http\Response
     */
    public function destroy(Adartis $adartis)
    {
        Adartis::destroy($adartis->id);
        return redirect('/adartis');
        // untuk tampilan api, silahkan di uncomment
        // return $adartis;
    }
}
