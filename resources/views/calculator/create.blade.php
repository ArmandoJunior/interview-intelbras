@extends('layout.layout_cliente')
@section('content')
  <div class="container">
    <h3>Orçar Sistema de Energia Solar</h3>
    <form method="post" action="/calculator/store">
      {!! csrf_field() !!}

      <label for="name">Nome Completo</label>
      <input type="text" name="name" id="name">

      <label for="email">E-mail</label>
      <input type="email" name="email" id="email">

      <label for="phone">Telefone</label>
      <input type="text" name="phone" id="phone">

      <label for="street">Rua</label>
      <input type="text" name="street" id="street">

      <label for="number">Número</label>
      <input type="text" name="number" id="number">

      <label for="city">Cidade</label>
      <input type="text" name="city" id="city">

      <label for="energy_bill_amount">Conta de energia</label>
      <input type="text" name="energy_bill_amount" id="energy_bill_amount">

      <div class="input-field">
        <select name="state_id">
          <option value="" disabled selected>Selecione o Estado</option>
          @foreach($states as $state)
            <option value="{{ $state->id }}">{{ $state->name }}</option>
          @endforeach
        </select>
        <label for="state_id">Estado</label>
      </div>

      <button class="btn waves-effect blue darken-4" type="submit" name="action">Enviar
        <i class="material-icons right">send</i>
      </button>
    </form>
  </div>
@endsection
