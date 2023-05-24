<!-- CREACION DE LA TABLA DE AMIGOS, PARA LOS REGISTROS -->
<!-- php artisan migrate -->
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
        /* Al agregar amigos que puedan agregar los sig datos: nombre, apellido paterno, apellido materno, edad, gmail y en donde viven */
        Schema::create('amigos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombre');
            $table->string('apellidoPaterno');
            $table->string('apellidoMaterno');
            $table->integer('edad');
            $table->string('correo');
            $table->string('direccion');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('amigos');
    }
};
