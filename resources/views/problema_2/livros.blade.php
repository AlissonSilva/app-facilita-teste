@extends('layout.site')

@section('titulo','AppFacilita: Prob-02 Usuários')

@section('conteudo')
    {{-- <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                  Livro
                </div>
                <div class="card-body">
                  <h5 class="card-title">Caracteristicas do livro</h5>
                  <form action="{{route('problemas.two.livros.adicionar')}}"  method="POST" enctype="multipart/form-data">
                    <div class="row form-group">
                        <div class="col-sm-6">
                            {{ csrf_field() }}
                            <label for="" class="label">Titulo: </label>
                            <input type="text" name="titulo" class="form-control form-control-user" id="titulo"  required>
                        </div>
                        <div class="col-sm-6">
                            <label for="" class="label">Autor: </label>
                            <input type="text" name="autor" class="form-control form-control-user" id="autor"  required>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-3">
                            <label for="" class="label">Localização: </label>
                            <input type="text" name="localizacao" class="form-control form-control-user" id="localizacao"  required>
                        </div>
                        <div class="col-sm-3">
                            <label for="" class="label">Edição: </label>
                            <input type="number" name="edicao" class="form-control form-control-user" id="edicao"  required>
                        </div>

                        <div class="col-sm-3">
                            <label for="" class="label">Ano de Publicação: </label>
                            <input type="number" name="ano_publicacao" class="form-control form-control-user" id="ano_publicacao"  required>
                        </div>

                        <div class="col-sm-3">
                            <label for="" class="label">Número de Páginas: </label>
                            <input type="number" name="num_paginas" class="form-control form-control-user" id="num_paginas"  required>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-6">
                            <label for="" class="label">Editora: </label>
                            <input type="text" name="editora" class="form-control form-control-user" id="editora"  required>
                        </div>
                    </div>
                    <button  class="btn btn-sm btn-primary">Inserir</button>
                    <a href="{{route('problemas.two')}}" class="btn btn-sm btn-dark">Voltar</a>
                  </form>
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
            </div>
        </div>
    </div><br> --}}
    <div class="row form-group">
        <div class="col-sm-6">
            <label for="" class="label">pesquisar: </label>
            <input type="text" name="pesquisar" class="form-control form-control-user" id="pesquisar_livros"  required>
        </div>
    </div>
    <div class="row flex-xl-nowrap">

        <div class="col-md-12">
            <table id="tabela_livros" class="table table-striped table-bordered"   >
                <thead>
                    <tr>
                        <th>
                            Id
                        </th>
                        <th>
                            Titulo
                        </th>
                        <th>
                            Autor
                        </th>
                        <th>
                            Localização
                        </th>
                        <th>
                            Edição
                        </th>
                        <th>
                            Ano Publicação
                        </th>

                        <th>
                            Editora
                        </th>
                        <th>
                            Número de Páginas
                        </th>
                    </tr>
                </thead>
                <tbody>
                    {{-- 'titulo', 'autor', 'assunto', 'localizacao', 'edicao', 'ano_publicacao', 'editora','num_paginas' --}}
                @foreach ($registros as $item)
                    <tr>
                        <td>
                            {{$item->id_livro}}
                        </td>
                        <td>
                            {{$item->titulo}}
                        </td>
                        <td>
                            {{$item->autor}}
                        </td>

                        <td>
                            {{$item->localizacao}}
                        </td>

                        <td>
                            {{$item->edicao}}
                        </td>
                        <td>
                            {{$item->ano_publicacao}}
                        </td>
                        <td>
                            {{$item->editora}}
                        </td>
                        <td>
                            {{$item->num_paginas}}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>
@endsection
@section('titlo-problema','AppFacilita: Prob-02 Usuários')
@section('rodape','Tela de Usuários')
