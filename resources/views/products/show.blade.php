@extends('welcome')

@section('content')
  <h1>Detalhes do Produtos</h1>

  <dl class="dl-horizontal">
    <dt>Nome</dt>
    <dr>{{$produto->nome}}</dt>
    <dt>Valor</dt>
    <dt>{{$produto->valor}}</dt>
    <dt>Criado em</dt>
    <dt>{{$produto->created_at}}</dt>
    <dt>Atualização</dt>
    <dt>{{$produto->updated_at}}</dt>
  </dl>

  @endsection