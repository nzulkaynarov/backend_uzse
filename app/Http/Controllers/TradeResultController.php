<?php

namespace App\Http\Controllers;

use App\Models\TradeResult;
use Illuminate\Http\Request;

class TradeResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(TradeResult::get(), 200);
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
     * @param  \App\Models\TradeResult  $tradeResult
     * @return \Illuminate\Http\Response
     */
    public function show(TradeResult $tradeResult)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TradeResult  $tradeResult
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TradeResult $tradeResult)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TradeResult  $tradeResult
     * @return \Illuminate\Http\Response
     */
    public function destroy(TradeResult $tradeResult)
    {
        //
    }
}
