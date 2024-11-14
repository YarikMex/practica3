@extends('inicio2')

@section('contenido1')
    @include('lugares.tablahtml')
@endsection

@section('contenido2')
<h1>Ver Detalles del Lugar</h1>
<form action="{{ route('lugares.destroy', $lugar->id) }}" method="POST">
  @csrf

  <!-- Nombre del Lugar -->
  <div class="row mb-3">
    <label for="nombrelugar" class="col-sm-3 col-form-label">Nombre del Lugar</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="nombrelugar" name="nombrelugar" disabled value="{{ $lugar->nombrelugar }}">
    </div>
  </div>

  <!-- Nombre Corto -->
  <div class="row mb-3">
    <label for="nombrecorto" class="col-sm-3 col-form-label">Nombre Corto</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="nombrecorto" name="nombrecorto" disabled value="{{ $lugar->nombrecorto }}">
    </div>
  </div>

  <!-- Edificio -->
  <div class="row mb-3">
    <label for="edificio" class="col-sm-3 col-form-label">Edificio</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="edificio" name="edificio" disabled value="{{ $lugar->edificio->nombreedificio ?? 'N/A' }}">
    </div>
  </div>

  <button type="submit" class="btn btn-danger">Confirme la Eliminación</button>
  <a href="{{ route('lugares.index') }}" class="btn btn-primary">Regresar</a>
</form>

@endsection
