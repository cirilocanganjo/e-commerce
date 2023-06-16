<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DadosPessoais extends Model
{
    use HasFactory;
    protected $table = 'dados_pessoais';
    protected $primaryKey = 'dadosPessoaisId';
    protected $fillable = ["nome", "sexo" , "dataNascimento" , "provincia" , "municipio" ,"rua", "bairro", "telefone" , "funcionarioId" , "clienteId"];


    public function usuarioRelacionamento() {
        return $this->hasOne(User::class, "id");
    }



}
