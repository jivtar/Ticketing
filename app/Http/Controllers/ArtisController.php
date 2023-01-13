<?php

namespace App\Http\Controllers;

use App\Models\Artis;
use Illuminate\Http\Request;

class ArtisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artis = Artis::all();
        return view('artis.index', compact("artis"));
        // untuk tampilan api, silahkan di uncomment
        //return Artis::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('artis.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Artis::create($request->all());
        return redirect('/artis');
        // untuk tampilan api, silahkan di uncomment
        // return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Artis  $artis
     * @return \Illuminate\Http\Response
     */
    public function show(Artis $artis)
    {
        return view('artis.show', compact('artis'));
        // untuk tampilan api, silahkan di uncomment
        // return $artis;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Artis  $artis
     * @return \Illuminate\Http\Response
     */
    public function edit(Artis $artis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Artis  $artis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Artis $artis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Artis  $artis
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artis $artis)
    {
        //
    }
}
