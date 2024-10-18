@isset($mensaje)
    <p>{{$mensaje}}</p>
@endisset

<a href="{{route('plazas.create')}}" class="btn button btn-dark" style="margin-bottom: 15px;" role="button">Insertar</a>
<div class="table-md">
    <table class="table table-primary">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre de la Plaza</th>
                <th>EDITAR</th>
                <th>ELIMINAR</th>
                <th>VER</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($plazas as $plaza)
            <tr>
                <td scope="row">{{ $plaza->idPlaza }}</td>
                <td>{{ $plaza->nombrePlaza }}</td>
                <td><a href="{{route('plazas.edit',$plaza->idPlaza)}}" class="btn button btn-success">Editar</a></td>
                <td><a href="{{route('plazas.show',$plaza->idPlaza)}}" class="btn button btn-danger">Eliminar</a></td>
                <td><a href="{{route('plazas.show',$plaza->idPlaza)}}" class="btn button btn-primary">Ver</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $plazas->links() }}
</div>
