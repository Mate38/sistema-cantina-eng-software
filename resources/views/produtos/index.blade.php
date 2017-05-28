@extends('adminlte::page')

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

<div class="box">
  <div class="box-header">
    <h3 class="box-title">Produtos cadastrados</h3>
  </div>
    <!-- /.box-header -->
  <div class="box-body">
    <table id="example1" class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Valor de Venda</th>
        <th>Descrição</th>
      </tr>
    </thead>
    <tbody>
      @foreach($produtos as $produtos)
        <tr>
          <td>{{$produtos->nome}}</td>
          <td>{{$produtos->valorVenda}}</td>
          <td>{{$produtos->descricao}}</td>
        </tr>
      @endforeach
    </tbody>
    </table>
  </div>
  <!-- /.box-body -->
</div>
<!-- /.box -->

@stop