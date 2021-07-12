@extends('layout.site')

@section('titulo','AppFacilita Teste')

@section('conteudo')
<main role="main">

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1 class="display-3">App Facilita</h1>
        <p>Problema 1 - Carregar os valores referente a altura dos individos Juca e Chico.</p>
        <p>Problema 2 - Pequena aplicação para bibliotecas. Obrigatório a instalação do MySQL.</p>
        <p>Problema 3 - Listagem da numeração fibonacci.</p>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>Problema 01</h2>
          <p>descricação do problema</p>
          <p><a class="btn btn-secondary" href="{{route('problemas.one')}}" role="button">Solução »</a></p>
        </div>
        <div class="col-md-4">
            <h2>Problema 02</h2>
          <p>Descrição do problema </p>
          <p><a class="btn btn-secondary" href="{{route('problemas.two')}}" role="button">Solução »</a></p>
        </div>
        <div class="col-md-4">
          <h2>Problema 03</h2>
          <p>Descrição do problema</p>
          <p><a class="btn btn-secondary" href="{{route('problemas.three')}}" role="button">Solução »</a></p>
        </div>
      </div>

      <hr>

    </div> <!-- /container -->

  </main>

@endsection
