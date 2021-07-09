<?php

namespace App\Models\model\biblioteca;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = [
        'nome', 'telefone', 'email', 'matricula', 'status_usuario', 'tipo'
    ];
}
