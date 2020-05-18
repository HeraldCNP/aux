@extends('layout')

@section('content')
    <section class="contenedor-main row">
        <main class="col-md-8">
            <h2 class="text-center">Auxiliatura SIS-414 - Tecnologias Emergentes</h2>
            <p class="text-center"><b>PRACTICAS</b></p>
            <div class="row">
                <div class="col-4">
                    <div class="list-group" id="list-tab" role="tablist">
                        <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Practicas</a>
                    </div>
                </div>
                <div class="col-8">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-center"><a class="btn btn-outline-success">Practica 1 - HTML &
                                        CSS</a></li>
                                <li class="list-group-item d-flex justify-content-center"><a class="btn btn-outline-success">Practica 2 - JS &
                                        BOOTSTRAP & GIT</a></li>
                                <li class="list-group-item d-flex justify-content-center"><a class="btn btn-outline-success">Practica 3 - PHP</a></li>
                                <li class="list-group-item d-flex justify-content-center"><a class="btn btn-outline-success">Practica 4 - +PHP</a></li>
                                <li class="list-group-item d-flex justify-content-center"><a class="btn btn-outline-success">Practica 5 - ¿?</a></li>
                                <li class="list-group-item d-flex justify-content-center"><a class="btn btn-outline-success">Practica 6 - ¿?</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </main>

        <aside class="col-md-4 align-self-center">
            <h3>ASIDE</h3>
        </aside>
    </section>
@endsection
