@extends('layout.site')

@section('titulo','AppFacilita: Prob-02 Usuários')

@section('conteudo')
    <div class="row flex-xl-nowrap">
        <table class="table table-striped table-bordered" style="font-size: 11px">
            <thead>
                <tr>
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
@endsection
@section('titlo-problema','AppFacilita: Prob-02 Usuários')
@section('rodape','Tela de Usuários')
