@extends('layout')

@section('content')
    <section class="contenedor-main row">
        <main class="col-md-12">
            <h2 class="text-center">Videos de las clases Online</h2>
            <p class="text-center"><b>Auxiliatura SIS-414 - Tecnologías Emergentes</b></p>
            <div class="row">
                <div class="col-3">
                    <div class="list-group" id="list-tab" role="tablist">
                        @foreach($videos as $video)
                            <a class="list-group-item list-group-item-action" id="{{ $video->slug }}" data-toggle="list" href="#{{ $video->slug }}-{{ $video->id }}" role="tab" aria-controls="clase1">{{ $video->title }}</a>
                        @endforeach
                    </div>
                </div>
                <div class="col-9">
                    <div class="tab-content" id="nav-tabContent">
                        @foreach($videos as $video)
                            <div class="tab-pane fade show active" id="{{ $video->slug }}-{{$video->id}}" role="tabpanel" aria-labelledby="{{ $video->slug }}">
                                <ul class="list-group">
                                    <li class="list-group-item d-flex justify-content-center">
                                        <p>{{ $video->description }}</p>
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" src="{{ $video->link }}" allowfullscreen></iframe>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </main>

    </section>
@endsection
