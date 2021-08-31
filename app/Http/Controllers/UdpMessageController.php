<?php

namespace App\Http\Controllers;

use App\Models\UdpMessage;
use Illuminate\Http\Request;

class UdpMessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(UdpMessage::get(), 200);
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
     * @param  \App\Models\UdpMessage  $udpMessage
     * @return \Illuminate\Http\Response
     */
    public function show(UdpMessage $udpMessage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UdpMessage  $udpMessage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UdpMessage $udpMessage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UdpMessage  $udpMessage
     * @return \Illuminate\Http\Response
     */
    public function destroy(UdpMessage $udpMessage)
    {
        //
    }
}
