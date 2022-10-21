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
        Schema::create('grupos', function (Blueprint $table) {
            $table->BigInteger('id')->unique();
            $table->unsignedBigInteger('curso_id');
            $table->unsignedBigInteger('instructor_id');
            $table->timestamp('fecha_inicio')->useCurrent();
            $table->timestamp('fecha_fin')->useCurrent();
            $table->string('dias');
            $table->time('hora_inicio');
            $table->time('hora_fin');
            $table->integer('capacidad');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grupos');
    }
};
