<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    protected $table = "fornecedores";

    protected $fillable = [
        'razaoSocial', 'nomeFantasia', 'cnpj', 'telefone',
    ];

}
