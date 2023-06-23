<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisits extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visits', function (Blueprint $table) {
            $table->increments('id');

            $table->integer("id_records")->unsigned();
            $table->foreign("id_records")->references("id")->
            on("records")->onDelete("cascade")->onUpdate("cascade");

            $table->integer("id_doctors")->unsigned();
            $table->foreign("id_doctors")->references("id")->
            on("doctors")->onDelete("cascade")->onUpdate("cascade");
            
            $table->dateTime('date');
            $table->string('diagnostic');
            $table->string('treatments');
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
        Schema::dropIfExists('visits');
    }
}
