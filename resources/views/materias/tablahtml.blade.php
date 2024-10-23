@isset($mensaje)
    <p>{{$mensaje}}</p>
@endisset

<a href="{{route('materias.create')}}" class="btn button btn-dark" style="margin-bottom: 15px;" role="button">Insertar</a>
<div class="table-md">
    <table class="table table-primary">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre de la Materia</th>
                <th scope="col">Nivel</th>
                <th scope="col">Modalidad</th>
                <th scope="col">Retícula</th>
                <th>EDITAR</th>
                <th>ELIMINAR</th>
                <th>VER</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($materias as $materia)
            <tr>
                <td scope="row">{{ $materia->id }}</td>
                <td>{{ $materia->nombreMateria }}</td>
                <td>{{ $materia->nivel == 'L' ? 'Licenciatura' : 'Maestría' }}</td>
                <td>{{ $materia->modalidad == 'P' ? 'Presencial' : 'En línea' }}</td>
                <td>{{ $materia->reticula->descripcion }}</td> <!-- Relación con retícula -->
                <td><a href="{{route('materias.edit',$materia->id)}}" class="btn button btn-success">Editar</a></td>
                <td><a href="{{route('materias.show',$materia->id)}}" class="btn button btn-danger">Eliminar</a></td>
                <td><a href="{{route('materias.show',$materia->id)}}" class="btn button btn-primary">Ver</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $materias->links() }}
</div>
