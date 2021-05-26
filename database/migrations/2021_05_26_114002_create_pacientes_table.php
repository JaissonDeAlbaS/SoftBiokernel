<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_completo', 100);
            $table->string('eps', 100);
            $table->string('direccion', 100);
            $table->string('nombre_acompañante', 100);
            $table->string('telefono_acompañante', 100);
            $table->string('antecendentes', 100);
            $table->string('motivos_consulta', 100);
            $table->string('diagnostico', 100);
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
        Schema::dropIfExists('pacientes');
    }
}
