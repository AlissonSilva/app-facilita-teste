@extends('layout.site')

@section('titulo','AppFacilita: Problema 03')

@section('conteudo')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
              Projeção Fibonacci
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <input type="text" id="seqfib" name="sonumero" class="only-number" value="" data-accept-comma="1" />
                    </div>
                    <div class="col-md-4">
                        <button class="btn btn-sm btn-primary" id="calcfib">Calcular</button>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div id="resultadofib"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('titlo-problema','Problema 03')
@section('rodape','Criar um algoritmo com um campo que possa receber apenas números e vígulas, separe os valores enviados e valide aqueles que são um número valido da Sequência de Fibonacci e imprima os números de forma crescente, conforme o exemplo:
CAMPO RECEBE: 1,13,55,21,5,83
IMPRIME: 1,5,13,21,55')
