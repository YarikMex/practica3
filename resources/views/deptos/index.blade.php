@extends('inicio2')

@section('contenido1')
    @include('deptos.tablahtml')  <!-- Asegúrate de que el archivo tablahtml está aquí -->
@endsection
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
