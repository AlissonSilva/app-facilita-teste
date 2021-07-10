<?php

namespace App\Http\Controllers\problemas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\model\biblioteca\Usuario;



class UsuarioController extends Controller
{
    public function index(){
        $registros = Usuario::all();
        return view('problema_2.usuarios', compact('registros'));
    }
}
