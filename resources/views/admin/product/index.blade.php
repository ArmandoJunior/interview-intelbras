@extends('layout.layout')
@section('content')
<div class="container">
  <h4>Lista de Geradores configurados</h4>
  <table>
    <thead>
    <tr>
      <th>Id</th>
      <th>Nome</th>
      <th>Custo por KWH</th>
      <th>Ações</th>
    </tr>
    </thead>
    <tbody>
    @forelse($products as $product)
      <tr>
        <td>{{ $product->id }}</td>
        <td>{{ $product->name }}</td>
        <td>R$ {{ number_format($product->cost_per_kwh, 2, ',', '.') }}</td>
        <td>
          <a class="waves-effect waves-light btn" href="{{ "/admin/product/{$product->id}/edit" }}"><i class="material-icons right">edit</i>Editar</a>
        </td>
      </tr>
    @empty
      <tr>
        <h2>Nenhum gerador encontrado!</h2>
      </tr>
    @endforelse
    </tbody>
  </table>
</div>
<div class="pagination teal darken-2">{!! $products->links() !!}</div>
@endsection
