@extends('inicio2')

@section('contenido1')
    @include('edificios.tablahtml')
@endsection

@section('contenido2')
    <h1>Insertar Edificio</h1>

    <form action="{{ route('edificios.store') }}" method="POST">
        @csrf

        <!-- Nombre del Edificio -->
        <div class="row mb-3">
            <label for="nombreedificio" class="col-sm-2 col-form-label">Nombre del Edificio</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nombreedificio" name="nombreedificio" required value="{{ old('nombreedificio') }}">
              @error("nombreedificio")
              <p class="text-danger">Error en: {{ $message }}</p>
              @enderror
            </div>
        </div>

        <!-- Nombre Corto -->
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
