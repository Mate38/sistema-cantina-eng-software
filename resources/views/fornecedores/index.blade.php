@extends('adminlte::page')

{{ Session::get('message') }}

@section('title')

@section('content_header')
    <section class="content-header">
      <h1>
        Fornecedores
      </h1>
      <ol class="breadcrumb">
        <li><a href="home"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Fornecedores</li>
      </ol>
    </section>
@stop

@section('content')

  <div class="box box-success">
    <div class="box-header">
      <h3 class="box-title">Fornecedores cadastrados</h3>
    </div>
      <!-- /.box-header -->
    <div class="box-body table-responsive no-padding">
      <table id="fornecedores" class="table table-bordered table-striped table-hover">
      <thead>
        <tr>
          <th>Razão social</th>
          <th>Nome de fantasia</th>
          <th>CNPJ</th>
          <th>Telefone</th>
          <th>Ações</th>
        </tr>
      </thead>
      <tbody>
        @foreach($fornecedores as $fornecedor)
          <tr>
            <td>{{$fornecedor->razaoSocial}}</td>
            <td>{{$fornecedor->nomeFantasia}}</td>
            <td>{{$fornecedor->cnpj}}</td>
            <td>{{$fornecedor->telefone}}</td>
            <td>
              {!! Form::open(['url' => 'fornecedores/'.$fornecedor->id, 'method' => 'delete', 'class'=>'form-horizontal', 'id'=>"form_buttons"]) !!}
                <a href="/fornecedores/{{ $fornecedor->id }}/edit" class="btn-sm bg-yellow">Editar</a>
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

