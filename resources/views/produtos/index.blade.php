@extends('adminlte::page')

{{ Session::get('message') }}

@section('title')

@section('content_header')
    <section class="content-header">
      <h1>
        Produtos
      </h1>
      <ol class="breadcrumb">
        <li><a href="home"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="produtos">Produtos</a></li>
        <li class="active">Cadastro</li>
      </ol>
    </section>
@stop

@section('content')

  <div class="box box-success">
    <div class="box-header">
      <h3 class="box-title">Produtos cadastrados</h3>
    </div>
      <!-- /.box-header -->
    <div class="box-body table-responsive no-padding">
      <table id="produtos" class="table table-bordered table-striped table-hover">
      <thead>
        <tr>
          <th>Nome</th>
          <th>Valor de Venda</th>
          <th>Descrição</th>
          <th>Ações</th>
        </tr>
      </thead>
      <tbody>
        @foreach($produtos as $produto)
          <tr>
            <td>{{$produto->nome}}</td>
            <td>{{$produto->valorVenda}}</td>
            <td>{{$produto->descricao}}</td>
            <td>
              {!! Form::open(['url' => 'produtos/'.$produto->id, 'method' => 'delete', 'class'=>'form-horizontal', 'id'=>"form_buttons"]) !!}
                <!--<a href="/produtos/{{ $produto->id }}" class="btn-sm bg-blue">Infos</a>-->
                <a href="/produtos/{{ $produto->id }}/edit" class="btn-sm bg-yellow">Editar</a>
                <!--<a href="/produtos/{{ $produto->id }}/delete" class="btn-sm bg-red">Excluir</a>-->
                <!--<input type="submit" name="name" class="btn-sm bg-red" value="Apagar">-->
                <!--<button type="submit" class="btn-sm bg-red">Excluir</button>-->
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

