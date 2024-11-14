@extends('inicio2')

@section('contenido1')
    @include('lugares.tablahtml')
@endsection

@section('contenido2')
    <h1>{{ $accion == 'C' ? 'Insertar Lugar' : ($accion == 'E' ? 'Editar Lugar' : 'Eliminar Lugar') }}</h1>

    <form action="{{ $accion == 'C' ? route('lugares.store') : ($accion == 'E' ? route('lugares.update', $lugar->id) : route('lugares.destroy', $lugar)) }}" method="POST">
        @csrf

        <!-- Nombre del Lugar -->
        <div class="row mb-3">
            <label for="nombrelugar" class="col-sm-2 col-form-label">Nombre del Lugar</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nombrelugar" name="nombrelugar" required value="{{ old('nombrelugar', $lugar->nombrelugar ?? '') }}" {{ $des }}>
              @error("nombrelugar")
              <p class="text-danger">Error en: {{ $message }}</p>
              @enderror
            </div>
        </div>

        <!-- Nombre Corto -->
        <div class="row mb-3">
            <label for="nombrecorto" class="col-sm-2 col-form-label">Nombre Corto</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nombrecorto" name="nombrecorto" required value="{{ old('nombrecorto', $lugar->nombrecorto ?? '') }}" {{ $des }}>
              @error("nombrecorto")
              <p class="text-danger">Error en: {{ $message }}</p>
              @enderror
            </div>
        </div>

        <!-- Selección de Edificio -->
        <div class="row mb-3">
            <label for="edificio_id" class="col-sm-2 col-form-label">Edificio</label>
            <div class="col-sm-10">
                <select class="form-control" id="edificio_id" name="edificio_id" {{ $des }}>
                    @foreach ($edificios as $edificio)
                        <option value="{{ $edificio->id }}" {{ (old('edificio_id', $lugar->edificio_id ?? '') == $edificio->id) ? 'selected' : '' }}>
                            {{ $edificio->nombreedificio }}
                        </option>
                    @endforeach
                </select>
                @error("edificio_id")
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
