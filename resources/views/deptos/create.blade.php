@extends('inicio2')

{{-- CONTENIDO1 --}}
@section('contenido1')
    {{-- Si deseas mostrar la tabla aquí --}}
    @include('deptos.tablahtml')
@endsection

{{-- CONTENIDO2 --}}
@section('contenido2')

<h1>Insertar Departamento</h1>

<form action="{{ route('deptos.store') }}" method="POST">
    @csrf

    <!-- Nombre del Departamento -->
    <div class="row mb-3">
        <label for="nombredepto" class="col-sm-2 col-form-label">Nombre del Departamento</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="nombredepto" name="nombredepto" required value="{{ old('nombredepto') }}">
          @error("nombredepto")
          <p class="text-danger">Error en: {{ $message }}</p>
          @enderror
        </div>
    </div>

    <!-- Nombre Mediano del Departamento -->
    <div class="row mb-3">
        <label for="nombremediano" class="col-sm-2 col-form-label">Nombre Mediano</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="nombremediano" name="nombremediano" required value="{{ old('nombremediano') }}">
          @error("nombremediano")
          <p class="text-danger">Error en: {{ $message }}</p>
          @enderror
        </div>
    </div>

    <!-- Nombre Corto del Departamento -->
    <div class="row mb-3">
        <label for="nombrecorto" class="col-sm-2 col-form-label">Nombre Corto</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="nombrecorto" name="nombrecorto" required value="{{ old('nombrecorto') }}">
          @error("nombrecorto")
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
