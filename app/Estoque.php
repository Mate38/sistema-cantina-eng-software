<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estoque extends Model
{
    protected $table = "estoques";

    protected $fillable = [
        'quantidade', 'valorCompra', 'produtos_id', 'fornecedores_id',
    ];

    public function produtos()
    {
        $this->hasMany(Produto::class);
    }
}
