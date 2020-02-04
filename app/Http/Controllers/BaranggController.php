<?php

namespace App\Http\Controllers;

use App\Barangg;
use Illuminate\Http\Request;

class BaranggController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

           $barangg= Barangg::all()->take(15);
           return view('barangg',['dabar' => $barangg]);

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
     * @param  \App\Barangg  $barangg
     * @return \Illuminate\Http\Response
     */
    public function show(Barangg $barangg)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Barangg  $barangg
     * @return \Illuminate\Http\Response
     */
    public function edit(Barangg $barangg)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Barangg  $barangg
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Barangg $barangg)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Barangg  $barangg
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barangg $barangg)
    {
        //
    }
}
