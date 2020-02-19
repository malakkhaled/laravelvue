<?php

namespace App\Http\Controllers;

use App\child;
use Illuminate\Http\Request;

class ChildController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('shop.children');

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
     * @param  \App\child  $child
     * @return \Illuminate\Http\Response
     */
    public function show(child $child)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\child  $child
     * @return \Illuminate\Http\Response
     */
    public function edit(child $child)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\child  $child
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, child $child)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\child  $child
     * @return \Illuminate\Http\Response
     */
    public function destroy(child $child)
    {
        //
    }
}
