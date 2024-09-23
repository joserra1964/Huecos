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
            $table->foreignId('obra_id')->constrain('obras','id');
            $table->foreignId('clave_id')->nullable()->constrain('claves','id');
            $table->decimal('insyte',12,2)->default(0);
            $table->decimal('cuatroplus',12,2)->default(0);
            $table->decimal('attingenieria',12,2)->default(0);
            $table->decimal('bivobrainstalacion',12,2)->default(0);
            $table->decimal('nokia',12,2)->default(0);
            $table->decimal('equipofuerza',12,2)->default(0);
            $table->decimal('antenas',12,2)->default(0);
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
