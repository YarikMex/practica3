@extends('inicio2')

@section('contenido1')
    @include('personals.tablahtml')
@endsection

@section('contenido2')
<h1>Ver Todos los Datos del Personal</h1>

<form action="{{ route('personals.destroy', $personal) }}" method="POST">
  @csrf
  @method('DELETE')

  <!-- ID -->
  <div class="row mb-3">
    <label for="id" class="col-sm-3 col-form-label">ID</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="id" name="id" disabled value="{{ $personal->id }}">
    </div>
  </div>

  <!-- RFC -->
  <div class="row mb-3">
    <label for="RFC" class="col-sm-3 col-form-label">RFC</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="RFC" name="RFC" disabled value="{{ $personal->RFC }}">
    </div>
  </div>

  <!-- Nombres -->
  <div class="row mb-3">
    <label for="nombres" class="col-sm-3 col-form-label">Nombres</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="nombres" name="nombres" disabled value="{{ $personal->nombres }}">
    </div>
  </div>

  <!-- Apellido Paterno -->
  <div class="row mb-3">
    <label for="apellidop" class="col-sm-3 col-form-label">Apellido Paterno</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="apellidop" name="apellidop" disabled value="{{ $personal->apellidop }}">
    </div>
  </div>

  <!-- Apellido Materno -->
  <div class="row mb-3">
    <label for="apellidom" class="col-sm-3 col-form-label">Apellido Materno</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="apellidom" name="apellidom" disabled value="{{ $personal->apellidom }}">
    </div>
  </div>

  <!-- Licenciatura -->
  <div class="row mb-3">
    <label for="licenciatura" class="col-sm-3 col-form-label">Licenciatura</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="licenciatura" name="licenciatura" disabled value="{{ $personal->licenciatura ?? 'N/A' }}">
    </div>
  </div>

  <!-- Licenciatura Titulado -->
  <div class="row mb-3">
    <label for="licit" class="col-sm-3 col-form-label">Licenciatura Titulado</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="licit" name="licit" disabled value="{{ $personal->licit ? 'Sí' : 'No' }}">
    </div>
  </div>

  <!-- Especialización -->
  <div class="row mb-3">
    <label for="especializacion" class="col-sm-3 col-form-label">Especialización</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="especializacion" name="especializacion" disabled value="{{ $personal->especializacion ?? 'N/A' }}">
    </div>
  </div>

  <!-- Especialización Titulado -->
  <div class="row mb-3">
    <label for="espit" class="col-sm-3 col-form-label">Especialización Titulado</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="espit" name="espit" disabled value="{{ $personal->espit ? 'Sí' : 'No' }}">
    </div>
  </div>

  <!-- Maestría -->
  <div class="row mb-3">
    <label for="maestria" class="col-sm-3 col-form-label">Maestría</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="maestria" name="maestria" disabled value="{{ $personal->maestria ?? 'N/A' }}">
    </div>
  </div>

  <!-- Maestría Titulado -->
  <div class="row mb-3">
    <label for="maetit" class="col-sm-3 col-form-label">Maestría Titulado</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="maetit" name="maetit" disabled value="{{ $personal->maetit ? 'Sí' : 'No' }}">
    </div>
  </div>

  <!-- Doctorado -->
  <div class="row mb-3">
    <label for="doctorado" class="col-sm-3 col-form-label">Doctorado</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="doctorado" name="doctorado" disabled value="{{ $personal->doctorado ?? 'N/A' }}">
    </div>
  </div>

  <!-- Doctorado Titulado -->
  <div class="row mb-3">
    <label for="doctit" class="col-sm-3 col-form-label">Doctorado Titulado</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="doctit" name="doctit" disabled value="{{ $personal->doctit ? 'Sí' : 'No' }}">
    </div>
  </div>

  <!-- Fecha de Ingreso SEP -->
  <div class="row mb-3">
    <label for="fechasingsep" class="col-sm-3 col-form-label">Fecha de Ingreso SEP</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="fechasingsep" name="fechasingsep" disabled value="{{ $personal->fechasingsep ? $personal->fechasingsep->format('d/m/Y') : 'N/A' }}">
    </div>
  </div>

  <!-- Fecha de Ingreso Institución -->
  <div class="row mb-3">
    <label for="fechaisingins" class="col-sm-3 col-form-label">Fecha de Ingreso Institución</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="fechaisingins" name="fechaisingins" disabled value="{{ $personal->fechaisingins ? $personal->fechaisingins->format('d/m/Y') : 'N/A' }}">
    </div>
  </div>

  <!-- Departamento -->
  <div class="row mb-3">
    <label for="depto_id" class="col-sm-3 col-form-label">Departamento</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="depto_id" name="depto_id" disabled value="{{ $personal->depto->nombredepto ?? 'Sin Depto' }}">
    </div>
  </div>

  <!-- Puesto -->
  <div class="row mb-3">
    <label for="puesto_id" class="col-sm-3 col-form-label">Puesto</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="puesto_id" name="puesto_id" disabled value="{{ $personal->puesto->nombrePuesto ?? 'Sin Puesto' }}">
    </div>
  </div>

  <button type="submit" class="btn btn-danger">Confirma la Eliminación</button>
  <a href="{{ route('personals.index') }}" class="btn btn-primary">Regresar</a>
</form>
@endsection
