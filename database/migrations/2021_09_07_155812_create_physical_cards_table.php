<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhysicalCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('physical_cards', function (Blueprint $table) {
            $table->id();
            $table->boolean('isDrawn');
            $table->unsignedBigInteger('deck_id');
            $table->unsignedBigInteger('card_id');
            $table->timestamps();
            $table->foreign('deck_id')->references('id')->on('decks');
            $table->foreign('card_id')->references('id')->on('cards');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('physical_cards');
    }
}
