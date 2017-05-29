@extends('adminlte::page')

@section('title')

@section('content_header')
    <section class="content-header">
      <h1>
        Responsaveis
      </h1>
      <ol class="breadcrumb">
        <li><a href="home"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="responsaveis">Responsaveis</a></li>
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
              <h3 class="box-title">Cadastro de responsaveis</h3>
            </div>
            <!-- /.box-header -->
    <!-- form start -->
            {!! Form::open(['url' => 'responsaveis/'.$detailpage->id, 'method' => 'PUT', 'class'=>'form-horizontal']) !!}
              <div class="box-body">
                
                <div class="form-group">
                  <label for="nome" class="col-sm-2 control-label">Nome</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nome" value="{{ $detailpage->nome }}" placeholder="">
                  </div>
                </div>

                <div class="form-group">
                  <label for="descricao" class="col-sm-2 control-label">Descrição</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="descricao" value="{{ $detailpage->descricao }}" placeholder="">
                  </div>
                </div>

                <div class="form-group">
                  <label for="cpf" class="col-sm-2 control-label">CPF</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="cpf" value="{{ $detailpage->cpf }}" placeholder="">
                  </div>
                </div>

                <div class="form-group">
                  <label for="telefone" class="col-sm-2 control-label">Telefone</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="telefone" value="{{ $detailpage->telefone }}" placeholder="">
                  </div>
                </div>

                <div class="form-group">
                  <label for="celular" class="col-sm-2 control-label">Celular</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="celular" value="{{ $detailpage->celular }}" placeholder="">
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