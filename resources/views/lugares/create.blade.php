@extends('inicio2')

@section('contenido1')
    @include('lugares.tablahtml')
@endsection

@section('contenido2')
    <h1>Insertar Lugar</h1>

    <form action="{{ route('lugares.store') }}" method="POST">
        @csrf

        <!-- Nombre del Lugar -->
        <div class="row mb-3">
            <label for="nombrelugar" class="col-sm-2 col-form-label">Nombre del Lugar</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nombrelugar" name="nombrelugar" required value="{{ old('nombrelugar') }}">
              @error("nombrelugar")
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

        <!-- Selección de Edificio -->
        <div class="row mb-3">
            <label for="edificio_id" class="col-sm-2 col-form-label">Edificio</label>
            <div class="col-sm-10">
                <select class="form-control" id="edificio_id" name="edificio_id">
                    @foreach ($edificios as $edificio)
                        <option value="{{ $edificio->id }}">{{ $edificio->nombreedificio }}</option>
                    @endforeach
                </select>
                @error("edificio_id")
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
