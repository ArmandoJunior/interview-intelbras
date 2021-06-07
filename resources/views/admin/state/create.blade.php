@extends('layout.layout')
@section('content')
<div class="container">
  <h3>Cadastrar Gerador</h3>
  <form method="post" action="/admin/state/store">
    {!! csrf_field() !!}
    <label for="name">Modelo</label>
    <input type="text" name="name" id="name" placeholder="Modelo">
    <label for="cost_per_kwh">Custo por KWH</label>
    <input type="text" name="cost_per_kwh" id="cost_per_kwh" placeholder="Custo por KWH">
    <button type="submit">enviar</button>
  </form>
</div>
@endsection
