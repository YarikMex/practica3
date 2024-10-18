@extends('inicio2')

@section('contenido1')

<h1>Insertar Plaza</h1>

<!-- Formulario para insertar una nueva plaza -->
<form action="{{ route('plazas.store') }}" method="POST">
    @csrf

    <!-- Nombre de la Plaza -->
    <div class="row mb-3">
        <label for="nombrePlaza" class="col-sm-2 col-form-label">Nombre de la Plaza</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="nombrePlaza" name="nombrePlaza" required value="{{ old('nombrePlaza') }}">
          @error("nombrePlaza")
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

<!-- Incluir la tabla de plazas debajo del formulario -->
@include('plazas.tablahtml')

@endsection
