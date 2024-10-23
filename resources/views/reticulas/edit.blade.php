@extends('inicio2')

@section('contenido1')
    @include('reticulas.tablahtml')
@endsection

@section('contenido2')
<h1>Editar Retícula</h1>

<form action="{{ route('reticulas.update', $reticula->id) }}" method="POST">
    @csrf

    <!-- Descripción -->
    <div class="row mb-3">
        <label for="descripcion" class="col-sm-2 col-form-label">Descripción</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="descripcion" name="descripcion" required value="{{ $reticula->descripcion }}">
        </div>
    </div>

    <!-- Fecha en Vigor -->
    <div class="row mb-3">
        <label for="fechaEnVigor" class="col-sm-2 col-form-label">Fecha en Vigor</label>
        <div class="col-sm-10">
          <input type="date" class="form-control" id="fechaEnVigor" name="fechaEnVigor" required value="{{ $reticula->fechaEnVigor }}">
        </div>
    </div>

    <!-- Carrera -->
    <div class="row mb-3">
        <label for="idCarrera" class="col-sm-2 col-form-label">Carrera</label>
        <div class="col-sm-10">
          <select class="form-select" id="idCarrera" name="idCarrera" required>
            @foreach ($carreras as $carrera)
              <option value="{{ $carrera->id }}" {{ $reticula->idCarrera == $carrera->id ? 'selected' : '' }}>{{ $carrera->nombreCarrera }}</option>
            @endforeach
          </select>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-sm-10 offset-sm-2">
          <button type="submit" class="btn btn-primary">Actualizar</button>
        </div>
    </div>
</form>
@endsection
