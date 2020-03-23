<!-- Nav items -->
<h6 class="navbar-heading p-0 text-muted">
    <span class="docs-normal">Gestionar Datos</span>
</h6>
<ul class="navbar-nav">

    <li class="nav-item">
        <a class="nav-link active" href="{{url('/home')}}">
            <i class="ni ni-tv-2 text-primary"></i>
            <span class="nav-link-text">Dashboard</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{url('/specialties')}}">
            <i class="ni ni-archive-2 text-orange"></i>
            <span class="nav-link-text">Gestionar Especialidades</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{url('/doctors')}}">
            <i class="ni ni-ambulance text-primary"></i>
            <span class="nav-link-text">Medicos</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{url('/patients')}}">
            <i class="ni ni-circle-08 text-yellow"></i>
            <span class="nav-link-text">Pacientes</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#" onclick="event.preventDefault(); document.getElementById('formLogout').submit();">
            <i class="ni ni-button-power text-info"></i>
            <span class="nav-link-text">Cerrar Sesion</span>
        </a>
        <form action="{{route('logout')}}" method="POST" style="display: none" id="formLogout">
            @csrf
        </form>
    </li>
</ul>
<!-- Divider -->
<hr class="my-3">
<!-- Heading -->
<h6 class="navbar-heading p-0 text-muted">
    <span class="docs-normal">Reportes</span>
</h6>
<!-- Navigation -->
<ul class="navbar-nav mb-md-3">
    <li class="nav-item">
        <a class="nav-link"
           href="#">
            <i class="ni ni-calendar-grid-58"></i>
            <span class="nav-link-text">Frecuencia de Citas</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link"
           href="#">
            <i class="ni ni-chart-bar-32"></i>
            <span class="nav-link-text">Medicos mas activos</span>
        </a>
    </li>
</ul>
