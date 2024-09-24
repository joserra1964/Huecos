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
        Schema::create('valoraciones', function (Blueprint $table) {
            $table->id();
            $table->foreignUuid('obra_id')->constrained();
            //$table->foreignId('obra_id')->constrained('obras','id');
            //$table->foreignId('clave_id')->constrained('claves','id');
            $table->decimal('insyte',12,2)->default(0);
            $table->decimal('cuatroplus',12,2)->default(0);
            $table->decimal('att_ingenieria',12,2)->default(0);
            $table->decimal('biv_obra_instalacion',12,2)->default(0);
            $table->decimal('nokia',12,2)->default(0);
            $table->decimal('equipo_fuerza',12,2)->default(0);
            $table->decimal('antenas',12,2)->default(0);
            $table->decimal('herrajes',12,2)->default(0);
            $table->decimal('subtotal',12,2)->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('valoraciones');
    }
};
