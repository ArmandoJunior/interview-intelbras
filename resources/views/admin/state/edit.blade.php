@extends('layout.layout')
@section('content')
<div class="container">
  <h3>Editar Estado</h3>
  <form method="post" action="{{ "/admin/state/{$state->id}/update" }}">
    {!! csrf_field() !!}
    <label for="name">Estadp</label>
    <input type="text" name="name" id="name" value="{{ $state->name }}">
    <label for="initials">Sigla</label>
    <input type="text" name="initials" id="initials" value="{{ $state->initials }}">
    <label for="kwh_amount">Custo por KWH</label>
    <input type="text" name="kwh_amount" id="kwh_amount" value= "R$ {{ $state->kwh_amount }}">
    <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
      <i class="material-icons right">send</i>
    </button>
  </form>
</div>
@endsection
