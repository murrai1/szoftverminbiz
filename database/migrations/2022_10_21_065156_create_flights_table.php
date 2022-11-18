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
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->string('number');
            $table->string('name')->nullable();
            $table->string('destination')->nullable();
            $table->integer('price')->nullable();
            $table->boolean('active')->default(false);
            $table->boolean('delayed')->default(false);
            $table->boolean('departed')->default(false);
            $table->timestamp('arrived_at')->nullable();  
            $table->unsignedBigInteger("airlineid");          
            $table->timestamps();

            $table->foreign("airlineid")->references("id")->on("airlines")->onDelete("cascade")->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flights');
    }
};
