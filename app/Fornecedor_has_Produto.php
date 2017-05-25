<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fornecedor_has_Produto extends Model
{
    protected $table = "fornecedores_has_produtos";

    public function fornecedores()
    {
        $this->hasMany(Fornecedor::class);
    }

    public function produtos()
    {
        $this->hasMany(Produto::class);
    }
}
