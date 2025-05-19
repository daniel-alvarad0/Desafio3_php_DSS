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
        Schema::create('productos', function (Blueprint $table) {
            $table->id(); // id auto-incremental, clave primaria
            $table->string('nombre'); // requerido, mínimo 3 caracteres (validar en FormRequest o controlador)
            $table->text('descripcion')->nullable(); // opcional
            $table->decimal('precio_unitario', 8, 2); // requerido, > 0 (validar en backend)
            $table->integer('cantidad'); // requerido, >= 0 (validar en backend)
            $table->string('categoria'); // requerido (ej. 'Papelería', 'Ferretería')
            $table->timestamps(); // created_at y updated_at automáticos
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
