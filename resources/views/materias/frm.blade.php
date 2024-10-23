@extends('inicio2')

@section('contenido1')
    @include('materias.tablahtml')
@endsection

@section('contenido2')
    <h1>{{ $accion == 'C' ? 'Insertar Materia' : ($accion == 'E' ? 'Editar Materia' : 'Eliminar Materia') }}</h1>

    <form action="{{ $accion == 'C' ? route('materias.store') : ($accion == 'E' ? route('materias.update', $materia->id) : route('materias.destroy', $materia)) }}" method="POST">
        @csrf

        <!-- Nombre de la Materia -->
        <div class="row mb-3">
            <label for="nombreMateria" class="col-sm-2 col-form-label">Nombre de la Materia</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nombreMateria" name="nombreMateria" required value="{{ old('nombreMateria', $materia->nombreMateria ?? '') }}" {{ $des }}>
              @error("nombreMateria")
              <p class="text-danger">Error en: {{ $message }}</p>
              @enderror
            </div>
        </div>

        <!-- Nivel (L o M) -->
        <div class="row mb-3">
            <label for="nivel" class="col-sm-2 col-form-label">Nivel</label>
            <div class="col-sm-10">
              <select class="form-select" id="nivel" name="nivel" required {{ $des }}>
                <option value="L" {{ old('nivel', $materia->nivel ?? '') == 'L' ? 'selected' : '' }}>Licenciatura</option>
                <option value="M" {{ old('nivel', $materia->nivel ?? '') == 'M' ? 'selected' : '' }}>Maestría</option>
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
              <input type="text" class="form-control" id="nombreMediano" name="nombreMediano" required value="{{ old('nombreMediano', $materia->nombreMediano ?? '') }}" {{ $des }}>
              @error("nombreMediano")
              <p class="text-danger">Error en: {{ $message }}</p>
              @enderror
            </div>
        </div>

        <!-- Nombre Corto -->
        <div class="row mb-3">
            <label for="nombreCorto" class="col-sm-2 col-form-label">Nombre Corto</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nombreCorto" name="nombreCorto" required value="{{ old('nombreCorto', $materia->nombreCorto ?? '') }}" {{ $des }}>
              @error("nombreCorto")
              <p class="text-danger">Error en: {{ $message }}</p>
              @enderror
            </div>
        </div>

        <!-- Modalidad (P o E) -->
        <div class="row mb-3">
            <label for="modalidad" class="col-sm-2 col-form-label">Modalidad</label>
            <div class="col-sm-10">
              <select class="form-select" id="modalidad" name="modalidad" required {{ $des }}>
                <option value="P" {{ old('modalidad', $materia->modalidad ?? '') == 'P' ? 'selected' : '' }}>Presencial</option>
                <option value="E" {{ old('modalidad', $materia->modalidad ?? '') == 'E' ? 'selected' : '' }}>En línea</option>
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
              <select class="form-select" id="idReticula" name="idReticula" required {{ $des }}>
                @foreach ($reticulas as $reticula)
                  <option value="{{ $reticula->id }}" {{ old('idReticula', $materia->idReticula ?? '') == $reticula->id ? 'selected' : '' }}>{{ $reticula->descripcion }}</option>
                @endforeach
              </select>
              @error("idReticula")
              <p class="text-danger">Error en: {{ $message }}</p>
              @enderror
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-10 offset-sm-2">
              <button type="submit" class="btn btn-primary">{{ $txtbtn }}</button>
            </div>
        </div>
    </form>
@endsection
