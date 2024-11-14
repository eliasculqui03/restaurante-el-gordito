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
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_actividad')->nullable();
            $table->string('razon_social', 55);
            $table->string('ruc', 11)->unique();
            $table->string('nombre_comercial', 255)->nullable();
            $table->string('numero_decreto', 10)->nullable();
            $table->string('logo', 255)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('telefono', 9)->nullable();
            $table->string('direccion', 255);
            $table->string('moneda')->nullable();
            $table->string('mensaje')->nullable();
            $table->string('mision')->nullable();
            $table->string('vision')->nullable();
            $table->string('facebook')->nullable();
            $table->string('youtube')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('nombre_gerente')->nullable();
            $table->string('dni_gerente')->nullable();
            $table->string('telefono_gerente')->nullable();
            $table->string('email_gerente')->nullable();
            $table->string('fecha_nacimiento_gerente')->nullable();
            $table->string('direccion_gerente')->nullable();
            $table->date('fecha_ingreso_gerente')->nullable();
            $table->boolean('estado')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empresas');
    }
};
