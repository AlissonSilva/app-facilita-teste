@extends('layout.site')

@section('titulo','AppFacilita Teste')

@section('conteudo')
<main role="main">

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1 class="display-3">Hello, world!</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more »</a></p>
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
          <p><a class="btn btn-secondary" href="#" role="button">Solução »</a></p>
        </div>
      </div>

      <hr>

    </div> <!-- /container -->

  </main>

@endsection
