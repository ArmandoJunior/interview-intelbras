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
    @forelse($states as $state)
      <tr>
        <td>{{ $state->id }}</td>
        <td>{{ $state->name }}</td>
        <td>R$ {{ number_format($state->kwh_amount, 2, ',', '.') }}</td>
        <td>
        <td>
          <a class="waves-effect waves-light btn" href="{{ "/admin/state/{$state->id}/edit" }}"><i class="material-icons right">edit</i>Editar</a>
        </td>
      </tr>
    @empty
      <tr>
        <h5>Nenhum Estado encontrado!</h5>
      </tr>
    @endforelse
    </tbody>
  </table>
</div>
<div class="pagination teal darken-2">{!! $states->links() !!}</div>
@endsection
