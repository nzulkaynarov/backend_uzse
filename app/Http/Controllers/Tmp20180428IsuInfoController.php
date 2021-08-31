<?php

namespace App\Http\Controllers;

use App\Models\Tmp20180428IsuInfo;
use Illuminate\Http\Request;

class Tmp20180428IsuInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Tmp20180428IsuInfo::get(), 200);
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
     * @param  \App\Models\Tmp20180428IsuInfo  $tmp20180428IsuInfo
     * @return \Illuminate\Http\Response
     */
    public function show(Tmp20180428IsuInfo $tmp20180428IsuInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tmp20180428IsuInfo  $tmp20180428IsuInfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tmp20180428IsuInfo $tmp20180428IsuInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tmp20180428IsuInfo  $tmp20180428IsuInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tmp20180428IsuInfo $tmp20180428IsuInfo)
    {
        //
    }
}
