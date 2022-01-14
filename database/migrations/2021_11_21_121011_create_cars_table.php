<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $automobil) {
            $automobil->id();
            $automobil->string('marka');
            $automobil->string('model');
            $automobil->string('naziv');
            $automobil->integer('godiste');
            $automobil->integer('kilometraza');  
            $automobil->string('gorivo');
            $automobil->string('kubikaza');
            $automobil->string('snaga_motora');
            $automobil->string('menjac');
            $automobil->integer('broj_vrata');
            $automobil->string('klima');
            $automobil->string('registrovan');
            $automobil->text('opis');
            $automobil->string('slika1');
            $automobil->string('slika2');
            $automobil->string('slika3');
            $automobil->string('slika4');
            $automobil->string('slika5');
            $automobil->string('broj_sasije');
            $automobil->integer('cena');
            $automobil->id('user_id');
            $automobil->timestamp('datum');
            $automobil->timestamp('updated_at');
            $automobil->timestamp('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
