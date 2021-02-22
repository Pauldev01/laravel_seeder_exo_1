<?php

namespace App\Http\Controllers;

use App\Models\Yo;
use Illuminate\Http\Request;

class YoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datayo = Yo::all();
        return view('welcome', compact('datayo'));
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
     * @param  \App\Models\Yo  $yo
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show=yo::find($id);
        return view('show', compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Yo  $yo
     * @return \Illuminate\Http\Response
     */
    public function edit(Yo $yo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Yo  $yo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Yo $yo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Yo  $yo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Yo $yo)
    {
        //
    }
}
