<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourssTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courss', function (Blueprint $table) {
            $table->id();
            $table->String('nom');
            $table->String('path');
            $table->unsignedBigInteger('ens_id');
            $table->foreign('ens_id')->references('id')->on('enseignants')->onDelete('cascade');
            $table->unsignedBigInteger('classe_id');
            $table->foreign('classe_id')->references('id')->on('classes')->onDelete('cascade');
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
        Schema::dropIfExists('courss');
    }
}
