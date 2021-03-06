@extends('adminlte::page')

@section('title')

@section('content_header')
    <section class="content-header">
        <h1>
            Venda de produtos
        </h1>
        <ol class="breadcrumb">
            <li><a href="home"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="vendas_has_produtos">Venda de produtos</a></li>
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
                    <h3 class="box-title">Cadastro de venda de produtos</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                {!! Form::open(array('url' => '/vendas', 'class'=>'form-horizontal')) !!}

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

                    <div class="form-group has-feedback {{ $errors->has('quantidade') ? 'has-error' : '' }}">
                        <label for="quantidade" class="col-sm-2 control-label">Quantidade</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="quantidade" placeholder="">
                        </div>
                    </div>

                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" class="btn bg-blue pull-right">Adicionar</button>
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
                            <th>Valor</th>
                            <th>Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($vendas_has_produtos as $venda_has_produto)
                            <tr>
                                @foreach($produtos as $produto)
                                    @if($produto->id == $venda_has_produto->produtos_id)
                                        <td>{{$produto->nome}}</td>
                                    @endif
                                @endforeach
                                <td>{{$venda_has_produto->quantidade}}</td>
                                <td>{{$venda_has_produto->valorTotal}}</td>
                                <td>
                                    {!! Form::open(['url' => 'vendas/'.$venda_has_produto->id, 'method' => 'delete', 'class'=>'form-horizontal', 'id'=>"form_buttons"]) !!}
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <!--<a href="#" class="btn-sm bg-red" onClick="document.getElementById('form_buttons').submit();">Retirar</a>-->
                                    <button type="submit" class="btn btn-xs btn-danger">Retirar</button>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="box-footer">
                        {!! Form::open(['url' => 'vendas/finaliza', 'class'=>'form-horizontal', 'id'=>"form_buttons2"]) !!}
                            <!--<input type="hidden" name="nome" value="1">-->
                            <button type="submit" class="btn btn-success pull-right">Encerrar</button>
                            <a href="vendas/prazo" class="btn bg-yellow pull-right">Marcar</a>
                        {!! Form::close() !!}
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
@stop


