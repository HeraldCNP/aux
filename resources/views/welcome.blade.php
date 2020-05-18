@extends('layout')

@section('content')
    <section class="contenedor-main row">
        <main class="col-md-8">
            <h2 class="text-center">Auxiliatura SIS-414 - Tecnologias Emergentes</h2>
            <p class="text-center"><b>Auxiliar:</b> Herald Choque Vargas</p>
            <div class="row">
                <div class="col-4">
                    <div class="list-group" id="list-tab" role="tablist">
                        <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Horario</a>
                        <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Grupo de Telegram</a>
                        <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Material</a>
                    </div>
                </div>
                <div class="col-8">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-center"><b>Horarios por definir
                                        Piso # - Ambiente #</b></li>
                                <li class="list-group-item d-flex justify-content-center"><b>Horarios por definir
                                        Piso # - Laboratorio #</b></li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-center">
                                    <p><a class="btn btn-success" href="https://t.me/joinchat/AAAAAE7AW1EmqPjkTpIOyA" target="_blank">Enlace al canal de Telegram</a></p>
                                </li>
                                <li class="list-group-item d-flex justify-content-center">
                                    <p><a class="btn btn-success" href="https://t.me/joinchat/Ifc6ShksPQfReQC7GopmwQ" target="_blank">Enlace al grupo de Telegram</a></p>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-center">
                                    <p><a class="btn btn-success" href="https://www.dropbox.com/s/awmobcgk883v7fj/recursos.rar?dl=0" target="_blank">Recursos a utilizar</a></p>
                                </li>
                                <li class="list-group-item d-flex justify-content-center">
                                    <p><a class="btn btn-success" href="https://www.000webhost.com/" target="_blank">000webhost</a></p>
                                </li>
                                <li class="list-group-item d-flex justify-content-center">
                                    <p><a class="btn btn-success" href="http://www.uhostfull.com/" target="_blank">U
                                            Host Full</a></p>
                                </li>
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

    <section class="row widgets justify-content-between">
        <div class="col-12 col-md-4 col-lg-3 card mb-3">
            <img class="card-img-top img-fluid" src="{{ asset('images/html.png') }}" alt="Logo html5">
            <div class="card-body">
                <h5 class="card-title text-center">HTML 5</h5>
                <p class="card-text text-justify">HTML5 es un lenguaje markup (de hecho, las siglas de HTML significan Hyper Text Markup Language) usado para estructurar y presentar el contenido para la web. ... Es de hecho la quinta revisión del estándar que fue creado en 1990.</p>
            </div>
        </div>

        <div class="col-12 col-md-4 col-lg-3 card mb-3">
            <img class="card-img-top img-fluid" src="{{ asset('images/css.png') }}" alt="Logo css3">
            <div class="card-body">
                <h5 class="card-title text-center">CSS 3</h5>
                <p class="card-text text-justify">CSS es un lenguaje de hojas de estilos creado para controlar el aspecto o presentación de los documentos electrónicos definidos con HTML y XHTML. CSS es la mejor forma de separar los contenidos y su presentación y es imprescindible
                    para crear páginas web complejas.</p>
            </div>
        </div>

        <div class="col-12 col-md-4 col-lg-3 card">
            <img class="card-img-top img-fluid" src="{{ asset('images/js.png') }}" alt="Logo JS">
            <div class="card-body">
                <h5 class="card-title text-center">JS</h5>
                <p class="card-text text-justify">JavaScript es un lenguaje de programación interpretado, dialecto del estándar ECMAScript. Se define como orientado a objetos,​ basado en prototipos, imperativo, débilmente tipado y dinámico.</p>
            </div>
        </div>
    </section>
@endsection
