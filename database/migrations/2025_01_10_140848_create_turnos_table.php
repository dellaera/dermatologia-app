<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTurnosTable extends Migration
{
    public function up()
    {
        Schema::create('turnos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('usuario_id')->constrained('usuarios')->onDelete('cascade');
            $table->timestamp('fecha');
            $table->text('detalles')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('turnos');
    }
};