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
        Schema::create('cuatroplus', function (Blueprint $table) {
            $table->id();
            $table->string('suministrador',20);
            $table->string('codigo_producto',100);
            $table->mediumText('descripcion');
            $table->decimal('importe',12,2);
            $table->decimal('unidades',5,2);
            $table->decimal('subtotal',12,2);
            $table->string('tipoobra',20)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cuatroplus');
    }
};
