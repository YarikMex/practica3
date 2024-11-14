@isset($mensaje)
    <p>{{ $mensaje }}</p>
@endisset

<a href="{{ route('personals.create') }}" class="btn button btn-dark" style="margin-bottom: 15px;" role="button">Insertar</a>
<div class="table-md">
    <table class="table table-primary">
        <thead>
            <tr>
                <th>ID</th>
                <th>RFC</th>
                <th>Nombres</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Licenciatura</th>
                <th>Licenciatura Titulado</th>
                <th>Especialización</th>
                <th>Especialización Titulado</th>
                <th>Maestría</th>
                <th>Maestría Titulado</th>
                <th>Doctorado</th>
                <th>Doctorado Titulado</th>
                <th>Fecha Ingreso SEP</th>
                <th>Fecha Ingreso Institución</th>
                <th>Departamento</th>
                <th>Puesto</th>
                <th>EDITAR</th>
                <th>ELIMINAR</th>
                <th>VER</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($personals as $personal)
            <tr>
                <td>{{ $personal->id }}</td>
                <td>{{ $personal->RFC }}</td>
                <td>{{ $personal->nombres }}</td>
                <td>{{ $personal->apellidop }}</td>
                <td>{{ $personal->apellidom }}</td>
                <td>{{ $personal->licenciatura ?? 'N/A' }}</td>
                <td>{{ $personal->licit ? 'Sí' : 'No' }}</td>
                <td>{{ $personal->especializacion ?? 'N/A' }}</td>
                <td>{{ $personal->espit ? 'Sí' : 'No' }}</td>
                <td>{{ $personal->maestria ?? 'N/A' }}</td>
                <td>{{ $personal->maetit ? 'Sí' : 'No' }}</td>
                <td>{{ $personal->doctorado ?? 'N/A' }}</td>
                <td>{{ $personal->doctit ? 'Sí' : 'No' }}</td>
                <td>{{ $personal->fechasingsep ? \Carbon\Carbon::parse($personal->fechasingsep)->format('d/m/Y') : 'N/A' }}</td>
                <td>{{ $personal->fechaisingins ? \Carbon\Carbon::parse($personal->fechaisingins)->format('d/m/Y') : 'N/A' }}</td>
                
                <td>{{ $personal->depto->nombredepto ?? 'Sin Depto' }}</td>
                <td>{{ $personal->puesto->nombrePuesto ?? 'Sin Puesto' }}</td>
                <td><a href="{{ route('personals.edit', $personal->id) }}" class="btn btn-success">Editar</a></td>
                <td><a href="{{ route('personals.show', $personal->id) }}" class="btn btn-danger">Eliminar</a></td>
                <td><a href="{{ route('personals.show', $personal->id) }}" class="btn btn-primary">Ver</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $personals->links() }}
</div>
