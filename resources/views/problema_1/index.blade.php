@extends('layout.site')

@section('titulo','AppFacilita: Problema 01')

@section('conteudo')

    <div class="row flex-xl-nowrap">


          <table class="table table-striped table-bordered" style="border-inline: 1px">
              <thead>
                  <tr>
                      <th colspan="3" style="text-align: center">
                          Chico
                      </th>
                  </tr>
                  <tr>
                      <th>
                          ANO
                      </th>
                      <th>
                          TAMANHO
                       </th>
                       <th>
                           FATOR
                       </th>
                  </tr>
              </thead>
              <tbody>

                @foreach ($objetosarray['tabela'] as $chave => $item)
                @if ($item['nome'] == 'Chico')

                <tr>
                    <td>
                        {{$item['ano']}}
                    </td>
                    <td>
                        {{$item['altura']}}
                    </td>
                    <td>
                        {{$item['fator']}}
                    </td>
                </tr>
                @endif
                @endforeach
              </tbody>
          </table>

          <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th colspan="3" style="text-align: center">
                        Juca
                    </th>
                </tr>
                <tr>
                    <th>
                        ANO
                    </th>
                    <th>
                        TAMANHO
                    </th>
                    <th>
                         FATOR
                    </th>
                </tr>
            </thead>
            <tbody>


              @foreach ($objetosarray['tabela'] as $chave => $item)
              @if ($item['nome'] == 'Juca')

              <tr>
                  <td>
                      {{$item['ano']}}
                  </td>
                  <td>
                      {{$item['altura']}}
                  </td>
                  <td>
                      {{$item['fator']}}
                  </td>
              </tr>
              @endif
              @endforeach
            </tbody>
        </table>
    </div>
    <div class="row">
        <label >Tempo que demoraria para Juca ficar maior que Chico: &nbsp;</label>{{$objetosarray['tempo']}} anos
    </div>
    <div class="row">
        <label >Ano em que o Juca fica maior que o Chico: &nbsp;</label>{{$objetosarray['ano']}}
    </div>
@endsection
@section('titlo-problema','Problema 01')
@section('rodape','Chico tem 1,50m e cresce 2 centímetros pró ano, enquanto Juca tem 1,10m e cresce 3 centímetros pró ano. Construa um algoritmo que calcule e imprima quantos anos serão necessários para que Juca seja maior que Chico.')
