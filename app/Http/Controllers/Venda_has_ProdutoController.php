<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Venda_has_Produto;
use App\Produto;

class Venda_has_ProdutoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $vendas_has_produtos = Venda_has_Produto::all();
        $produtos = Produto::orderBy('nome', 'asc')->get();

        return view('vendas_has_produtos.index',['vendas_has_produtos' => $vendas_has_produtos, 'produtos' => $produtos]);
    }

    public function create()
    {
        $vendas_has_produtos = Venda_has_Produto::all();
        $produtos = Produto::orderBy('nome', 'asc')->get();

        $valor_total = Venda_has_Produto::all()->sum('valorTotal');

        return view('vendas_has_produtos.create',['vendas_has_produtos' => $vendas_has_produtos, 'produtos' => $produtos, 'valor_total' => $valor_total]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'quantidade' => 'required',
            'produtos_id' => 'required',
        ]);
        
        $vendas_has_produtos = new Venda_has_Produto;
        $vendas_has_produtos->quantidade = $request->quantidade;
        $vendas_has_produtos->valorTotal = $request->quantidade * Produto::find($request->produtos_id)->valorVenda;
        $vendas_has_produtos->produtos_id = $request->produtos_id;
        $vendas_has_produtos->save();
        return redirect('vendas')->with('message', 'Venda_has_Produto atualizado com sucesso!');      
    }

    public function show($id)
    {
        $vendas_has_produtos = Venda_has_Produto::find($id);

        return view('vendas_has_produtos.details')->with('detailpage', $vendas_has_produtos);        
    }

    public function edit($id)
    {
        $vendas_has_produtos = Venda_has_Produto::find($id);

        return view('vendas_has_produtos.edit')->with('detailpage', $vendas_has_produtos);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'quantidade' => 'required',
            'produtos_id' => 'required',
        ]);
        
        $vendas_has_produtos = Venda_has_Produto::find($id);
        $vendas_has_produtos->quantidade = $request->quantidade;
        $vendas_has_produtos->produtos_id = $request->produtos_id;
        $vendas_has_produtos->save();
        return redirect('vendas_has_produtos')->with('message', 'Venda_has_Produto atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $vendas_has_produtos = Venda_has_Produto::find($id);
        $vendas_has_produtos->delete();
        return redirect('vendas');
    }
}