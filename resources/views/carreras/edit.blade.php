@extends('inicio2')

{{-- CONTENIDO1 --}}
@section('contenido1')
    @include('carreras.tablahtml')
@endsection

{{-- CONTENIDO2 --}}
@section('contenido2')

<h1>Editar Carrera</h1>

<form action="{{ route('carreras.update', $carrera->id) }}" method="POST">
    @csrf

    <div class="row mb-3">
      <label for="nombreCarrera" class="col-sm-2 col-form-label">Nombre de la Carrera</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nombreCarrera" name="nombreCarrera" required value="{{ $carrera->nombreCarrera }}">
      </div>
    </div>

    <div class="row mb-3">
      <label for="nombreMediano" class="col-sm-2 col-form-label">Nombre Mediano</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nombreMediano" name="nombreMediano" required value="{{ $carrera->nombreMediano }}">
      </div>
    </div>

    <div class="row mb-3">
      <label for="nombreCorto" class="col-sm-2 col-form-label">Nombre Corto</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nombreCorto" name="nombreCorto" required value="{{ $carrera->nombreCorto }}">
      </div>
    </div>

    <div class="row mb-3">
      <label for="depto_id" class="col-sm-2 col-form-label">Departamento</label>
      <div class="col-sm-10">
        <select class="form-select" id="depto_id" name="depto_id" required>
          @foreach ($deptos as $depto)
            <option value="{{ $depto->idDepto }}" {{ $depto->idDepto == $carrera->depto_id ? 'selected' : '' }}>{{ $depto->nombredepto }}</option>
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
