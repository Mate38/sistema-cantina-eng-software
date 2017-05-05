<h1>Testando</h1>

<table>
  <tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Valor</th>
  </tr>
  @foreach($produtos as $produto)
    <tr>
      <td>{{$produtos->id}}</td>
      <td>{{$produtos->nome}}</td>
      <td>{{$produtos->valor}}</td>
    </tr>
  @endforeach
  </table>