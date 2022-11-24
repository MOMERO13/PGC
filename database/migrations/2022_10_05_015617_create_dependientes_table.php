<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dependientes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('usuario_id');
            $table->string('nombre');
            $table->string('apellidos');
            $table->datetime('fecha_nacimiento');
            $table->string('curp');
            $table->string('estado');
            $table->string('municipio');
            $table->integer('codigo_postal');
            $table->string('colonia');
            $table->string('calle');
            $table->string('numero_exterior')->nullable();
            $table->string('numero_interior')->nullable();
            $table->string('numero_telefono')->nullable();
            $table->string('nss')->nullable();
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
        Schema::dropIfExists('dependientes');
    }
};
