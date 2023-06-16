<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConfirmacaoPagamento extends Model
{
    use HasFactory;
    protected $table = 'confirmacao_pagamentos';
    protected $primaryKey = 'id';
    protected $fillable = ["produtos" , "valor", "cliente"];
}
