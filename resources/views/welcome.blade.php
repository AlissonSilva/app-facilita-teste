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
          <p style="text-align: justify">Chico tem 1,50m e cresce 2 centímetros pró ano, enquanto Juca tem 1,10m e cresce 3 centímetros pró ano. Construa um algoritmo que calcule e imprima quantos anos serão necessários para que Juca seja maior que Chico.</p>
          <p><a class="btn btn-secondary" href="{{route('problemas.one')}}" role="button">Solução »</a></p>
        </div>
        <div class="col-md-4">
            <h2>Problema 02</h2>
          <p style="text-align: justify">A biblioteca de uma universidade deseja fazer um algoritmo que leia o nome do livro que será emprestado, o tipo de usuário (professor ou aluno), o algoritmo deve imprimir um recibo mostrando o nome do livro, o tipo de usuário pro extenso e o total de dias de empréstimo. Considerar que o professor tem 10 dias para devolver o livro e o aluno somente 3 dias </p>
          <p><a class="btn btn-secondary" href="{{route('problemas.two')}}" role="button">Solução »</a></p>
        </div>
        <div class="col-md-4">
          <h2>Problema 03</h2>
          <p style="text-align: justify">Criar um algoritmo com um campo que possa receber apenas números e vígulas, separe os valores enviados e valide aqueles que são um número valido da Sequência de Fibonacci e imprima os números de forma crescente, conforme o exemplo:
            CAMPO RECEBE: 1,13,55,21,5,83
            IMPRIME: 1,5,13,21,55</p>
          <p><a class="btn btn-secondary" href="{{route('problemas.three')}}" role="button">Solução »</a></p>
        </div>
      </div>

      <hr>

    </div> <!-- /container -->

  </main>

@endsection
