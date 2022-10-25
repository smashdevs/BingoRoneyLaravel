<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Http\Response;

class BingoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $interval = 5;
        $startTime = Carbon::parse(Carbon::create(2022, 10, 25, 00, 56, 0, 'America/Sao_Paulo'));
        $finishTime = Carbon::parse(Carbon::now());
        $less = true;

        if($startTime->greaterThan($finishTime)){
            $less = false;
        }

        $totalDuration = $finishTime->diffInSeconds($startTime);
        $totalDuration = $less ? $totalDuration: $totalDuration * -1;
        $interval = intdiv($totalDuration, $interval);
        $numeros = [23,22,31,9,47,33,30,24,21,36,35,1,45,5,38,2,43,49,46,50,
        41,44,42,8,40,15,20,7,34,4,14,27,29,48,17,13,19,28,3,32,16,10,39,11,25,37,18,12,26,6];

        $result = [];

        $interval = $interval > 49 ? 49 : $interval;

        for ($i=0; $i <= $interval; $i++) {
            array_push($result,$numeros[$i]);
        }

        return response()->json(["duration"=>$totalDuration,"interval"=>$interval,"numeros"=>$result]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
