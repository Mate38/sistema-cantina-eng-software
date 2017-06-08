<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Estoque;
use App\Produto;
use App\Fornecedor;

class EstoqueController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $estoques = Estoque::orderBy('id', 'asc')->get();
        //$estoques = Estoque::all();
        $produtos = Produto::orderBy('nome', 'asc')->get();
        return view('estoques.index',['estoques' => $estoques],['produtos' => $produtos]);
    }

    public function create()
    {
        $produtos = Produto::orderBy('nome', 'asc')->get();
        $fornecedores = Fornecedor::orderBy('nomeFantasia', 'asc')->get();
        return view('estoques.create',['produtos' => $produtos],['fornecedores' => $fornecedores]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'quantidade' => 'required',
            'valorCompra' => 'required',
            'produtos_id' => 'required',
            'fornecedores_id' => 'required',
        ]);
        
        $estoques = new Estoque;
        $estoques->quantidade = $request->quantidade;
        $estoques->valorCompra = $request->valorCompra;
        $estoques->produtos_id = $request->produtos_id;
        $estoques->fornecedores_id = $request->fornecedores_id;
        $estoques->save();

        $produto = Produto::find($request->produtos_id);
        $produto->quantidade += $request->quantidade;
        $produto->save();

        return redirect('estoques')->with('message', 'Estoque atualizado com sucesso!');
    }

    public function show($id)
    {
        $estoques = Estoque::find($id);

        return view('estoques.details')->with('detailpage', $estoques);        
    }

    public function edit($id)
    {
        $estoques = Estoque::find($id);

        return view('estoques.edit')->with('detailpage', $estoques);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'quantidade' => 'required',
            'valorCompra' => 'required',
            'produtos_id' => 'required',
            'fornecedores_id' => 'required',
        ]);
        
        $estoques = Estoque::find($id);
        $estoques->quantidade = $request->quantidade;
        $estoques->valorCompra = $request->valorCompra;
        $estoques->produtos_id = $request->produtos_id;
        $estoques->fornecedores_id = $request->fornecedores_id;
        $estoques->save();
        return redirect('estoques')->with('message', 'Estoque atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $estoques = Estoque::find($id);
        $estoques->delete();
        return redirect('estoques');
    }
}