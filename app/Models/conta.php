<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conta extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'id_usuario', 'id_banco', 'criado_em', 'e_excluido'];
}
