<head><link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"></head>

<h1>Testando</h1>

<a href="/produtos/create" class="btn btn-success pull-right">Novo Produto</a>

<div>
  <table class="">
    <tr>---Produtos</tr>
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>Valor</th>
      <th>Data</th>
    </tr>
    @foreach($produtos as $produto)
     <tr>
       <td>{{$produto->id}}</td>
       <td>{{$produto->nome}}</td>
       <td>{{$produto->valor}}</td>
       <td>{{$produto->data}}</td>
       <td><a href="/produtos/@produto->id">Mostrar</a></td>
     </tr>
    @endforeach
  </table>
</div>
