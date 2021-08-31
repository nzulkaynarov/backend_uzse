<?php

namespace App\Http\Controllers;

use App\Models\ReportTmpl;
use Illuminate\Http\Request;

class ReportTmplController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(ReportTmpl::get(), 200);
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
     * @param  \App\Models\ReportTmpl  $reportTmpl
     * @return \Illuminate\Http\Response
     */
    public function show(ReportTmpl $reportTmpl)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ReportTmpl  $reportTmpl
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ReportTmpl $reportTmpl)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ReportTmpl  $reportTmpl
     * @return \Illuminate\Http\Response
     */
    public function destroy(ReportTmpl $reportTmpl)
    {
        //
    }
}
