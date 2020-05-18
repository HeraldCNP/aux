<nav class="navbar sticky-top navbar-toggleable-md navbar-inverse bg-inverse">

    <button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#fm-menu" aria-controls="fm-menu" aria-expanded="false" aria-label="Menu">
        <span class="navbar-toggler-icon"></span>
    </button>

    <a class="navbar-brand" href="{{ route('inicio') }}">
        <img src="{{ asset('images/logo.png') }}" alt="">
    </a>

    <div class="collapse navbar-collapse menu" id="fm-menu">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a href="{{ route('inicio') }}" class="nav-link active">Inicio</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('practicas') }}" class="nav-link">Practicas</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('video') }}" class="nav-link">Videos</a>
            </li>
            <li class="nav-item disabled">
                <a href="#" class="nav-link">Anterior</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link disabled">Contacto</a>
            </li>
        </ul>
    </div>

</nav>
