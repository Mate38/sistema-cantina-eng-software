@extends('adminlte::page')

{{ Session::get('message') }}

@section('title')

@section('content_header')
    <section class="content-header">
      <h1>
        Funcionários
      </h1>
      <ol class="breadcrumb">
        <li><a href="home"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Funcionários</li>
      </ol>
    </section>
@stop

@section('content')

  <div class="box box-success">
    <div class="box-header">
      <h3 class="box-title">Funcionários cadastrados</h3>
    </div>
      <!-- /.box-header -->
    <div class="box-body table-responsive no-padding">
      <table id="funcionarios" class="table table-bordered table-striped table-hover">
      <thead>
        <tr>
          <th>Nome</th>
          <th>Descrição</th>
          <th>CPF</th>
          <th>Carteira de Trabalho</th>
          <th>Telefone</th>
          <th>Celular</th>
          <th>Ações</th>
        </tr>
      </thead>
      <tbody>
        @foreach($funcionarios as $funcionario)
          <tr>
            <td>{{$funcionario->nome}}</td>
            <td>{{$funcionario->descricao}}</td>
            <td>{{$funcionario->cpf}}</td>
            <td>{{$funcionario->carteiraTrabalho}}</td>
            <td>{{$funcionario->telefone}}</td>
            <td>{{$funcionario->celular}}</td>
            <td>
              {!! Form::open(['url' => 'funcionarios/'.$funcionario->id, 'method' => 'delete', 'class'=>'form-horizontal', 'id'=>"form_buttons"]) !!}
                <a href="/funcionarios/{{ $funcionario->id }}/edit" class="btn-sm bg-yellow">Editar</a>
                <a href="#" class="btn-sm bg-red" onClick="document.getElementById('form_buttons').submit();">Excluir</a>
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

