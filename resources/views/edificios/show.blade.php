@extends('inicio2')

@section('contenido1')
    @include('edificios.tablahtml')
@endsection

@section('contenido2')
<h1>Ver Detalles del Edificio</h1>
<form action="{{ route('edificios.destroy', $edificio->id) }}" method="POST">
  @csrf

  <!-- Nombre del Edificio -->
  <div class="row mb-3">
    <label for="nombreedificio" class="col-sm-3 col-form-label">Nombre del Edificio</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="nombreedificio" name="nombreedificio" disabled value="{{ $edificio->nombreedificio }}">
    </div>
  </div>

  <!-- Nombre Corto -->
  <div class="row mb-3">
    <label for="nombrecorto" class="col-sm-3 col-form-label">Nombre Corto</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="nombrecorto" name="nombrecorto" disabled value="{{ $edificio->nombrecorto }}">
    </div>
  </div>

  <button type="submit" class="btn btn-danger">Confirme la Eliminación</button>
  <a href="{{ route('edificios.index') }}" class="btn btn-primary">Regresar</a>
</form>

@endsection
