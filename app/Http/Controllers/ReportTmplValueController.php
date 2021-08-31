<?php

namespace App\Http\Controllers;

use App\Models\ReportTmplValue;
use Illuminate\Http\Request;

class ReportTmplValueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(ReportTmplValue::get(), 200);
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
     * @param  \App\Models\ReportTmplValue  $reportTmplValue
     * @return \Illuminate\Http\Response
     */
    public function show(ReportTmplValue $reportTmplValue)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ReportTmplValue  $reportTmplValue
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ReportTmplValue $reportTmplValue)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ReportTmplValue  $reportTmplValue
     * @return \Illuminate\Http\Response
     */
    public function destroy(ReportTmplValue $reportTmplValue)
    {
        //
    }
}
