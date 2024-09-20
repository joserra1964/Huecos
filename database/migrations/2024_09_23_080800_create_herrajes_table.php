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
        Schema::create('herrajes', function (Blueprint $table) {
            $table->id();
            $table->string('codigoproducto',100);
            $table->mediumText('descripcion');
            $table->decimal('importe',12,2)->default(0);
            $table->decimal('unidades',7,2)->default(0);
            $table->decimal('subtotal',12,2)->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('herrajes');
    }
};
