<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\{Cartela,Bingo};
use Illuminate\Support\Facades\DB;

class SortearSessaoBingo implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $sessao;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($sessao)
    {
        $this->sessao = $sessao;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        DB::update('update cartelas set status = "CRIADO"', []);
        $cartelas = Cartela::where('bingo_id','=',$this->sessao)
        ->where('status','=','CRIADO')->get();

        $numbers = $this->generateRandomNumbers(16);

        $sortArray = [];
        for ($i=1; $i <= 50; $i++) {
            array_push($sortArray,$i);
        }
        shuffle($sortArray);

        $numbers = array_map(function($x) use($sortArray){
            return $sortArray[$x-1];
        }, $numbers);

        $vencedores = [];
        while(count($vencedores) < 3 && count($cartelas)){
            foreach ($cartelas as $key => $value) {
                $haystack = json_decode($value->numeros);
                if(count(array_intersect($haystack, $numbers)) == 15){
                    shuffle($numbers);
                    array_push($vencedores,(object)["rodada"=>count($vencedores)+1,"posicao"=>$key,
                    "vencedor"=>$value,"numeros_qtd"=>count($numbers),"numeros_sorteados"=>$numbers]);
                    $value->status = "USADA";
                    $value->save();
                    $cartelas = Cartela::where('bingo_id','=',$this->sessao)
                    ->where('status','=','CRIADO')->get();
                }

                for ($i=0; $i < random_int(1,100); $i++) {
                    shuffle($sortArray);
                }

                $numbers = array_map(function($x) use($sortArray){
                    return $sortArray[$x-1];
                }, $numbers);
                array_multisort($numbers);

                if(count($numbers) < 50){
                    $numbers = $this->addRandomNumber($numbers);
                }else{
                    break;
                }
            }
        }

        // dd([array_map(function($x){return [$x->rodada,$x->posicao,$x->vencedor->id,
            //$x->vencedor->numeros,$x->numeros_qtd];},
        // $vencedores),$vencedores]);
        $vencedor = array_shift($vencedores);
        $bingo = Bingo::findOrFail($this->sessao);
        $bingo->sorteados = $vencedor->numeros_sorteados;
        $bingo->vencedor = $vencedor->vencedor->id;
        $bingo->save();
        return $bingo;
    }

    public function log($x){
        var_dump(json_encode($x));
    }

    private function generateRandomNumbers($max){
        $numbers = [];
        while(count($numbers) < $max){
            $temp = random_int(1,50);
            if(!in_array($temp,$numbers)){
                array_push($numbers,$temp);
            }
        }
        array_multisort($numbers);
        return $numbers;
    }

    private function addRandomNumber($haystack){
        $pass = false;
        do{
            $temp = random_int(1,50);
            if(!in_array($temp,$haystack)){
                array_push($haystack,$temp);
                $pass = true;
                break;
            }
        }while(!$pass);
        array_multisort($haystack);
        return $haystack;
    }
}
