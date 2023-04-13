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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description'); //AL NO PONER NUELLABLE, SE ENTIENDE QUE SON OBLIGATORIOS COMPLETAR
            $table->dateTime('due_date')->nullable(); //que puede ser nulo es decir tengo la opcion de no completarlo
            $table->enum('status',['Pendiente', 'En Progreso', 'Completado'])-> nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
