<?php

namespace App\Http\Controllers;

use App\man;
use Illuminate\Http\Request;

class ManController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('shop.men');
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
     * @param  \App\man  $man
     * @return \Illuminate\Http\Response
     */
    public function show(man $man)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\man  $man
     * @return \Illuminate\Http\Response
     */
    public function edit(man $man)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\man  $man
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, man $man)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\man  $man
     * @return \Illuminate\Http\Response
     */
    public function destroy(man $man)
    {
        //
    }
}
