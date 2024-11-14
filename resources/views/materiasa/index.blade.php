@extends('inicio2')
    
@section('contenido1')
    <div class="row"> 
        <div class="col"></div>
        <h3>
            Apertura de Materias
        </h3>
    </div>
    <div class="col">
        <select name="idperiodo" id="idperiodo" class="form-select">
            <option value="">Seleccione un periodo</option> <!-- Opción predeterminada -->
            @foreach($periodos as $periodo)
                <option value="{{ $periodo->id }}">{{ $periodo->periodo }}</option>
            @endforeach
        </select>
        <br>
        <!-- Select de Carreras -->
        <select name="idcarrera" id="idcarrera" class="form-select">
            <option value="">Seleccione una carrera</option> <!-- Opción predeterminada -->
            @foreach($carreras as $carrera)
                <option value="{{ $carrera->id }}">{{ $carrera->nombreCarrera }}</option>
            @endforeach
        </select>
    </div>

    <!-- Contenedor para el botón y los checkboxes de materias -->
    <div id="materiasContainer" style="margin-top: 20px;"></div>

@endsection

@section('scripts')
<script>
    // Función para verificar si ambos selects están seleccionados
    function cargarMaterias() {
        let periodoId = document.getElementById('idperiodo').value;
        let carreraId = document.getElementById('idcarrera').value;

        if (periodoId && carreraId) { // Solo carga materias si ambos están seleccionados
            fetch(`/obtener-materias?idcarrera=${carreraId}`)
                .then(response => response.json())
                .then(data => {
                    let materiasContainer = document.getElementById('materiasContainer');
                    materiasContainer.innerHTML = ''; // Limpiar las materias previas

                    // Crear y agregar el botón "Sem 1"
                    let button = document.createElement('button');
                    button.type = 'button';
                    button.className = 'btn btn-primary';
                    button.textContent = 'Sem 1';
                    materiasContainer.appendChild(button);

                    // Agregar los checkboxes de materias
                    data.forEach(materia => {
                        let checkbox = document.createElement('input');
                        checkbox.type = 'checkbox';
                        checkbox.name = 'materias[]';
                        checkbox.value = materia.id;
                        checkbox.id = `materia_${materia.id}`;

                        let label = document.createElement('label');
                        label.htmlFor = `materia_${materia.id}`;
                        label.textContent = materia.nombreMateria;

                        let div = document.createElement('div');
                        div.appendChild(checkbox);
                        div.appendChild(label);

                        materiasContainer.appendChild(div);
                    });
                })
                .catch(error => console.error("Error en la solicitud:", error));
        } else {
            document.getElementById('materiasContainer').innerHTML = ''; // Vacía el contenedor si falta un select
        }
    }

    // Agregar eventos de cambio a ambos selects
    document.getElementById('idperiodo').addEventListener('change', cargarMaterias);
    document.getElementById('idcarrera').addEventListener('change', cargarMaterias);
</script>
@endsection
