<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->insert(
            array(
                array(
                    'nome' => 'Alisson da Silva Almeida Oliveira',
                    'email' => 'alisson_sao@hotmail.com',
                    'telefone' => '(62) 98563-5160',
                    'matricula' => random_int(9999, 99999999),
                    'status_usuario' => 'ativo',
                    'tipo' => 'aluno'
                ),
                array(
                    'nome' => 'Gabriel Almeida',
                    'email' => 'gabriel.almeida@gmail.com',
                    'telefone' => '(62) 9789-5555',
                    'matricula' => random_int(9999, 99999999),
                    'status_usuario' => 'ativo',
                    'tipo' => 'professor'
                ),
                array(
                    'nome' => 'Aline Jaqueline Lara Araújo',
                    'email' => 'alinejaquelinelaraaraujo_@ci.com.br',
                    'telefone' => '(62) 2926-8739',
                    'matricula' => random_int(9999, 99999999),
                    'status_usuario' => 'ativo',
                    'tipo' => 'professor'
                ),
                array(
                    'nome' => 'Joaquim Luís Silveira',
                    'email' => 'joaquim.luis@ci.com.br',
                    'telefone' => '(62) 2926-8739',
                    'matricula' => random_int(9999, 99999999),
                    'status_usuario' => 'ativo',
                    'tipo' => 'aluno'
                ),
                array(
                    'nome' => 'João Thomas Henrique Melo',
                    'email' => 'joaothomashenriquemelo..joaothomashenriquemelo@aclnet.com.br',
                    'telefone' => '(91) 99949-5139',
                    'matricula' => random_int(9999, 99999999),
                    'status_usuario' => 'ativo',
                    'tipo' => 'professor'
                ),
                array(
                    'nome' => 'Cauã Nathan Porto',
                    'email' => 'acauanathanporto_@quimicaindaiatuba.com.br',
                    'telefone' => '(67) 98922-4410',
                    'matricula' => random_int(9999, 99999999),
                    'status_usuario' => 'ativo',
                    'tipo' => 'professor'
                ),
                array(
                    'nome' => 'Aline Jaqueline Lara Araújo',
                    'email' => 'alinejaquelinelaraaraujo_@ci.com.br',
                    'telefone' => '(62) 2926-8739',
                    'matricula' => random_int(9999, 99999999),
                    'status_usuario' => 'ativo',
                    'tipo' => 'aluno'
                ),
                array(
                    'nome' => 'Eliane Carolina Pinto',
                    'email' => 'eelianecarolinapinto@uniube.br',
                    'telefone' => '(47) 2673-7027',
                    'matricula' => random_int(9999, 99999999),
                    'status_usuario' => 'ativo',
                    'tipo' => 'aluno'
                ),
                array(
                    'nome' => 'Mariana Sabrina Daniela Moraes',
                    'email' => 'marianasabrinadanielamoraes__marianasabrinadanielamoraes@ibest.com.br',
                    'telefone' => '(22) 2863-9149',
                    'matricula' => random_int(9999, 99999999),
                    'status_usuario' => 'ativo',
                    'tipo' => 'aluno'
                ),
                array(
                    'nome' => 'Eduardo Caleb Daniel da Luz',
                    'email' => 'eeduardocalebdanieldaluz@puenteimoveis.com.br',
                    'telefone' => '(83) 3640-1489',
                    'matricula' => random_int(9999, 99999999),
                    'status_usuario' => 'ativo',
                    'tipo' => 'aluno'
                ),
            )
        );
    }
}
