@isset($mensaje)
    <p>{{$mensaje}}</p>
@endisset

<!-- Botón para abrir el modal -->
<button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#createPlazaModal">
  Insertar
</button>

<!-- Modal para insertar una nueva plaza -->
<div class="modal fade" id="createPlazaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Insertar Plaza</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{ route('plazas.store') }}" method="POST">
        @csrf
        <div class="modal-body">
          <!-- Nombre de la Plaza -->
          <div class="row mb-3">
              <label for="nombrePlaza" class="col-sm-3 col-form-label">Nombre de la Plaza</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="nombrePlaza" name="nombrePlaza" required value="{{ old('nombrePlaza') }}">
                @error("nombrePlaza")
                <p class="text-danger">Error en: {{ $message }}</p>
                @enderror
              </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Guardar</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </form>
    </div>
  </div>
</div>

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
