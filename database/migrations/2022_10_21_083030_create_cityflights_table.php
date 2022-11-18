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
        Schema::create('cityflights', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("cityid"); 
            $table->unsignedBigInteger("flightid"); 
            $table->timestamps();

            $table->foreign("cityid")->references("id")->on("cities")->onDelete("cascade")->onUpdate("cascade");
            $table->foreign("flightid")->references("id")->on("flights")->onDelete("cascade")->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cityflights');
    }
};
