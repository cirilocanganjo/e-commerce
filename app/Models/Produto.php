<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;
    protected $table = 'produtos';
    protected $primaryKey = 'produtoId';
    protected $fillable = ["produto" , "preco" , "foto" , "dataFabrico" , "validade", "descricao" ,"categoriaId"];

    public function categoriaRelacionamento(){
        return $this->belongsTo(Categoria::class, 'categoriaId');
    }

    public function carrinhoComprasRelacionamento(){
        return $this->hasMany(CarrinhoCompras::class, "carrinhoId");
    }
}
