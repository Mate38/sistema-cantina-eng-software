<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    protected $table = "funcionarios";

    protected $fillable = [
        'nome', 'descricao', 'cpf', 'carteiraTrabalho',
    ];

}
