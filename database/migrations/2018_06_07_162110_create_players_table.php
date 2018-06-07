<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('position_id')->unsigned();
            $table->integer('number');
            $table->integer('club_id')->unsigned();
            $table->foreign('position_id')
                ->references('id')->on('positions')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('club_id')
                ->references('id')->on('football_clubs')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('players');
    }
}
