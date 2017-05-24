@extends('welcome')

@section('content')
  <h1> Cadastro de produto </h1>
  <br/>
  
  {{Form::model($produto, array('route' => array('produtos.store')))  }}
  
    {{ Form::label('nome', 'Nome: ') }}
    {{ Form::text("product['nome']") }}

    {{ Form::label('valor', 'Valor:') }}
    {{ Form::text("product['valor']") }}

    {{Form::submit('Salvar', array('class' => 'btn btn-success')) }}
  {{Form::close() }}

@endsection