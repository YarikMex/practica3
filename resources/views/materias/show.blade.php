@extends('inicio2')

@section('contenido1')
    @include('materias.tablahtml')
@endsection

@section('contenido2')
<h1>Ver Todos los Datos de la Materia</h1>
<form action="{{route('materias.destroy', $materia)}}" method="POST">
  @csrf

  <!-- ID de la Materia -->
  <div class="row mb-3">
    <label for="id" class="col-sm-3 col-form-label">ID de la Materia</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="id" name="id" disabled value="{{ $materia->id }}">
    </div>
  </div>

  <!-- Nombre de la Materia -->
  <div class="row mb-3">
    <label for="nombreMateria" class="col-sm-3 col-form-label">Nombre de la Materia</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="nombreMateria" name="nombreMateria" disabled value="{{ $materia->nombreMateria }}">
    </div>
  </div>

  <!-- Nivel -->
  <div class="row mb-3">
    <label for="nivel" class="col-sm-3 col-form-label">Nivel</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="nivel" name="nivel" disabled value="{{ $materia->nivel == 'L' ? 'Licenciatura' : 'Maestría' }}">
    </div>
  </div>

  <!-- Nombre Mediano -->
  <div class="row mb-3">
    <label for="nombreMediano" class="col-sm-3 col-form-label">Nombre Mediano</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="nombreMediano" name="nombreMediano" disabled value="{{ $materia->nombreMediano }}">
    </div>
  </div>

  <!-- Modalidad -->
  <div class="row mb-3">
    <label for="modalidad" class="col-sm-3 col-form-label">Modalidad</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="modalidad" name="modalidad" disabled value="{{ $materia->modalidad == 'P' ? 'Presencial' : 'En línea' }}">
    </div>
  </div>

  <button type="submit" class="btn btn-danger">Confirma la Eliminación</button>
  <a href="{{route('materias.index')}}" class="btn btn-primary">Regresar</a>

</form>

@endsection
