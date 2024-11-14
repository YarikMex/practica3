@isset($mensaje)
    <p>{{ $mensaje }}</p>
@endisset

<a href="{{ route('edificios.create') }}" class="btn button btn-dark" style="margin-bottom: 15px;" role="button">Insertar</a>
<div class="table-md">
    <table class="table table-primary">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre del Edificio</th>
                <th scope="col">Nombre Corto</th>
                <th>EDITAR</th>
                <th>ELIMINAR</th>
                <th>VER</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($edificios as $edificio)
            <tr>
                <td scope="row">{{ $edificio->id }}</td>
                <td>{{ $edificio->nombreedificio }}</td>
                <td>{{ $edificio->nombrecorto }}</td>
                <td><a href="{{ route('edificios.edit', $edificio->id) }}" class="btn button btn-success">Editar</a></td>
                <td><a href="{{ route('edificios.show', $edificio->id) }}" class="btn button btn-danger">Eliminar</a></td>
                <td><a href="{{ route('edificios.show', $edificio->id) }}" class="btn button btn-primary">Ver</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $edificios->links() }}
</div>
