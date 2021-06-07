@extends('layout.layout')
@section('content')
  <div class="container">
    <h3>Orçamentos</h3>
    <table>
      <thead>
      <tr>
        <th>Número</th>
        <th>Valor</th>
        <th>Retorno Investido</th>
        <th>Estado</th>
        <th>KWH no Estado</th>
        <th>Custo Equipamento/KWH</th>
        <th>Nome do Cliente</th>
        <th>Conta de Energia</th>
        <th>Ações</th>
      </tr>
      </thead>
      <tbody>
      @forelse($budgets as $budget)
        <tr>
          <td>{{ $budget->id }}</td>
          <td>R$ {{ number_format($budget->amount, 2, ',', '.') }}</td>
          <td>{{ $budget->months }} meses</td>
          <td>{{ $budget->state_name }}</td>
          <td>R$ {{ number_format($budget->state_kwh_amount, 2, ',', '.') }}</td>
          <td>R$ {{ number_format($budget->product_kwh_cost, 2, ',', '.') }}</td>
          <td>{{ ucwords($budget->customer->name) }}</td>
          <td>R$ {{ number_format($budget->customer->energy_bill_amount, 2, ',', '.') }}</td>
          <td>
            <a class="waves-effect waves-light btn" href="{{ "/admin/dashboard/customer/{$budget->customer->id}" }}"><i class="material-icons right">search</i>Detalhar</a>
          </td>
        </tr>
      @empty
        <tr>
          <h2>Nenhum orçamento encontrado!</h2>
        </tr>
      @endforelse
      </tbody>
    </table>
  </div>
  <div class="pagination teal darken-2">{!! $budgets->links() !!}</div>
@endsection

