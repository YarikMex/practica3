@extends('plantillas/plantilla2')

{{-- CONTENIDO1 --}}
@section('contenido1')

    @include('plazas.tablahtml')

@endsection

{{-- CONTENIDO2 --}}
@section('contenido2')

<h1>{{ $accion == 'C' ? 'Insertar Plaza' : ($accion == 'E' ? 'Editar Plaza' : 'Eliminar Plaza') }}</h1>

<form action="{{ $accion == 'C' ? route('plazas.store') : ($accion == 'E' ? route('plazas.update', $plaza->idPlaza) : route('plazas.destroy', $plaza)) }}" method="POST">
    @csrf

    <!-- Nombre de la Plaza -->
    <div class="row mb-3">
        <label for="nombrePlaza" class="col-sm-2 col-form-label">Nombre de la Plaza</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="nombrePlaza" name="nombrePlaza" required value="{{ old('nombrePlaza', $plaza->nombrePlaza ?? '') }}" {{ $des }}>
          @error("nombrePlaza")
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
