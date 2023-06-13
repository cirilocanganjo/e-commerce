<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $table = 'categorias';
    protected $primaryKey = 'categoriaId';
    protected $fillable = ["categoria"];

    public function produtosRelacionamento(){
        return $this->hasMany(Produto::class, 'produtoId');
    }
}
