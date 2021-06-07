@extends('layout.layout')
@section('content')
<div class="container">
  <h3>Editar Gerador</h3>
  <form method="post" action="{{ "/admin/product/{$product->id}/update" }}">
    {!! csrf_field() !!}
    <label for="name">Modelo</label>
    <input type="text" name="name" id="name" value="{{ $product->name }}">
    <label for="cost_per_kwh">Custo por KWH</label>
    <input type="text" name="cost_per_kwh" id="cost_per_kwh" value="R$ {{ $product->cost_per_kwh }}">
    <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
      <i class="material-icons right">send</i>
    </button>
  </form>
</div>
@endsection
