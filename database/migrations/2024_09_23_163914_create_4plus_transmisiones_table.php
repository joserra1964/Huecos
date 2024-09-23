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
        Schema::create('4plus_transmisiones', function (Blueprint $table) {
            $table->id();
            $table->string('codigoObra',12);
            $table->string('atlasJalones',9);
            $table->string('atlasVelocidad',25);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('4plus_transmisiones');
    }
};
