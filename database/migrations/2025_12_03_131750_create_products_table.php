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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');              // Nome do produto (ex: RTX 5090)
            $table->decimal('price', 8, 2);      // Preço (8 dígitos no total, 2 após a vírgula)
            $table->text('description');         // Descrição detalhada
            $table->string('slug')->unique();    // URL amigável (ex: rtx-5090)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
