S<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {#diseño de la tabla -> 
        Schema::create('mensajes', function (Blueprint $table) { 
            $table->id();
            $table->string('nombre'); 
            $table->string('corre');
            $table->text('mensaje');
            $table->string('ciudad')->default();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */#control z borrar cambio de una tabla
    public function down(): void
    {
        Schema::dropIfExists('mensajes');
    }
};
