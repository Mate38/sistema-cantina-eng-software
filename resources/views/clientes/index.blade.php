@extends('adminlte::page')

{{ Session::get('message') }}

@section('title')

@section('content_header')
    <section class="content-header">
      <h1>
        Clientes
      </h1>
      <ol class="breadcrumb">
        <li><a href="home"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Clientes</li>
      </ol>
    </section>
@stop

@section('content')

  <div class="box box-success">
    <div class="box-header">
      <h3 class="box-title">Clientes cadastrados</h3>
    </div>
      <!-- /.box-header -->
    <div class="box-body table-responsive no-padding">
      <table id="clientes" class="table table-bordered table-striped table-hover">
      <thead>
        <tr>
          <th>Nome</th>
          <th>Descrição</th>
          <th>CPF</th>
          <th>Saldo</th>
          <th>Telefone</th>
          <th>Ações</th>
        </tr>
      </thead>
      <tbody>
        @foreach($clientes as $cliente)
          <tr>
            <td>{{$cliente->nome}}</td>
            <td>{{$cliente->descricao}}</td>
            <td>{{$cliente->cpf}}</td>
            <td>{{$cliente->valorCreditos-$cliente->valorDebitos}}</td>
            <td>{{$cliente->telefone}}</td>
            <td>
              {!! Form::open(['url' => 'clientes/'.$cliente->id, 'method' => 'delete', 'class'=>'form-horizontal', 'id'=>"form_buttons"]) !!}
                <a href="/clientes/{{ $cliente->id }}/edit" class="btn-sm bg-yellow">Editar</a>
                @if(Auth::user()->nivel == 1)
                  <a href="#" class="btn-sm bg-red" onClick="document.getElementById('form_buttons').submit();">Excluir</a>
                @endif
              {!! Form::close() !!}
            </td>
          </tr>
        @endforeach
      </tbody>
      </table>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->

@stop

