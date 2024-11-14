@extends('inicio2')

@section('contenido1')
    @include('personal_plazas.tablahtml')
@endsection

@section('contenido2')
    <h1>Editar Personal Plaza</h1>

    <form action="{{ route('personal_plazas.update', $personalPlaza->id) }}" method="POST">
        @csrf

        <!-- Tipo de Nombramiento -->
        <div class="row mb-3">
            <label for="tiponombramiento" class="col-sm-2 col-form-label">Tipo de Nombramiento</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="tiponombramiento" name="tiponombramiento" required value="{{ $personalPlaza->tiponombramiento }}">
              @error("tiponombramiento")
              <p class="text-danger">Error en: {{ $message }}</p>
              @enderror
            </div>
        </div>

        <!-- Selección de Plaza -->
        <div class="row mb-3">
            <label for="plaza_id" class="col-sm-2 col-form-label">Plaza</label>
            <div class="col-sm-10">
                <select class="form-control" id="plaza_id" name="plaza_id">
                    @foreach ($plazas as $plaza)
                        <option value="{{ $plaza->idPlaza }}" {{ $plaza->idPlaza == $personalPlaza->plaza_id ? 'selected' : '' }}>
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
                <select class="form-control" id="personal_id" name="personal_id">
                    @foreach ($personals as $personal)
                        <option value="{{ $personal->id }}" {{ $personal->id == $personalPlaza->personal_id ? 'selected' : '' }}>
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
              <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>
        </div>
    </form>
@endsection
