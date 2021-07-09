<?php

namespace App\Models\model\biblioteca;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    protected $fillable = [
        'titulo', 'autor', 'assunto', 'localizacao', 'edicao', 'ano_publicacao', 'editora','num_paginas'
    ];
}
