@extends('layout.site')
<meta name="csrf-token" content="{{ csrf_token() }}">
<script type="text/javascript">
    var token = '{{ csrf_token() }}';
</script>

@section('titulo','AppFacilita: Prob-02 Reservas')

@section('conteudo')
<style>
    .each{
        border-bottom: 1px solid #555;
        padding: 3px 0;
    }
    .acItem .name{
        padding: 5px;
      font-size: 14px;
    }

    .acItem .desc{
        padding: 5px;
      font-size: 10px;
      color:#555;
    }

    </style>
<div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                  Reserva de Livros
                </div>
                <div class="card-body">
                    <h5 class="card-title">Realiza a reserva de livros</h5>
                    <input type="hidden" id="token" name="_token" value="{{ csrf_token() }}">

                    <div class="row form-group">
                        <div class="col-sm-4">

                            <label for="" class="label">Matricula: </label>
                            <input type="number" name="matricula" class="form-control form-control-user" id="matricula" value="{{$usuario->matricula}}" disabled  required>
                        </div>
                        <div class="col-sm-6">
                            <label for="" class="label">Nome: </label>
                            <input type="number" id="id_usuario" value="{{$usuario->id_usuario}}" style="display: none">
                            <input type="text" name="nome" class="form-control form-control-user" id="nome" value="{{$usuario->nome}}" disabled required>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-3">
                            <label for="" class="label">Telefone: </label>
                            <input type="text" name="telefone" class="form-control form-control-user" id="telefone" value="{{$usuario->telefone}}" disabled required>
                        </div>
                        <div class="col-sm-5">
                            <label for="" class="label">Email: </label>
                            <input type="text" name="email" class="form-control form-control-user" id="email" value="{{$usuario->email}}" disabled required>
                        </div>
                        <div class="col-sm-2">
                            <label for="" class="label">Tipo: </label>
                            <input type="text" name="tipo" class="form-control form-control-user" id="tipo" value="{{$usuario->tipo}}" disabled required>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-6">
                            <label for="" class="label">Titulo: </label>
                            <input type="text" name="id_livro" id="id_livro" style="display: none">
                            <input type="text" name="tituloLivro" class="form-control form-control-user" id="tituloLivro" >
                        </div>
                    </div>
                    <button id="inserirLivro" class="btn btn-sm btn-primary">Inserir</button>
                    <a href="{{route('problemas.two.usuarios')}}" class="btn btn-sm btn-dark">Voltar</a>

                  @if ($message = Session::get('error'))
                    <br><div class="row form-group col-sm-9">
                        <div class="alert alert-info alert-danger">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                        </div>
                    </div>
                  @elseif($message = Session::get('success'))
                    <br><div class="row form-group col-sm-9">
                        <div class="alert alert-info alert-success">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                        </div>
                    </div>
                   @endif
                </div>
            </div><br>

            @if(sizeof($locacao)>0)
                <table class="table table-striped table-bordered" style="font-size: 11px">
                    <thead>
                        <tr>
                            <th>
                                Livro
                            </th>
                            <th>
                                Data Locacao
                            </th>
                            <th>
                                Previsão de Entrega
                            </th>
                            <th>
                                Data Devolução
                            </th>
                            <th>
                                Dias de Atraso
                            </th>
                            <th>
                                Status Locação
                            </th>
                            <th>
                                Baixar
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($locacao as $item)
                            <tr>
                                <td>{{$item->titulo}} ({{$item->autor}}, {{$item->ano_publicacao}})</td>
                                <td>{{gmdate('d/m/Y', strtotime('+0 days',strtotime($item->data_hora_locacao)))}}</td>
                                <td>{{gmdate('d/m/Y', strtotime('+0 days',strtotime($item->data_limite_devolucao)))}}</td>
                                <td>{{isset($item->data_hora_devolucao)?gmdate('d/m/Y', strtotime('+0 days',strtotime($item->data_hora_devolucao))):'' }}</td>
                                <td>{{$item->atraso >= 0 ? 0 :$item->atraso}} </td>
                                <td>{{strtoupper($item->status_locacao)}}</td>
                                <td><a href="{{route('problemas.two.locacao.reservar.baixar',$item->id_locacao)}}"><i class="bi bi-arrow-bar-down"></i></a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif

            <div id="resultado"></div>
        </div>
    </div><br>

    @endsection
@section('titlo-problema','Problema 02 Reservas')
@section('rodape','A biblioteca de uma universidade deseja fazer um algoritmo que leia o nome do livro que será emprestado, o tipo de usuário (professor ou aluno), o algoritmo deve imprimir um recibo mostrando o nome do livro, o tipo de usuário pro extenso e o total de dias de empréstimo. Considerar que o professor tem 10 dias para devolver o livro e o aluno somente 3 dias.')
