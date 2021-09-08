<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cards', function (Blueprint $table) {
            $table->string('type')->after('name');
            $table->string('effect')->nullable()->after('type');
            $table->unsignedInteger('attack')->nullable()->after('effect');
            $table->unsignedInteger('defense')->nullable()->after('attack');
            $table->string('color')->after('defense');
            $table->string('trigger')->nullable()->after('color');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cards', function (Blueprint $table) {
            //
        });
    }
}
