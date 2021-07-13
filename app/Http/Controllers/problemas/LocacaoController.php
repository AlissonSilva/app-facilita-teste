<?php

namespace App\Http\Controllers\problemas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\model\biblioteca\Locacao;
use App\Models\model\biblioteca\Usuario;
use Illuminate\Support\Facades\DB;


class LocacaoController extends Controller
{
    public function index()
    {
        $registro = Locacao::all();
        return view('problema_2.locacao');
    }

    public function reserva($id)
    {
        $usuario = Usuario::where('id_usuario', '=', $id)->first();
        $locacao = Locacao::join('livros', 'locacaos.id_livro', '=', 'livros.id_livro')
            ->join('usuarios', 'locacaos.id_usuario', '=', 'usuarios.id_usuario')
            ->where('locacaos.id_usuario', '=', $id)
            ->whereIn('status_locacao', ['em aberto', 'atrasado'])->select(['locacaos.*', 'usuarios.*', 'livros.*', DB::raw('case when data_hora_devolucao is null then datediff(data_limite_devolucao, now()) else datediff(data_hora_locacao, data_hora_devolucao) end as atraso')])
            ->get();


        return view('problema_2.reserva', compact('usuario', 'locacao'));
    }


    public function CalcDataLimite($tipo, $data_locacao)
    {
        return gmdate('Y-m-d 00:00:00', strtotime('+' . ($tipo == 'aluno' ? '3' : '10') . ' days', strtotime($data_locacao)));
    }

    public function adicionar(Request $request)
    {
        $dados = $request->all();

        // dd($dados);
        $data_limite = $this->CalcDataLimite($dados['tipo'], date('Y-m-d H:i:s'));

        $obj = collect([
            "id_usuario" => $dados['id_usuario'],
            "id_livro" => $dados['id_livro'],
            "status_locacao" => 'em aberto',
            "data_limite_devolucao" => $data_limite
        ])->toArray();

        try {
            Locacao::create($obj);
            return response()->json(['msg' => 'true', 'alert' => '<div class="alert alert-info" role="alert">Livro reservado com sucesso!</div>']);
        } catch (\Throwable $th) {
            return response()->json(['msg' => 'false', 'alert' => '<div class="alert alert-danger" role="alert">Erro ao realizar a reserva! ' . $th->getMessage() . '</div>']);
        }
    }

    public function baixarReserva($id)
    {
        $obj = collect([
            "status_locacao" => 'entregue',
            "data_hora_devolucao" => date('Y-m-d H:i:s'),
            "dias_atraso" => DB::raw('datediff(data_limite_devolucao, now())')
        ])->toArray();
        try {
            Locacao::where('id_locacao', '=', $id)->update($obj);
            return back()->with('success', 'Livro baixado com sucesso!');
        } catch (\Throwable $th) {
            return response()->json(['msg' => 'true', 'alert' => '<div class="alert alert-danger" role="alert">Erro ao baixar a reserva' . $th->getMessage() . '</div>']);
        }
    }

    public function locacoesEmAberto()
    {
        $registro = Locacao::join('usuarios', 'locacaos.id_usuario', '=', 'usuarios.id_usuario')
            ->where('status_locacao', '=', 'em aberto')->get();

        return view('problema_2.locacao', compact('registro'));
    }
}
