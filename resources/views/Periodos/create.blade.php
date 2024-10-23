@extends('inicio2')

{{-- CONTENIDO1 --}}
@section('contenido1')
    @include('materias.tablahtml')
@endsection

{{-- CONTENIDO2 --}}
@section('contenido2')

<h1>Insertar Materia</h1>

<form action="{{ route('materias.store') }}" method="POST">
    @csrf

    <!-- Nombre de la Materia -->
    <div class="row mb-3">
        <label for="nombreMateria" class="col-sm-2 col-form-label">Nombre de la Materia</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="nombreMateria" name="nombreMateria" required value="{{ old('nombreMateria') }}">
          @error("nombreMateria")
          <p class="text-danger">Error en: {{ $message }}</p>
          @enderror
        </div>
    </div>

    <!-- Nivel (L o M) -->
    <div class="row mb-3">
        <label for="nivel" class="col-sm-2 col-form-label">Nivel</label>
        <div class="col-sm-10">
          <select class="form-select" id="nivel" name="nivel" required>
            <option value="L" {{ old('nivel') == 'L' ? 'selected' : '' }}>Licenciatura</option>
            <option value="M" {{ old('nivel') == 'M' ? 'selected' : '' }}>Maestría</option>
          </select>
          @error("nivel")
          <p class="text-danger">Error en: {{ $message }}</p>
          @enderror
        </div>
    </div>

    <!-- Nombre Mediano -->
    <div class="row mb-3">
        <label for="nombreMediano" class="col-sm-2 col-form-label">Nombre Mediano</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="nombreMediano" name="nombreMediano" required value="{{ old('nombreMediano') }}">
          @error("nombreMediano")
          <p class="text-danger">Error en: {{ $message }}</p>
          @enderror
        </div>
    </div>

    <!-- Nombre Corto -->
    <div class="row mb-3">
        <label for="nombreCorto" class="col-sm-2 col-form-label">Nombre Corto</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="nombreCorto" name="nombreCorto" required value="{{ old('nombreCorto') }}">
          @error("nombreCorto")
          <p class="text-danger">Error en: {{ $message }}</p>
          @enderror
        </div>
    </div>

    <!-- Modalidad (P o E) -->
    <div class="row mb-3">
        <label for="modalidad" class="col-sm-2 col-form-label">Modalidad</label>
        <div class="col-sm-10">
          <select class="form-select" id="modalidad" name="modalidad" required>
            <option value="P" {{ old('modalidad') == 'P' ? 'selected' : '' }}>Presencial</option>
            <option value="E" {{ old('modalidad') == 'E' ? 'selected' : '' }}>En línea</option>
          </select>
          @error("modalidad")
          <p class="text-danger">Error en: {{ $message }}</p>
          @enderror
        </div>
    </div>

    <!-- Retícula -->
    <div class="row mb-3">
        <label for="idReticula" class="col-sm-2 col-form-label">Retícula</label>
        <div class="col-sm-10">
          <select class="form-select" id="idReticula" name="idReticula" required>
            @foreach ($reticulas as $reticula)
              <option value="{{ $reticula->id }}" {{ old('idReticula') == $reticula->id ? 'selected' : '' }}>{{ $reticula->descripcion }}</option>
            @endforeach
          </select>
          @error("idReticula")
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
