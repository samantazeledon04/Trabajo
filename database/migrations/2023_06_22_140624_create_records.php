<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecords extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records', function (Blueprint $table) {
            $table->increments('id');

            $table->integer("id_hospitals")->unsigned();
            $table->foreign("id_hospitals")->references("id")->
            on("hospitals")->onDelete("cascade")->onUpdate("cascade");

            $table->string('identity_card');
            $table->string('names');
            $table->string('surnames');
            $table->string('birthdate');
            $table->string('gender');
            $table->string('security_number');
            $table->string('address');
            $table->string('mail');
            $table->string('specialty');
            $table->string('phone_number');
            $table->string('emergency_number');
            $table->date('entry_date');
            $table->date('departure_date');

            $table->integer("id_bedrooms")->unsigned();
            $table->foreign("id_bedrooms")->references("id")->
            on("bedrooms")->onDelete("cascade")->onUpdate("cascade");
            
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
        Schema::dropIfExists('records');
    }
}
