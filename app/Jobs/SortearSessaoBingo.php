<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\Cartela;
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
        var_dump(json_encode(count($cartelas)));

        $sortArray = [];
        for ($i=1; $i <= 50; $i++) {
            array_push($sortArray,$i);
        }
        shuffle($sortArray);

        $numbers = array_map(function($x) use($sortArray){
            return $sortArray[$x-1];
        }, $numbers);
        var_dump(json_encode($numbers));

        $vencedores = [];
        while(count($vencedores) < 1 && count($cartelas)){
            foreach ($cartelas as $key => $value) {
                $haystack = json_decode($value->numeros);
                if(count(array_intersect($haystack, $numbers)) == 15){
                    array_push($vencedores,(object)["rodada"=>count($vencedores)+1,"posicao"=>$key,
                    "vencedor"=>$value,"numeros_qtd"=>count($numbers)]);
                    // echo "\n\nGanhador\n\n";
                    // var_dump([$value->id,$value->numeros],json_encode($numbers),count($numbers));
                    $value->status = "USADA";
                    $value->save();
                    $cartelas = Cartela::where('bingo_id','=',$this->sessao)->where('status','=','CRIADO')->get();
                }

                // echo "\n======>\n";

                // var_dump("baguncando",random_int(1,100));
                for ($i=0; $i < random_int(1,100); $i++) {
                    shuffle($sortArray);
                }
                // var_dump(json_encode($sortArray));

                $numbers = array_map(function($x) use($sortArray){
                    return $sortArray[$x-1];
                }, $numbers);
                array_multisort($numbers);
                var_dump("numeros sorteados",json_encode($numbers));

                if(count($numbers) < 50){
                    $numbers = $this->addRandomNumber($numbers);
                }else{
                    break;
                }
            }
        }

        echo "\n\n Vencedores \n\n";
        var_dump(json_encode(array_map(function($x){return [$x->rodada,$x->posicao,$x->vencedor->id,$x->vencedor->numeros,$x->numeros_qtd];},
        $vencedores)));
        array_multisort($numbers);
        echo json_encode($numbers);
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
