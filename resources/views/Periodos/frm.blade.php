@extends('inicio2')

{{-- CONTENIDO1 --}}
@section('contenido1')

    @include('periodos.tablahtml')
    
@endsection


{{-- CONTENIDO2 --}}
@section('contenido2')
<h1>{{ $accion == 'C' ? 'Insertar Periodo' : ($accion == 'E' ? 'Editar Periodo' : 'Eliminar Periodo') }}</h1>

<ul>
@foreach ($errors->all() as $error)
  <li>{{ $error }}</li>
@endforeach
</ul>

@if ($accion == 'C')
  <h1>Insertando</h1>
  <form action="{{route('periodos.store')}}" method="POST">
@elseif ($accion == 'E')
  <h1>Editando</h1>
  <form action="{{ route('periodos.update', $periodo->id)}}" method="POST">
@elseif ($accion == 'D')
  <h1>Eliminando</h1>
  <form action="{{route('periodos.destroy', $periodo)}}" method="POST">
@endif

    @csrf

    <!-- Periodo -->
    <div class="row mb-3">
        <label for="periodo" class="col-sm-2 col-form-label">Periodo</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="periodo" name="periodo" required value="{{ old('periodo', $periodo->periodo ?? '') }}" {{ $des }}>
          @error("periodo")
          <p class="text-danger">error en: {{ $message }}</p>
          @enderror
        </div>
    </div>

    <!-- Descripción Corta -->
    <div class="row mb-3">
        <label for="descCorta" class="col-sm-2 col-form-label">Descripción Corta</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="descCorta" name="descCorta" required value="{{ old('descCorta', $periodo->descCorta ?? '') }}" {{ $des }}>
          @error("descCorta")
          <p class="text-danger">error en: {{ $message }}</p>
          @enderror
        </div>
    </div>

    <!-- Fecha de Inicio -->
    <div class="row mb-3">
        <label for="FechaIni" class="col-sm-2 col-form-label">Fecha de Inicio</label>
        <div class="col-sm-10">
          <input type="date" class="form-control" id="FechaIni" name="FechaIni" required value="{{ old('FechaIni', $periodo->FechaIni ?? '') }}" {{ $des }}>
          @error("FechaIni")
          <p class="text-danger">error en: {{ $message }}</p>
          @enderror
        </div>
    </div>

    <!-- Fecha de Fin -->
    <div class="row mb-3">
        <label for="FechaFin" class="col-sm-2 col-form-label">Fecha de Fin</label>
        <div class="col-sm-10">
          <input type="date" class="form-control" id="FechaFin" name="FechaFin" required value="{{ old('FechaFin', $periodo->FechaFin ?? '') }}" {{ $des }}>
          @error("FechaFin")
          <p class="text-danger">error en: {{ $message }}</p>
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
