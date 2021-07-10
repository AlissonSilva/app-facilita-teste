<?php

namespace App\Http\Controllers\problemas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\model\biblioteca\Livro;
use PhpParser\Node\Stmt\TryCatch;

class LivrosController extends Controller
{
    public function index()
    {
        $registros = Livro::all();
        return view('problema_2.livros', compact('registros'));
    }

    public function adicionar(Request $request)
    {
        $dados = $request->all();

        if ($dados['edicao'] <= 0) {
            return back()->with('error', 'O valor da edição não pode ser inferior ou igual a zero');
        }else if($dados['num_paginas']<= 0){
            return back()->with('error', 'O número de páginas não pode ser inferior ou igual a zero');
        }


        try {
            Livro::create($dados);
            return back()->with('success', 'Livro cadastrado com sucesso');
        } catch (\Throwable $th) {
            return back()->with('error', 'Erro ao cadastrar um novo livro' . $th->getMessage());
        }
    }

    public function editar($id)
    {
    }
}
