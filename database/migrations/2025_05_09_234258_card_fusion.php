<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // CARD_FUSION
        Schema::create('card_fusion', function(Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('card1');
            $table->unsignedBigInteger('card2');
            $table->unsignedBigInteger('card_result');

            $table->foreign('card1')->references('id')->on('cards')->onDelete('cascade');
            $table->foreign('card2')->references('id')->on('cards')->onDelete('cascade');
            $table->foreign('card_result')->references('id')->on('cards')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('card_fusion');
    }
};
