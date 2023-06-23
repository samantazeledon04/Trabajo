<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctors extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->increments('id');

            $table->integer("id_rooms")->unsigned();
            $table->foreign("id_rooms")->references("id")->
            on("rooms")->onDelete("cascade")->onUpdate("cascade");

            $table->string('identity_card');
            $table->string('names');
            $table->string('surnames');
            $table->string('birthdate');
            $table->string('gender');
            $table->string('form');
            $table->string('address');
            $table->string('mail');
            $table->string('specialty');
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
        Schema::dropIfExists('doctors');
    }
}
