@extends('adminlte::page')

@section('title')

@section('content_header')
    <section class="content-header">
      <h1>
        Fornecedores
      </h1>
      <ol class="breadcrumb">
        <li><a href="home"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="fornecedores">Fornecedores</a></li>
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
              <h3 class="box-title">Cadastro de fornecedores</h3>
            </div>
            <!-- /.box-header -->
    <!-- form start -->
            {!! Form::open(['url' => 'fornecedores/'.$detailpage->id, 'method' => 'PUT', 'class'=>'form-horizontal']) !!}
              <div class="box-body">

                <div class="form-group has-feedback {{ $errors->has('razaoSocial') ? 'has-error' : '' }}">
                  <label for="razaoSocial" class="col-sm-2 control-label">Razão social</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="razaoSocial" value="{{ $detailpage->razaoSocial }}" placeholder="">
                  </div>
                </div>

                <div class="form-group has-feedback {{ $errors->has('nomeFantasia') ? 'has-error' : '' }}">
                  <label for="nomeFantasia" class="col-sm-2 control-label">Nome de fantasia</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nomeFantasia" value="{{ $detailpage->nomeFantasia }}" placeholder="">
                  </div>
                </div>

                <div class="form-group has-feedback {{ $errors->has('cnpj') ? 'has-error' : '' }}">
                  <label for="cnpj" class="col-sm-2 control-label">CNPJ</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="cnpj" value="{{ $detailpage->cnpj }}" placeholder="">
                  </div>
                </div>

                <div class="form-group has-feedback {{ $errors->has('telefone') ? 'has-error' : '' }}">
                  <label for="telefone" class="col-sm-2 control-label">Telefone</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="telefone" value="{{ $detailpage->telefone }}" placeholder="">
                  </div>
                </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-success pull-right">Salvar</button>
              </div>
            {!! Form::close() !!}
            <!--</form>-->
          </div>
          <!-- /.box -->

@stop