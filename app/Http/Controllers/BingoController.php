<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBingoRequest;
use App\Http\Requests\UpdateBingoRequest;
use App\Models\Bingo;

class BingoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('bingo.index', []);
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
     * @param  \App\Http\Requests\StoreBingoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBingoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bingo  $bingo
     * @return \Illuminate\Http\Response
     */
    public function show(Bingo $bingo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bingo  $bingo
     * @return \Illuminate\Http\Response
     */
    public function edit(Bingo $bingo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBingoRequest  $request
     * @param  \App\Models\Bingo  $bingo
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBingoRequest $request, Bingo $bingo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bingo  $bingo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bingo $bingo)
    {
        //
    }
}
