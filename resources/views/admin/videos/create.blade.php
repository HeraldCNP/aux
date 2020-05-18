@extends('admin.layout')

@section('content')


    <!-- Forms General Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="gi gi-notes_2"></i>Registrar Videos<br><small>En esta sección puede crear un nuevo video</small>
            </h1>
        </div>
    </div>
    <ul class="breadcrumb breadcrumb-top">
        <li>Videos</li>
        <li><a href="">Crear Nuevo</a></li>
    </ul>
    <!-- END Forms General Header -->

    <div class="row">
        <div class="col-md-9">
            <!-- Basic Wizard Block -->
            <div class="block">
                <!-- Basic Wizard Title -->
                <div class="block-title text-center">
                    <h2><strong>Registrar Videos</strong> </h2>
                </div>
                <!-- END Basic Wizard Title -->

                <!-- Input Groups Row -->
                <div class="row">
                    <form action="{{ route('videos.store') }}" method="post" class="form-horizontal form-bordered">
                        @csrf
                        <div class="col-md-8 col-md-offset-2">
                            <div class="block">
                                <div class="block-title text-center">
                                    <h3>Datos del video</h3>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-video-camera"></i></span>
                                            <input type="text" id="title" name="title" class="form-control" value="{{ old('title') }}" placeholder="Ingrese el titulo del video">
                                            @if ($errors->has('title'))
                                                <small class="form-text text-danger">
                                                    {{ $errors->first('title') }}
                                                </small>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-file-text-o"></i></span>
                                            <input type="text" id="description" name="description" class="form-control" placeholder="Ingrese una descripción">
                                            @if ($errors->has('description'))
                                                <small class="form-text text-danger">
                                                    {{ $errors->first('description') }}
                                                </small>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-link"></i></span>
                                            <input type="text" id="link" name="link" class="form-control" placeholder="Ingrese el enlace del video">
                                            @if ($errors->has('link'))
                                                <small class="form-text text-danger">
                                                    {{ $errors->first('link') }}
                                                </small>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <!-- END Input Groups - Icons/Text Content -->
                            </div>
                            <div class="form-group form-actions text-center">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-info">Registrar</button>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
                <!-- END Input Groups Row -->


            </div>
            <!-- END Basic Wizard Block -->
        </div>
        <div class="col-md-3">
            <!-- Wizard with Validation Block -->
            <div class="block">
                <!-- Wizard with Validation Title -->
                <div class="block-title">
                    <h2><strong>Publicidad</strong></h2>
                </div>
                <!-- END Wizard with Validation Title -->

            </div>
            <!-- END Wizard with Validation Block -->
        </div>
    </div>
    <!-- END Forms General -->
@endsection

@push('scripts')
    <!-- Load and execute javascript code used only in this page -->
    <script src="{{ asset('admin/js/pages/formsWizard.js') }}"></script>
    <script>$(function(){ FormsWizard.init(); });</script>
@endpush


