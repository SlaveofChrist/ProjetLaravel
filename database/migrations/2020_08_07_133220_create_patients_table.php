<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->bigIncrements('id_Patient');
            $table->string('nomPatient');
            $table->string('prenomPatient');
            $table->string('adressePatient');
            $table->string('telPatient');
            $table->integer('age');
            $table->string('emailPatient')->unique();
            $table->string('groupeSanguin');
            $table->char('sexe');
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
        Schema::dropIfExists('patients');
    }
}
