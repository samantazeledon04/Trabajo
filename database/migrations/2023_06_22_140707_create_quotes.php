<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuotes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotes', function (Blueprint $table) {
            $table->increments('id');

             
            $table->integer("id_records")->unsigned();
            $table->foreign("id_records")->references("id")->
            on("records")->onDelete("cascade")->onUpdate("cascade");

             
            $table->integer("id_services")->unsigned();
            $table->foreign("id_services")->references("id")->
            on("services")->onDelete("cascade")->onUpdate("cascade");

            $table->date('date');
            $table->string('reason');
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
        Schema::dropIfExists('quotes');
    }
}
