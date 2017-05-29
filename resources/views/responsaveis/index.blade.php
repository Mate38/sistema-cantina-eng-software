@extends('adminlte::page')

{{ Session::get('message') }}

@section('title')

@section('content_header')
    <section class="content-header">
      <h1>
        Responsáveis
      </h1>
      <ol class="breadcrumb">
        <li><a href="home"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Responsáveis</li>
      </ol>
    </section>
@stop

@section('content')

  <div class="box box-success">
    <div class="box-header">
      <h3 class="box-title">Responsáveis cadastrados</h3>
    </div>
      <!-- /.box-header -->
    <div class="box-body table-responsive no-padding">
      <table id="responsaveis" class="table table-bordered table-striped table-hover">
      <thead>
        <tr>
          <th>Nome</th>
          <th>Descrição</th>
          <th>CPF</th>
          <th>Telefone</th>
          <th>Celular</th>
          <th>Ações</th>
        </tr>
      </thead>
      <tbody>
        @foreach($responsaveis as $responsavel)
          <tr>
            <td>{{$responsavel->nome}}</td>
            <td>{{$responsavel->descricao}}</td>
            <td>{{$responsavel->cpf}}</td>
            <td>{{$responsavel->telefone}}</td>
            <td>{{$responsavel->celular}}</td>
            <td>
              {!! Form::open(['url' => 'responsaveis/'.$responsavel->id, 'method' => 'delete', 'class'=>'form-horizontal', 'id'=>"form_buttons"]) !!}
                <a href="/responsaveis/{{ $responsavel->id }}/edit" class="btn-sm bg-yellow">Editar</a>
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

