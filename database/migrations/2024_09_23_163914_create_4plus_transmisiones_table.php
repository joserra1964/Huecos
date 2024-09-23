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
            //$table->foreignId('obra_id')->constrained('obras','id');
            $table->foreignUuid('obra_id')->constrained();
            //$table->string('codigo_obra',12);
            $table->string('atlas_jalones',9);
            $table->string('atlas_velocidad',25);
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
