<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Usuarios;

class LoginController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function login(Request $request)
    {
        $daoUsuarios = new Usuarios();

        $dados_request = $request->all();
        $dados['emailUsuario'] = $dados_request['email'];
        $dados['senhaUsuario'] = $dados_request['senha'];
        

        $validated = $request->validate([
            'email' => ['required', function($campo, $email, $fail) use ($daoUsuarios, $dados){
                $dadosUsuario = $daoUsuarios->verificaLogin($email, $dados['senhaUsuario']);
                if (empty($dadosUsuario)){
                    return $fail("Dados incorretos!");
                }
            }],
            'senha' => 'required'
        ]);

        $dadosUsuario = $daoUsuarios->retornaDadosPorEmail($dados['emailUsuario']);
        $dados['nomeUsuario'] = reset($dadosUsuario)['nome'];

        return view('logado', ['dados' => $dados]);


    }

}