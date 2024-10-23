@isset($mensaje)
    <p>{{$mensaje}}</p>
@endisset

<a href="{{route('alumnos.create')}}" class="btn button btn-dark" style="margin-bottom: 15px;" role="button">Insertar</a>
<div class="table-md">
    <table class="table table-primary">
        <thead>
            <tr>
                <th scope="col">Número de Control</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido Paterno</th>
                <th scope="col">Apellido Materno</th>
                <th scope="col">Sexo</th>
                <th scope="col">Carrera</th> <!-- Mostrar el nombre de la carrera -->
                <th>EDITAR</th>
                <th>ELIMINAR</th>
                <th>VER</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($alumnos as $alumn)
            <tr>
                <td>{{ $alumn->noctrl }}</td>
                <td>{{ $alumn->nombre }}</td>
                <td>{{ $alumn->apellidopaterno }}</td>
                <td>{{ $alumn->apellidomaterno }}</td>
                <td>{{ $alumn->sexo == 'M' ? 'Masculino' : 'Femenino' }}</td>
                <td>{{ $alumn->carrera->nombreCarrera ?? 'Sin Carrera' }}</td>


                <td><a href="{{route('alumnos.edit',$alumn->id)}}" class="btn button btn-success">Editar</a></td>
                <td><a href="{{route('alumnos.show',$alumn->id)}}" class="btn button btn-danger">Eliminar</a></td>
                <td><a href="{{route('alumnos.show',$alumn->id)}}" class="btn button btn-primary">Ver</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $alumnos->links() }}
</div>
