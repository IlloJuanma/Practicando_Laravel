<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Aqui es donde creamos la tabla platos, cambiando las columnas que ncesitemos
        Schema::create('platos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->float('precio');
            // Vamos a hacer el tipo con clave foranea
            // $table->string('tipo');
            $table->unsignedBigInteger('tipo_plato_id');
            $table->foreign('tipo_plato_id')->references('id')->on('tipo_platos');
            // Esto es lo mismo que
            // En sql, foreing key(tipo_id) references tipos_platos(id);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('platos');
    }
};
