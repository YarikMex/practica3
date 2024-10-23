@isset($mensaje)
    <p>{{ $mensaje }}</p>
@endisset

<a href="{{ route('reticulas.create') }}" class="btn button btn-dark mb-3">Insertar</a>

<div class="table-responsive">
    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Descripción</th>
                <th scope="col">Fecha en Vigor</th>
                <th scope="col">Carrera</th>
                <th scope="col">EDITAR</th>
                <th scope="col">ELIMINAR</th>
                <th scope="col">VER</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reticulas as $reticula)
            <tr>
                <td>{{ $reticula->id }}</td>
                <td>{{ $reticula->descripcion }}</td>
                <td>{{ $reticula->fechaEnVigor }}</td>
                <td>{{ $reticula->carrera->nombreCarrera }}</td>
                <td><a href="{{ route('reticulas.edit', $reticula->id) }}" class="btn btn-success">Editar</a></td>
                <td>
                    <form action="{{ route('reticulas.destroy', $reticula->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
                <td><a href="{{ route('reticulas.show', $reticula->id) }}" class="btn btn-primary">Ver</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $reticulas->links() }}
</div>
