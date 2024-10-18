 <!-- Nav tabs -->
 <ul class="nav nav-tabs" id="navId" role="tablist">
    <li class="nav-item">
        <a href="#tab1Id" class="nav-link active" data-bs-toggle="tab" aria-current="page">Bienvenidos</a>
    </li>

    {{-- CATALOGO con dropdown --}}
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="catalogoDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Catálogos
        </a>
        <ul class="dropdown-menu" aria-labelledby="catalogoDropdown">
            <li><a class="dropdown-item" href="{{ route('alumnos.index') }}">Alumnos</a></li>
            <li><a class="dropdown-item" href="{{ route('plazas.index') }}">Plazas</a></li>
            <li><a class="dropdown-item" href="{{ route('puestos.index') }}">Puestos</a></li>
        </ul>
    </li>

    {{-- Otras opciones del menú --}}
    <li class="nav-item" role="presentation">
        <a href="{{ route('horarios') }}" class="nav-link">Horarios</a>
    </li>

    <li class="nav-item" role="presentation">
        <a href="{{ route('proyectosIndividuales') }}" class="nav-link">Proyectos individuales</a>
    </li>

    <li class="nav-item" role="presentation">
        <a href="{{ route('instrumentacion') }}" class="nav-link">Instrumentación</a>
    </li>

    <li class="nav-item" role="presentation">
        <a href="{{ route('tutorias') }}" class="nav-link">Tutorías</a>
    </li>

    {{-- Periodos --}}
    <li class="nav-item">
        <select class="form-select" aria-label="Seleccionar periodo">
            <option selected disabled>Periodo</option>
            <option value="ene-jun-24">Ene-Jun 24</option>
            <option value="ago-dic-24">Ago-Dic 24</option>
            <option value="ene-jun-25">Ene-Jun 25</option>
        </select>
    </li>

    @guest
    <li class="nav-item" role="presentation">
        <a href="{{ route('login') }}" class="nav-link">Logeo</a>
    </li>
    @endguest

    @auth
    <li class="nav-item" role="presentation">
        <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log Out</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </li>
    @endauth    
</ul>
