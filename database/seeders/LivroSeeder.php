<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LivroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('livros')->insert(
            array(
                array(
                    'titulo'=>'As Pupilas do Senhor Reitor',
                    'autor'=>'Júlio Dinis',
                    'localizacao'=>'me',
                    'edicao'=> 7,
                    'ano_publicacao'=> 2.02,
                    'editora'=>'Ministério da Educação',
                    'num_paginas'=> 696
                  ),
                  array(
                    'titulo'=>'As Pupilas do Senhor Reitor',
                    'autor'=>'Júlio Dinis',
                    'localizacao'=>'bv',
                    'edicao'=> 9,
                    'ano_publicacao'=> 1.976,
                    'editora'=>'Biblioteca Virtual do Estudante Brasileiro / USP',
                    'num_paginas'=> 122
                  ),
                  array(
                    'titulo'=>'As Religiões no Rio',
                    'autor'=>'João do Rio',
                    'localizacao'=>'bi',
                    'edicao'=> 9,
                    'ano_publicacao'=> 1.997,
                    'editora'=>'Biblioteca Virtual de Literatura',
                    'num_paginas'=> 271
                  ),
                  array(
                    'titulo'=>'As Vítimas-Algozes',
                    'autor'=>'Joaquim Manuel de Macedo',
                    'localizacao'=>'bn',
                    'edicao'=> 6,
                    'ano_publicacao'=> 2.016,
                    'editora'=>'Fundação Biblioteca Nacional',
                    'num_paginas'=> 467
                  ),
                  array(
                    'titulo'=>'As bolas de sabão que esta criança',
                    'autor'=>'Alberto Caeiro',
                    'localizacao'=>'wk',
                    'edicao'=> 10,
                    'ano_publicacao'=> 1.952,
                    'editora'=>'Wikipédia, a enciclopédia livre',
                    'num_paginas'=> 534
                  ),
                  array(
                    'titulo'=>'As doutoras',
                    'autor'=>'França Júnior',
                    'localizacao'=>'ua',
                    'edicao'=> 10,
                    'ano_publicacao'=> 1.986,
                    'editora'=>'Universidade da Amazônia - UNAMA',
                    'num_paginas'=> 554
                  ),
                  array(
                    'titulo'=>'As duas ilhas',
                    'autor'=>'Antônio Frederico de Castro Alves',
                    'localizacao'=>'wk',
                    'edicao'=> 5,
                    'ano_publicacao'=> 1.972,
                    'editora'=>'Wikipédia, a enciclopédia livre',
                    'num_paginas'=> 128
                  ),
                  array(
                    'titulo'=>'As fabulas de Esopo',
                    'autor'=>'Joseph Shafan',
                    'localizacao'=>'ea',
                    'edicao'=> 4,
                    'ano_publicacao'=> 1.985,
                    'editora'=>'Edição do Autor',
                    'num_paginas'=> 505
                  ),
                  array(
                    'titulo'=>'As jóias da Coroa',
                    'autor'=>'Raul Pompéia',
                    'localizacao'=>'ua',
                    'edicao'=> 4,
                    'ano_publicacao'=> 1.95,
                    'editora'=>'Universidade da Amazônia - UNAMA',
                    'num_paginas'=> 595
                  ),
                  array(
                    'titulo'=>'As jóias da Coroa',
                    'autor'=>'Raul Pompéia',
                    'localizacao'=>'bv',
                    'edicao'=> 6,
                    'ano_publicacao'=> 1.962,
                    'editora'=>'Biblioteca Virtual do Estudante Brasileiro / USP',
                    'num_paginas'=> 395
                  ),
                  array(
                    'titulo'=>'As quatro canções que seguem',
                    'autor'=>'Alberto Caeiro',
                    'localizacao'=>'wk',
                    'edicao'=> 4,
                    'ano_publicacao'=> 1.992,
                    'editora'=>'Wikipédia, a enciclopédia livre',
                    'num_paginas'=> 469
                  ),
                  array(
                    'titulo'=>'As sete dores de Nossa Senhora',
                    'autor'=>'Coelho Netto',
                    'localizacao'=>'ub',
                    'edicao'=> 9,
                    'ano_publicacao'=> 1.994,
                    'editora'=>'Universidade de Brasília',
                    'num_paginas'=> 540
                  ),
                  array(
                    'titulo'=>'As viagens',
                    'autor'=>'Olavo Bilac',
                    'localizacao'=>'bi',
                    'edicao'=> 6,
                    'ano_publicacao'=> 1.96,
                    'editora'=>'Biblioteca Virtual de Literatura',
                    'num_paginas'=> 309
                  ),
                  array(
                    'titulo'=>'As viagens',
                    'autor'=>'Olavo Bilac',
                    'localizacao'=>'ua',
                    'edicao'=> 10,
                    'ano_publicacao'=> 1.963,
                    'editora'=>'Universidade da Amazônia - UNAMA',
                    'num_paginas'=> 445
                  ),
                  array(
                    'titulo'=>'As visões de Santa Thereza',
                    'autor'=>'Francisco Mangabeira',
                    'localizacao'=>'ub',
                    'edicao'=> 8,
                    'ano_publicacao'=> 1.988,
                    'editora'=>'Universidade de Brasília',
                    'num_paginas'=> 428
                  ),
                  array(
                    'titulo'=>'Assim como falham as palavras',
                    'autor'=>'Alberto Caeiro',
                    'localizacao'=>'wk',
                    'edicao'=> 5,
                    'ano_publicacao'=> 2.002,
                    'editora'=>'Wikipédia, a enciclopédia livre',
                    'num_paginas'=> 525
                  ),
                  array(
                    'titulo'=>'Assim!',
                    'autor'=>'Casimiro de Abreu',
                    'localizacao'=>'wk',
                    'edicao'=> 3,
                    'ano_publicacao'=> 1.967,
                    'editora'=>'Wikipédia, a enciclopédia livre',
                    'num_paginas'=> 753
                  ),
                  array(
                    'titulo'=>'Assombramento',
                    'autor'=>'Afonso Arinos',
                    'localizacao'=>'bi',
                    'edicao'=> 10,
                    'ano_publicacao'=> 2.009,
                    'editora'=>'Biblioteca Virtual de Literatura',
                    'num_paginas'=> 102
                  ),
                  array(
                    'titulo'=>'Assunto para um Conto',
                    'autor'=>'Artur Azevedo',
                    'localizacao'=>'bi',
                    'edicao'=> 1,
                    'ano_publicacao'=> 1.995,
                    'editora'=>'Biblioteca Virtual de Literatura',
                    'num_paginas'=> 96
                  ),
                  array(
                    'titulo'=>'Assí me trax coitado',
                    'autor'=>'Dom Dinis',
                    'localizacao'=>'wk',
                    'edicao'=> 3,
                    'ano_publicacao'=> 2.01,
                    'editora'=>'Wikipédia, a enciclopédia livre',
                    'num_paginas'=> 423
                  ),
                  array(
                    'titulo'=>'Astúcias de Marido',
                    'autor'=>'Machado de Assis',
                    'localizacao'=>'fs',
                    'edicao'=> 10,
                    'ano_publicacao'=> 2.018,
                    'editora'=>'Universidade Federal de Santa Catarina - UFSC',
                    'num_paginas'=> 563
                  ),
                  array(
                    'titulo'=>'Astúcias de namorada',
                    'autor'=>'M. Pinheiro Chagas',
                    'localizacao'=>'bi',
                    'edicao'=> 3,
                    'ano_publicacao'=> 1.95,
                    'editora'=>'Biblioteca Virtual de Literatura',
                    'num_paginas'=> 18
                  ),
                  array(
                    'titulo'=>'Atir: cartas, contos e crônicas',
                    'autor'=>'Rilvan Batista de Santana',
                    'localizacao'=>'ea',
                    'edicao'=> 1,
                    'ano_publicacao'=> 2.006,
                    'editora'=>'Edição do Autor',
                    'num_paginas'=> 97
                  ),
                  array(
                    'titulo'=>'Aurora sem Dia',
                    'autor'=>'Machado de Assis',
                    'localizacao'=>'bv',
                    'edicao'=> 7,
                    'ano_publicacao'=> 1.95,
                    'editora'=>'Biblioteca Virtual do Estudante Brasileiro / USP',
                    'num_paginas'=> 533
                  ),
                  array(
                    'titulo'=>'Auto Representado na Festa de São Lourenço',
                    'autor'=>'Pe. José de Anchieta',
                    'localizacao'=>'ua',
                    'edicao'=> 10,
                    'ano_publicacao'=> 1.964,
                    'editora'=>'Universidade da Amazônia - UNAMA',
                    'num_paginas'=> 44
                  ),
                  array(
                    'titulo'=>'Auto da Alma',
                    'autor'=>'Gil Vicente',
                    'localizacao'=>'ua',
                    'edicao'=> 7,
                    'ano_publicacao'=> 1.972,
                    'editora'=>'Universidade da Amazônia - UNAMA',
                    'num_paginas'=> 233
                  ),
                  array(
                    'titulo'=>'Auto da Alma',
                    'autor'=>'Gil Vicente',
                    'localizacao'=>'bv',
                    'edicao'=> 5,
                    'ano_publicacao'=> 1.952,
                    'editora'=>'Biblioteca Virtual do Estudante Brasileiro / USP',
                    'num_paginas'=> 389
                  ),
                  array(
                    'titulo'=>'Auto da Barca do Inferno',
                    'autor'=>'Gil Vicente',
                    'localizacao'=>'ua',
                    'edicao'=> 9,
                    'ano_publicacao'=> 1.999,
                    'editora'=>'Universidade da Amazônia - UNAMA',
                    'num_paginas'=> 99
                  ),
                  array(
                    'titulo'=>'Auto da Barca do Inferno',
                    'autor'=>'Gil Vicente',
                    'localizacao'=>'bv',
                    'edicao'=> 2,
                    'ano_publicacao'=> 2.014,
                    'editora'=>'Biblioteca Virtual do Estudante Brasileiro / USP',
                    'num_paginas'=> 739
                  ),
                  array(
                    'titulo'=>'Auto da Feira',
                    'autor'=>'Gil Vicente',
                    'localizacao'=>'ua',
                    'edicao'=> 5,
                    'ano_publicacao'=> 2.01,
                    'editora'=>'Universidade da Amazônia - UNAMA',
                    'num_paginas'=> 604
                  ),
                  array(
                    'titulo'=>'Auto da Feira',
                    'autor'=>'Gil Vicente',
                    'localizacao'=>'bv',
                    'edicao'=> 7,
                    'ano_publicacao'=> 1.952,
                    'editora'=>'Biblioteca Virtual do Estudante Brasileiro / USP',
                    'num_paginas'=> 169
                  ),
                  array(
                    'titulo'=>'Auto da Festa de São Lourenço',
                    'autor'=>'Pe. José de Anchieta',
                    'localizacao'=>'bv',
                    'edicao'=> 2,
                    'ano_publicacao'=> 1.964,
                    'editora'=>'Biblioteca Virtual do Estudante Brasileiro / USP',
                    'num_paginas'=> 799
                  ),
                  array(
                    'titulo'=>'Auto da Índia',
                    'autor'=>'Gil Vicente',
                    'localizacao'=>'ua',
                    'edicao'=> 9,
                    'ano_publicacao'=> 2.021,
                    'editora'=>'Universidade da Amazônia - UNAMA',
                    'num_paginas'=> 680
                  ),
                  array(
                    'titulo'=>'Auto da Índia',
                    'autor'=>'Gil Vicente',
                    'localizacao'=>'bv',
                    'edicao'=> 1,
                    'ano_publicacao'=> 2.006,
                    'editora'=>'Biblioteca Virtual do Estudante Brasileiro / USP',
                    'num_paginas'=> 160
                  ),
                  array(
                    'titulo'=>'Auto de Mofina Mendes',
                    'autor'=>'Gil Vicente',
                    'localizacao'=>'ua',
                    'edicao'=> 7,
                    'ano_publicacao'=> 1.991,
                    'editora'=>'Universidade da Amazônia - UNAMA',
                    'num_paginas'=> 433
                  ),
                  array(
                    'titulo'=>'Auto de Mofina Mendes',
                    'autor'=>'Gil Vicente',
                    'localizacao'=>'bv',
                    'edicao'=> 9,
                    'ano_publicacao'=> 1.979,
                    'editora'=>'Biblioteca Virtual do Estudante Brasileiro / USP',
                    'num_paginas'=> 170
                  ),
                  array(
                    'titulo'=>'Auto-retrato',
                    'autor'=>'Manuel Maria de Barbosa du Bocage',
                    'localizacao'=>'wk',
                    'edicao'=> 7,
                    'ano_publicacao'=> 1.972,
                    'editora'=>'Wikipédia, a enciclopédia livre',
                    'num_paginas'=> 751
                  ),
                  array(
                    'titulo'=>'Ave',
                    'autor'=>'Auta de Sousa',
                    'localizacao'=>'wk',
                    'edicao'=> 6,
                    'ano_publicacao'=> 1.976,
                    'editora'=>'Wikipédia, a enciclopédia livre',
                    'num_paginas'=> 676
                  ),
                  array(
                    'titulo'=>'Aventuras de Diófanes',
                    'autor'=>'Teresa Margarida da Silva e Orta',
                    'localizacao'=>'bn',
                    'edicao'=> 9,
                    'ano_publicacao'=> 1.995,
                    'editora'=>'Fundação Biblioteca Nacional',
                    'num_paginas'=> 372
                  ),
                  array(
                    'titulo'=>'Aves da arribação',
                    'autor'=>'Antônio Frederico de Castro Alves',
                    'localizacao'=>'wk',
                    'edicao'=> 7,
                    'ano_publicacao'=> 1.973,
                    'editora'=>'Wikipédia, a enciclopédia livre',
                    'num_paginas'=> 31
                  ),
                  array(
                    'titulo'=>'Ayres e Vergueiro',
                    'autor'=>'Machado de Assis',
                    'localizacao'=>'fs',
                    'edicao'=> 9,
                    'ano_publicacao'=> 2.001,
                    'editora'=>'Universidade Federal de Santa Catarina - UFSC',
                    'num_paginas'=> 235
                  ),
                  array(
                    'titulo'=>'Balas de Estalo',
                    'autor'=>'Machado de Assis',
                    'localizacao'=>'ua',
                    'edicao'=> 6,
                    'ano_publicacao'=> 1.966,
                    'editora'=>'Universidade da Amazônia - UNAMA',
                    'num_paginas'=> 284
                  ),
                  array(
                    'titulo'=>'Balas de Estalo',
                    'autor'=>'Machado de Assis',
                    'localizacao'=>'bv',
                    'edicao'=> 1,
                    'ano_publicacao'=> 1.969,
                    'editora'=>'Biblioteca Virtual do Estudante Brasileiro / USP',
                    'num_paginas'=> 146
                  ),
                  array(
                    'titulo'=>'Balladilhas',
                    'autor'=>'Coelho Netto',
                    'localizacao'=>'ub',
                    'edicao'=> 6,
                    'ano_publicacao'=> 1.972,
                    'editora'=>'Universidade de Brasília',
                    'num_paginas'=> 333
                  ),
                  array(
                    'titulo'=>'Banhos de Mar',
                    'autor'=>'Artur Azevedo',
                    'localizacao'=>'bi',
                    'edicao'=> 2,
                    'ano_publicacao'=> 1.972,
                    'editora'=>'Biblioteca Virtual de Literatura',
                    'num_paginas'=> 648
                  ),
                  array(
                    'titulo'=>'Barca',
                    'autor'=>'Artur Azevedo',
                    'localizacao'=>'bi',
                    'edicao'=> 2,
                    'ano_publicacao'=> 1.991,
                    'editora'=>'Biblioteca Virtual de Literatura',
                    'num_paginas'=> 704
                  ),
                  array(
                    'titulo'=>'Batata cozida, mingau de cará. (Coleção literatura para todos; v. 8)',
                    'autor'=>'Eloí Elisabete Bocheco',
                    'localizacao'=>'me',
                    'edicao'=> 9,
                    'ano_publicacao'=> 1.965,
                    'editora'=>'Ministério da Educação',
                    'num_paginas'=> 491
                  ),
                  array(
                    'titulo'=>'Bela-Menina',
                    'autor'=>'Adolfo Coelho',
                    'localizacao'=>'wk',
                    'edicao'=> 10,
                    'ano_publicacao'=> 1.965,
                    'editora'=>'Wikipédia, a enciclopédia livre',
                    'num_paginas'=> 39
                  ),
                  array(
                    'titulo'=>'Bem entendi, meu amigo',
                    'autor'=>'Dom Dinis',
                    'localizacao'=>'wk',
                    'edicao'=> 5,
                    'ano_publicacao'=> 2.003,
                    'editora'=>'Wikipédia, a enciclopédia livre',
                    'num_paginas'=> 428
                  ),
                  array(
                    'titulo'=>'Ben me cuidei eu, María García',
                    'autor'=>'Afonso Eanes de Coton',
                    'localizacao'=>'wk',
                    'edicao'=> 5,
                    'ano_publicacao'=> 1.963,
                    'editora'=>'Wikipédia, a enciclopédia livre',
                    'num_paginas'=> 632
                  ),
                  array(
                    'titulo'=>'Discurso sobre a História da Literatura do Brasil',
                    'autor'=>'Domingos Gonçalves de Magalhães',
                    'localizacao'=>'bn',
                    'edicao'=> 6,
                    'ano_publicacao'=> 1.997,
                    'editora'=>'Fundação Biblioteca Nacional',
                    'num_paginas'=> 666
                  ),
                  array(
                    'titulo'=>'Discursos (obras completas)',
                    'autor'=>'Tobias Barreto de Menezes',
                    'localizacao'=>'ub',
                    'edicao'=> 1,
                    'ano_publicacao'=> 2.018,
                    'editora'=>'Universidade de Brasília',
                    'num_paginas'=> 438
                  ),
                  array(
                    'titulo'=>'Dispersão',
                    'autor'=>'Mário de Sá-Carneiro',
                    'localizacao'=>'vo',
                    'edicao'=> 8,
                    'ano_publicacao'=> 2.015,
                    'editora'=>'Colaboração Voluntária',
                    'num_paginas'=> 435
                  ),
                  array(
                    'titulo'=>'Disse-mhoj un cavaleiro',
                    'autor'=>'Dom Dinis',
                    'localizacao'=>'wk',
                    'edicao'=> 6,
                    'ano_publicacao'=> 2.02,
                    'editora'=>'Wikipédia, a enciclopédia livre',
                    'num_paginas'=> 202
                  ),
                  array(
                    'titulo'=>'Dissa fremosa en Bonaval assí',
                    'autor'=>'Bernardo de Bonaval',
                    'localizacao'=>'wk',
                    'edicao'=> 9,
                    'ano_publicacao'=> 2.009,
                    'editora'=>'Wikipédia, a enciclopédia livre',
                    'num_paginas'=> 282
                  ),
                  array(
                    'titulo'=>'Diva',
                    'autor'=>'José de Alencar',
                    'localizacao'=>'bn',
                    'edicao'=> 8,
                    'ano_publicacao'=> 2.011,
                    'editora'=>'Fundação Biblioteca Nacional',
                    'num_paginas'=> 184
                  ),
                  array(
                    'titulo'=>'Diva',
                    'autor'=>'José de Alencar',
                    'localizacao'=>'bv',
                    'edicao'=> 3,
                    'ano_publicacao'=> 1.976,
                    'editora'=>'Biblioteca Virtual do Estudante Brasileiro / USP',
                    'num_paginas'=> 245
                  ),
                  array(
                    'titulo'=>'Dizede por Deus amigo',
                    'autor'=>'Dom Dinis',
                    'localizacao'=>'wk',
                    'edicao'=> 3,
                    'ano_publicacao'=> 2.02,
                    'editora'=>'Wikipédia, a enciclopédia livre',
                    'num_paginas'=> 20
                  ),
                  array(
                    'titulo'=>'Dizem que em cada coisa uma coisa oculta mora',
                    'autor'=>'Alberto Caeiro',
                    'localizacao'=>'wk',
                    'edicao'=> 7,
                    'ano_publicacao'=> 1.98,
                    'editora'=>'Wikipédia, a enciclopédia livre',
                    'num_paginas'=> 66
                  ),
                  array(
                    'titulo'=>'Dizes-me: tu és mais alguma cousa',
                    'autor'=>'Alberto Caeiro',
                    'localizacao'=>'wk',
                    'edicao'=> 6,
                    'ano_publicacao'=> 2.011,
                    'editora'=>'Wikipédia, a enciclopédia livre',
                    'num_paginas'=> 741
                  ),
                  array(
                    'titulo'=>'Dizia la fremozinha',
                    'autor'=>'Afonso Sanches',
                    'localizacao'=>'wk',
                    'edicao'=> 1,
                    'ano_publicacao'=> 1.959,
                    'editora'=>'Wikipédia, a enciclopédia livre',
                    'num_paginas'=> 673
                  ),
                  array(
                    'titulo'=>'Diálogo dos ecos',
                    'autor'=>'Antônio Frederico de Castro Alves',
                    'localizacao'=>'wk',
                    'edicao'=> 6,
                    'ano_publicacao'=> 1.998,
                    'editora'=>'Wikipédia, a enciclopédia livre',
                    'num_paginas'=> 506
                  ),
                  array(
                    'titulo'=>'Diálogos das Grandezas do Brasil',
                    'autor'=>'Izaak Walton',
                    'localizacao'=>'bv',
                    'edicao'=> 8,
                    'ano_publicacao'=> 1.983,
                    'editora'=>'Biblioteca Virtual do Estudante Brasileiro / USP',
                    'num_paginas'=> 764
                  ),
                  array(
                    'titulo'=>'Diário íntimo',
                    'autor'=>'Afonso Henriques de Lima Barreto',
                    'localizacao'=>'bn',
                    'edicao'=> 4,
                    'ano_publicacao'=> 2.009,
                    'editora'=>'Fundação Biblioteca Nacional',
                    'num_paginas'=> 303
                  ),
                  array(
                    'titulo'=>'Do Livro do Desassossego',
                    'autor'=>'Fernando Pessoa',
                    'localizacao'=>'pe',
                    'edicao'=> 3,
                    'ano_publicacao'=> 2.004,
                    'editora'=>'Pessoa Revisitado',
                    'num_paginas'=> 320
                  ),
                  array(
                    'titulo'=>'Doente',
                    'autor'=>'Auta de Sousa',
                    'localizacao'=>'wk',
                    'edicao'=> 7,
                    'ano_publicacao'=> 1.98,
                    'editora'=>'Wikipédia, a enciclopédia livre',
                    'num_paginas'=> 67
                  ),
                  array(
                    'titulo'=>'Dois proveitos em um saco',
                    'autor'=>'França Júnior',
                    'localizacao'=>'bi',
                    'edicao'=> 3,
                    'ano_publicacao'=> 2.002,
                    'editora'=>'Biblioteca Virtual de Literatura',
                    'num_paginas'=> 616
                  ),
                  array(
                    'titulo'=>'Dolores',
                    'autor'=>'Auta de Sousa',
                    'localizacao'=>'wk',
                    'edicao'=> 7,
                    'ano_publicacao'=> 1.976,
                    'editora'=>'Wikipédia, a enciclopédia livre',
                    'num_paginas'=> 11
                  ),
                  array(
                    'titulo'=>'Dom Casmurro',
                    'autor'=>'Machado de Assis',
                    'localizacao'=>'ua',
                    'edicao'=> 6,
                    'ano_publicacao'=> 1.971,
                    'editora'=>'Universidade da Amazônia - UNAMA',
                    'num_paginas'=> 599
                  ),
                  array(
                    'titulo'=>'Dom Casmurro',
                    'autor'=>'Machado de Assis',
                    'localizacao'=>'bv',
                    'edicao'=> 10,
                    'ano_publicacao'=> 2.002,
                    'editora'=>'Biblioteca Virtual do Estudante Brasileiro / USP',
                    'num_paginas'=> 93
                  ),
                  array(
                    'titulo'=>'Dom Casmurro',
                    'autor'=>'Machado de Assis',
                    'localizacao'=>'bn',
                    'edicao'=> 10,
                    'ano_publicacao'=> 1.996,
                    'editora'=>'Fundação Biblioteca Nacional',
                    'num_paginas'=> 692
                  ),
                  array(
                    'titulo'=>'Don Quixote. Vol. 1',
                    'autor'=>'Miguel de Cervantes Saavedra',
                    'localizacao'=>'eb',
                    'edicao'=> 2,
                    'ano_publicacao'=> 2.005,
                    'editora'=>'eBooksBrasil',
                    'num_paginas'=> 691
                  ),
                  array(
                    'titulo'=>'Don Quixote. Vol. 2',
                    'autor'=>'Miguel de Cervantes Saavedra',
                    'localizacao'=>'eb',
                    'edicao'=> 10,
                    'ano_publicacao'=> 1.985,
                    'editora'=>'eBooksBrasil',
                    'num_paginas'=> 183
                  ),
                  array(
                    'titulo'=>'Dona Eulália',
                    'autor'=>'Artur Azevedo',
                    'localizacao'=>'bi',
                    'edicao'=> 10,
                    'ano_publicacao'=> 1.969,
                    'editora'=>'Biblioteca Virtual de Literatura',
                    'num_paginas'=> 245
                  ),
                  array(
                    'titulo'=>'Dona Guidinha do Poço',
                    'autor'=>'Manuel de Oliveira Paiva',
                    'localizacao'=>'ua',
                    'edicao'=> 10,
                    'ano_publicacao'=> 1.985,
                    'editora'=>'Universidade da Amazônia - UNAMA',
                    'num_paginas'=> 780
                  ),
                  array(
                    'titulo'=>'Dona Guidinha do Poço',
                    'autor'=>'Manuel de Oliveira Paiva',
                    'localizacao'=>'bv',
                    'edicao'=> 5,
                    'ano_publicacao'=> 2.005,
                    'editora'=>'Biblioteca Virtual do Estudante Brasileiro / USP',
                    'num_paginas'=> 796
                  ),
                  array(
                    'titulo'=>'Dores',
                    'autor'=>'Casimiro de Abreu',
                    'localizacao'=>'wk',
                    'edicao'=> 1,
                    'ano_publicacao'=> 1.964,
                    'editora'=>'Wikipédia, a enciclopédia livre',
                    'num_paginas'=> 93
                  ),
                  array(
                    'titulo'=>'Dos que ora son na hoste',
                    'autor'=>'Dom Dinis',
                    'localizacao'=>'wk',
                    'edicao'=> 5,
                    'ano_publicacao'=> 1.969,
                    'editora'=>'Wikipédia, a enciclopédia livre',
                    'num_paginas'=> 224
                  ),
                  array(
                    'titulo'=>'Duas Apostas',
                    'autor'=>'Artur Azevedo',
                    'localizacao'=>'bi',
                    'edicao'=> 1,
                    'ano_publicacao'=> 1.989,
                    'editora'=>'Biblioteca Virtual de Literatura',
                    'num_paginas'=> 583
                  ),
                  array(
                    'titulo'=>'Duas Juízas',
                    'autor'=>'Machado de Assis',
                    'localizacao'=>'ua',
                    'edicao'=> 10,
                    'ano_publicacao'=> 1.994,
                    'editora'=>'Universidade da Amazônia - UNAMA',
                    'num_paginas'=> 34
                  ),
                  array(
                    'titulo'=>'Décima',
                    'autor'=>'Frei Caneca',
                    'localizacao'=>'ws',
                    'edicao'=> 8,
                    'ano_publicacao'=> 1.959,
                    'editora'=>'Wikisource',
                    'num_paginas'=> 395
                  ),
                  array(
                    'titulo'=>'Dívida Extinta',
                    'autor'=>'Machado de Assis',
                    'localizacao'=>'fs',
                    'edicao'=> 6,
                    'ano_publicacao'=> 1.976,
                    'editora'=>'Universidade Federal de Santa Catarina - UFSC',
                    'num_paginas'=> 288
                  ),
                  array(
                    'titulo'=>'Eficiência Militar',
                    'autor'=>'Afonso Henriques de Lima Barreto',
                    'localizacao'=>'ua',
                    'edicao'=> 6,
                    'ano_publicacao'=> 1.959,
                    'editora'=>'Universidade da Amazônia - UNAMA',
                    'num_paginas'=> 779
                  ),
                  array(
                    'titulo'=>'Elbow-Room - A Novel Without a Plot',
                    'autor'=>'Charles Heber Clark',
                    'localizacao'=>'gu',
                    'edicao'=> 9,
                    'ano_publicacao'=> 2.014,
                    'editora'=>'Projeto Gutenberg',
                    'num_paginas'=> 321
                  ),
                  array(
                    'titulo'=>'Elefantes e Ursos',
                    'autor'=>'Artur Azevedo',
                    'localizacao'=>'bi',
                    'edicao'=> 2,
                    'ano_publicacao'=> 1.965,
                    'editora'=>'Biblioteca Virtual de Literatura',
                    'num_paginas'=> 779
                  ),
                  array(
                    'titulo'=>'Elogio da vaidade',
                    'autor'=>'Machado de Assis',
                    'localizacao'=>'fs',
                    'edicao'=> 9,
                    'ano_publicacao'=> 2.003,
                    'editora'=>'Universidade Federal de Santa Catarina - UFSC',
                    'num_paginas'=> 160
                  ),
                  array(
                    'titulo'=>'Em Sonhos',
                    'autor'=>'Artur Azevedo',
                    'localizacao'=>'bi',
                    'edicao'=> 8,
                    'ano_publicacao'=> 1.969,
                    'editora'=>'Biblioteca Virtual de Literatura',
                    'num_paginas'=> 413
                  ),
                  array(
                    'titulo'=>'Em busca dos contos perdidos',
                    'autor'=>'Mariza B. T. Mendes',
                    'localizacao'=>'up',
                    'edicao'=> 3,
                    'ano_publicacao'=> 1.962,
                    'editora'=>'Fundação Editora da Unesp',
                    'num_paginas'=> 787
                  ),
                  array(
                    'titulo'=>'Em gram coita, senhor',
                    'autor'=>'Dom Dinis',
                    'localizacao'=>'wk',
                    'edicao'=> 1,
                    'ano_publicacao'=> 2.001,
                    'editora'=>'Wikipédia, a enciclopédia livre',
                    'num_paginas'=> 113
                  ),
                  array(
                    'titulo'=>'En grave día, senhor, que vos oí',
                    'autor'=>'Dom Dinis',
                    'localizacao'=>'wk',
                    'edicao'=> 7,
                    'ano_publicacao'=> 1.953,
                    'editora'=>'Wikipédia, a enciclopédia livre',
                    'num_paginas'=> 439
                  ),
                  array(
                    'titulo'=>'Encarnação',
                    'autor'=>'José de Alencar',
                    'localizacao'=>'bn',
                    'edicao'=> 8,
                    'ano_publicacao'=> 1.951,
                    'editora'=>'Fundação Biblioteca Nacional',
                    'num_paginas'=> 741
                  ),
                  array(
                    'titulo'=>'Encarnação',
                    'autor'=>'José de Alencar',
                    'localizacao'=>'bv',
                    'edicao'=> 3,
                    'ano_publicacao'=> 2.011,
                    'editora'=>'Biblioteca Virtual do Estudante Brasileiro / USP',
                    'num_paginas'=> 689
                  ),
                  array(
                    'titulo'=>'Encher tempo',
                    'autor'=>'Machado de Assis',
                    'localizacao'=>'fs',
                    'edicao'=> 5,
                    'ano_publicacao'=> 1.961,
                    'editora'=>'Universidade Federal de Santa Catarina - UFSC',
                    'num_paginas'=> 229
                  ),
                  array(
                    'titulo'=>'Encontros Reveladores',
                    'autor'=>'Artur Azevedo',
                    'localizacao'=>'bi',
                    'edicao'=> 2,
                    'ano_publicacao'=> 1.997,
                    'editora'=>'Biblioteca Virtual de Literatura',
                    'num_paginas'=> 206
                  ),
                  array(
                    'titulo'=>'Ensaio Histórico sobre as Letras no Brasil',
                    'autor'=>'Francisco Adolfo de Varnhagen',
                    'localizacao'=>'bn',
                    'edicao'=> 2,
                    'ano_publicacao'=> 2.011,
                    'editora'=>'Fundação Biblioteca Nacional',
                    'num_paginas'=> 292
                  ),
                  array(
                    'titulo'=>'Ensaio Histórico sobre as Letras no Brasil',
                    'autor'=>'Francisco Adolfo de Varnhagen',
                    'localizacao'=>'ua',
                    'edicao'=> 2,
                    'ano_publicacao'=> 2.013,
                    'editora'=>'Universidade da Amazônia - UNAMA',
                    'num_paginas'=> 791
                  ),
                  array(
                    'titulo'=>'Entre 1892 e 1894',
                    'autor'=>'Machado de Assis',
                    'localizacao'=>'bv',
                    'edicao'=> 3,
                    'ano_publicacao'=> 1.985,
                    'editora'=>'Biblioteca Virtual do Estudante Brasileiro / USP',
                    'num_paginas'=> 760
                  ),
                  array(
                    'titulo'=>'Entre Marília e a pátria',
                    'autor'=>'Frei Caneca',
                    'localizacao'=>'ws',
                    'edicao'=> 10,
                    'ano_publicacao'=> 2.009,
                    'editora'=>'Wikisource',
                    'num_paginas'=> 330
                  ),
                  array(
                    'titulo'=>'Entre Santos',
                    'autor'=>'Machado de Assis',
                    'localizacao'=>'bv',
                    'edicao'=> 1,
                    'ano_publicacao'=> 1.989,
                    'editora'=>'Biblioteca Virtual do Estudante Brasileiro / USP',
                    'num_paginas'=> 717
                  ),
                  array(
                    'titulo'=>'Entre Santos',
                    'autor'=>'Machado de Assis',
                    'localizacao'=>'ua',
                    'edicao'=> 8,
                    'ano_publicacao'=> 1.999,
                    'editora'=>'Universidade da Amazônia - UNAMA',
                    'num_paginas'=> 224
                  ),
                  array(
                    'titulo'=>'Farsa ou Auto de Inês Pereira',
                    'autor'=>'Gil Vicente',
                    'localizacao'=>'ua',
                    'edicao'=> 5,
                    'ano_publicacao'=> 1.967,
                    'editora'=>'Universidade da Amazônia - UNAMA',
                    'num_paginas'=> 60
                  ),
                  array(
                    'titulo'=>'Faróis',
                    'autor'=>'João da Cruz e Sousa',
                    'localizacao'=>'ua',
                    'edicao'=> 8,
                    'ano_publicacao'=> 2.018,
                    'editora'=>'Universidade da Amazônia - UNAMA',
                    'num_paginas'=> 615
                  ),
                  array(
                    'titulo'=>'Faróis',
                    'autor'=>'João da Cruz e Sousa',
                    'localizacao'=>'bv',
                    'edicao'=> 2,
                    'ano_publicacao'=> 2.021,
                    'editora'=>'Biblioteca Virtual do Estudante Brasileiro / USP',
                    'num_paginas'=> 541
                  ),
                  array(
                    'titulo'=>'Fatalidade',
                    'autor'=>'Artur Azevedo',
                    'localizacao'=>'bi',
                    'edicao'=> 1,
                    'ano_publicacao'=> 2.018,
                    'editora'=>'Biblioteca Virtual de Literatura',
                    'num_paginas'=> 28
                  ),
                  array(
                    'titulo'=>'Fausto',
                    'autor'=>'Johann Wolfgang von Goethe',
                    'localizacao'=>'eb',
                    'edicao'=> 9,
                    'ano_publicacao'=> 1.959,
                    'editora'=>'eBooksBrasil',
                    'num_paginas'=> 771
                  ),
                  array(
                    'titulo'=>'Fefa',
                    'autor'=>'Auta de Sousa',
                    'localizacao'=>'wk',
                    'edicao'=> 6,
                    'ano_publicacao'=> 1.969,
                    'editora'=>'Wikipédia, a enciclopédia livre',
                    'num_paginas'=> 618
                  ),
                  array(
                    'titulo'=>'Feira dos anexins',
                    'autor'=>'Francisco Manuel de Melo',
                    'localizacao'=>'ub',
                    'edicao'=> 4,
                    'ano_publicacao'=> 1.98,
                    'editora'=>'Universidade de Brasília',
                    'num_paginas'=> 652
                  ),
                  array(
                    'titulo'=>'Feitos de Mem de Sá',
                    'autor'=>'Pe. José de Anchieta',
                    'localizacao'=>'ua',
                    'edicao'=> 6,
                    'ano_publicacao'=> 2.015,
                    'editora'=>'Universidade da Amazônia - UNAMA',
                    'num_paginas'=> 535
                  ),
                  array(
                    'titulo'=>'Felicidade pelo Casamento',
                    'autor'=>'Machado de Assis',
                    'localizacao'=>'fs',
                    'edicao'=> 8,
                    'ano_publicacao'=> 1.969,
                    'editora'=>'Universidade Federal de Santa Catarina - UFSC',
                    'num_paginas'=> 539
                  ),
                  array(
                    'titulo'=>'Feliz',
                    'autor'=>'Auta de Sousa',
                    'localizacao'=>'wk',
                    'edicao'=> 5,
                    'ano_publicacao'=> 2.011,
                    'editora'=>'Wikipédia, a enciclopédia livre',
                    'num_paginas'=> 789
                  ),
                  array(
                    'titulo'=>'Fernando e Fernanda',
                    'autor'=>'Machado de Assis',
                    'localizacao'=>'fs',
                    'edicao'=> 2,
                    'ano_publicacao'=> 1.991,
                    'editora'=>'Universidade Federal de Santa Catarina - UFSC',
                    'num_paginas'=> 622
                  ),
                  array(
                    'titulo'=>'Ficções do interlúdio: para além do outro oceano de Coelho Pacheco.',
                    'autor'=>'Fernando Pessoa',
                    'localizacao'=>'vo',
                    'edicao'=> 8,
                    'ano_publicacao'=> 2.016,
                    'editora'=>'Colaboração Voluntária',
                    'num_paginas'=> 246
                  ),
                  array(
                    'titulo'=>'Filmer',
                    'autor'=>'H.G. Wells',
                    'localizacao'=>'ln',
                    'edicao'=> 2,
                    'ano_publicacao'=> 1.995,
                    'editora'=>'The Literature Network',
                    'num_paginas'=> 586
                  ),
                  array(
                    'titulo'=>'Filomena Borges',
                    'autor'=>'Aluísio Azevedo',
                    'localizacao'=>'ua',
                    'edicao'=> 7,
                    'ano_publicacao'=> 1.966,
                    'editora'=>'Universidade da Amazônia - UNAMA',
                    'num_paginas'=> 762
                  ),
                  array(
                    'titulo'=>'Filomena Borges',
                    'autor'=>'Aluísio Azevedo',
                    'localizacao'=>'bi',
                    'edicao'=> 3,
                    'ano_publicacao'=> 2.012,
                    'editora'=>'Biblioteca Virtual de Literatura',
                    'num_paginas'=> 294
                  ),
                  array(
                    'titulo'=>'Filomena Borges',
                    'autor'=>'Aluísio Azevedo',
                    'localizacao'=>'bn',
                    'edicao'=> 2,
                    'ano_publicacao'=> 2.009,
                    'editora'=>'Fundação Biblioteca Nacional',
                    'num_paginas'=> 146
                  ),
                  array(
                    'titulo'=>'Filosofia de um par de botas',
                    'autor'=>'Machado de Assis',
                    'localizacao'=>'fs',
                    'edicao'=> 1,
                    'ano_publicacao'=> 1.977,
                    'editora'=>'Universidade Federal de Santa Catarina - UFSC',
                    'num_paginas'=> 606
                  ),
                  array(
                    'titulo'=>'Fio Partido',
                    'autor'=>'Auta de Sousa',
                    'localizacao'=>'wk',
                    'edicao'=> 2,
                    'ano_publicacao'=> 2.005,
                    'editora'=>'Wikipédia, a enciclopédia livre',
                    'num_paginas'=> 74
                  ),
                  array(
                    'titulo'=>'Flor anônima',
                    'autor'=>'Machado de Assis',
                    'localizacao'=>'fs',
                    'edicao'=> 7,
                    'ano_publicacao'=> 1.98,
                    'editora'=>'Universidade Federal de Santa Catarina - UFSC',
                    'num_paginas'=> 109
                  ),
                  array(
                    'titulo'=>'Flor de Sangue',
                    'autor'=>'Valentim Magalhães',
                    'localizacao'=>'ua',
                    'edicao'=> 8,
                    'ano_publicacao'=> 1.96,
                    'editora'=>'Universidade da Amazônia - UNAMA',
                    'num_paginas'=> 404
                  ),
                  array(
                    'titulo'=>'Flor de pitanga',
                    'autor'=>'William Henrique Stutz',
                    'localizacao'=>'ea',
                    'edicao'=> 3,
                    'ano_publicacao'=> 1.952,
                    'editora'=>'Edição do Autor',
                    'num_paginas'=> 799
                  ),
                  array(
                    'titulo'=>'Flor do Campo',
                    'autor'=>'Auta de Sousa',
                    'localizacao'=>'wk',
                    'edicao'=> 2,
                    'ano_publicacao'=> 2.002,
                    'editora'=>'Wikipédia, a enciclopédia livre',
                    'num_paginas'=> 372
                  ),
                  array(
                    'titulo'=>'Flores',
                    'autor'=>'Auta de Sousa',
                    'localizacao'=>'wk',
                    'edicao'=> 7,
                    'ano_publicacao'=> 1.957,
                    'editora'=>'Wikipédia, a enciclopédia livre',
                    'num_paginas'=> 300
                  ),
                  array(
                    'titulo'=>'Flores da Noite',
                    'autor'=>'Lycurgo José Henrique de Paiva',
                    'localizacao'=>'ua',
                    'edicao'=> 1,
                    'ano_publicacao'=> 2.004,
                    'editora'=>'Universidade da Amazônia - UNAMA',
                    'num_paginas'=> 125
                  ),
                  array(
                    'titulo'=>'Flores da Noite',
                    'autor'=>'Lycurgo José Henrique de Paiva',
                    'localizacao'=>'bv',
                    'edicao'=> 9,
                    'ano_publicacao'=> 1.994,
                    'editora'=>'Biblioteca Virtual do Estudante Brasileiro / USP',
                    'num_paginas'=> 620
                  ),
                  array(
                    'titulo'=>'Foi Buscar Lã...',
                    'autor'=>'Afonso Henriques de Lima Barreto',
                    'localizacao'=>'ua',
                    'edicao'=> 6,
                    'ano_publicacao'=> 2.003,
                    'editora'=>'Universidade da Amazônia - UNAMA',
                    'num_paginas'=> 469
                  ),
                  array(
                    'titulo'=>'Foi Don Fagundo un día convidar',
                    'autor'=>'Afonso Eanes de Coton',
                    'localizacao'=>'wk',
                    'edicao'=> 9,
                    'ano_publicacao'=> 2.01,
                    'editora'=>'Wikipédia, a enciclopédia livre',
                    'num_paginas'=> 272
                  ),
                  array(
                    'titulo'=>'Folha negra',
                    'autor'=>'Casimiro de Abreu',
                    'localizacao'=>'wk',
                    'edicao'=> 8,
                    'ano_publicacao'=> 2.004,
                    'editora'=>'Wikipédia, a enciclopédia livre',
                    'num_paginas'=> 232
                  ),
                  array(
                    'titulo'=>'Folha rota',
                    'autor'=>'Machado de Assis',
                    'localizacao'=>'fs',
                    'edicao'=> 7,
                    'ano_publicacao'=> 1.984,
                    'editora'=>'Universidade Federal de Santa Catarina - UFSC',
                    'num_paginas'=> 292
                  ),
                  array(
                    'titulo'=>'Folhas Caídas',
                    'autor'=>'João Batista da Silva Leitão de Almeida Garrett',
                    'localizacao'=>'ua',
                    'edicao'=> 1,
                    'ano_publicacao'=> 1.963,
                    'editora'=>'Universidade da Amazônia - UNAMA',
                    'num_paginas'=> 786
                  ),
                  array(
                    'titulo'=>'Folhas Caídas',
                    'autor'=>'João Batista da Silva Leitão de Almeida Garrett',
                    'localizacao'=>'bv',
                    'edicao'=> 9,
                    'ano_publicacao'=> 2.008,
                    'editora'=>'Biblioteca Virtual do Estudante Brasileiro / USP',
                    'num_paginas'=> 394
                  ),
                  array(
                    'titulo'=>'Fragmento',
                    'autor'=>'Casimiro de Abreu',
                    'localizacao'=>'wk',
                    'edicao'=> 8,
                    'ano_publicacao'=> 1.96,
                    'editora'=>'Wikipédia, a enciclopédia livre',
                    'num_paginas'=> 738
                  ),
                  array(
                    'titulo'=>'Fragmentos de meu tempo',
                    'autor'=>'Geraldo Pereira',
                    'localizacao'=>'ea',
                    'edicao'=> 1,
                    'ano_publicacao'=> 2.014,
                    'editora'=>'Edição do Autor',
                    'num_paginas'=> 375
                  ),
                  array(
                    'titulo'=>'Francisca',
                    'autor'=>'Machado de Assis',
                    'localizacao'=>'fs',
                    'edicao'=> 10,
                    'ano_publicacao'=> 1.968,
                    'editora'=>'Universidade Federal de Santa Catarina - UFSC',
                    'num_paginas'=> 780
                  ),
                  array(
                    'titulo'=>'Frei Simão',
                    'autor'=>'Machado de Assis',
                    'localizacao'=>'ua',
                    'edicao'=> 4,
                    'ano_publicacao'=> 1.964,
                    'editora'=>'Universidade da Amazônia - UNAMA',
                    'num_paginas'=> 519
                  ),
                  array(
                    'titulo'=>'Frei Simão',
                    'autor'=>'Machado de Assis',
                    'localizacao'=>'bv',
                    'edicao'=> 9,
                    'ano_publicacao'=> 1.994,
                    'editora'=>'Biblioteca Virtual do Estudante Brasileiro / USP',
                    'num_paginas'=> 786
                  ),
                  array(
                    'titulo'=>'Fremosas, a Deus grado',
                    'autor'=>'Bernardo de Bonaval',
                    'localizacao'=>'wk',
                    'edicao'=> 8,
                    'ano_publicacao'=> 1.983,
                    'editora'=>'Wikipédia, a enciclopédia livre',
                    'num_paginas'=> 33
                  ),
                  array(
                    'titulo'=>'Fritzmac',
                    'autor'=>'Artur Azevedo',
                    'localizacao'=>'bi',
                    'edicao'=> 9,
                    'ano_publicacao'=> 2.018,
                    'editora'=>'Biblioteca Virtual de Literatura',
                    'num_paginas'=> 433
                  ),
                  array(
                    'titulo'=>'Fulano',
                    'autor'=>'Machado de Assis',
                    'localizacao'=>'bv',
                    'edicao'=> 1,
                    'ano_publicacao'=> 1.993,
                    'editora'=>'Biblioteca Virtual do Estudante Brasileiro / USP',
                    'num_paginas'=> 401
                  ),
                  array(
                    'titulo'=>'Galeria Póstuma',
                    'autor'=>'Machado de Assis',
                    'localizacao'=>'bv',
                    'edicao'=> 4,
                    'ano_publicacao'=> 1.988,
                    'editora'=>'Biblioteca Virtual do Estudante Brasileiro / USP',
                    'num_paginas'=> 574
                  ),
                  array(
                    'titulo'=>'Gardenia',
                    'autor'=>'Salomão Rovedo',
                    'localizacao'=>'ea',
                    'edicao'=> 5,
                    'ano_publicacao'=> 1.96,
                    'editora'=>'Edição do Autor',
                    'num_paginas'=> 690
                  ),
                  array(
                    'titulo'=>'Gentil',
                    'autor'=>'Auta de Sousa',
                    'localizacao'=>'wk',
                    'edicao'=> 10,
                    'ano_publicacao'=> 1.996,
                    'editora'=>'Wikipédia, a enciclopédia livre',
                    'num_paginas'=> 247
                  ),
                  array(
                    'titulo'=>'Girândola de Amores',
                    'autor'=>'Aluísio Azevedo',
                    'localizacao'=>'ua',
                    'edicao'=> 6,
                    'ano_publicacao'=> 2,
                    'editora'=>'Universidade da Amazônia - UNAMA',
                    'num_paginas'=> 193
                  ),
                  array(
                    'titulo'=>'Girândola de amores',
                    'autor'=>'Aluísio Azevedo',
                    'localizacao'=>'bn',
                    'edicao'=> 2,
                    'ano_publicacao'=> 1.979,
                    'editora'=>'Fundação Biblioteca Nacional',
                    'num_paginas'=> 175
                  ),
                  array(
                    'titulo'=>'Goivos',
                    'autor'=>'Auta de Sousa',
                    'localizacao'=>'wk',
                    'edicao'=> 2,
                    'ano_publicacao'=> 1.95,
                    'editora'=>'Wikipédia, a enciclopédia livre',
                    'num_paginas'=> 229
                  ),
                  array(
                    'titulo'=>'Goivos e Camélias',
                    'autor'=>'Machado de Assis',
                    'localizacao'=>'bv',
                    'edicao'=> 5,
                    'ano_publicacao'=> 1.986,
                    'editora'=>'Biblioteca Virtual do Estudante Brasileiro / USP',
                    'num_paginas'=> 457
                  ),
                  array(
                    'titulo'=>'Goyaz',
                    'autor'=>'Visconde de Taunay',
                    'localizacao'=>'cb',
                    'edicao'=> 5,
                    'ano_publicacao'=> 1.975,
                    'editora'=>'Instituto Centro-Brasileiro de Cultura',
                    'num_paginas'=> 596
                  ),
                  array(
                    'titulo'=>'Gozo os campos sem reparar para eles',
                    'autor'=>'Alberto Caeiro',
                    'localizacao'=>'wk',
                    'edicao'=> 5,
                    'ano_publicacao'=> 1.965,
                    'editora'=>'Wikipédia, a enciclopédia livre',
                    'num_paginas'=> 245
                  ),
                  array(
                    'titulo'=>'Graded Lessons in English - An Elementary English Grammar Consisting of One Hundred Practical Lessons, Carefully Graded and Adapted to the Class-Room',
                    'autor'=>'Alonzo Reed',
                    'localizacao'=>'gu',
                    'edicao'=> 1,
                    'ano_publicacao'=> 1.97,
                    'editora'=>'Projeto Gutenberg',
                    'num_paginas'=> 557
                  ),
                  array(
                    'titulo'=>'Leonor de Mendonça',
                    'autor'=>'Antônio Gonçalves Dias',
                    'localizacao'=>'ua',
                    'edicao'=> 7,
                    'ano_publicacao'=> 1.963,
                    'editora'=>'Universidade da Amazônia - UNAMA',
                    'num_paginas'=> 587
                  ),
                  array(
                    'titulo'=>'Leonor de Mendonça',
                    'autor'=>'Antônio Gonçalves Dias',
                    'localizacao'=>'bn',
                    'edicao'=> 3,
                    'ano_publicacao'=> 1.964,
                    'editora'=>'Fundação Biblioteca Nacional',
                    'num_paginas'=> 292
                  ),
                  array(
                    'titulo'=>'Ler também é uma paixão',
                    'autor'=>'Armando Nogueira',
                    'localizacao'=>'ue',
                    'edicao'=> 3,
                    'ano_publicacao'=> 2,
                    'editora'=>'Unesco',
                    'num_paginas'=> 621
                  ),
                  array(
                    'titulo'=>'Leram-me hoje S. Francisco de Assis',
                    'autor'=>'Alberto Caeiro',
                    'localizacao'=>'wk',
                    'edicao'=> 3,
                    'ano_publicacao'=> 2.001,
                    'editora'=>'Wikipédia, a enciclopédia livre',
                    'num_paginas'=> 567
                  ),
                  array(
                    'titulo'=>'Letra vencida',
                    'autor'=>'Machado de Assis',
                    'localizacao'=>'fs',
                    'edicao'=> 2,
                    'ano_publicacao'=> 1.982,
                    'editora'=>'Universidade Federal de Santa Catarina - UFSC',
                    'num_paginas'=> 14
                  ),
                  array(
                    'titulo'=>'Letras livres: disseminando cultura!',
                    'autor'=>'Pedro Anízio Gomes',
                    'localizacao'=>'ea',
                    'edicao'=> 7,
                    'ano_publicacao'=> 2.003,
                    'editora'=>'Edição do Autor',
                    'num_paginas'=> 759
                  ),
                  array(
                    'titulo'=>'Levantou-s a velida',
                    'autor'=>'Dom Dinis',
                    'localizacao'=>'wk',
                    'edicao'=> 5,
                    'ano_publicacao'=> 1.963,
                    'editora'=>'Wikipédia, a enciclopédia livre',
                    'num_paginas'=> 547
                  ),
                  array(
                    'titulo'=>'Leve, leve, muito leve',
                    'autor'=>'Alberto Caeiro',
                    'localizacao'=>'wk',
                    'edicao'=> 5,
                    'ano_publicacao'=> 2.015,
                    'editora'=>'Wikipédia, a enciclopédia livre',
                    'num_paginas'=> 77
                  ),
                  array(
                    'titulo'=>'Li hoje quase duas páginas',
                    'autor'=>'Alberto Caeiro',
                    'localizacao'=>'wk',
                    'edicao'=> 4,
                    'ano_publicacao'=> 1.968,
                    'editora'=>'Wikipédia, a enciclopédia livre',
                    'num_paginas'=> 760
                  ),
                  array(
                    'titulo'=>'Linha Reta e Linha Curva',
                    'autor'=>'Machado de Assis',
                    'localizacao'=>'bv',
                    'edicao'=> 8,
                    'ano_publicacao'=> 2.001,
                    'editora'=>'Biblioteca Virtual do Estudante Brasileiro / USP',
                    'num_paginas'=> 336
                  ),
                  array(
                    'titulo'=>'Linha Reta e Linha Curva',
                    'autor'=>'Machado de Assis',
                    'localizacao'=>'ua',
                    'edicao'=> 9,
                    'ano_publicacao'=> 1.999,
                    'editora'=>'Universidade da Amazônia - UNAMA',
                    'num_paginas'=> 651
                  ),
                  array(
                    'titulo'=>'Lira dos Vinte Anos',
                    'autor'=>'Manuel Antônio Álvares de Azevedo',
                    'localizacao'=>'ua',
                    'edicao'=> 4,
                    'ano_publicacao'=> 1.997,
                    'editora'=>'Universidade da Amazônia - UNAMA',
                    'num_paginas'=> 536
                  ),
                  array(
                    'titulo'=>'Lira dos Vinte Anos',
                    'autor'=>'Manuel Antônio Álvares de Azevedo',
                    'localizacao'=>'bv',
                    'edicao'=> 9,
                    'ano_publicacao'=> 2.012,
                    'editora'=>'Biblioteca Virtual do Estudante Brasileiro / USP',
                    'num_paginas'=> 641
                  ),
                  array(
                    'titulo'=>'Literatura Brasileira',
                    'autor'=>'Ministério das Relações Exteriores',
                    'localizacao'=>'mre',
                    'edicao'=> 6,
                    'ano_publicacao'=> 2.01,
                    'editora'=>'Ministério das Relações Exteriores',
                    'num_paginas'=> 711
                  ),
                  array(
                    'titulo'=>'Literatura para todos: conversa com educadores',
                    'autor'=>'Ligia Cademartori',
                    'localizacao'=>'me',
                    'edicao'=> 2,
                    'ano_publicacao'=> 1.973,
                    'editora'=>'Ministério da Educação',
                    'num_paginas'=> 110
                  ),
                  array(
                    'titulo'=>'Livro das donas e donzelas',
                    'autor'=>'Júlia Lopes de Almeida',
                    'localizacao'=>'bi',
                    'edicao'=> 8,
                    'ano_publicacao'=> 1.976,
                    'editora'=>'Biblioteca Virtual de Literatura',
                    'num_paginas'=> 712
                  ),
                  array(
                    'titulo'=>'Livro de Isaac de Nínive',
                    'autor'=>'Isaac de Nínive',
                    'localizacao'=>'bn',
                    'edicao'=> 1,
                    'ano_publicacao'=> 1.986,
                    'editora'=>'Fundação Biblioteca Nacional',
                    'num_paginas'=> 252
                  ),
                  array(
                    'titulo'=>'Livro de Mágoas',
                    'autor'=>'Florbela Espanca',
                    'localizacao'=>'bv',
                    'edicao'=> 7,
                    'ano_publicacao'=> 2.016,
                    'editora'=>'Biblioteca Virtual do Estudante Brasileiro / USP',
                    'num_paginas'=> 154
                  ),
                  array(
                    'titulo'=>'Livro de Sóror Saudade',
                    'autor'=>'Florbela Espanca',
                    'localizacao'=>'bi',
                    'edicao'=> 8,
                    'ano_publicacao'=> 2.005,
                    'editora'=>'Biblioteca Virtual de Literatura',
                    'num_paginas'=> 141
                  ),
                  array(
                    'titulo'=>'Livro do Desassossego',
                    'autor'=>'Fernando Pessoa',
                    'localizacao'=>'vo',
                    'edicao'=> 4,
                    'ano_publicacao'=> 1.984,
                    'editora'=>'Colaboração Voluntária',
                    'num_paginas'=> 696
                  ),
                  array(
                    'titulo'=>'Livro póstumo',
                    'autor'=>'José Ezequiel Freire',
                    'localizacao'=>'ub',
                    'edicao'=> 8,
                    'ano_publicacao'=> 1.956,
                    'editora'=>'Universidade de Brasília',
                    'num_paginas'=> 577
                  ),
                  array(
                    'titulo'=>'Livros das Donas e Donzelas',
                    'autor'=>'Júlia Lopes de Almeida',
                    'localizacao'=>'ua',
                    'edicao'=> 9,
                    'ano_publicacao'=> 2.007,
                    'editora'=>'Universidade da Amazônia - UNAMA',
                    'num_paginas'=> 150
                  ),
                  array(
                    'titulo'=>'Livrovivo 2000 - 2002',
                    'autor'=>'Ricardo de Lima Barreto',
                    'localizacao'=>'ea',
                    'edicao'=> 4,
                    'ano_publicacao'=> 2.013,
                    'editora'=>'Edição do Autor',
                    'num_paginas'=> 117
                  ),
                  array(
                    'titulo'=>'Lição de Botânica',
                    'autor'=>'Machado de Assis',
                    'localizacao'=>'bn',
                    'edicao'=> 7,
                    'ano_publicacao'=> 1.967,
                    'editora'=>'Fundação Biblioteca Nacional',
                    'num_paginas'=> 742
                  ),
                  array(
                    'titulo'=>'Loli',
                    'autor'=>'Auta de Sousa',
                    'localizacao'=>'wk',
                    'edicao'=> 2,
                    'ano_publicacao'=> 1.993,
                    'editora'=>'Wikipédia, a enciclopédia livre',
                    'num_paginas'=> 51
                  ),
                  array(
                    'titulo'=>'Longe dos Olhos',
                    'autor'=>'Machado de Assis',
                    'localizacao'=>'fs',
                    'edicao'=> 2,
                    'ano_publicacao'=> 2.02,
                    'editora'=>'Universidade Federal de Santa Catarina - UFSC',
                    'num_paginas'=> 539
                  ),
                  array(
                    'titulo'=>'Loucura divina',
                    'autor'=>'Antônio Frederico de Castro Alves',
                    'localizacao'=>'wk',
                    'edicao'=> 9,
                    'ano_publicacao'=> 2.004,
                    'editora'=>'Wikipédia, a enciclopédia livre',
                    'num_paginas'=> 667
                  ),
                  array(
                    'titulo'=>'Lourenço (crônica Pernambucana)',
                    'autor'=>'Franklin Távora',
                    'localizacao'=>'ub',
                    'edicao'=> 10,
                    'ano_publicacao'=> 2.012,
                    'editora'=>'Universidade de Brasília',
                    'num_paginas'=> 696
                  ),
                  array(
                    'titulo'=>'Lucas',
                    'autor'=>'Antônio Frederico de Castro Alves',
                    'localizacao'=>'wk',
                    'edicao'=> 9,
                    'ano_publicacao'=> 1.995,
                    'editora'=>'Wikipédia, a enciclopédia livre',
                    'num_paginas'=> 78
                  ),
                  array(
                    'titulo'=>'Lucrécias',
                    'autor'=>'Bruno Seabra',
                    'localizacao'=>'bn',
                    'edicao'=> 3,
                    'ano_publicacao'=> 1.954,
                    'editora'=>'Fundação Biblioteca Nacional',
                    'num_paginas'=> 327
                  ),
                  array(
                    'titulo'=>'Lucíola',
                    'autor'=>'José de Alencar',
                    'localizacao'=>'bn',
                    'edicao'=> 8,
                    'ano_publicacao'=> 1.953,
                    'editora'=>'Fundação Biblioteca Nacional',
                    'num_paginas'=> 634
                  ),
                  array(
                    'titulo'=>'Lucíola',
                    'autor'=>'José de Alencar',
                    'localizacao'=>'bv',
                    'edicao'=> 10,
                    'ano_publicacao'=> 1.986,
                    'editora'=>'Biblioteca Virtual do Estudante Brasileiro / USP',
                    'num_paginas'=> 231
                  ),
                  array(
                    'titulo'=>'Luxo e Vaidade',
                    'autor'=>'Joaquim Manuel de Macedo',
                    'localizacao'=>'ua',
                    'edicao'=> 1,
                    'ano_publicacao'=> 2.01,
                    'editora'=>'Universidade da Amazônia - UNAMA',
                    'num_paginas'=> 781
                  ),
                  array(
                    'titulo'=>'Luxo e Vaidade',
                    'autor'=>'Joaquim Manuel de Macedo',
                    'localizacao'=>'bv',
                    'edicao'=> 1,
                    'ano_publicacao'=> 2.01,
                    'editora'=>'Biblioteca Virtual do Estudante Brasileiro / USP',
                    'num_paginas'=> 420
                  ),
                  array(
                    'titulo'=>'Luz e Sombra',
                    'autor'=>'Auta de Sousa',
                    'localizacao'=>'wk',
                    'edicao'=> 9,
                    'ano_publicacao'=> 1.965,
                    'editora'=>'Wikipédia, a enciclopédia livre',
                    'num_paginas'=> 568
                  ),
                  array(
                    'titulo'=>'Luzia-Homem',
                    'autor'=>'Domingos Olímpio Braga Cavalcanti',
                    'localizacao'=>'ua',
                    'edicao'=> 8,
                    'ano_publicacao'=> 2,
                    'editora'=>'Universidade da Amazônia - UNAMA',
                    'num_paginas'=> 60
                  ),
                  array(
                    'titulo'=>'Luzia-Homem',
                    'autor'=>'Domingos Olímpio Braga Cavalcanti',
                    'localizacao'=>'bv',
                    'edicao'=> 6,
                    'ano_publicacao'=> 1.969,
                    'editora'=>'Biblioteca Virtual do Estudante Brasileiro / USP',
                    'num_paginas'=> 410
                  ),
                  array(
                    'titulo'=>'Luzia-Homem',
                    'autor'=>'Domingos Olímpio Braga Cavalcanti',
                    'localizacao'=>'bn',
                    'edicao'=> 6,
                    'ano_publicacao'=> 2.013,
                    'editora'=>'Fundação Biblioteca Nacional',
                    'num_paginas'=> 493
                  ),
                  array(
                    'titulo'=>'Luís Soares',
                    'autor'=>'Machado de Assis',
                    'localizacao'=>'bv',
                    'edicao'=> 10,
                    'ano_publicacao'=> 2.005,
                    'editora'=>'Biblioteca Virtual do Estudante Brasileiro / USP',
                    'num_paginas'=> 335
                  ),
                  array(
                    'titulo'=>'Luís Soares',
                    'autor'=>'Machado de Assis',
                    'localizacao'=>'ua',
                    'edicao'=> 2,
                    'ano_publicacao'=> 1.992,
                    'editora'=>'Universidade da Amazônia - UNAMA',
                    'num_paginas'=> 288
                  ),
                  array(
                    'titulo'=>'Lydia',
                    'autor'=>'Auta de Sousa',
                    'localizacao'=>'wk',
                    'edicao'=> 3,
                    'ano_publicacao'=> 2,
                    'editora'=>'Wikipédia, a enciclopédia livre',
                    'num_paginas'=> 229
                  ),
                  array(
                    'titulo'=>'Lágrimas',
                    'autor'=>'Auta de Sousa',
                    'localizacao'=>'wk',
                    'edicao'=> 4,
                    'ano_publicacao'=> 2.011,
                    'editora'=>'Wikipédia, a enciclopédia livre',
                    'num_paginas'=> 787
                  ),
                  array(
                    'titulo'=>'Lágrimas de Xerxes',
                    'autor'=>'Machado de Assis',
                    'localizacao'=>'bv',
                    'edicao'=> 3,
                    'ano_publicacao'=> 2.011,
                    'editora'=>'Biblioteca Virtual do Estudante Brasileiro / USP',
                    'num_paginas'=> 692
                  ),
                  array(
                    'titulo'=>'Léo, o pardo. (Coleção literatura para todos; v. 6)',
                    'autor'=>'Rinaldo Santos Teixeira',
                    'localizacao'=>'me',
                    'edicao'=> 6,
                    'ano_publicacao'=> 2.012,
                    'editora'=>'Ministério da Educação',
                    'num_paginas'=> 559
                  ),
                  array(
                    'titulo'=>'Ma madre velida',
                    'autor'=>'Dom Dinis',
                    'localizacao'=>'wk',
                    'edicao'=> 7,
                    'ano_publicacao'=> 1.997,
                    'editora'=>'Wikipédia, a enciclopédia livre',
                    'num_paginas'=> 296
                  ),
                  array(
                    'titulo'=>'Macbeth',
                    'autor'=>'William Shakespeare',
                    'localizacao'=>'cv',
                    'edicao'=> 1,
                    'ano_publicacao'=> 1.979,
                    'editora'=>'CultVox',
                    'num_paginas'=> 84
                  ),
                  array(
                    'titulo'=>'Macário',
                    'autor'=>'Manuel Antônio Álvares de Azevedo',
                    'localizacao'=>'bn',
                    'edicao'=> 1,
                    'ano_publicacao'=> 1.998,
                    'editora'=>'Fundação Biblioteca Nacional',
                    'num_paginas'=> 397
                  ),
                  array(
                    'titulo'=>'Macário',
                    'autor'=>'Manuel Antônio Álvares de Azevedo',
                    'localizacao'=>'ua',
                    'edicao'=> 5,
                    'ano_publicacao'=> 1.989,
                    'editora'=>'Universidade da Amazônia - UNAMA',
                    'num_paginas'=> 464
                  ),
                  array(
                    'titulo'=>'Macário',
                    'autor'=>'Manuel Antônio Álvares de Azevedo',
                    'localizacao'=>'bv',
                    'edicao'=> 2,
                    'ano_publicacao'=> 2.019,
                    'editora'=>'Biblioteca Virtual do Estudante Brasileiro / USP',
                    'num_paginas'=> 108
                  ),
                  array(
                    'titulo'=>'Madalena. (Coleção literatura para todos; v.1)',
                    'autor'=>'Cristiane Dantas',
                    'localizacao'=>'me',
                    'edicao'=> 6,
                    'ano_publicacao'=> 1.99,
                    'editora'=>'Ministério da Educação',
                    'num_paginas'=> 155
                  ),
                  array(
                    'titulo'=>'Mensagem',
                    'autor'=>'Fernando Pessoa',
                    'localizacao'=>'pe',
                    'edicao'=> 10,
                    'ano_publicacao'=> 1.99,
                    'editora'=>'Pessoa Revisitado',
                    'num_paginas'=> 436
                  ),
                  array(
                    'titulo'=>'Mesura sería, senhor',
                    'autor'=>'Dom Dinis',
                    'localizacao'=>'wk',
                    'edicao'=> 1,
                    'ano_publicacao'=> 2.009,
                    'editora'=>'Wikipédia, a enciclopédia livre',
                    'num_paginas'=> 632
                  ),
                  array(
                    'titulo'=>'Metafísica das Rosas',
                    'autor'=>'Machado de Assis',
                    'localizacao'=>'fs',
                    'edicao'=> 7,
                    'ano_publicacao'=> 1.995,
                    'editora'=>'Universidade Federal de Santa Catarina - UFSC',
                    'num_paginas'=> 462
                  ),
                  array(
                    'titulo'=>'Meto-me para dentro, e fecho a janela',
                    'autor'=>'Alberto Caeiro',
                    'localizacao'=>'wk',
                    'edicao'=> 5,
                    'ano_publicacao'=> 2.02,
                    'editora'=>'Wikipédia, a enciclopédia livre',
                    'num_paginas'=> 145
                  ),
                  array(
                    'titulo'=>'Meu Pai',
                    'autor'=>'Auta de Sousa',
                    'localizacao'=>'wk',
                    'edicao'=> 7,
                    'ano_publicacao'=> 1.993,
                    'editora'=>'Wikipédia, a enciclopédia livre',
                    'num_paginas'=> 573
                  ),
                  array(
                    'titulo'=>'Meu amig, u eu sejo',
                    'autor'=>'Dom Dinis',
                    'localizacao'=>'wk',
                    'edicao'=> 7,
                    'ano_publicacao'=> 1.979,
                    'editora'=>'Wikipédia, a enciclopédia livre',
                    'num_paginas'=> 415
                  ),
                  array(
                    'titulo'=>'Meu amigo vem hoje aqui',
                    'autor'=>'Dom Dinis',
                    'localizacao'=>'wk',
                    'edicao'=> 4,
                    'ano_publicacao'=> 2,
                    'editora'=>'Wikipédia, a enciclopédia livre',
                    'num_paginas'=> 88
                  ),
                  array(
                    'titulo'=>'Meu amigo, nom posseu guarecer',
                    'autor'=>'Dom Dinis',
                    'localizacao'=>'wk',
                    'edicao'=> 5,
                    'ano_publicacao'=> 2.007,
                    'editora'=>'Wikipédia, a enciclopédia livre',
                    'num_paginas'=> 158
                  ),
                  array(
                    'titulo'=>'Meus oito anos',
                    'autor'=>'Casimiro de Abreu',
                    'localizacao'=>'wk',
                    'edicao'=> 10,
                    'ano_publicacao'=> 2.021,
                    'editora'=>'Wikipédia, a enciclopédia livre',
                    'num_paginas'=> 680
                  ),
                  array(
                    'titulo'=>'Micrômegas',
                    'autor'=>'François-Marie Arouet (Voltaire)',
                    'localizacao'=>'cv',
                    'edicao'=> 4,
                    'ano_publicacao'=> 2.018,
                    'editora'=>'CultVox',
                    'num_paginas'=> 252
                  ),
                  array(
                    'titulo'=>'Migalhas de história portuguesa',
                    'autor'=>'M. Pinheiro Chagas',
                    'localizacao'=>'ub',
                    'edicao'=> 2,
                    'ano_publicacao'=> 1.961,
                    'editora'=>'Universidade de Brasília',
                    'num_paginas'=> 601
                  ),
                  array(
                    'titulo'=>'Milagre do Natal',
                    'autor'=>'Afonso Henriques de Lima Barreto',
                    'localizacao'=>'ua',
                    'edicao'=> 6,
                    'ano_publicacao'=> 1.982,
                    'editora'=>'Universidade da Amazônia - UNAMA',
                    'num_paginas'=> 410
                  ),
                  array(
                    'titulo'=>'Miloca',
                    'autor'=>'Machado de Assis',
                    'localizacao'=>'fs',
                    'edicao'=> 7,
                    'ano_publicacao'=> 1.962,
                    'editora'=>'Universidade Federal de Santa Catarina - UFSC',
                    'num_paginas'=> 550
                  ),
                  array(
                    'titulo'=>'Mimo de Anos',
                    'autor'=>'Auta de Sousa',
                    'localizacao'=>'wk',
                    'edicao'=> 8,
                    'ano_publicacao'=> 2.019,
                    'editora'=>'Wikipédia, a enciclopédia livre',
                    'num_paginas'=> 588
                  ),
                  array(
                    'titulo'=>'Minhalma é triste',
                    'autor'=>'Casimiro de Abreu',
                    'localizacao'=>'wk',
                    'edicao'=> 7,
                    'ano_publicacao'=> 1.974,
                    'editora'=>'Wikipédia, a enciclopédia livre',
                    'num_paginas'=> 41
                  ),
                  array(
                    'titulo'=>'Minha formação',
                    'autor'=>'Joaquim Nabuco',
                    'localizacao'=>'ua',
                    'edicao'=> 9,
                    'ano_publicacao'=> 1.976,
                    'editora'=>'Universidade da Amazônia - UNAMA',
                    'num_paginas'=> 508
                  ),
                  array(
                    'titulo'=>'Minha formação',
                    'autor'=>'Joaquim Nabuco',
                    'localizacao'=>'sf',
                    'edicao'=> 5,
                    'ano_publicacao'=> 1.974,
                    'editora'=>'Senado Federal',
                    'num_paginas'=> 729
                  ),
                  array(
                    'titulo'=>'Minha formação',
                    'autor'=>'Joaquim Nabuco',
                    'localizacao'=>'bn',
                    'edicao'=> 2,
                    'ano_publicacao'=> 2.02,
                    'editora'=>'Fundação Biblioteca Nacional',
                    'num_paginas'=> 479
                  ),
                  array(
                    'titulo'=>'Minha mãe',
                    'autor'=>'Casimiro de Abreu',
                    'localizacao'=>'wk',
                    'edicao'=> 9,
                    'ano_publicacao'=> 1.997,
                    'editora'=>'Wikipédia, a enciclopédia livre',
                    'num_paginas'=> 664
                  ),
                  array(
                    'titulo'=>'Minh’Alma e o Verso',
                    'autor'=>'Auta de Sousa',
                    'localizacao'=>'wk',
                    'edicao'=> 10,
                    'ano_publicacao'=> 2.019,
                    'editora'=>'Wikipédia, a enciclopédia livre',
                    'num_paginas'=> 481
                  ),
                  array(
                    'titulo'=>'Miss Dollar',
                    'autor'=>'Machado de Assis',
                    'localizacao'=>'bv',
                    'edicao'=> 6,
                    'ano_publicacao'=> 1.999,
                    'editora'=>'Biblioteca Virtual do Estudante Brasileiro / USP',
                    'num_paginas'=> 480
                  ),
                  array(
                    'titulo'=>'Miss Dollar',
                    'autor'=>'Machado de Assis',
                    'localizacao'=>'ua',
                    'edicao'=> 4,
                    'ano_publicacao'=> 1.963,
                    'editora'=>'Universidade da Amazônia - UNAMA',
                    'num_paginas'=> 432
                  ),
                  array(
                    'titulo'=>'Miss Kate',
                    'autor'=>'Cosme Velho',
                    'localizacao'=>'ub',
                    'edicao'=> 8,
                    'ano_publicacao'=> 1.974,
                    'editora'=>'Universidade de Brasília',
                    'num_paginas'=> 159
                  ),
                  array(
                    'titulo'=>'Missa do Galo',
                    'autor'=>'Machado de Assis',
                    'localizacao'=>'bv',
                    'edicao'=> 1,
                    'ano_publicacao'=> 2.005,
                    'editora'=>'Biblioteca Virtual do Estudante Brasileiro / USP',
                    'num_paginas'=> 49
                  ),
                  array(
                    'titulo'=>'Missal',
                    'autor'=>'João da Cruz e Sousa',
                    'localizacao'=>'ua',
                    'edicao'=> 3,
                    'ano_publicacao'=> 1.959,
                    'editora'=>'Universidade da Amazônia - UNAMA',
                    'num_paginas'=> 340
                  ),
                  array(
                    'titulo'=>'Missal',
                    'autor'=>'João da Cruz e Sousa',
                    'localizacao'=>'bv',
                    'edicao'=> 10,
                    'ano_publicacao'=> 1.995,
                    'editora'=>'Biblioteca Virtual do Estudante Brasileiro / USP',
                    'num_paginas'=> 379
                  ),
                  array(
                    'titulo'=>'Mistério',
                    'autor'=>'Auta de Sousa',
                    'localizacao'=>'wk',
                    'edicao'=> 9,
                    'ano_publicacao'=> 1.955,
                    'editora'=>'Wikipédia, a enciclopédia livre',
                    'num_paginas'=> 729
                  ),
                  array(
                    'titulo'=>'Mocidade',
                    'autor'=>'Casimiro de Abreu',
                    'localizacao'=>'wk',
                    'edicao'=> 8,
                    'ano_publicacao'=> 2.014,
                    'editora'=>'Wikipédia, a enciclopédia livre',
                    'num_paginas'=> 152
                  ),
                  array(
                    'titulo'=>'Mocidade e Morte',
                    'autor'=>'Alexandre Herculano',
                    'localizacao'=>'bi',
                    'edicao'=> 8,
                    'ano_publicacao'=> 1.967,
                    'editora'=>'Biblioteca Virtual de Literatura',
                    'num_paginas'=> 778
                  ),
                  array(
                    'titulo'=>'Mocidade e morte',
                    'autor'=>'Antônio Frederico de Castro Alves',
                    'localizacao'=>'wk',
                    'edicao'=> 5,
                    'ano_publicacao'=> 1.955,
                    'editora'=>'Wikipédia, a enciclopédia livre',
                    'num_paginas'=> 516
                  ),
                  array(
                    'titulo'=>'Mocidade morta',
                    'autor'=>'Luis Gonzaga Duque Estrada',
                    'localizacao'=>'me',
                    'edicao'=> 10,
                    'ano_publicacao'=> 2.003,
                    'editora'=>'Ministério da Educação',
                    'num_paginas'=> 28
                  ),
                  array(
                    'titulo'=>'Momento literário',
                    'autor'=>'João do Rio',
                    'localizacao'=>'bn',
                    'edicao'=> 1,
                    'ano_publicacao'=> 2.002,
                    'editora'=>'Fundação Biblioteca Nacional',
                    'num_paginas'=> 563
                  ),
                  array(
                    'titulo'=>'Morena',
                    'autor'=>'Auta de Sousa',
                    'localizacao'=>'wk',
                    'edicao'=> 8,
                    'ano_publicacao'=> 1.966,
                    'editora'=>'Wikipédia, a enciclopédia livre',
                    'num_paginas'=> 748
                  ),
                  array(
                    'titulo'=>'Moreninha',
                    'autor'=>'Casimiro de Abreu',
                    'localizacao'=>'wk',
                    'edicao'=> 2,
                    'ano_publicacao'=> 2.006,
                    'editora'=>'Wikipédia, a enciclopédia livre',
                    'num_paginas'=> 222
                  ),
                  array(
                    'titulo'=>'Morta',
                    'autor'=>'Auta de Sousa',
                    'localizacao'=>'wk',
                    'edicao'=> 9,
                    'ano_publicacao'=> 2.009,
                    'editora'=>'Wikipédia, a enciclopédia livre',
                    'num_paginas'=> 137
                  ),
                  array(
                    'titulo'=>'Morta que Mata',
                    'autor'=>'Artur Azevedo',
                    'localizacao'=>'bi',
                    'edicao'=> 1,
                    'ano_publicacao'=> 1.956,
                    'editora'=>'Biblioteca Virtual de Literatura',
                    'num_paginas'=> 132
                  ),
                  array(
                    'titulo'=>'Mortalhas',
                    'autor'=>'Emílio de Meneses',
                    'localizacao'=>'fs',
                    'edicao'=> 4,
                    'ano_publicacao'=> 1.99,
                    'editora'=>'Universidade Federal de Santa Catarina - UFSC',
                    'num_paginas'=> 516
                  ),
                  array(
                    'titulo'=>'Motta Coqueiro ou A pena de morte',
                    'autor'=>'José do Patrocínio',
                    'localizacao'=>'bi',
                    'edicao'=> 4,
                    'ano_publicacao'=> 1.956,
                    'editora'=>'Biblioteca Virtual de Literatura',
                    'num_paginas'=> 310
                  ),
                  array(
                    'titulo'=>'Mudo e quedo',
                    'autor'=>'Antônio Frederico de Castro Alves',
                    'localizacao'=>'wk',
                    'edicao'=> 6,
                    'ano_publicacao'=> 1.977,
                    'editora'=>'Wikipédia, a enciclopédia livre',
                    'num_paginas'=> 101
                  ),
                  array(
                    'titulo'=>'Muitos anos depois',
                    'autor'=>'Machado de Assis',
                    'localizacao'=>'fs',
                    'edicao'=> 5,
                    'ano_publicacao'=> 1.999,
                    'editora'=>'Universidade Federal de Santa Catarina - UFSC',
                    'num_paginas'=> 615
                  ),
                  array(
                    'titulo'=>'Mulheres: história e direitos',
                    'autor'=>'Jeferson Francisco Selbach',
                    'localizacao'=>'ea',
                    'edicao'=> 5,
                    'ano_publicacao'=> 2.018,
                    'editora'=>'Edição do Autor',
                    'num_paginas'=> 18
                  ),
                  array(
                    'titulo'=>'Munúsciulo Métrico',
                    'autor'=>'Cláudio Manuel da Costa (Glauceste Satúrnio)',
                    'localizacao'=>'fs',
                    'edicao'=> 1,
                    'ano_publicacao'=> 2.007,
                    'editora'=>'Universidade Federal de Santa Catarina - UFSC',
                    'num_paginas'=> 296
                  ),
                  array(
                    'titulo'=>'Murmúrios da tarde',
                    'autor'=>'Antônio Frederico de Castro Alves',
                    'localizacao'=>'wk',
                    'edicao'=> 10,
                    'ano_publicacao'=> 1.991,
                    'editora'=>'Wikipédia, a enciclopédia livre',
                    'num_paginas'=> 630
                  ),
                  array(
                    'titulo'=>'Máximas, Pensamentos e Reflexões',
                    'autor'=>'Marquês de Maricá',
                    'localizacao'=>'bn',
                    'edicao'=> 8,
                    'ano_publicacao'=> 1.983,
                    'editora'=>'Fundação Biblioteca Nacional',
                    'num_paginas'=> 259
                  ),
                  array(
                    'titulo'=>'Mãe',
                    'autor'=>'José de Alencar',
                    'localizacao'=>'bi',
                    'edicao'=> 10,
                    'ano_publicacao'=> 1.964,
                    'editora'=>'Biblioteca Virtual de Literatura',
                    'num_paginas'=> 335
                  ),
                  array(
                    'titulo'=>'Mãe penitente',
                    'autor'=>'Antônio Frederico de Castro Alves',
                    'localizacao'=>'wk',
                    'edicao'=> 9,
                    'ano_publicacao'=> 2.021,
                    'editora'=>'Wikipédia, a enciclopédia livre',
                    'num_paginas'=> 104
                  ),
                  array(
                    'titulo'=>'Médico é Remédio',
                    'autor'=>'Machado de Assis',
                    'localizacao'=>'ua',
                    'edicao'=> 5,
                    'ano_publicacao'=> 1.99,
                    'editora'=>'Universidade da Amazônia - UNAMA',
                    'num_paginas'=> 630
                  ),
                  array(
                    'titulo'=>'Médico é remédio',
                    'autor'=>'Machado de Assis',
                    'localizacao'=>'fs',
                    'edicao'=> 5,
                    'ano_publicacao'=> 1.981,
                    'editora'=>'Universidade Federal de Santa Catarina - UFSC',
                    'num_paginas'=> 502
                  ),
                  array(
                    'titulo'=>'Místico',
                    'autor'=>'Auta de Sousa',
                    'localizacao'=>'wk',
                    'edicao'=> 9,
                    'ano_publicacao'=> 1.982,
                    'editora'=>'Wikipédia, a enciclopédia livre',
                    'num_paginas'=> 479
                  ),
                  array(
                    'titulo'=>'Na Academia Brasileira de Letras',
                    'autor'=>'Machado de Assis',
                    'localizacao'=>'bi',
                    'edicao'=> 4,
                    'ano_publicacao'=> 1.978,
                    'editora'=>'Biblioteca Virtual de Literatura',
                    'num_paginas'=> 96
                  )
            )
        );
    }
}
