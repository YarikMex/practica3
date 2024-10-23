@extends('inicio2')

{{-- CONTENIDO1 --}}
@section('contenido1')
    @include('materias.tablahtml')
@endsection

{{-- CONTENIDO2 --}}
@section('contenido2')

<h1>Editar Materia</h1>

<form action="{{ route('materias.update', $materia->id) }}" method="POST">
    @csrf

    <!-- Nombre de la Materia -->
    <div class="row mb-3">
      <label for="nombreMateria" class="col-sm-2 col-form-label">Nombre de la Materia</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nombreMateria" name="nombreMateria" required value="{{ $materia->nombreMateria }}">
      </div>
    </div>

    <!-- Nivel (L o M) -->
    <div class="row mb-3">
      <label for="nivel" class="col-sm-2 col-form-label">Nivel</label>
      <div class="col-sm-10">
        <select class="form-select" id="nivel" name="nivel" required>
          <option value="L" {{ $materia->nivel == 'L' ? 'selected' : '' }}>Licenciatura</option>
          <option value="M" {{ $materia->nivel == 'M' ? 'selected' : '' }}>Maestría</option>
        </select>
      </div>
    </div>

    <!-- Nombre Mediano -->
    <div class="row mb-3">
      <label for="nombreMediano" class="col-sm-2 col-form-label">Nombre Mediano</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nombreMediano" name="nombreMediano" required value="{{ $materia->nombreMediano }}">
      </div>
    </div>

    <!-- Nombre Corto -->
    <div class="row mb-3">
      <label for="nombreCorto" class="col-sm-2 col-form-label">Nombre Corto</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nombreCorto" name="nombreCorto" required value="{{ $materia->nombreCorto }}">
      </div>
    </div>

    <!-- Modalidad (P o E) -->
    <div class="row mb-3">
      <label for="modalidad" class="col-sm-2 col-form-label">Modalidad</label>
      <div class="col-sm-10">
        <select class="form-select" id="modalidad" name="modalidad" required>
          <option value="P" {{ $materia->modalidad == 'P' ? 'selected' : '' }}>Presencial</option>
          <option value="E" {{ $materia->modalidad == 'E' ? 'selected' : '' }}>En línea</option>
        </select>
      </div>
    </div>

    <!-- Retícula -->
    <div class="row mb-3">
      <label for="idReticula" class="col-sm-2 col-form-label">Retícula</label>
      <div class="col-sm-10">
        <select class="form-select" id="idReticula" name="idReticula" required>
          @foreach ($reticulas as $reticula)
            <option value="{{ $reticula->id }}" {{ $materia->idReticula == $reticula->id ? 'selected' : '' }}>{{ $reticula->descripcion }}</option>
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
