<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCartelaRequest;
use App\Http\Requests\UpdateCartelaRequest;
use App\Models\Cartela;

class CartelaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreCartelaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCartelaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cartela  $cartela
     * @return \Illuminate\Http\Response
     */
    public function show(Cartela $cartela)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cartela  $cartela
     * @return \Illuminate\Http\Response
     */
    public function edit(Cartela $cartela)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCartelaRequest  $request
     * @param  \App\Models\Cartela  $cartela
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCartelaRequest $request, Cartela $cartela)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cartela  $cartela
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cartela $cartela)
    {
        //
    }
}
