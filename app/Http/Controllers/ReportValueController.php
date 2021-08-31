<?php

namespace App\Http\Controllers;

use App\Models\ReportValue;
use Illuminate\Http\Request;

class ReportValueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(ReportValue::get(), 200);
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
     * @param  \App\Models\ReportValue  $reportValue
     * @return \Illuminate\Http\Response
     */
    public function show(ReportValue $reportValue)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ReportValue  $reportValue
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ReportValue $reportValue)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ReportValue  $reportValue
     * @return \Illuminate\Http\Response
     */
    public function destroy(ReportValue $reportValue)
    {
        //
    }
}
