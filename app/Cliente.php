<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = "clientes";

    protected $fillable = [
        'nome', 'descricao', 'cpf', 'valorDebitos', 'valorCreditos', 'telefone', 'senha',
    ];

    public function responsaveis()
    {
        $this->hasOne(Responsavel::class);
    }
}

