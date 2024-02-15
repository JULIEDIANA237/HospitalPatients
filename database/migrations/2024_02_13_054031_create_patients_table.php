<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->string('patient_id')->primary();
            $table->string('nom');
            $table->string('prénom');
            $table->date('date_de_naissance');
            $table->string('sexe');
            $table->string('adresse');
            $table->string('numéro_de_téléphone');
            $table->string('email');
            $table->string('mot_de_passe');
            $table->rememberToken();
            $table->text('antécédents_médicaux')->nullable();
            $table->string('image')->nullable();
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
