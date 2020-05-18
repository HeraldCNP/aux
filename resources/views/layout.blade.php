<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="icon" href="{{ asset('images/icono.ico') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">

    <title>Auxiliatura Tecnologias Emergentes</title>
</head>

<body>

<header class="fondo">
</header>

@include('partials.nav')




<div class="container">

    @yield('content')

    <footer class="row">
        <div class="col d-flex justify-content-center">

            <p>Created By HeraldCNP</p>
            <ul>
                <li>
                    <a href="https://www.facebook.com/HeraldCNP" target="_blank">Facebook</a>
                </li>
                <li>
                    <a href="https://github.com/heraldcnp" target="_blank">GitHub</a>
                </li>
            </ul>
        </div>
    </footer>
</div>



<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>

</html>
