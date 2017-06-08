<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Venda;
use App\Venda_has_Produto;
use App\Historico_Venda;
use App\Produto;

class VendaController extends Controller {

    public function store(Request $request)
    {     
        $vendas_has_produtos = Venda_has_Produto::all();
        $historico_vendas = new Historico_Venda;
        foreach($vendas_has_produtos as $venda_has_produto){
            $historico_vendas->quantidade = $venda_has_produto->quantidade;
            $historico_vendas->valorTotal = $venda_has_produto->valorTotal; 
            $historico_vendas->produtos_id = $venda_has_produto->produtos_id; 
            $historico_vendas->save();

            $produto = Produto::find($venda_has_produto->produtos_id);
            $produto->quantidade -= $venda_has_produto->quantidade;
            $produto->save();

            $venda_has_produto->delete();
        }
        return redirect('vendas')->with('message', 'Venda_has_Produto atualizado com sucesso!');      
    }

}
