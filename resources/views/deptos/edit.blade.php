@extends('inicio2')

{{-- CONTENIDO1 --}}
@section('contenido1')

    @include('deptos.tablahtml')

@endsection


{{-- CONTENIDO2 --}}
@section('contenido2')

<h1>Editar Departamento</h1>

<form action="{{ route('deptos.update', $depto->idDepto) }}" method="POST">
    @csrf

    <div class="row mb-3">
      <label for="nombredepto" class="col-sm-2 col-form-label">Nombre Completo</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nombredepto" name="nombredepto" required value="{{$depto->nombredepto}}">
      </div>
    </div>

    <div class="row mb-3">
      <label for="nombremediano" class="col-sm-2 col-form-label">Nombre Mediano</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nombremediano" name="nombremediano" required value="{{$depto->nombremediano}}">
      </div>
    </div>

    <div class="row mb-3">
      <label for="nombrecorto" class="col-sm-2 col-form-label">Nombre Corto</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nombrecorto" name="nombrecorto" required value="{{$depto->nombrecorto}}">
      </div>
    </div>

    <div class="row mb-3">
      <div class="col-sm-10 offset-sm-2">
        <button type="submit" class="btn btn-primary">Actualizar</button>
      </div>
    </div>
</form>

@endsection
