@isset($mensaje)
    <p>{{ $mensaje }}</p>
@endisset

<a href="{{ route('personal_plazas.create') }}" class="btn button btn-dark" style="margin-bottom: 15px;" role="button">Insertar</a>
<div class="table-md">
    <table class="table table-primary">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Tipo de Nombramiento</th>
                <th scope="col">Plaza</th>
                <th scope="col">Personal</th>
                <th>EDITAR</th>
                <th>ELIMINAR</th>
                <th>VER</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($personalPlazas as $personalPlaza)
            <tr>
                <td scope="row">{{ $personalPlaza->id }}</td>
                <td>{{ $personalPlaza->tiponombramiento }}</td>
                <td>{{ $personalPlaza->plaza->nombrePlaza ?? 'N/A' }}</td>
                <td>{{ $personalPlaza->personals->nombres ?? 'N/A' }} {{ $personalPlaza->personals->apellidop ?? '' }} {{ $personalPlaza->personals->apellidom ?? '' }}</td>
                <td><a href="{{ route('personal_plazas.edit', $personalPlaza->id) }}" class="btn button btn-success">Editar</a></td>
                <td><a href="{{ route('personal_plazas.show', $personalPlaza->id) }}" class="btn button btn-danger">Eliminar</a></td>
                <td><a href="{{ route('personal_plazas.show', $personalPlaza->id) }}" class="btn button btn-primary">Ver</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $personalPlazas->links() }}
</div>
