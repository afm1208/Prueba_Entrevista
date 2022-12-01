<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

 class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->String('Nombres');
            $table->String('Apellidos');
            $table->String('Identificacion');
            $table->String('Direccion');
            $table->String('Telefono');
            $table->String('Ciudad_nacimiento');
            $table->bigInteger('id_Cargo');
            $table->foreign('id_Cargo') -> references('id')
                  ->on('Cargos');
            
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
        Schema::dropIfExists('empleados');
    }
};
 