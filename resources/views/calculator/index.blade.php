@extends('layout.layout_cliente')
@section('content')
  <div class="container">
    <h3><stronger>Orçamento</stronger> - {{ ucwords($budget->customer->name) }}</h3>
    <br>
    <table>
      <thead>
      <tr>
        <th>Número</th>
        <th>Valor aproximado do Equipamento</th>
        <th>Tempo de retorno do investimento</th>
      </tr>
      </thead>

      <tbody>
      <tr>
        <td># {{ $budget->id }}</td>
        <td>R$ {{ $budget->amount }}</td>
        <td>{{ $budget->months }} meses</td>
      </tr>
      </tbody>
    </table>
  </div>
@endsection
