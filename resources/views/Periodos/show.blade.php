@extends('inicio2')

{{-- CONTENIDO1 --}}
@section('contenido1')
    @include('periodos.tablahtml')
@endsection

{{-- CONTENIDO2 --}}
@section('contenido2')
<h1>Ver Detalles del Periodo</h1>
<form action="{{ route('periodos.destroy', $periodo) }}" method="POST">
    @csrf

    <!-- ID del Periodo -->
    <div class="row mb-3">
        <label for="id" class="col-sm-3 col-form-label">ID</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="id" name="id" disabled value="{{ $periodo->id }}">
        </div>
    </div>

    <!-- Periodo -->
    <div class="row mb-3">
        <label for="periodo" class="col-sm-3 col-form-label">Periodo</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="periodo" name="periodo" disabled value="{{ $periodo->periodo }}">
        </div>
    </div>

    <!-- Descripción Corta -->
    <div class="row mb-3">
        <label for="descCorta" class="col-sm-3 col-form-label">Descripción Corta</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="descCorta" name="descCorta" disabled value="{{ $periodo->descCorta }}">
        </div>
    </div>

    <!-- Fecha de Inicio -->
    <div class="row mb-3">
        <label for="FechaIni" class="col-sm-3 col-form-label">Fecha de Inicio</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="FechaIni" name="FechaIni" disabled value="{{ $periodo->FechaIni }}">
        </div>
    </div>

    <!-- Fecha de Fin -->
    <div class="row mb-3">
        <label for="FechaFin" class="col-sm-3 col-form-label">Fecha de Fin</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="FechaFin" name="FechaFin" disabled value="{{ $periodo->FechaFin }}">
        </div>
    </div>

    <button type="submit" class="btn btn-danger">Confirma la Eliminación</button>
    <a href="{{ route('periodos.index') }}" class="btn btn-primary">Regresar</a>

</form>
@endsection
