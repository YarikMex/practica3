 <!-- Nav tabs -->

 <ul
 class="nav nav-tabs"
 id="navId"
 role="tablist"
>
 <li class="nav-item">
     <a
         href="#tab1Id"
         class="nav-link active"
         data-bs-toggle="tab"
         aria-current="page"
         >Bienvenidos</a
     >
 </li>

    {{-- CATALOGO --}}
    <li class="nav-item" role="presentation">
        <a href="{{route('catalogo')}}" class="nav-link" 
            >Catalogos</a>
    </li>

    {{-- HORARIOS --}}
    <li class="nav-item" role="presentation">
        <a href="{{route('horarios')}}" class="nav-link" 
            >Horarios</a>
    </li>

    {{-- PROYECTOS IND. --}}
    <li class="nav-item" role="presentation">
        <a href="{{route('proyectosIndividuales')}}" class="nav-link" 
            >Proyectos individuales </a>
    </li>

    {{-- INSTRUMENTACION --}}
    <li class="nav-item" role="presentation">
        <a href="{{route('instrumentacion')}}" class="nav-link" 
            >Instrumentacion</a>
    </li>

    {{-- TUTORIAS --}}
    <li class="nav-item" role="presentation">
        <a href="{{route('tutorias')}}" class="nav-link" 
            >Tutorias </a>
    </li>

    {{-- PERIODO - SELECT --}}
    <li class="nav-item">
        <select class="form-select" aria-label="Seleccionar periodo">
            <option selected disabled>Periodo</option>
            <option value="ene-jun-24">Ene-Jun 24</option>
            <option value="ago-dic-24">Ago-Dic 24</option>
            <option value="ene-jun-25">Ene-Jun 25</option>
        </select>
    </li>
    

 {{-- guest estas como invitado --}}
 {{-- si no esta autentificado --}}
 @guest 

 <li class="nav-item" role="presentation">
     <a href="{{route('login')}}" class="nav-link" >Logeo</a>
 </li>
@endguest


 {{-- auth si esta autentificado --}}
@auth
<li class="nav-item" role="presentation">
    <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        Log Out
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</li>


@endauth    
</ul>

  
