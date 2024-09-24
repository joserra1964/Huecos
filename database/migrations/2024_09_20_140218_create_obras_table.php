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
        Schema::create('obras', function (Blueprint $table) {
            // $table->id();
            $table->uuid('id')->primary()->comment('código de obra');
            //$table->string('codigoObra',12)->nullable();
            $table->foreignId('emplazamiento_id')->nullable()->constrained('emplazamientos','id');
            $table->foreignId('estado_id')->nullable()->index();
     //       $table->foreignId('clave_id')->nullable()->constrained('claves','id');
            $table->string('lara',6)->nullable();
            $table->string('descripcion_obra',50)->nullable();
            $table->string('pp',4)->nullable();
            $table->decimal('importe',8,2)->default(0);
            $table->string('main_obra',12)->nullable()->index();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('obras');
    }
};
