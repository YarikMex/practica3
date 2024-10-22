@isset($mensaje)
    <p>{{$mensaje}}</p>
@endisset

<a href="{{route('deptos.create')}}" class="btn button btn-dark" style="margin-bottom: 15px;" role="button">Insertar</a>
<div class="table-md">
    <table class="table table-primary">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre del Departamento</th>
                <th>EDITAR</th>
                <th>ELIMINAR</th>
                <th>VER</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($deptos as $depto)
            <tr>
                <td scope="row">{{ $depto->idDepto }}</td>
                <td>{{ $depto->nombredepto }}</td>
                <td><a href="{{route('deptos.edit', $depto->idDepto)}}" class="btn button btn-success">Editar</a></td>
                <td><a href="{{route('deptos.show', $depto->idDepto)}}" class="btn button btn-danger">Eliminar</a></td>
                <td><a href="{{route('deptos.show', $depto->idDepto)}}" class="btn button btn-primary">Ver</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $deptos->links() }}
</div>
