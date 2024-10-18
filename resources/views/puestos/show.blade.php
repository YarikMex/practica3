@extends('plantillas/plantilla2')

{{-- CONTENIDO1 --}}
@section('contenido1')

    @include('puestos.tablahtml')

@endsection

{{-- CONTENIDO2 --}}
@section('contenido2')
<h1>Ver Todos los Datos del Puesto</h1>
<form action="{{route('puestos.destroy', $puesto)}}" method="POST">
  @csrf

  <!-- ID del Puesto -->
  <div class="row mb-3">
    <label for="id" class="col-sm-3 col-form-label">ID del Puesto</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="id" name="id" disabled value="{{ $puesto->id }}"> <!-- Cambiado a id -->
    </div>
  </div>

  <!-- Nombre del Puesto -->
  <div class="row mb-3">
    <label for="nombrePuesto" class="col-sm-3 col-form-label">Nombre del Puesto</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="nombrePuesto" name="nombrePuesto" disabled value="{{ $puesto->nombrePuesto }}">
    </div>
  </div>

  <!-- Tipo de Puesto -->
  <div class="row mb-3">
    <label for="tipoPuesto" class="col-sm-3 col-form-label">Tipo de Puesto</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="tipoPuesto" name="tipoPuesto" disabled value="{{ $puesto->tipoPuesto }}">
    </div>
  </div>

  <button type="submit" class="btn btn-danger">Confirma la Eliminación</button>
  <a href="{{route('puestos.index')}}" class="btn btn-primary">Regresar</a>

</form>

@endsection
