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
        Schema::create('nokia', function (Blueprint $table) {
            $table->id();
            //$table->foreignId('clave_id')->nullable()->constrained('claves','id');
            $table->string('codigo_producto',100);
            $table->mediumText('descripcion');
            $table->decimal('importe',12,2)->default(0);
            // $table->decimal('unidades', 8,2)->nullable();
            $table->decimal('subtotal',12,2)->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nokia');
    }
};
