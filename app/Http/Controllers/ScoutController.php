<?php

namespace App\Http\Controllers;

use App\Scout;
use Illuminate\Http\Request;
use Log;

class ScoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        Log:info(print_r($request->all(), true));
        Scout::reindex();
        return view('scout.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Scout  $scout
     * @return \Illuminate\Http\Response
     */
    public function show(Scout $scout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Scout  $scout
     * @return \Illuminate\Http\Response
     */
    public function edit(Scout $scout)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Scout  $scout
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Scout $scout)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Scout  $scout
     * @return \Illuminate\Http\Response
     */
    public function destroy(Scout $scout)
    {
        //
    }
}
