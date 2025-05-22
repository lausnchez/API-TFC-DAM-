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
        // TABLA CARDS ----------------------------------------------------
        Schema::create('cards', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->integer('cost');
            $table->integer('currency_cost');
            $table->text('image');
            $table->enum('target',['unique','all','self']);
            $table->float('rarity');
        });

        // TABLA ENEMIES ----------------------------------------------------
        Schema::create('enemies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('health');
            $table->text('sprite');
            $table->float('rarity');
            $table->enum('type',['normal','boss']);
            $table->integer('floor');
        }); 
        
        // TABLA EFFECTS ----------------------------------------------------
        Schema::create('effects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->integer('active_turns');
            $table->integer('value');
        });   
        
        // TABLA ITEMS ----------------------------------------------------
        Schema::create('items', function(Blueprint $table){
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->integer('currency_cost');
            $table->float('rarity');
        });

        // TABLA CHARACTER_PLAYER ----------------------------------------------------
        Schema::create('character_player', function(Blueprint $table){
            $table->id();
            $table->string('name');
            $table->integer('health');
            $table->integer('currency');
            $table->integer('stamina');
            $table->integer('max_items');
            $table->text('sprite')->nullable();
        });

        // TABLA ITEM_FUSION ----------------------------------------------------
        Schema::create('item_fusion', function(Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('item1');
            $table->unsignedBigInteger('item2');
            $table->unsignedBigInteger('item_fusion');

            $table->foreign('item1')->references('id')->on('items')->onDelete('cascade');
            $table->foreign('item2')->references('id')->on('items')->onDelete('cascade');
            $table->foreign('item_fusion')->references('id')->on('items')->onDelete('cascade');
        });

        // TABLA CARD_EFFECT ----------------------------------------------------
        Schema::create('card_effect', function(Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('id_card');
            $table->unsignedBigInteger('id_effect');

            $table->foreign('id_card')->references('id')->on('cards')->onDelete('cascade');
            $table->foreign('id_effect')->references('id')->on('effects')->onDelete('cascade');
        });

        // TABLA CHARACTER_CARD ----------------------------------------------------
        Schema::create('character_card', function(Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('id_card');
            $table->unsignedBigInteger('id_character');

            $table->foreign('id_card')->references('id')->on('cards')->onDelete('cascade');
            $table->foreign('id_character')->references('id')->on('character_player')->onDelete('cascade');
        });

        // TABLA CHARACTER_ITEM ----------------------------------------------------
        Schema::create('character_item', function(Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('id_item');
            $table->unsignedBigInteger('id_character');

            $table->foreign('id_item')->references('id')->on('items')->onDelete('cascade');
            $table->foreign('id_character')->references('id')->on('character_player')->onDelete('cascade');
        });

        // TABLA ENEMY_ABILITIES ----------------------------------------------------
        Schema::create('enemy_abilities', function(Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('id_enemy');
            $table->unsignedBigInteger('id_effect');

            $table->foreign('id_enemy')->references('id')->on('enemies')->onDelete('cascade');
            $table->foreign('id_effect')->references('id')->on('effects')->onDelete('cascade');
        });


        // TABLA ITEM_EFFECT ----------------------------------------------------
        Schema::create('item_effect', function(Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('id_item');
            $table->unsignedBigInteger('id_effect');

            $table->foreign('id_item')->references('id')->on('items')->onDelete('cascade');
            $table->foreign('id_effect')->references('id')->on('effects')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('character_card');
        Schema::dropIfExists('character_item');
        Schema::dropIfExists('enemy_abilities');
        Schema::dropIfExists('item_effect');
        Schema::dropIfExists('item_fusion');
        Schema::dropIfExists('card_effect');

        Schema::dropIfExists('character_player');
        Schema::dropIfExists('items');
        Schema::dropIfExists('cards');
        Schema::dropIfExists('enemies');
        Schema::dropIfExists('effects');
    }
};
