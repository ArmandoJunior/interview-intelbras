@extends('layout.layout')
@section('content')
<div class="container">
  <h3>Cadastrar Gerador</h3>
  <form method="post" action="/admin/product/store">
    {!! csrf_field() !!}
    <label for="name">Modelo</label>
    <input type="text" name="name" id="name" placeholder="Modelo">
    <label for="cost_per_kwh">Custo por KWH</label>
    <input type="text" name="cost_per_kwh" id="cost_per_kwh" placeholder="Custo por KWH">
    <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
      <i class="material-icons right">send</i>
    </button>
  </form>
</div>
@endsection
