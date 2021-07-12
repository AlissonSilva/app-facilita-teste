@extends('layout.site')

@section('titulo','AppFacilita: Prob-02 Livros')

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
