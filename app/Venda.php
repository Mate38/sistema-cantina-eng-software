<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    protected $table = "vendas";

    protected $fillable = [
        'valorTotal', 'pago', 'clientes_id', 'users_id',
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
