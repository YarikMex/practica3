@extends('inicio2')

@section('contenido1')
    @include('deptos.tablahtml')
@endsection

@section('contenido2')
    <h1>{{ $accion == 'C' ? 'Insertar Departamento' : ($accion == 'E' ? 'Editar Departamento' : 'Eliminar Departamento') }}</h1>

    <form action="{{ $accion == 'C' ? route('deptos.store') : ($accion == 'E' ? route('deptos.update', $depto->idDepto) : route('deptos.destroy', $depto)) }}" method="POST">
        @csrf
        <!-- Nombre Completo del Departamento -->
        <div class="row mb-3">
            <label for="nombredepto" class="col-sm-2 col-form-label">Nombre Completo</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nombredepto" name="nombredepto" required value="{{ old('nombredepto', $depto->nombredepto ?? '') }}" {{ $des }}>
              @error("nombredepto")
              <p class="text-danger">Error en: {{ $message }}</p>
              @enderror
            </div>
        </div>

        <!-- Nombre Mediano del Departamento -->
        <div class="row mb-3">
            <label for="nombremediano" class="col-sm-2 col-form-label">Nombre Mediano</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nombremediano" name="nombremediano" required value="{{ old('nombremediano', $depto->nombremediano ?? '') }}" {{ $des }}>
              @error("nombremediano")
              <p class="text-danger">Error en: {{ $message }}</p>
              @enderror
            </div>
        </div>

        <!-- Nombre Corto del Departamento -->
        <div class="row mb-3">
            <label for="nombrecorto" class="col-sm-2 col-form-label">Nombre Corto</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nombrecorto" name="nombrecorto" required value="{{ old('nombrecorto', $depto->nombrecorto ?? '') }}" {{ $des }}>
              @error("nombrecorto")
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
