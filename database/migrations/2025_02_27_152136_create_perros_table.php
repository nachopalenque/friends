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
        Schema::create('perros', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('raza');
            $table->string('color');
            $table->double('peso');
            $table->string('sexo');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perros');
    }
};
