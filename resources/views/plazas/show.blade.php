@extends('plantillas/plantilla2')

{{-- CONTENIDO1 --}}
@section('contenido1')
    @include('plazas.tablahtml')
@endsection

{{-- CONTENIDO2 --}}
@section('contenido2')
<h1>Ver Todos los Datos de la Plaza</h1>
<form action="{{route('plazas.destroy', $plaza)}}" method="POST">
  @csrf
  <div class="row mb-3">
    <label for="idPlaza" class="col-sm-3 col-form-label">ID de la Plaza</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="idPlaza" name="idPlaza" disabled value="{{ $plaza->idPlaza }}">
    </div>
  </div>

  <div class="row mb-3">
    <label for="nombrePlaza" class="col-sm-3 col-form-label">Nombre de la Plaza</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="nombrePlaza" name="nombrePlaza" disabled value="{{ $plaza->nombrePlaza }}">
    </div>
  </div>

  <button type="submit" class="btn btn-danger">Confirma la Eliminación</button>
  <a href="{{route('plazas.index')}}" class="btn btn-primary">Regresar</a>
</form>
@endsection
