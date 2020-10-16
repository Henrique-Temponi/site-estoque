<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserAmountMonth extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_amount_month', function (Blueprint $table) {
            $table->integer('Jan')->default(0);
            $table->integer('Feb')->default(0);
            $table->integer('Mar')->default(0);
            $table->integer('Abr')->default(0);
            $table->integer('May')->default(0);
            $table->integer('Jun')->default(0);
            $table->integer('Jul')->default(0);
            $table->integer('Aug')->default(0);
            $table->integer('Set')->default(0);
            $table->integer('Oct')->default(0);
            $table->integer('Nov')->default(0);
            $table->integer('Dec')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_amount_month');
    }
}
