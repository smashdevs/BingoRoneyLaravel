<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Http\Response;
use App\Models\{Bingo,Cartela,User};

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
    }

    /**
     * Display the specified resource.e
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $interval = 5;
        $bingo = Bingo::find($id);
        $startTime = Carbon::parse(Carbon::createFromFormat("Y-m-d\TH:i:sP", $bingo->hora_inicio,'America/Sao_Paulo'))->toArray();
        $startTime = Carbon::create($startTime["year"],$startTime["month"],$startTime["day"],$startTime["hour"],$startTime["minute"],$startTime["second"]);
        $finishTime = Carbon::parse(Carbon::now('America/Sao_Paulo'))->toArray();
        $finishTime = Carbon::create($finishTime["year"],$finishTime["month"],$finishTime["day"],$finishTime["hour"],$finishTime["minute"],$finishTime["second"]);
        $less = true;
        $cartela = null;
        $user = null;

        if($startTime->greaterThan($finishTime)){
            $less = false;
        }

        $totalDuration = $finishTime->diffInSeconds($startTime);
        $totalDuration = $less ? $totalDuration: $totalDuration * -1;
        $interval = intdiv($totalDuration, $interval);
        $numeros = json_decode($bingo->sorteados);

        $result = [];

        $interval = isset($numeros) && $interval > count($numeros) - 1 ? count($numeros) - 1 : $interval;

        if(isset($numeros))
        for ($i=0; $i <= $interval; $i++) {
            array_push($result,$numeros[$i]);
        }

        if(isset($numeros))
        if($interval==count($numeros)-1){
            $cartela = Cartela::find($bingo->vencedor);
            $user = User::find($cartela->user_id);
        }

        return response()->json([
            "duration"=>$totalDuration,
            "interval"=>$interval,
            "numeros"=>$result,
            "vencedor"=>$user,
            "horaInicio" => $startTime->isoFormat('YYYY-MM-DDTHH:mm:ss+00:00')]);
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
