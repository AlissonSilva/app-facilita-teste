@extends('layout.site')

@section('titulo','AppFacilita: Problema 02')

@section('conteudo')
    <div class="row flex-xl-nowrap">

        <div class="col-sm-4">
            <div class="card mb-4" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="{!! asset('assets/images/livros.jpg') !!}" class="img-fluid rounded mx-auto d-block" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Livros</h5>
                      <p class="card-text"><a class="btn btn-warning btn-sm" href="{{route('problemas.two.livros')}}">Listar</a></p>
                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                  </div>
                </div>
            </div>
        </div>


        <div class="col-sm-4">
            <div class="card mb-4" style="max-width: 540px;">
                <div class="row g-0">
                <div class="col-md-4">
                    <img src="..." class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                    <h5 class="card-title">Usuários</h5>
                    <p class="card-text"><a class="btn btn-warning btn-sm" href="{{route('problemas.two.usuarios')}}"></a></p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                </div>
            </div>
        </div>


        <div class="col-sm-4">
            <div class="card mb-4" style="max-width: 540px;">
                <div class="row g-0">
                <div class="col-md-4">
                    <img src="..." class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                    <h5 class="card-title">Locações</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('titlo-problema','Problema 02')
@section('rodape','A biblioteca de uma universidade deseja fazer um algoritmo que leia o nome do livro que será emprestado, o tipo de usuário (professor ou aluno), o algoritmo deve imprimir um recibo mostrando o nome do livro, o tipo de usuário pro extenso e o total de dias de empréstimo. Considerar que o professor tem 10 dias para devolver o livro e o aluno somente 3 dias.')
