<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBingoAcoesRequest;
use App\Http\Requests\UpdateBingoAcoesRequest;
use App\Models\BingoAcoes;

class BingoAcoesController extends Controller
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
     * @param  \App\Http\Requests\StoreBingoAcoesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBingoAcoesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BingoAcoes  $bingoAcoes
     * @return \Illuminate\Http\Response
     */
    public function show(BingoAcoes $bingoAcoes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BingoAcoes  $bingoAcoes
     * @return \Illuminate\Http\Response
     */
    public function edit(BingoAcoes $bingoAcoes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBingoAcoesRequest  $request
     * @param  \App\Models\BingoAcoes  $bingoAcoes
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBingoAcoesRequest $request, BingoAcoes $bingoAcoes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BingoAcoes  $bingoAcoes
     * @return \Illuminate\Http\Response
     */
    public function destroy(BingoAcoes $bingoAcoes)
    {
        //
    }
}
