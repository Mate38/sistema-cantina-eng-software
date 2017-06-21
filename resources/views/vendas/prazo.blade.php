@extends('adminlte::page')

@section('title')

@section('content_header')
    <section class="content-header">
        <h1>
            Venda de clientes
        </h1>
        <ol class="breadcrumb">
            <li><a href="home"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="vendas_has_clientes">Venda de clientes</a></li>
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
                    <h3 class="box-title">Seleção do cliente</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                {!! Form::open(array('url' => '/vendas/finaliza', 'class'=>'form-horizontal')) !!}

                <div class="box-body">

                    <div class="form-group has-feedback {{ $errors->has('clientes_id') ? 'has-error' : '' }}">
                        <label for="clientes_id" class="col-sm-2 control-label">Cliente</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="clientes_id">
                                <option value="">--- Escolha um cliente ---</option>
                                @foreach($clientes as $cliente)
                                    <option value="{{ $cliente->id }}">{{$cliente->nome}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" class="btn bg-blue pull-right">Concluir</button>
                </div>
                {!! Form::close() !!}
                <!--</form>-->
            </div>
            <!-- /.box -->

            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3>{{$valor_total}}</h3>
                    <p>Valor total</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
          </div>

        </div>
    </div>
@stop


