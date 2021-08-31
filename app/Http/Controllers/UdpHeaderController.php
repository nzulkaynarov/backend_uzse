<?php

namespace App\Http\Controllers;

use App\Models\UdpHeader;
use Illuminate\Http\Request;

class UdpHeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(UdpHeader::get(), 200);
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
     * @param  \App\Models\UdpHeader  $udpHeader
     * @return \Illuminate\Http\Response
     */
    public function show(UdpHeader $udpHeader)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UdpHeader  $udpHeader
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UdpHeader $udpHeader)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UdpHeader  $udpHeader
     * @return \Illuminate\Http\Response
     */
    public function destroy(UdpHeader $udpHeader)
    {
        //
    }
}
