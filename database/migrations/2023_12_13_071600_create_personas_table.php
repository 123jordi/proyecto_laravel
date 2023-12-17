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
        Schema::create('personas', function (Blueprint $table) {
            $table->id(); // Agrega un campo autoincremental para la clave primaria
            $table->string('apellidopaterno');
            $table->string('apellidomaterno');
            $table->string('nombre');
            $table->string('email')->unique(); // Asegura que el email sea únic
            $table->string('telefono')->nullable(); // Permite que el teléfono sea nulo
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personas');
    }
};
