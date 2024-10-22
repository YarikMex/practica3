@extends('inicio2')

{{-- CONTENIDO1 --}}
@section('contenido1')
    @include('deptos.tablahtml')
@endsection

{{-- CONTENIDO2 --}}
@section('contenido2')
<h1>Ver Todos los Datos del Departamento</h1>
<form action="{{route('deptos.destroy', $depto)}}" method="POST">
  @csrf

  <!-- ID del Departamento -->
  <div class="row mb-3">
    <label for="idDepto" class="col-sm-3 col-form-label">ID del Departamento</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="idDepto" name="idDepto" disabled value="{{ $depto->idDepto }}">
    </div>
  </div>

  <!-- Nombre Completo del Departamento -->
  <div class="row mb-3">
    <label for="nombredepto" class="col-sm-3 col-form-label">Nombre Completo</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="nombredepto" name="nombredepto" disabled value="{{ $depto->nombredepto }}">
    </div>
  </div>

  <!-- Nombre Mediano del Departamento -->
  <div class="row mb-3">
    <label for="nombremediano" class="col-sm-3 col-form-label">Nombre Mediano</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="nombremediano" name="nombremediano" disabled value="{{ $depto->nombremediano }}">
    </div>
  </div>

  <!-- Nombre Corto del Departamento -->
  <div class="row mb-3">
    <label for="nombrecorto" class="col-sm-3 col-form-label">Nombre Corto</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="nombrecorto" name="nombrecorto" disabled value="{{ $depto->nombrecorto }}">
    </div>
  </div>

  <button type="submit" class="btn btn-danger">Confirma la Eliminación</button>
  <a href="{{route('deptos.index')}}" class="btn btn-primary">Regresar</a>

</form>

@endsection
