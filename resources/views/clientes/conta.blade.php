@extends('adminlte::page')

@section('title')

@section('content_header')
    <section class="content-header">
      <h1>
        Conta
      </h1>
      <ol class="breadcrumb">
        <li><a href="home"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="clientes">Clientes</a></li>
        <li class="active">Conta</li>
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
              <h3 class="box-title">Conta do cliente</h3>
            </div>
            <!-- /.box-header -->
    <!-- form start -->
            {!! Form::open(['url' => 'clientes/'.$detailpage->id.'/saldo', 'class'=>'form-horizontal']) !!}
              <div class="box-body">
                
                <div class="form-group">
                  <label for="valorDebitos" class="col-sm-2 control-label">Valor em debito</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="valorDebitos" value="" placeholder="{{ $detailpage->valorDebitos }}" disabled>
                  </div>
                </div>

                <div class="form-group">
                  <label for="valorEntrada" class="col-sm-2 control-label">Valor do pagamento</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="valorEntrada" value="" placeholder="">
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