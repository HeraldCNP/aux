@extends('admin.layout')

@section('content')

    <div class="row">
        <div class="col-md-8">
            <!-- Basic Wizard Block -->
            <div class="block">
                <!-- Basic Wizard Title -->
                <div class="block-title">
                    <h2><strong>Actualizar</strong> Usuario</h2>
                </div>
                <!-- END Basic Wizard Title -->

                <!-- Basic Wizard Content -->
                <form id="basic-wizard" action="{{ route('usuarios.update', $user) }}" method="POST" class="form-horizontal form-bordered">
                @method('PUT')
                @csrf
                <!-- First Step -->
                    <div id="first" class="step">
                        <!-- Step Info -->
                        <div class="wizard-steps">
                            <div class="row">
                                <div class="col-xs-6 active">
                                    <span>1. Cuenta</span>
                                </div>
                                <div class="col-xs-6">
                                    <span>2. Personal</span>
                                </div>
                            </div>
                        </div>
                        <!-- END Step Info -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-email">Email</label>
                            <div class="col-md-6">
                                <input type="text" id="example-email" name="email" class="form-control" value="{{ $user->email }}" autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12 text-center" for="example-email">Rellene los campos si desea cambiar su contraseña</label>

                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-password">Password</label>
                            <div class="col-md-6">
                                <input type="password" id="example-password" name="password" class="form-control" placeholder="Ingrese su contraseña">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-password2">Retype Password</label>
                            <div class="col-md-6">
                                <input type="password" id="example-password2" name="password2" class="form-control" placeholder="Repita su contraseña">
                            </div>
                        </div>
                    </div>
                    <!-- END First Step -->

                    <!-- Second Step -->
                    <div id="second" class="step">
                        <!-- Step Info -->
                        <div class="wizard-steps">
                            <div class="row">
                                <div class="col-xs-6 done">
                                    <span><i class="fa fa-check"></i></span>
                                </div>
                                <div class="col-xs-6 active">
                                    <span>2. Personal</span>
                                </div>
                            </div>
                        </div>
                        <!-- END Step Info -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-firstname">Nombres</label>
                            <div class="col-md-6">
                                <input type="text" id="example-firstname" name="name" class="form-control" value="{{ $user->persona->name }}" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-lastname">Apellidos</label>
                            <div class="col-md-6">
                                <input type="text" id="example-lastname" name="lastname" class="form-control" value="{{ $user->persona->lastname }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-phone"># Celular </label>
                            <div class="col-md-6">
                                <input type="text" id="example-phone" name="phone" class="form-control" value="{{ $user->persona->phone }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-address">Dirección</label>
                            <div class="col-md-6">
                                <input type="text" id="example-address" name="address" class="form-control" value="{{ $user->persona->address }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-city">Facebook</label>
                            <div class="col-md-6">
                                <input type="text" id="example-city" name="face" class="form-control" value="{{ $user->persona->face }}">
                            </div>
                        </div>
                    </div>
                    <!-- END Second Step -->

                    <!-- Form Buttons -->
                    <div class="form-group form-actions">
                        <div class="col-md-8 col-md-offset-4">
                            <input type="reset" class="btn btn-danger" id="back" value="Atras">
                            <input type="submit" class="btn btn-primary" id="next" value="Siguiente">
                        </div>
                    </div>
                    <!-- END Form Buttons -->
                </form>
                <!-- END Basic Wizard Content -->
            </div>
            <!-- END Basic Wizard Block -->
        </div>
        <div class="col-md-4">
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
    <!-- END Wizards Row -->
@endsection

@push('scripts')
    <!-- Load and execute javascript code used only in this page -->
    <script src="{{ asset('admin/js/pages/formsWizard.js') }}"></script>
    <script>$(function(){ FormsWizard.init(); });</script>
@endpush

