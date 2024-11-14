@extends('inicio2')

@section('contenido1')
    @include('personal_plazas.tablahtml')
@endsection

@section('contenido2')
<h1>Ver Personal Plaza</h1>
<form action="{{ route('personal_plazas.destroy', $personalPlaza->id) }}" method="POST">
  @csrf

  <!-- Tipo de Nombramiento -->
  <div class="row mb-3">
    <label for="tiponombramiento" class="col-sm-3 col-form-label">Tipo de Nombramiento</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="tiponombramiento" name="tiponombramiento" disabled value="{{ $personalPlaza->tiponombramiento }}">
    </div>
  </div>

  <!-- Plaza -->
  <div class="row mb-3">
    <label for="plaza" class="col-sm-3 col-form-label">Plaza</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="plaza" name="plaza" disabled value="{{ $personalPlaza->plaza->nombrePlaza ?? 'N/A' }}">
    </div>
  </div>

  <!-- Personal -->
  <div class="row mb-3">
    <label for="personal" class="col-sm-3 col-form-label">Personal</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="personal" name="personal" disabled value="{{ $personalPlaza->personals->nombres ?? 'N/A' }} {{ $personalPlaza->personals->apellidop ?? '' }} {{ $personalPlaza->personals->apellidom ?? '' }}">
    </div>
  </div>

  <button type="submit" class="btn btn-danger">Confirme la Eliminación</button>
  <a href="{{ route('personal_plazas.index') }}" class="btn btn-primary">Regresar</a>
</form>

@endsection
