<?php

namespace App\Http\Controllers\problemas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\model\biblioteca\Locacao;
use App\Models\model\biblioteca\Usuario;

class LocacaoController extends Controller
{
    public function index(){
        $registro = Locacao::all();
        return view('problema_2.locacao');
    }

    public function reserva($id){
        $usuario = Usuario::where('id_usuario','=',$id)->first();
        $locacao = Locacao::join('livros', 'locacaos.id_livro','=','livros.id_livro')
        ->join('usuarios','locacaos.id_usuario','=','usuarios.id_usuario')
        ->where('locacaos.id_usuario','=',$id)
        ->whereIn('status_locacao',['em aberto','atrasado'])
        ->get();

        return view('problema_2.reserva', compact('usuario','locacao'));
    }

    public function adicionar(Request $request){
        $dados = $request->all();
        dd($dados);
        // return response()->json();
    }
}
