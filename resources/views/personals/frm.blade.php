@extends('inicio2')

@section('contenido1')
    @include('personals.tablahtml')
@endsection

@section('contenido2')
<h1>{{ $accion == 'C' ? 'Insertar Personal' : ($accion == 'E' ? 'Editar Personal' : 'Eliminar Personal') }}</h1>

<form action="{{ $accion == 'C' ? route('personals.store') : ($accion == 'E' ? route('personals.update', $personal->id) : route('personals.destroy', $personal)) }}" method="POST">
    @csrf
    @if($accion == 'E') 
        @method('PUT')  <!-- Esto indica que el formulario debe usar PUT -->
    @elseif($accion == 'D')
        @method('DELETE') <!-- Esto indica que el formulario debe usar DELETE -->
    @endif
    <!-- Resto del formulario -->

    <!-- RFC -->
    <div class="row mb-3">
        <label for="RFC" class="col-sm-2 col-form-label">RFC</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="RFC" name="RFC" required value="{{ old('RFC', $personal->RFC ?? '') }}" {{ $des }}>
            @error("RFC")
            <p class="text-danger">Error en: {{ $message }}</p>
            @enderror
        </div>
    </div>

    <!-- Nombres -->
    <div class="row mb-3">
        <label for="nombres" class="col-sm-2 col-form-label">Nombres</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="nombres" name="nombres" required value="{{ old('nombres', $personal->nombres ?? '') }}" {{ $des }}>
            @error("nombres")
            <p class="text-danger">Error en: {{ $message }}</p>
            @enderror
        </div>
    </div>

    <!-- Apellido Paterno -->
    <div class="row mb-3">
        <label for="apellidop" class="col-sm-2 col-form-label">Apellido Paterno</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="apellidop" name="apellidop" required value="{{ old('apellidop', $personal->apellidop ?? '') }}" {{ $des }}>
            @error("apellidop")
            <p class="text-danger">Error en: {{ $message }}</p>
            @enderror
        </div>
    </div>

    <!-- Apellido Materno -->
    <div class="row mb-3">
        <label for="apellidom" class="col-sm-2 col-form-label">Apellido Materno</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="apellidom" name="apellidom" required value="{{ old('apellidom', $personal->apellidom ?? '') }}" {{ $des }}>
            @error("apellidom")
            <p class="text-danger">Error en: {{ $message }}</p>
            @enderror
        </div>
    </div>

    <!-- Licenciatura -->
    <div class="row mb-3">
        <label for="licenciatura" class="col-sm-2 col-form-label">Licenciatura</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="licenciatura" name="licenciatura" value="{{ old('licenciatura', $personal->licenciatura ?? '') }}" {{ $des }}>
            @error("licenciatura")
            <p class="text-danger">Error en: {{ $message }}</p>
            @enderror
        </div>
    </div>

    <!-- Licenciatura Titulado -->
    <div class="row mb-3">
        <label for="licit" class="col-sm-2 col-form-label">Licenciatura Titulado</label>
        <div class="col-sm-10">
            <input type="hidden" name="licit" value="0">
            <input type="checkbox" id="licit" name="licit" value="1" {{ old('licit', $personal->licit ?? false) ? 'checked' : '' }} {{ $des }}>
            @error("licit")
            <p class="text-danger">Error en: {{ $message }}</p>
            @enderror
        </div>
    </div>

    <!-- Especialización -->
    <div class="row mb-3">
        <label for="especializacion" class="col-sm-2 col-form-label">Especialización</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="especializacion" name="especializacion" value="{{ old('especializacion', $personal->especializacion ?? '') }}" {{ $des }}>
            @error("especializacion")
            <p class="text-danger">Error en: {{ $message }}</p>
            @enderror
        </div>
    </div>

    <!-- Especialización Titulado -->
    <div class="row mb-3">
        <label for="espit" class="col-sm-2 col-form-label">Especialización Titulado</label>
        <div class="col-sm-10">
            <input type="hidden" name="espit" value="0">
            <input type="checkbox" id="espit" name="espit" value="1" {{ old('espit', $personal->espit ?? false) ? 'checked' : '' }} {{ $des }}>
            @error("espit")
            <p class="text-danger">Error en: {{ $message }}</p>
            @enderror
        </div>
    </div>

    <!-- Maestría -->
    <div class="row mb-3">
        <label for="maestria" class="col-sm-2 col-form-label">Maestría</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="maestria" name="maestria" value="{{ old('maestria', $personal->maestria ?? '') }}" {{ $des }}>
            @error("maestria")
            <p class="text-danger">Error en: {{ $message }}</p>
            @enderror
        </div>
    </div>

    <!-- Maestría Titulado -->
    <div class="row mb-3">
        <label for="maetit" class="col-sm-2 col-form-label">Maestría Titulado</label>
        <div class="col-sm-10">
            <input type="hidden" name="maetit" value="0">
            <input type="checkbox" id="maetit" name="maetit" value="1" {{ old('maetit', $personal->maetit ?? false) ? 'checked' : '' }} {{ $des }}>
            @error("maetit")
            <p class="text-danger">Error en: {{ $message }}</p>
            @enderror
        </div>
    </div>

    <!-- Doctorado -->
    <div class="row mb-3">
        <label for="doctorado" class="col-sm-2 col-form-label">Doctorado</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="doctorado" name="doctorado" value="{{ old('doctorado', $personal->doctorado ?? '') }}" {{ $des }}>
            @error("doctorado")
            <p class="text-danger">Error en: {{ $message }}</p>
            @enderror
        </div>
    </div>

    <!-- Doctorado Titulado -->
    <div class="row mb-3">
        <label for="doctit" class="col-sm-2 col-form-label">Doctorado Titulado</label>
        <div class="col-sm-10">
            <input type="hidden" name="doctit" value="0">
            <input type="checkbox" id="doctit" name="doctit" value="1" {{ old('doctit', $personal->doctit ?? false) ? 'checked' : '' }} {{ $des }}>
            @error("doctit")
            <p class="text-danger">Error en: {{ $message }}</p>
            @enderror
        </div>
    </div>

<!-- Fecha de Ingreso SEP -->
<div class="row mb-3">
    <label for="fechasingsep" class="col-sm-2 col-form-label">Fecha de Ingreso SEP</label>
    <div class="col-sm-10">
        <input type="date" class="form-control" id="fechasingsep" name="fechasingsep" 
               value="{{ old('fechasingsep', (is_a($personal->fechasingsep, \Carbon\Carbon::class) ? $personal->fechasingsep->format('Y-m-d') : $personal->fechasingsep)) }}" {{ $des }}>
        @error("fechasingsep")
        <p class="text-danger">Error en: {{ $message }}</p>
        @enderror
    </div>
</div>




    <!-- Fecha de Ingreso Institución -->
<!-- Fecha de Ingreso Institución -->
<div class="row mb-3">
    <label for="fechaisingins" class="col-sm-2 col-form-label">Fecha de Ingreso Institución</label>
    <div class="col-sm-10">
        <input type="date" class="form-control" id="fechaisingins" name="fechaisingins" 
               value="{{ old('fechaisingins', (is_a($personal->fechaisingins, \Carbon\Carbon::class) ? $personal->fechaisingins->format('Y-m-d') : $personal->fechaisingins)) }}" {{ $des }}>
        @error("fechaisingins")
        <p class="text-danger">Error en: {{ $message }}</p>
        @enderror
    </div>
</div>


    <!-- Departamento -->
    <div class="row mb-3">
        <label for="depto_id" class="col-sm-2 col-form-label">Departamento</label>
        <div class="col-sm-10">
            <select class="form-control" id="depto_id" name="depto_id" {{ $des }}>
                <option value="">Seleccione un Departamento</option>
                @foreach ($deptos as $depto)
                    <option value="{{ $depto->idDepto }}" {{ isset($personal) && $personal->depto_id == $depto->idDepto ? 'selected' : '' }}>
                        {{ $depto->nombredepto }}
                    </option>
                @endforeach
            </select>
            @error("depto_id")
            <p class="text-danger">Error en: {{ $message }}</p>
            @enderror
        </div>
    </div>

    <!-- Puesto -->
    <div class="row mb-3">
        <label for="puesto_id" class="col-sm-2 col-form-label">Puesto</label>
        <div class="col-sm-10">
            <select class="form-control" id="puesto_id" name="puesto_id" {{ $des }}>
                <option value="">Seleccione un Puesto</option>
                @foreach ($puestos as $puesto)
                    <option value="{{ $puesto->id }}" {{ isset($personal) && $personal->puesto_id == $puesto->id ? 'selected' : '' }}>
                        {{ $puesto->nombrePuesto }}
                    </option>
                @endforeach
            </select>
            @error("puesto_id")
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