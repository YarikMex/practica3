<form action="{{ route('deptos.destroy', $depto) }}" method="POST">
  @csrf
  @method('POST') <!-- Mantenemos el método POST como en Alumnos -->
  
  <!-- Nombre Completo -->
  <div class="row mb-3">
      <label for="nombredepto" class="col-sm-3 col-form-label">Nombre Completo</label>
      <div class="col-sm-9">
          <input type="text" class="form-control" id="nombredepto" name="nombredepto" disabled value="{{ $depto->nombredepto }}">
      </div>
  </div>

  <!-- Nombre Mediano -->
  <div class="row mb-3">
      <label for="nombremediano" class="col-sm-3 col-form-label">Nombre Mediano</label>
      <div class="col-sm-9">
          <input type="text" class="form-control" id="nombremediano" name="nombremediano" disabled value="{{ $depto->nombremediano }}">
      </div>
  </div>

  <!-- Nombre Corto -->
  <div class="row mb-3">
      <label for="nombrecorto" class="col-sm-3 col-form-label">Nombre Corto</label>
      <div class="col-sm-9">
          <input type="text" class="form-control" id="nombrecorto" name="nombrecorto" disabled value="{{ $depto->nombrecorto }}">
      </div>
  </div>

  <!-- Botón para eliminar -->
  <button type="submit" class="btn btn-danger">Confirma la Eliminación</button>
  <a href="{{ route('deptos.index') }}" class="btn btn-primary">Regresar</a>
</form>
