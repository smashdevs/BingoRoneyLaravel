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
        Schema::create('cartelas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('bingo_id')->nullable();
            $table->json('numeros')->default(new Expression('(JSON_ARRAY())'));
            $table->string('status')->default("CRIADO");
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('bingo_id')->references('id')->on('bingos');
            $table->foreign('bingo_id')->references('id')->on('bingos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cartelas');
    }
};
