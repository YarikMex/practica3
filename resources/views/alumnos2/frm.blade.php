@extends('inicio2')

{{-- CONTENIDO1 --}}
@section('contenido1')

    @include('alumnos2/tablahtml')
    
@endsection


{{-- CONTENIDO2 --}}
@section('contenido2')
<h1>Formulario Alumnos</h1>
<ul>
@foreach ($errors->all() as $error )
  <li>{{ $error }}</li>
@endforeach
</ul>

@if ($accion == 'C')
  <h1>Insertando</h1>
  <form action="{{route('alumnos.store')}}" method="POST">
@elseif ($accion == 'E')
  <h1>Editando</h1>
  <form action="{{ route('alumnos.update', $alumno->id)}}" method="POST">
@elseif ($accion == 'D')
  <h1>Eliminando</h1>
  <form action="{{route('alumnos.destroy', $alumno)}}" method="POST">
@endif

    @csrf

    <!-- Nombre -->
    <div class="row mb-3">
        <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="nombre" name="nombre" required value="{{ old('nombre', $alumno->nombre ?? '') }}" {{ $des }}>
          @error("nombre")
          <p class="text-danger">error en: {{ $message }}</p>
          @enderror
        </div>
    </div>

    <!-- Apellido Paterno -->
    <div class="row mb-3">
        <label for="apellidopaterno" class="col-sm-2 col-form-label">Apellido Paterno</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="apellidopaterno" name="apellidopaterno" required value="{{ old('apellidopaterno', $alumno->apellidopaterno ?? '') }}" {{ $des }}>
          @error("apellidopaterno")
          <p class="text-danger">error en: {{ $message }}</p>
          @enderror
        </div>
    </div>

    <!-- Apellido Materno -->
    <div class="row mb-3">
        <label for="apellidomaterno" class="col-sm-2 col-form-label">Apellido Materno</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="apellidomaterno" name="apellidomaterno" required value="{{ old('apellidomaterno', $alumno->apellidomaterno ?? '') }}" {{ $des }}>
          @error("apellidomaterno")
          <p class="text-danger">error en: {{ $message }}</p>
          @enderror
        </div>
    </div>

    <!-- Sexo -->
    <div class="row mb-3">
        <label for="sexo" class="col-sm-2 col-form-label">Sexo</label>
        <div class="col-sm-10">
          <select class="form-select" id="sexo" name="sexo" required {{ $des }}>
            <option value="M" {{ old('sexo', $alumno->sexo ?? '') == 'M' ? 'selected' : '' }}>Masculino</option>
            <option value="F" {{ old('sexo', $alumno->sexo ?? '') == 'F' ? 'selected' : '' }}>Femenino</option>
          </select>
          @error("sexo")
          <p class="text-danger">error en: {{ $message }}</p>
          @enderror
        </div>
    </div>


    <!-- Número de Control -->
    <div class="row mb-3">
        <label for="noctrl" class="col-sm-2 col-form-label">Número de Control</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="noctrl" name="noctrl" required value="{{ old('noctrl', $alumno->noctrl ?? '') }}" {{ $des }}>
          @error("noctrl")
          <p class="text-danger">error en: {{ $message }}</p>
          @enderror
        </div>
    </div>

  <!-- Carrera (relación con tabla de carrera) -->
@if ($accion != 'D')
<div class="row mb-3">
    <label for="carrera_id" class="col-sm-2 col-form-label">Carrera</label>
    <div class="col-sm-10">
        <select class="form-select" id="carrera_id" name="carrera_id" required {{ $des }}>
            @foreach ($carreras as $carrera)
                <option value="{{ $carrera->id }}" {{ old('carrera_id', $alumno->carrera_id ?? '') == $carrera->id ? 'selected' : '' }}>
                    {{ $carrera->nombre }}
                </option>
            @endforeach
        </select>
        @error("carrera_id")
        <p class="text-danger">error en: {{ $message }}</p>
        @enderror
    </div>
</div>
@endif

    <div class="row mb-3">
        <div class="col-sm-10 offset-sm-2">
          <button type="submit" class="btn btn-primary">{{ $txtbtn }}</button>
        </div>
    </div>

  </form>

@endsection
