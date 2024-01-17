<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAntecedentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('antecedentes', function (Blueprint $table) {
            $table->id();
            $table->integer('pacienteid');
            $table->string('peso');
            $table->string('estatura');
            $table->string('presion');
            $table->string('enfermedad_actuales');
            $table->string('medicamentos');
            $table->string('alergias');
            $table->string('intervenciones_quirurgicas');
            $table->string('transfuciones');
            $table->string('antecedentes_familiares');
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
        Schema::dropIfExists('antecedentes');
    }
}
