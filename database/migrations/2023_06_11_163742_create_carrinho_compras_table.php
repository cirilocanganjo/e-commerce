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
        Schema::create('carrinho_compras', function (Blueprint $table) {
            $table->id("carrinhoId");
            $table->string("dataCompra");
            $table->foreignId("produtoId")->constraint()->onDelete("CASCADE")->nullable();
            $table->foreignId("clienteId")->constraint()->onDelete("CASCADE")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carrinho_compras');
    }
};
