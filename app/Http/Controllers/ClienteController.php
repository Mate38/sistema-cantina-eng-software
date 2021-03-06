<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Cliente;
use App\Responsavel;

class ClienteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $clientes = Cliente::orderBy('nome', 'asc')->get();
        //$clientes = Cliente::all();
        return view('clientes.index',['clientes' => $clientes]);
    }

    public function create()
    {
        $responsaveis = Responsavel::orderBy('nome', 'asc')->get();
        return view('clientes.create',['responsaveis' => $responsaveis]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nome' => 'required',
            'cpf' => 'required',
            'telefone' => 'required',
        ]);
        
        $clientes = new Cliente;
        $clientes->nome = $request->nome;
        $clientes->descricao = $request->descricao;
        $clientes->cpf = $request->cpf;
        $clientes->valorDebitos = $request->valorDebitos;
        $clientes->valorCreditos = $request->valorCreditos;
        $clientes->telefone = $request->telefone;
        $clientes->responsaveis_id = $request->responsaveis_id;

        $clientes->save();
        return redirect('clientes')->with('message', 'Cliente atualizado com sucesso!');
        
    }

    public function show($id)
    {
        $clientes = Cliente::find($id);

        return view('clientes.details')->with('detailpage', $clientes);        
    }

    public function edit($id)
    {
        $clientes = Cliente::find($id);

        $responsaveis = Responsavel::orderBy('nome', 'asc')->get();

        return view('clientes.edit',['responsaveis' => $responsaveis])->with('detailpage', $clientes);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nome' => 'required',
            'cpf' => 'required',
            'telefone' => 'required',
        ]);

        $responsaveis = Responsavel::all();
        
        $clientes = Cliente::find($id);
        $clientes->nome = $request->nome;
        $clientes->descricao = $request->descricao;
        $clientes->cpf = $request->cpf;
        $clientes->valorDebitos = $request->valorDebitos;
        $clientes->valorCreditos = $request->valorCreditos;
        $clientes->telefone = $request->telefone;
        $clientes->responsaveis_id = $request->responsaveis_id;

        $clientes->save();
        return redirect('clientes')->with('message', 'Cliente atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $clientes = Cliente::find($id);
        $clientes->delete();
        return redirect('clientes');
    }

    public function conta($id)
    {
        $clientes = Cliente::find($id);

        return view('clientes.conta')->with('detailpage', $clientes);
    }

    public function saldo(Request $request, $id)
    {
        $this->validate($request, [
            'valorEntrada' => 'required',
        ]);

        $clientes = Cliente::find($id);

        $clientes->valorDebitos = $clientes->valorDebitos - $request->valorEntrada;
        $clientes->save();
        return redirect('clientes')->with('message', 'Saldo atualizado com sucesso!');
    }
}