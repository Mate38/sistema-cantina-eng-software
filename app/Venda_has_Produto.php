<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venda_has_Produto extends Model
{
    protected $table = "vendas_has_produtos";

    protected $fillable = [
        'quantidade', 'produtos_id',
    ];

    public function vendas()
    {
        $this->hasMany(Venda::class);
    }

    public function produtos()
    {
        $this->hasMany(Produto::class);
    }
}
