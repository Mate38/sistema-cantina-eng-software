<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Venda;
use App\Venda_has_Produto;
use App\Historico_Venda;
use App\Produto;
use App\Cliente;

class VendaController extends Controller {

    public function store(Request $request)
    {     
        $vendas_has_produtos = Venda_has_Produto::all();
        $historico_vendas = new Historico_Venda;

        if(!empty($request->clientes_id)){
            $valor_total = Venda_has_Produto::all()->sum('valorTotal');
            $cliente = Cliente::find($request->clientes_id);
            $cliente->valorDebitos += $valor_total;
            $cliente->save();
        }

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

    public function prazo(Request $request)
    {     
        $clientes = Cliente::orderBy('nome', 'asc')->get();

        $valor_total = Venda_has_Produto::all()->sum('valorTotal');

        return view('vendas/prazo',['clientes' => $clientes, 'valor_total' => $valor_total]);      
    }

}
