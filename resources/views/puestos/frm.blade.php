@extends('inicio2')

{{-- CONTENIDO1 --}}
@section('contenido1')

    @include('puestos.tablahtml')

@endsection

{{-- CONTENIDO2 --}}
@section('contenido2')
<h1>Formulario Puestos</h1>
<ul>
@foreach ($errors->all() as $error )
  <li>{{ $error }}</li>
@endforeach
</ul>

@if ($accion == 'C')
  <h1>Insertando</h1>
  <form action="{{route('puestos.store')}}" method="POST">
@elseif ($accion == 'E')
  <h1>Editando</h1>
  <form action="{{ route('puestos.update', $puesto->id) }}" method="POST">
@elseif ($accion == 'D')
  <h1>Eliminando</h1>
  <form action="{{route('puestos.destroy', $puesto)}}" method="POST">
@endif

    @csrf

    <!-- Nombre del Puesto -->
    <div class="row mb-3">
        <label for="nombrePuesto" class="col-sm-2 col-form-label">Nombre del Puesto</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="nombrePuesto" name="nombrePuesto" required value="{{ old('nombrePuesto', $puesto->nombrePuesto ?? '') }}" {{ $des }}>
          @error("nombrePuesto")
          <p class="text-danger">Error: {{ $message }}</p>
          @enderror
        </div>
    </div>

    <!-- Tipo de Puesto -->
    <div class="row mb-3">
        <label for="tipoPuesto" class="col-sm-2 col-form-label">Tipo de Puesto</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="tipoPuesto" name="tipoPuesto" required value="{{ old('tipoPuesto', $puesto->tipoPuesto ?? '') }}" {{ $des }}>
          @error("tipoPuesto")
          <p class="text-danger">Error: {{ $message }}</p>
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
