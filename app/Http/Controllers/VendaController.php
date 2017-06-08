<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Venda;
use App\Venda_has_Produto;
use App\Produto;

class VendaController extends Controller {

    public function index()
    {
        return view('vendas.index');
    }

}
