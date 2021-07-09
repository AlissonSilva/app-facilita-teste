<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     *
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id_usuario');
            $table->string('nome', 255);
            $table->string('telefone', 20);
            $table->string('email', 200);
            $table->integer('matricula')->nullable();
            $table->enum('status_usuario', ['ativo', 'inativo'])->default('ativo');
            $table->enum('tipo', ['professor', 'aluno'])->default('aluno');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
