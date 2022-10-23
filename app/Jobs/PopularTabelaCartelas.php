<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use App\Models\Cartela;

class PopularTabelaCartelas implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $qtd;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($qtd)
    {
        $this->qtd = $qtd;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $last = 1;
        while($last <= $this->qtd){
            $cartela = new Cartela;
            $cartela->user_id = 1;
            $numeros = null;
            do{
                $temp = $this->generateRandomNumbers(15);
                if(Cartela::where('numeros',$temp)->count() <= 0){
                    $numeros = $temp;
                }
            }while($numeros == null);
            $cartela->numeros = $numeros;
            $cartela->save();
            var_dump($numeros);
            $last += 1;
        }
    }

    private function generateRandomNumbers($max){
        $numbers = [];
        while(count($numbers) < 5){
            $temp = random_int(1,17);
            if(!in_array($temp,$numbers)){
                array_push($numbers,$temp);
            }
        }
        while(count($numbers) < 10){
            $temp = random_int(17,32);
            if(!in_array($temp,$numbers)){
                array_push($numbers,$temp);
            }
        }
        while(count($numbers) < 15){
            $temp = random_int(33,50);
            if(!in_array($temp,$numbers)){
                array_push($numbers,$temp);
            }
        }
        array_multisort($numbers);
        return json_encode($numbers);
    }
}
