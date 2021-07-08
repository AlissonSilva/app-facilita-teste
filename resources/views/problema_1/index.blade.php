@extends('layout.site')

@section('titulo','AppFacilita: Problema 01')

@section('conteudo')
    <div class="row">
          {{--  {{print_r($objetosarray,true)}}

          {{var_dump($objetosarray[0])}}
          {{var_dump($objetosarray[1])}}  --}}

          <table>
              <thead>
                  <tr>
                      <th>
                          nome
                      </th>
                      <th>
                          ano
                      </th>
                      <th>
                          tamanho
                        </th>
                  </tr>
              </thead>
              <tbody>
                        
                @foreach ($objetosarray as $chave => $item)
                <tr>
                    <td>
                        {{$item['nome']}}
                    </td>
                    <td>
                        {{$item['ano']}}
                    </td>
                    <td>
                        {{$item['altura']}}
                    </td>
                    
                </tr>
                
                @endforeach
              </tbody>
          </table>
    </div>
@endsection
