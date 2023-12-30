<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use App\Models\Usuarios;

class RotasController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index()
    {
        return view('index');
    }

    public function cadastro()
    {
        return view('cadastro');
    }

    public function login()
    {
        return view('login');
    }
    
}
