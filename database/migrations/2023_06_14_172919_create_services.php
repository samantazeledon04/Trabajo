<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServices extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id');

            $table->integer("id_hospitals")->unsigned();
            $table->foreign("id_hospitals")->references("id")->
            on("hospitals")->onDelete("cascade")->onUpdate("cascade");

            $table->integer("id_doctors")->unsigned();
            $table->foreign("id_doctors")->references("id")->
            on("doctors")->onDelete("cascade")->onUpdate("cascade");

            $table->string('name');
            $table->string('description');
            $table->string('comment');
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
        Schema::dropIfExists('services');
    }
}
