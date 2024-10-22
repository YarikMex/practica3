@extends('inicio2')


{{-- CONTENIDO1 --}}
@section('contenido1')

    @include('alumnos2/tablahtml')
   
@endsection

{{-- CONTENIDO2 --}}
@section('contenido2')
<h1>Ver Todos los Datos del Alumno</h1>
<form action="{{route('alumnos.destroy', $alumno)}}" method="POST">
  @csrf

  <!-- Número de Control -->
  <div class="row mb-3">
    <label for="noctrl" class="col-sm-3 col-form-label">Número de Control</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="noctrl" name="noctrl" disabled value="{{ $alumno->noctrl }}">
    </div>
  </div>

  <!-- Nombre -->
  <div class="row mb-3">
    <label for="nombre" class="col-sm-3 col-form-label">Nombre</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="nombre" name="nombre" disabled value="{{ $alumno->nombre }}">
    </div>
  </div>

  <!-- Apellido Paterno -->
  <div class="row mb-3">
    <label for="apellidopaterno" class="col-sm-3 col-form-label">Apellido Paterno</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="apellidopaterno" name="apellidopaterno" disabled value="{{ $alumno->apellidopaterno }}">
    </div>
  </div>

  <!-- Apellido Materno -->
  <div class="row mb-3">
    <label for="apellidomaterno" class="col-sm-3 col-form-label">Apellido Materno</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="apellidomaterno" name="apellidomaterno" disabled value="{{ $alumno->apellidomaterno }}">
    </div>
  </div>

  <!-- Sexo -->
  <div class="row mb-3">
    <label for="sexo" class="col-sm-3 col-form-label">Sexo</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="sexo" name="sexo" disabled value="{{ $alumno->sexo == 'M' ? 'Masculino' : 'Femenino' }}">
    </div>
  </div>

  <!-- Email -->
  <div class="row mb-3">
    <label for="email" class="col-sm-3 col-form-label">Email</label>
    <div class="col-sm-9">
      <input type="email" class="form-control" id="email" name="email" disabled value="{{ $alumno->email }}">
    </div>
  </div>

  <!-- Carrera -->
  <div class="row mb-3">
    <label for="carrera" class="col-sm-3 col-form-label">Carrera</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="carrera" name="carrera" disabled value="{{ $alumno->carrera->nombre }}">
    </div>
  </div>

  <button type="submit" class="btn btn-danger">Confirma la Eliminación</button>
  <a href="{{route('alumnos.index')}}" class="btn btn-primary">Regresar</a>

</form>

@endsection
