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
        Schema::create('train', function (Blueprint $table) {
            $table->id();
            $table->string("agency", 50);
            $table->string("start_station", 50);
            $table->string("end_station", 50);
            // $table->dateTime("start_time");
            // $table->dateTime("end_time");
            $table->integer('code');
            $table->tinyInteger("n_cab");
            $table->boolean("in_time");
            $table->boolean("deleted");
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
        Schema::dropIfExists('train');
    }
};
