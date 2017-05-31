@extends('adminlte::page')

{{ Session::get('message') }}

@section('title')

@section('content_header')
    <section class="content-header">
      <h1>
        Estoques
      </h1>
      <ol class="breadcrumb">
        <li><a href="home"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Estoques</a></li>
        <li class="active">Cadastro</li>
      </ol>
    </section>
@stop

@section('content')

  <div class="box box-success">
    <div class="box-header">
      <h3 class="box-title">Estoques cadastrados</h3>
    </div>
      <!-- /.box-header -->
    <div class="box-body table-responsive no-padding">
      <table class="table table-bordered table-striped table-hover">
      <thead>
        <tr>
          <th>Produto</th>
          <th>Quantidade</th>
          <th>Ações</th>
        </tr>
      </thead>
      <tbody>
        @foreach($produtos as $produto)
          <tr>
            <td>{{$produto->nome}}</td>
            <td>{{$produto->quantidade}}</td>
            <td>
              {!! Form::open(['url' => 'produtos/'.$produto->id, 'method' => 'delete', 'class'=>'form-horizontal', 'id'=>"form_buttons"]) !!}
                <!--<a href="/produtos/{{ $produto->id }}" class="btn-sm bg-blue">Infos</a>-->
                <a href="/produtos/{{ $produto->id }}/edit" class="btn-sm bg-yellow">Editar</a>
                <!--<a href="/produtos/{{ $produto->id }}/delete" class="btn-sm bg-red">Excluir</a>-->
                <!--<input type="submit" name="name" class="btn-sm bg-red" value="Apagar">-->
                <!--<button type="submit" class="btn-sm bg-red">Excluir</button>-->
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
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

