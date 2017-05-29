<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Responsavel;

class ResponsavelController extends Controller
{

    public function index()
    {
        $responsaveis = Responsavel::orderBy('nome', 'asc')->get();
        //$responsaveis = Responsavel::all();
        return view('responsaveis.index',['responsaveis' => $responsaveis]);
    }

    public function create()
    {
        return view('responsaveis.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nome' => 'required',
            'descricao' => 'required',
            'cpf' => 'required',
            'telefone' => 'required',
            'celular' => 'required',
        ]);
        
        $responsaveis = new Responsavel;
        $responsaveis->nome = $request->nome;
        $responsaveis->descricao = $request->descricao;
        $responsaveis->cpf = $request->cpf;
        $responsaveis->telefone = $request->telefone;
        $responsaveis->celular = $request->celular;
        $responsaveis->save();
        return redirect('responsaveis')->with('message', 'Responsavel atualizado com sucesso!');
        
    }

    public function show($id)
    {
        $responsaveis = Responsavel::find($id);

        return view('responsaveis.details')->with('detailpage', $responsaveis);        
    }

    public function edit($id)
    {
        $responsaveis = Responsavel::find($id);

        return view('responsaveis.edit')->with('detailpage', $responsaveis);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nome' => 'required',
            'descricao' => 'required',
            'cpf' => 'required',
            'telefone' => 'required',
            'celular' => 'required',
        ]);
        
        $responsaveis = Responsavel::find($id);
        $responsaveis->nome = $request->nome;
        $responsaveis->descricao = $request->descricao;
        $responsaveis->cpf = $request->cpf;
        $responsaveis->telefone = $request->telefone;
        $responsaveis->celular = $request->celular;
        $responsaveis->save();
        return redirect('responsaveis')->with('message', 'Responsavel atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $responsaveis = Responsavel::find($id);
        $responsaveis->delete();
        return redirect('responsaveis');
    }
}