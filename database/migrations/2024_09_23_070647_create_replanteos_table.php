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
        Schema::create('replanteos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('plantilla_id')->nullable();
            $table->string('codigoproducto',45);
            $table->string('denominacionproducto',80);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('replanteos');
    }
};
