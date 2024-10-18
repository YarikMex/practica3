@extends('plantillas/plantilla2')

{{-- CONTENIDO1 --}}
@section('contenido1')

    @include('alumnos2/tablahtml')
    
@endsection


{{-- CONTENIDO2 --}}
@section('contenido2')

<h1>Editar Alumno</h1>

<form action="{{ route('alumnos.update',$alumno->id)}}" method="POST">
    @csrf
  

    <div class="row mb-3">
      <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nombre" name="nombre" required value="{{$alumno->nombre}}">
      </div>
    </div>

    <div class="row mb-3">
      <label for="apellidopaterno" class="col-sm-2 col-form-label">Apellido Paterno</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="apellidopaterno" name="apellidopaterno" required value="{{$alumno->apellidopaterno}}">
      </div>
    </div>

    <div class="row mb-3">
      <label for="email" class="col-sm-2 col-form-label">Email</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" name="email" required value="{{$alumno->email}}">
      </div>
    </div>

    <div class="row mb-3">
      <div class="col-sm-10 offset-sm-2">
        <button type="submit" class="btn btn-primary">Actualizar</button>
      </div>
    </div>
</form>

@endsection
