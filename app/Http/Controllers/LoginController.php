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
        $dados_request = $request->all();
        $dados['email'] = $dados_request['email'];
        $dados['senha'] = $dados_request['senha'];

        return view('logado', ['dados' => $dados]);


    }

}