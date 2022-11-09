<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBingoRequest;
use App\Http\Requests\UpdateBingoRequest;
use App\Models\Bingo;
use Illuminate\Support\Str;
use Carbon\Carbon;

class BingoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('bingo.index', ["games"=>Bingo::where('user_id',auth()->user()->id)->get()]);
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
        $input = (object) $request->all();
        $bingo = new bingo();
        $bingo->uuid = (string) Str::uuid();
        $bingo->nome = $input->inputNome;
        $bingo->descricao = $input->inputDescricao;
        $bingo->user_id = auth()->user()->id;
        dd($input);
        $bingo->hora_inicio = Carbon::create();
        $bingo->save();

        return redirect()->back();
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
