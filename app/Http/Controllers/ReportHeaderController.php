<?php

namespace App\Http\Controllers;

use App\Models\ReportHeader;
use Illuminate\Http\Request;

class ReportHeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(ReportHeader::get(), 200);
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
     * @param  \App\Models\ReportHeader  $reportHeader
     * @return \Illuminate\Http\Response
     */
    public function show(ReportHeader $reportHeader)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ReportHeader  $reportHeader
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ReportHeader $reportHeader)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ReportHeader  $reportHeader
     * @return \Illuminate\Http\Response
     */
    public function destroy(ReportHeader $reportHeader)
    {
        //
    }
}
