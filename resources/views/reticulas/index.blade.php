@extends('inicio2')

@section('contenido1')
    @include('reticulas.tablahtml')
@endsection

@section('contenido2')
<h1>Retículas</h1>
<a href="{{ route('reticulas.create') }}" class="btn btn-primary mb-3">Insertar Retícula</a>

<div class="table-responsive">
    @include('reticulas.tablahtml')
</div>
@endsection
