@extends('inicio2')

@section('contenido1')
    @include('reticulas.tablahtml')
@endsection

@section('contenido2')
<h1>Ver Retícula</h1>
<form action="{{ route('reticulas.destroy', $reticula->id) }}" method="POST">
    @csrf

    <!-- Descripción -->
    <div class="row mb-3">
        <label for="descripcion" class="col-sm-3 col-form-label">Descripción</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="descripcion" name="descripcion" disabled value="{{ $reticula->descripcion }}">
        </div>
    </div>

    <!-- Fecha en Vigor -->
    <div class="row mb-3">
        <label for="fechaEnVigor" class="col-sm-3 col-form-label">Fecha en Vigor</label>
        <div class="col-sm-9">
          <input type="date" class="form-control" id="fechaEnVigor" name="fechaEnVigor" disabled value="{{ $reticula->fechaEnVigor }}">
        </div>
    </div>

    <!-- Carrera -->
    <div class="row mb-3">
        <label for="idCarrera" class="col-sm-3 col-form-label">Carrera</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="idCarrera" name="idCarrera" disabled value="{{ $reticula->carrera->nombreCarrera }}">
        </div>
    </div>

    <button type="submit" class="btn btn-danger">Confirma la Eliminación</button>
    <a href="{{ route('reticulas.index') }}" class="btn btn-primary">Regresar</a>
</form>
@endsection
