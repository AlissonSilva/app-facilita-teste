<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateLocacaosTable extends Migration
{
    /**
     * Run the migrations.
     * id_usuario,id_livro,status_locacao,data_hora_locacao,data_hora_devolucao,dias_atraso
     * @return void
     */
    public function up()
    {
        Schema::create('locacaos', function (Blueprint $table) {
            $table->increments('id_locacao');
            $table->integer('id_usuario')->unsigned();
            $table->integer('id_livro')->unsigned();
            $table->enum('status_locacao', ['entregue', 'em aberto', 'atrasado']);
            $table->dateTime('data_hora_locacao')->default(DB::raw('CURRENT_TIMESTAMP(0)'));
            $table->dateTime('data_hora_devolucao')->default(DB::raw('CURRENT_TIMESTAMP(0)'));
            $table->integer('dias_atraso')->default(0);
            $table->timestamps();
            $table->foreign('id_usuario')->references('id_usuario')->on('usuarios');
            $table->foreign('id_livro')->references('id_livro')->on('livros');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('locacaos');
    }
}
