@extends('inicio2')

{{-- CONTENIDO1 --}}
@section('contenido1')
    @include('reticulas.tablahtml')
@endsection

{{-- CONTENIDO2 --}}
@section('contenido2')

<h1>Insertar Retícula</h1>

<form action="{{ route('reticulas.store') }}" method="POST">
    @csrf

    <!-- Descripción -->
    <div class="row mb-3">
        <label for="descripcion" class="col-sm-2 col-form-label">Descripción</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="descripcion" name="descripcion" required value="{{ old('descripcion') }}">
          @error("descripcion")
          <p class="text-danger">Error en: {{ $message }}</p>
          @enderror
        </div>
    </div>

    <!-- Fecha en Vigor -->
    <div class="row mb-3">
        <label for="fechaEnVigor" class="col-sm-2 col-form-label">Fecha en Vigor</label>
        <div class="col-sm-10">
          <input type="date" class="form-control" id="fechaEnVigor" name="fechaEnVigor" required value="{{ old('fechaEnVigor') }}">
          @error("fechaEnVigor")
          <p class="text-danger">Error en: {{ $message }}</p>
          @enderror
        </div>
    </div>

    <!-- Carrera -->
    <div class="row mb-3">
        <label for="idCarrera" class="col-sm-2 col-form-label">Carrera</label>
        <div class="col-sm-10">
          <select class="form-select" id="idCarrera" name="idCarrera" required>
            @foreach ($carreras as $carrera)
              <option value="{{ $carrera->id }}">{{ $carrera->nombreCarrera }}</option>
            @endforeach
          </select>
          @error("idCarrera")
          <p class="text-danger">Error en: {{ $message }}</p>
          @enderror
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-sm-10 offset-sm-2">
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </div>

</form>

@endsection
