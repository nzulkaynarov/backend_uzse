<?php

namespace App\Http\Controllers;

use App\Models\T24;
use Illuminate\Http\Request;

class T24Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(T24::get(), 200);
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
     * @param  \App\Models\T24  $t24
     * @return \Illuminate\Http\Response
     */
    public function show(T24 $t24)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\T24  $t24
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, T24 $t24)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\T24  $t24
     * @return \Illuminate\Http\Response
     */
    public function destroy(T24 $t24)
    {
        //
    }
}
