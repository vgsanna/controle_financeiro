<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transacao extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'valor', 'data', 'id_conta', 'id_categoria', 'id_fatura', 'e_excluido'];
}
