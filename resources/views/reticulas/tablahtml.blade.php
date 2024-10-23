@isset($mensaje)
    <p>{{ $mensaje }}</p>
@endisset

<a href="{{ route('reticulas.create') }}" class="btn button btn-dark" style="margin-bottom: 15px;" role="button">Insertar</a>

<div class="table-md">
    <table class="table table-primary">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Descripción</th>
                <th scope="col">Fecha en Vigor</th>
                <th scope="col">Carrera</th>
                <th>EDITAR</th>
                <th>ELIMINAR</th>
                <th>VER</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reticulas as $reticula)
            <tr>
                <td>{{ $reticula->id }}</td>
                <td>{{ $reticula->descripcion }}</td>
                <td>{{ $reticula->fechaEnVigor }}</td>
                <td>{{ $reticula->carrera->nombreCarrera }}</td>
                <td><a href="{{ route('reticulas.edit', $reticula->id) }}" class="btn button btn-success">Editar</a></td>
                <td><a href="{{ route('reticulas.show', $reticula->id) }}" class="btn button btn-danger">Eliminar</a></td>
                <td><a href="{{ route('reticulas.show', $reticula->id) }}" class="btn button btn-primary">Ver</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $reticulas->links() }}
</div>
