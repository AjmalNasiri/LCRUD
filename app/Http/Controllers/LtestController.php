<?php

namespace App\Http\Controllers;

use App\Models\ltest;
use Illuminate\Http\Request;

class LtestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ltest::get();
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
     * @param  \App\Models\ltest  $ltest
     * @return \Illuminate\Http\Response
     */
    public function show(ltest $ltest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ltest  $ltest
     * @return \Illuminate\Http\Response
     */
    public function edit(ltest $ltest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ltest  $ltest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ltest $ltest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ltest  $ltest
     * @return \Illuminate\Http\Response
     */
    public function destroy(ltest $ltest)
    {
        //
    }
}
