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
        Schema::create('dados_pessoais', function (Blueprint $table) {
            $table->id("dadosPessoaisId");
            $table->string("nome");
            $table->enum("sexo", ["Masculino" , "Femenino"]);
            $table->date("dataNascimento");
            $table->string("telefone",15);
            $table->string("provincia");
            $table->string("municipio");
            $table->string("rua");
            $table->string("bairro");
            $table->foreignId("funcionarioId")->constraint()->onDelete("CASCADE")->nullable();
            $table->foreignId("clienteId")->constraint()->onDelete("CASCADE")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dados_pessoais');
    }
};
