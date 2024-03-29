<!-- Navigation -->
<h6 class="navbar-heading text-muted">Gestionar datos</h6>
<ul class="navbar-nav">
<li class="nav-item">
    <a class="nav-link" href="./index.html">
    <i class="ni ni-tv-2 text-primary"></i> Inicio
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="./examples/icons.html">
    <i class="ni ni-planet text-blue"></i> Especialidades
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="./examples/maps.html">
    <i class="ni ni-circle-08 text-green"></i> Médicos
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="./examples/profile.html">
    <i class="ni ni-satisfied text-yellow text-info"></i> Pacientes
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('formLogout').submit();">
    <i class="ni ni-key-25"></i> Cerrar sesión
    </a>
    <form action="{{ route('logout') }}" method="POST" style="display: none;" id="formLogout">
        @csrf
    </form>
</li>
</ul>
<!-- Divider -->
<hr class="my-3">
<!-- Heading -->
<h6 class="navbar-heading text-muted">Reportes</h6>
<!-- Navigation -->
<ul class="navbar-nav mb-md-3">
<li class="nav-item">
    <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/getting-started/overview.html">
    <i class="ni ni-collection text-red"></i> Frecuencia de citas
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/foundation/colors.html">
    <i class="ni ni-notification-70 text-orange"></i> Médicos más activos
    </a>
</li>
</ul>
