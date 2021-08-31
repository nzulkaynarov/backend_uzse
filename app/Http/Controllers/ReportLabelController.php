<?php

namespace App\Http\Controllers;

use App\Models\ReportLabel;
use Illuminate\Http\Request;

class ReportLabelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(ReportLabel::get(), 200);
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
     * @param  \App\Models\ReportLabel  $reportLabel
     * @return \Illuminate\Http\Response
     */
    public function show(ReportLabel $reportLabel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ReportLabel  $reportLabel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ReportLabel $reportLabel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ReportLabel  $reportLabel
     * @return \Illuminate\Http\Response
     */
    public function destroy(ReportLabel $reportLabel)
    {
        //
    }
}
