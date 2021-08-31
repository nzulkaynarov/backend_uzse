<?php

namespace App\Http\Controllers;

use App\Models\Tci;
use Illuminate\Http\Request;

class TciController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Tci::get(), 200);
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
     * @param  \App\Models\Tci  $tci
     * @return \Illuminate\Http\Response
     */
    public function show(Tci $tci)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tci  $tci
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tci $tci)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tci  $tci
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tci $tci)
    {
        //
    }
}
