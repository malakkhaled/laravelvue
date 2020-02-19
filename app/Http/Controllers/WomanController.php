<?php

namespace App\Http\Controllers;

use App\woman;
use Illuminate\Http\Request;

class WomanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('shop.women');
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
     * @param  \App\woman  $woman
     * @return \Illuminate\Http\Response
     */
    public function show(woman $woman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\woman  $woman
     * @return \Illuminate\Http\Response
     */
    public function edit(woman $woman)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\woman  $woman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, woman $woman)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\woman  $woman
     * @return \Illuminate\Http\Response
     */
    public function destroy(woman $woman)
    {
        //
    }
}
