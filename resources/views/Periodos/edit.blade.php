@extends('inicio2')

{{-- CONTENIDO1 --}}
@section('contenido1')
    {{-- Si deseas mostrar la tabla aquí --}}
    @include('periodos.tablahtml')
@endsection

{{-- CONTENIDO2 --}}
@section('contenido2')

<h1>Editar Periodo</h1>

<form action="{{ route('periodos.update', $periodo->id) }}" method="POST">
    @csrf

    <!-- Periodo -->
    <div class="row mb-3">
      <label for="periodo" class="col-sm-2 col-form-label">Periodo</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="periodo" name="periodo" required value="{{ $periodo->periodo }}">
      </div>
    </div>

    <!-- Descripción Corta -->
    <div class="row mb-3">
      <label for="descCorta" class="col-sm-2 col-form-label">Descripción Corta</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="descCorta" name="descCorta" required value="{{ $periodo->descCorta }}">
      </div>
    </div>

    <!-- Fecha de Inicio -->
    <div class="row mb-3">
      <label for="FechaIni" class="col-sm-2 col-form-label">Fecha de Inicio</label>
      <div class="col-sm-10">
        <input type="date" class="form-control" id="FechaIni" name="FechaIni" required value="{{ $periodo->FechaIni }}">
      </div>
    </div>

    <!-- Fecha de Fin -->
    <div class="row mb-3">
      <label for="FechaFin" class="col-sm-2 col-form-label">Fecha de Fin</label>
      <div class="col-sm-10">
        <input type="date" class="form-control" id="FechaFin" name="FechaFin" required value="{{ $periodo->FechaFin }}">
      </div>
    </div>

    <div class="row mb-3">
      <div class="col-sm-10 offset-sm-2">
        <button type="submit" class="btn btn-primary">Actualizar</button>
      </div>
    </div>
</form>

@endsection
