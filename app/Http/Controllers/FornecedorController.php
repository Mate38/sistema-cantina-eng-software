<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Fornecedor;

class FornecedorController extends Controller
{

    public function index()
    {
        $fornecedores = Fornecedor::orderBy('nomeFantasia', 'asc')->get();
        //$fornecedores = Fornecedor::all();
        return view('fornecedores.index',['fornecedores' => $fornecedores]);
    }

    public function create()
    {
        return view('fornecedores.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'razaoSocial' => 'required',
            'nomeFantasia' => 'required',
            'cnpj' => 'required',
            'telefone' => 'required',
        ]);
        
        $fornecedores = new Fornecedor;
        $fornecedores->razaoSocial = $request->razaoSocial;
        $fornecedores->nomeFantasia = $request->nomeFantasia;
        $fornecedores->cnpj = $request->cnpj;
        $fornecedores->telefone = $request->telefone;
        $fornecedores->save();
        return redirect('fornecedores')->with('message', 'Fornecedor atualizado com sucesso!');
        
    }

    public function show($id)
    {
        $fornecedores = Fornecedor::find($id);

        return view('fornecedores.details')->with('detailpage', $fornecedores);        
    }

    public function edit($id)
    {
        $fornecedores = Fornecedor::find($id);

        return view('fornecedores.edit')->with('detailpage', $fornecedores);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'razaoSocial' => 'required',
            'nomeFantasia' => 'required',
            'cnpj' => 'required',
            'telefone' => 'required',
        ]);
        
        $fornecedores = Fornecedor::find($id);
        $fornecedores->razaoSocial = $request->razaoSocial;
        $fornecedores->nomeFantasia = $request->nomeFantasia;
        $fornecedores->cnpj = $request->cnpj;
        $fornecedores->telefone = $request->telefone;
        $fornecedores->save();
        return redirect('fornecedores')->with('message', 'Fornecedor atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $fornecedores = Fornecedor::find($id);
        $fornecedores->delete();
        return redirect('fornecedores');
    }
}