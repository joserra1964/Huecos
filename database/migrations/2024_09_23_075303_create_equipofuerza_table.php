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
        Schema::create('equipofuerza', function (Blueprint $table) {
            $table->id();
            $table->string('suministrador',45)->nullable();
            $table->string('codigo_producto',100);
            $table->mediumText('descripcion');
            $table->decimal('importe',12,2)->default(0);
            $table->decimal('unidades', 8,2)->default(0);
            $table->boolean('reutilizable')->default(0);
            $table->decimal('subtotal',12,2);
            $table->string('origen',45)->default(0);
            $table->string('tipo_obra',20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipofuerza');
    }
};
