<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estoque extends Model
{
    protected $table = "estoques";

    protected $fillable = [
        'quantidade', 'valorCompra',
    ];

    public function produtos()
    {
        $this->hasMany(Produto::class);
    }
}
