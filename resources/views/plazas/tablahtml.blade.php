@isset($mensaje)
    <p>{{$mensaje}}</p>
@endisset

<!-- Formulario para insertar nueva Plaza -->
<h2>Insertar Plaza</h2>
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

<!-- Botón para insertar nueva plaza (eliminado, ya no es necesario) -->
{{-- <a href="{{route('plazas.create')}}" class="btn button btn-dark" style="margin-bottom: 15px;" role="button">Insertar</a> --}}

<!-- Tabla de plazas -->
<div class="table-md">
    <table class="table table-primary">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre de la Plaza</th>
                <th>EDITAR</th>
                <th>ELIMINAR</th>
                <th>VER</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($plazas as $plaza)
            <tr>
                <td scope="row">{{ $plaza->idPlaza }}</td>
                <td>{{ $plaza->nombrePlaza }}</td>
                <td><a href="{{route('plazas.edit',$plaza->idPlaza)}}" class="btn button btn-success">Editar</a></td>
                <td><a href="{{route('plazas.show',$plaza->idPlaza)}}" class="btn button btn-danger">Eliminar</a></td>
                <td><a href="{{route('plazas.show',$plaza->idPlaza)}}" class="btn button btn-primary">Ver</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $plazas->links() }}
</div>
