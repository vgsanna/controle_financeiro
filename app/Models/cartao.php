<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cartao extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'numero', 'nome', 'descricao', 'id_conta', 'criado_em', 'e_excluido'];
}
