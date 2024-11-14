@extends('inicio2')

@section('contenido1')
    @include('personal_plazas.tablahtml')
@endsection

@section('contenido2')
    <h1>{{ $accion == 'C' ? 'Insertar Personal Plaza' : ($accion == 'E' ? 'Editar Personal Plaza' : 'Eliminar Personal Plaza') }}</h1>

    <form action="{{ $accion == 'C' ? route('personal_plazas.store') : ($accion == 'E' ? route('personal_plazas.update', $personalPlaza->id) : route('personal_plazas.destroy', $personalPlaza)) }}" method="POST">
        @csrf
        <!-- Tipo de Nombramiento -->
        <div class="row mb-3">
            <label for="tiponombramiento" class="col-sm-2 col-form-label">Tipo de Nombramiento</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="tiponombramiento" name="tiponombramiento" required value="{{ old('tiponombramiento', $personalPlaza->tiponombramiento ?? '') }}" {{ $des }}>
              @error("tiponombramiento")
              <p class="text-danger">Error en: {{ $message }}</p>
              @enderror
            </div>
        </div>

        <!-- Selección de Plaza -->
        <div class="row mb-3">
            <label for="plaza_id" class="col-sm-2 col-form-label">Plaza</label>
            <div class="col-sm-10">
                <select class="form-control" id="plaza_id" name="plaza_id" {{ $des }}>
                    @foreach ($plazas as $plaza)
                        <option value="{{ $plaza->idPlaza }}" {{ (old('plaza_id', $personalPlaza->plaza_id ?? '') == $plaza->idPlaza) ? 'selected' : '' }}>
                            {{ $plaza->nombrePlaza }}
                        </option>
                    @endforeach
                </select>
                @error("plaza_id")
                <p class="text-danger">Error en: {{ $message }}</p>
                @enderror
            </div>
        </div>

        <!-- Selección de Personal -->
        <div class="row mb-3">
            <label for="personal_id" class="col-sm-2 col-form-label">Personal</label>
            <div class="col-sm-10">
                <select class="form-control" id="personal_id" name="personal_id" {{ $des }}>
                    @foreach ($personals as $personal)
                        <option value="{{ $personal->id }}" {{ (old('personal_id', $personalPlaza->personal_id ?? '') == $personal->id) ? 'selected' : '' }}>
                            {{ $personal->nombres }} {{ $personal->apellidop }} {{ $personal->apellidom }}
                        </option>
                    @endforeach
                </select>
                @error("personal_id")
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
