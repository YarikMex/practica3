@isset($mensaje)
    <p>{{$mensaje}}</p>
@endisset

<a href="{{route('carreras.create')}}" class="btn button btn-dark" style="margin-bottom: 15px;" role="button">Insertar</a>
<div class="table-md">
    <table class="table table-primary">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre Completo</th>
                <th scope="col">Nombre Mediano</th>
                <th scope="col">Nombre Corto</th>
                <th scope="col">Departamento</th>
                <th>EDITAR</th>
                <th>ELIMINAR</th>
                <th>VER</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($carreras as $carrera)
            <tr>
                <td scope="row">{{ $carrera->id }}</td>  <!-- Mostrar el ID de la carrera -->
                <td>{{ $carrera->nombreCarrera }}</td>  <!-- Mostrar el nombre completo de la carrera -->
                <td>{{ $carrera->nombreMediano }}</td>  <!-- Mostrar el nombre mediano de la carrera -->
                <td>{{ $carrera->nombreCorto }}</td>  <!-- Mostrar el nombre corto de la carrera -->
                <td>{{ $carrera->depto ? $carrera->depto->nombredepto : 'Sin departamento' }}</td>  <!-- Mostrar el departamento -->
                <td><a href="{{route('carreras.edit', $carrera->id)}}" class="btn button btn-success">Editar</a></td>
                <td><a href="{{route('carreras.show', $carrera->id)}}" class="btn button btn-danger">Eliminar</a></td>
                <td><a href="{{route('carreras.show', $carrera->id)}}" class="btn button btn-primary">Ver</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $carreras->links() }}
</div>
