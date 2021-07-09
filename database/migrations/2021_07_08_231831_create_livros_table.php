<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLivrosTable extends Migration
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        Schema::create('livros', function (Blueprint $table) {
            $table->increments('id_livro');
            $table->string('titulo', 255);
            $table->string('autor', 150);
            $table->string('localizacao', 100);
            $table->integer('edicao');
            $table->integer('ano_publicacao');
            $table->string('editora', 255);
            $table->integer('num_paginas')->default(0);
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
        Schema::dropIfExists('livros');
    }
}
