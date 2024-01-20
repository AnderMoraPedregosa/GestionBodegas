<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVinosTable extends Migration
{
    public function up()
    {
        Schema::create('vinos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bodega_id')->constrained(); // Asegura que existe una relación con la tabla de bodegas
            $table->string('nombre');
            $table->string('tipo');
            $table->integer('anno');
            $table->text('descripcion')->nullable();
            // Agrega aquí las columnas necesarias para la tabla de vinos

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vinos');
    }
};
