@extends('adminlte::page')

@section('title')

@section('content_header')
    <section class="content-header">
      <h1>
        Funcionarios
      </h1>
      <ol class="breadcrumb">
        <li><a href="home"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="funcionarios">Funcionarios</a></li>
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
              <h3 class="box-title">Cadastro de funcionarios</h3>
            </div>
            <!-- /.box-header -->
    <!-- form start -->
            {!! Form::open(array('url' => '/funcionarios', 'class'=>'form-horizontal')) !!}
              <div class="box-body">

                <div class="form-group">
                  <label for="nome" class="col-sm-2 control-label">Nome</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nome" placeholder="">
                    {{ ($errors->has('nome')) ? $errors->first('nome') : '' }}
                  </div>
                </div>

                <div class="form-group">
                  <label for="descricao" class="col-sm-2 control-label">Descrição</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="descricao" placeholder="">
                    {{ ($errors->has('descricao')) ? $errors->first('descricao') : '' }}
                  </div>
                </div>

                <div class="form-group">
                  <label for="cpf" class="col-sm-2 control-label">CPF</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="cpf" placeholder="">
                    {{ ($errors->has('cpf')) ? $errors->first('cpf') : '' }}
                  </div>
                </div>

                <div class="form-group">
                  <label for="carteiraTrabalho" class="col-sm-2 control-label">Carteira de trabalho</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="carteiraTrabalho" placeholder="">
                    {{ ($errors->has('carteiraTrabalho')) ? $errors->first('carteiraTrabalho') : '' }}
                  </div>
                </div>

                <div class="form-group">
                  <label for="telefone" class="col-sm-2 control-label">Telefone</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="telefone" placeholder="">
                    {{ ($errors->has('telefone')) ? $errors->first('telefone') : '' }}
                  </div>
                </div>

                <div class="form-group">
                  <label for="celular" class="col-sm-2 control-label">Celular</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="celular" placeholder="">
                    {{ ($errors->has('celular')) ? $errors->first('celular') : '' }}
                  </div>
                </div>

                <div class="form-group">
                        <label for="users_id" class="col-sm-2 control-label">Usuario</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="users_id">
                                <option value="">--- Escolha um usuario ---</option>
                                @foreach($usuarios as $usuario)
                                    <option value="{{ $usuario->id }}">{{$usuario->name}}</option>
                                @endforeach
                            </select>
                            {{ ($errors->has('users_id')) ? $errors->first('users_id') : '' }}
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


