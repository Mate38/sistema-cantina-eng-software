<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Responsavel extends Model
{
    protected $table = "responsaveis";

    protected $fillable = [
        'nome', 'descricao', 'cpf', 'telefone', 'celular',
    ];

}
