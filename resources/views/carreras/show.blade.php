@extends('inicio2')

{{-- CONTENIDO1 --}}
@section('contenido1')
    @include('carreras.tablahtml')
@endsection

{{-- CONTENIDO2 --}}
@section('contenido2')
<h1>Ver Todos los Datos de la Carrera</h1>
<form action="{{ route('carreras.destroy', $carrera) }}" method="POST">
  @csrf

  <!-- ID de la Carrera -->
  <div class="row mb-3">
    <label for="idCarrera" class="col-sm-3 col-form-label">ID de la Carrera</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="idCarrera" name="idCarrera" disabled value="{{ $carrera->id }}">
    </div>
  </div>

  <!-- Nombre de la Carrera -->
  <div class="row mb-3">
    <label for="nombreCarrera" class="col-sm-3 col-form-label">Nombre de la Carrera</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="nombreCarrera" name="nombreCarrera" disabled value="{{ $carrera->nombreCarrera }}">
    </div>
  </div>

  <button type="submit" class="btn btn-danger">Confirma la Eliminación</button>
  <a href="{{route('carreras.index')}}" class="btn btn-primary">Regresar</a>

</form>

@endsection
