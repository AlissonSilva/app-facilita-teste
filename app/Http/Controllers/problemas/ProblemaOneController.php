<?php

namespace App\Http\Controllers\problemas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProblemaOneController extends Controller
{
    public function index()
    {
        $chico = collect(
            [
                'altura' => 1.5,
                'fator' => 0.2
            ]
        )->toArray();

        $juca = collect(
            [
                'altura' => 1.2,
                'fator' => 0.3
            ]
        )->toArray();

        $objetosarray = $this->calculador($chico, $juca);

        //dd($objetosarray);
        return view('problema_1.index', compact('objetosarray'));
    }

    public function calculador($fator_chico, $fator_juca)
    {
        $ano = date("Y");
        $array = array();
        $tempo = 0;
        while ($fator_juca['altura'] <= $fator_chico['altura']) {
            $ano++;
            $tempo++;
            $fator_juca['altura'] = $fator_juca['altura'] + $fator_juca['fator'];
            $fator_chico['altura'] = $fator_chico['altura'] + $fator_chico['fator'];

            array_push(
                $array,
                array('nome' => 'Chico', 'ano' => $ano, 'altura' => $fator_chico['altura'], 'fator' => $fator_chico['fator']),
                array('nome' => 'Juca', 'ano' => $ano, 'altura' => $fator_juca['altura'], 'fator' => $fator_juca['fator'])
            );
        }
        return array('tabela' => $array, 'ano' => $ano, 'tempo' => $tempo);
    }
}
