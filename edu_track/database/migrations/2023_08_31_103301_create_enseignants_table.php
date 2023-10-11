<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnseignantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enseignants', function (Blueprint $table) {
            $table->id();
            $table->String('nom');
            $table->String('prenom');
            $table->String('cin');
            $table->String('dateN');
            $table->String('civilite');
            $table->String('telephone');
            $table->String('email');
            $table->String('diplome');
            $table->String('titre');
            $table->String('experience');
            $table->String('dateE');
            $table->String('password');
            $table->boolean('is_active');
            $table->String('path');
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
        Schema::dropIfExists('enseignants');
    }
}
