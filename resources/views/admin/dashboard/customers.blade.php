@extends('layout.layout')
@section('content')
  <div class="container">
    <h3>Cliente</h3>
    <div class='table-wrapper'>
      <table>
        <thead>
        <tr>
          <th>Id</th>
          <th>Nome</th>
          <th>Email</th>
          <th>Telefone</th>
          <th>Rua</th>
          <th>Numero</th>
          <th>Cidade</th>
          <th>UF</th>
          <th>Conta de Energia</th>
          <th>Ações</th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td>{{ $customer->id }}</td>
          <td>{{ $customer->name }}</td>
          <td>{{ $customer->email }}</td>
          <td>{{ $customer->phone }}</td>
          <td>{{ $customer->street }}</td>
          <td>{{ $customer->number }}</td>
          <td>{{ $customer->city }}</td>
          <td>{{ $customer->state->initials }}</td>
          <td>{{ $customer->energy_bill_amount }}</td>
          <td>
            <a class="btn-floating btn-large waves-effect waves-light" href="{{ route('dashboard.budgets') }}"><i class="material-icons right">arrow_back</i></a>
          </td>
        </tr>
        </tbody>
      </table>
    </div>
  </div>
@endsection
