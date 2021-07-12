@extends('layout.site')

@section('titulo','AppFacilita: Problema 02')

@section('conteudo')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
              Reserva de Livros
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
                    <div id="resultadofib"></div>  
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('titlo-problema','Problema 02')
@section('rodape','descrição')
