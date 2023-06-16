<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarrinhoCompras extends Model
{
    use HasFactory;
    protected $table = 'carrinho_compras';
    protected $primaryKey = 'carrinhoId';
    protected $fillable = ["dataCompra" , "produtoId" , "clienteId"];

    public function produtoRelacionamento(){
        return $this->belongsTo(Produto::class, "produtoId");
    }


}
