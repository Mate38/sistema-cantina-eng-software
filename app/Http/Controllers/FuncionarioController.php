<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Funcionario;
use App\User;

class FuncionarioController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $funcionarios = Funcionario::orderBy('nome', 'asc')->get();
        return view('funcionarios.index',['funcionarios' => $funcionarios]);
    }

    public function create()
    {
        $usuarios = User::orderBy('name', 'asc')->get();
        return view('funcionarios.create',['usuarios' => $usuarios]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nome' => 'required',
            'cpf' => 'required',
            'carteiraTrabalho' => 'required',
            'telefone' => 'required',
            'celular' => 'required',
            'users_id' => 'required',
        ]);
        
        $funcionarios = new Funcionario;
        $funcionarios->nome = $request->nome;
        $funcionarios->descricao = $request->descricao;
        $funcionarios->cpf = $request->cpf;
        $funcionarios->carteiraTrabalho = $request->carteiraTrabalho;
        $funcionarios->telefone = $request->telefone;
        $funcionarios->celular = $request->celular;
        $funcionarios->users_id = $request->users_id;
        $funcionarios->save();
        return redirect('funcionarios')->with('message', 'Funcionario atualizado com sucesso!');
        
    }

    public function show($id)
    {
        $funcionarios = Funcionario::find($id);

        return view('funcionarios.details')->with('detailpage', $funcionarios);        
    }

    public function edit($id)
    {
        $funcionarios = Funcionario::find($id);
        $usuarios = User::orderBy('name', 'asc')->get();

        return view('funcionarios.edit',['usuarios' => $usuarios])->with('detailpage', $funcionarios);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nome' => 'required',
            'cpf' => 'required',
            'carteiraTrabalho' => 'required',
            'telefone' => 'required',
            'celular' => 'required',
            'users_id' => 'required',
        ]);
        
        $funcionarios = Funcionario::find($id);
        $funcionarios->nome = $request->nome;
        $funcionarios->descricao = $request->descricao;
        $funcionarios->cpf = $request->cpf;
        $funcionarios->carteiraTrabalho = $request->carteiraTrabalho;
        $funcionarios->telefone = $request->telefone;
        $funcionarios->celular = $request->celular;
        $funcionarios->users_id = $request->users_id;
        $funcionarios->save();
        return redirect('funcionarios')->with('message', 'Funcionario atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $funcionarios = Funcionario::find($id);
        $funcionarios->delete();
        return redirect('funcionarios');
    }
}