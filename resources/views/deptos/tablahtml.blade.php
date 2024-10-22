@isset($mensaje)
    <p>{{ $mensaje }}</p>
@endisset

<a href="{{ route('deptos.create') }}" class="btn button btn-dark" style="margin-bottom: 15px;" role="button">Insertar</a>
<div class="table-md">
    <table class="table table-primary">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre Completo</th>
                <th scope="col">Nombre Mediano</th>
                <th scope="col">Nombre Corto</th>
                <th>EDITAR</th>
                <th>ELIMINAR</th>
                <th>VER</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($depto as $dept)
            <tr>
                <td scope="row">{{ $dept->idDepto }}</td>
                <td>{{ $dept->nombredepto }}</td>
                <td>{{ $dept->nombremediano }}</td>
                <td>{{ $dept->nombrecorto }}</td>
                <td><a href="{{ route('deptos.edit', $dept->idDepto) }}" class="btn button btn-success">Editar</a></td>
                <td><a href="{{ route('deptos.show', $dept->idDepto) }}" class="btn button btn-danger">Eliminar</a></td>
                <td><a href="{{ route('deptos.show', $dept->idDepto) }}" class="btn button btn-primary">Ver</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $dept->links() }}
</div>
