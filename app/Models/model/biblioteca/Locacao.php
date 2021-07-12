<?php

namespace App\Models\model\biblioteca;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locacao extends Model
{
    protected $fillable = [
        'id_usuario','id_livro','status_locacao','data_hora_locacao','data_hora_devolucao', 'data_limite_devolucao','dias_atraso'
    ];


}
