<?php

namespace App\Http\Controllers\problemas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\model\biblioteca\Livro;

class LivrosController extends Controller
{
    public function index(){
        $registros = Livro::all();
        return view('problema_2.usuarios', compact('registros'));
    }
}
