@extends('admin.layout')

@section('content')
    <!-- Forms General Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="gi gi-notes_2"></i>Actualizar Usuario<br><small>En esta sección puede actualizar los datos de un usuario</small>
            </h1>
        </div>
    </div>
    <ul class="breadcrumb breadcrumb-top">
        <li>Usuarios</li>
        <li><a href="">Actualizar Usuario</a></li>
    </ul>

                <div class="row">
                    <div class="col-md-9">
                        <!-- Basic Wizard Block -->
                        <div class="block">
                            <!-- Basic Wizard Title -->
                            <div class="block-title text-center">
                                <h2><strong>Actualizar Usuario</strong> </h2>
                            </div>
                            <!-- END Basic Wizard Title -->

                            <!-- Input Groups Row -->
                            <div class="row">
                                <form action="{{ route('usuarios.update', $user) }}" method="POST" class="form-horizontal form-bordered">
                                    @method('PUT')
                                    @csrf
                                    <div class="col-md-6">
                                        <!-- Input Groups - Icons/Text Block -->
                                        <div class="block">
                                            <!-- Input Groups - Icons/Text Title -->
                                            <div class="block-title text-center">
                                                <h3>Datos de la cuenta</h3>
                                            </div>
                                            <!-- END Input Groups - Icons/Text Title -->

                                            <!-- Input Groups Content -->

                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                                        <input type="text" id="example-email" name="email" class="form-control" value="{{ $user->email }}" autofocus>
                                                        @if ($errors->has('email'))
                                                            <small class="form-text text-danger">
                                                                {{ $errors->first('email') }}
                                                            </small>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12 text-center" for="example-email">Rellene los campos si desea cambiar su contraseña</label>

                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                                        <input type="password" id="example-password" name="password" class="form-control" placeholder="Ingrese su contraseña">
                                                        @if ($errors->has('password'))
                                                            <small class="form-text text-danger">
                                                                {{ $errors->first('password') }}
                                                            </small>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                                        <input type="password" id="example-password2" name="password2" class="form-control" placeholder="Repita su contraseña">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="block">
                                            <div class="block-title text-center">
                                                <h3>Datos Personales</h3>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                        <input type="text" id="example-firstname" name="name" class="form-control" value="{{ $user->persona->name }}">
                                                        @if ($errors->has('name'))
                                                            <small class="form-text text-danger">
                                                                {{ $errors->first('name') }}
                                                            </small>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                        <input type="text" id="example-lastname" name="lastname" class="form-control" value="{{ $user->persona->lastname }}">
                                                        @if ($errors->has('lastname'))
                                                            <small class="form-text text-danger">
                                                                {{ $errors->first('lastname') }}
                                                            </small>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                                        <input type="text" id="example-phone" name="phone" class="form-control" value="{{ $user->persona->phone }}">
                                                        @if ($errors->has('phone'))
                                                            <small class="form-text text-danger">
                                                                {{ $errors->first('phone') }}
                                                            </small>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-home"></i></span>
                                                        <input type="text" id="example-address" name="address" class="form-control" value="{{ $user->persona->address }}">
                                                        @if ($errors->has('address'))
                                                            <small class="form-text text-danger">
                                                                {{ $errors->first('address') }}
                                                            </small>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-facebook"></i></span>
                                                        <input type="text" id="example-face" name="face" class="form-control" value="{{ $user->persona->face }}">
                                                        @if ($errors->has('face'))
                                                            <small class="form-text text-danger">
                                                                {{ $errors->first('face') }}
                                                            </small>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>



                                            <!-- END Input Groups - Icons/Text Content -->
                                        </div>
                                        <div class="form-group form-actions text-center">
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-info">Actualizar</button>
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

