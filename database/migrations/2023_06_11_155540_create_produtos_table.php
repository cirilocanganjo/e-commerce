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
        Schema::create('produtos', function (Blueprint $table) {
            $table->id('produtoId');
            $table->string('produto');
            $table->double('preco',10,2);
            $table->string('foto');
            $table->date('dataFabrico');
            $table->date('validade');
            $table->enum('descricao',["Novo", "Em promoção", "Esgotado"]);
            $table->double('visibilidade')->default(true);
            $table->foreignId("categoriaId")->constraint()->onDelete("CASCADE");
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
