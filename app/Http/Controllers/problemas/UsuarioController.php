<?php

namespace App\Http\Controllers\problemas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\model\model\biblioteca\Usuario;

class UsuarioController extends Controller
{
    public function index(){
        $registros = Usuario::all();
        return view('problema_2.livros', compact('registros'));
    }
}
