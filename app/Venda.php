<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    protected $table = "vendas";

    protected $fillable = [
        'quantidade',
    ];

    public function clientes()
    {
        $this->hasOne(Cliente::class);
    }

    public function users()
    {
        $this->hasOne(User::class);
    }
}
