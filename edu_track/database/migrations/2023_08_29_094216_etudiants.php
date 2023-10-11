<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Etudiants extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudiants', function (Blueprint $table) {
            $table->id();
            $table->string('user');
            $table->string('email')->unique();
            $table->string('nom');
            $table->string('prenom');
            $table->string('cin')->unique();
            $table->date('dateN');
            $table->string('telephone');
            $table->enum('civilite', ['H', 'F'])->default('H');
            $table->string('nationnalite');
            $table->String('gouvernorat');
            $table->Boolean('verified')->default(false);
            $table->Boolean('is_accepted')->default(false);
            $table->String('password')->default(null);
            $table->String('path_image')->default(null);
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
        Schema::dropIfExists('etudiants');
    }
}
