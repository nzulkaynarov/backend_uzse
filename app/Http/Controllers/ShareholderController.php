<?php

namespace App\Http\Controllers;

use App\Models\Shareholder;
use Illuminate\Http\Request;

class ShareholderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Shareholder::get(), 200);
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
     * @param  \App\Models\Shareholder  $shareholder
     * @return \Illuminate\Http\Response
     */
    public function show(Shareholder $shareholder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Shareholder  $shareholder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shareholder $shareholder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Shareholder  $shareholder
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shareholder $shareholder)
    {
        //
    }
}
