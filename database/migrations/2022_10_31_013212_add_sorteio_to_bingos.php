<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Query\Expression;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bingos', function (Blueprint $table) {
            $table->json('sorteados')->default('');
            $table->date('hora_inicio')->default(date('c'));
            $table->unsignedBigInteger('vencedor')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bingos', function (Blueprint $table) {
            //
        });
    }
};
