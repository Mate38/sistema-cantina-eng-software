@extends('adminlte::page')

@section('title')

@section('content_header')
    <section class="content-header">
      <h1>
        Estoques
      </h1>
      <ol class="breadcrumb">
        <li><a href="home"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="estoques">Estoques</a></li>
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
              <h3 class="box-title">Cadastro de estoques</h3>
            </div>
            <!-- /.box-header -->
    <!-- form start -->
            {!! Form::open(array('url' => '/estoques', 'class'=>'form-horizontal')) !!}

              <div class="box-body">

              <div class="form-group has-feedback {{ $errors->has('produtos_id') ? 'has-error' : '' }}">
                  <label for="produtos_id" class="col-sm-2 control-label">Produto</label>
                  <div class="col-sm-10">
                    <select class="form-control" name="produtos_id">
                      <option value="">--- Escolha um produto ---</option>
                      @foreach($produtos as $produto)
                        <option value="{{ $produto->id }}">{{$produto->nome}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>

                <div class="form-group has-feedback {{ $errors->has('fornecedores_id') ? 'has-error' : '' }}">
                  <label for="fornecedores_id" class="col-sm-2 control-label">Fornecedor</label>
                  <div class="col-sm-10">
                    <select class="form-control" name="fornecedores_id">
                      <option value="">--- Escolha um fornecedor ---</option>
                      @foreach($fornecedores as $fornecedor)
                        <option value="{{ $fornecedor->id }}">{{$fornecedor->nomeFantasia}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>

                <div class="form-group has-feedback {{ $errors->has('quantidade') ? 'has-error' : '' }}">
                  <label for="quantidade" class="col-sm-2 control-label">Quantidade</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="quantidade" placeholder="">
                  </div>
                </div>

                <div class="form-group has-feedback {{ $errors->has('valorCompra') ? 'has-error' : '' }}">
                  <label for="valorCompra" class="col-sm-2 control-label">Valor de compra</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="valorCompra" placeholder="">
                  </div>
                </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit" class="btn btn-success pull-right">Salvar</button>
              </div>
            {!! Form::close() !!}
            <!--</form>-->
          </div>
          <!-- /.box -->

@stop


