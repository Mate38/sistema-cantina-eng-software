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
  <!-- Main content -->
      <div class="row">
        <!-- left column -->
        <div class="col-md-10 col-md-offset-1">
          <!-- general form elements -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Cadastro de produtos</h3>
            </div>
            <!-- /.box-header -->
    <!-- form start -->
            {!! Form::open(array('url' => '/produtos', 'class'=>'form-horizontal')) !!}
            <!--<form class="form-horizontal" method="post" action="/produtos">-->
              <div class="box-body">
              <!--{!! csrf_field() !!}-->

                <div class="form-group has-feedback {{ $errors->has('nome') ? 'has-error' : '' }}">
                  <label for="nome" class="col-sm-2 control-label">Nome</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nome" placeholder="Nome do produto">
                  </div>
                </div>

                <div class="form-group has-feedback {{ $errors->has('valorVenda') ? 'has-error' : '' }}">
                  <label for="valorVenda" class="col-sm-2 control-label">Valor de venda</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="valorVenda" placeholder="Valor para venda do produto">
                  </div>
                </div>

                <div class="form-group has-feedback {{ $errors->has('descricao') ? 'has-error' : '' }}">
                  <label for="descricao" class="col-sm-2 control-label">Descrição</label>
                  <div class="col-sm-10">
                  <textarea type="text" class="form-control" rows="3" name="descricao" placeholder="Informações adicionais do produto"></textarea>
                    <!--<input type="text" class="form-control" name="descricao" placeholder="Informações adicionais do produto">-->
                  </div>
                </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <!--<input type="hidden" name="_token" value="{{ csrf_token() }}">-->
                <button type="submit" class="btn btn-success pull-right">Salvar</button>
              </div>
            {!! Form::close() !!}
            <!--</form>-->
          </div>
          <!-- /.box -->

@stop


