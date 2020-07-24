<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlights extends Migration
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
            $table->string('voo');
            $table->foreignId('destino_id')->constrained();
            $table->foreignId('compahia_id')->constrained();
            $table->timestamps();
        });

        Schema::create('flight_user', function (Blueprint $table) {
            $table->foreignId('flight_id')->constrained();
            $table->foreignId('user_id')->constrained();
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flight_user');
        Schema::dropIfExists('flights');
    }
}
