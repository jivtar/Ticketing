<?php

namespace App\Http\Controllers;

use App\Models\Detailorders;
use Illuminate\Http\Request;

class DetailorderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detailorders = Detailorders::all();
        return view('detailorder.index', compact("detailorders"));
        // untuk tampilan api, silahkan di uncomment
        // return Detailorders::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('detailorder.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Detailorders::create($request->all());
        return redirect('/detailorder');
        // untuk tampilan api, silahkan di uncomment
        // return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Detailorders  $detailorders
     * @return \Illuminate\Http\Response
     */
    public function show(Detailorders $detailorders)
    {
        return view('detailorder.show', compact('detailorders'));
        // untuk tampilan api, silahkan di uncomment
        // return $detailorders;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Detailorders  $detailorders
     * @return \Illuminate\Http\Response
     */
    public function edit(Detailorders $detailorders)
    {
        return view('detailorder.edit', compact("detailorders"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Detailorders  $detailorders
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Detailorders $detailorders)
    {
        Detailorders::where('id', $detailorders->id)
                    ->update([
                        'kode_order' => $request->kode_order,
                        'kode_tiket' => $request->kode_tiket,
                    ]);
        return redirect('/detailorder');
        // untuk tampilan api, silahkan di uncomment
        // return $request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Detailorders  $detailorders
     * @return \Illuminate\Http\Response
     */
    public function destroy(Detailorders $detailorders)
    {
        Detailorders::destroy($detailorders->id);
        return redirect('/detailorder');
        // untuk tampilan api, silahkan di uncomment
        // return $detailorders;
    }
}
