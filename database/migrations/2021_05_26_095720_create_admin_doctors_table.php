<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_doctors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombrecompleto_adoctor', 100);
            $table->string('direccion', 100);
            $table->string('telefono', 100);
            $table->string('rh', 20);
            $table->string('experiencia', 100);
            $table->string('fecha_nacimiento', 100);
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
        Schema::dropIfExists('admin_doctors');
    }
}
