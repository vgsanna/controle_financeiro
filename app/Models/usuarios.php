<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'nome', 'endereco', 'email', 'senha', 'criado_em', 'e_excluido'];

    public function verificaLogin($email, $senha)
    {
        return $this
            ->where('email', $email)
            ->where('senha',$senha)
            ->get(['id'])
            ->toArray();
    }
    
    public function retornaDadosPorEmail($email)
    {
        return $this
            ->where('email', $email)
            ->get(['id', 'nome', 'endereco', 'email'])
            ->toArray();
    }
}
