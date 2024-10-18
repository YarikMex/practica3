@extends('inicio2')

{{-- CONTENIDO1 --}}
@section('contenido1')
    {{-- Si deseas mostrar la tabla aquí --}}
    @include('plazas.tablahtml')
@endsection

{{-- CONTENIDO2 --}}
@section('contenido2')

<h1>Editar Plaza</h1>

<form action="{{ route('plazas.update', $plaza->idPlaza) }}" method="POST">
    @csrf

    <div class="row mb-3">
      <label for="nombrePlaza" class="col-sm-2 col-form-label">Nombre de la Plaza</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nombrePlaza" name="nombrePlaza" required value="{{$plaza->nombrePlaza}}">
      </div>
    </div>

    <div class="row mb-3">
      <div class="col-sm-10 offset-sm-2">
        <button type="submit" class="btn btn-primary">Actualizar</button>
      </div>
    </div>
</form>

@endsection
