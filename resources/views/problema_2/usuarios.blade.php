@extends('layout.site')

@section('titulo','AppFacilita: Problema 02 Usuários')

@section('conteudo')
    <div class="row form-group">
        <div class="col-sm-6">
            <label for="" class="label">Pesquisar: </label>
            <input type="text" name="pesquisar" class="form-control form-control-user" id="pesquisar_problema_two"  required>
        </div>
    </div>
    <div class="row flex-xl-nowrap">

        <div class="col-md-12">
            <table id="tabela_problema_two" class="table table-striped table-bordered"   >
                <thead>
                    <tr>
                        <th>
                            Id
                        </th>
                        <th>
                            Matricula
                        </th>
                        <th>
                            Nome
                        </th>
                        <th>
                            Telefone
                        </th>
                        <th>
                            E-mail
                        </th>
                        <th>
                            Status 
                        </th>
                        <th>
                            Tipo
                        </th>
                        <th>
                            Locação
                        </th>
                    </tr>
                </thead>
                <tbody>
                    
                @foreach ($registros as $item)
                    <tr>
                        <td>
                            {{$item->id_usuario}}
                        </td>
                        <td>
                            {{$item->matricula}}
                        </td>
                        <td>
                            {{$item->nome}}
                        </td>

                        <td>
                            {{$item->telefone}}
                        </td>

                        <td>
                            {{$item->email}}
                        </td>
                        <td>
                            {{$item->status_usuario}}
                        </td>
                        <td>
                            {{$item->tipo}}
                        </td>
                        <td>
                            <a href="{{route('problemas.two.locacao.reserva',$item->id_usuario)}}"><i class="bi bi-arrow-right-circle-fill"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>
@endsection
@section('titlo-problema','Problema 02')
@section('rodape','descrição')
