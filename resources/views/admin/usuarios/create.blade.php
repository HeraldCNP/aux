@extends('admin.layout')

@section('content')

            <div class="row">
                <div class="col-md-8">
                    <!-- Basic Wizard Block -->
                    <div class="block">
                        <!-- Basic Wizard Title -->
                        <div class="block-title">
                            <h2><strong>Registrar</strong> Usuario</h2>
                        </div>
                        <!-- END Basic Wizard Title -->

                        <!-- Basic Wizard Content -->
                        <form id="basic-wizard" action="{{ route('usuarios.store') }}" method="post" class="form-horizontal form-bordered">
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
                                        <input type="text" id="example-email" name="email" class="form-control" value="{{ old('email') }}" placeholder="Ingrese su correo Electronico" autofocus>
                                        @if ($errors->has('email'))
                                            <small class="form-text text-danger">
                                                {{ $errors->first('email') }}
                                            </small>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="example-password">Password</label>
                                    <div class="col-md-6">
                                        <input type="password" id="example-password" name="password" class="form-control" placeholder="Ingrese su contraseña">
                                        @if ($errors->has('password'))
                                            <small class="form-text text-danger">
                                                {{ $errors->first('password') }}
                                            </small>
                                        @endif
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
                                        <input type="text" id="example-firstname" name="name" class="form-control" value="{{ old('name') }}" placeholder="Ingrese sus nombres">
                                        @if ($errors->has('name'))
                                            <small class="form-text text-danger">
                                                {{ $errors->first('name') }}
                                            </small>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="example-lastname">Apellidos</label>
                                    <div class="col-md-6">
                                        <input type="text" id="example-lastname" name="lastname" class="form-control" placeholder="Ingrese sus apellidos">
                                        @if ($errors->has('lastname'))
                                            <small class="form-text text-danger">
                                                {{ $errors->first('lastname') }}
                                            </small>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="example-phone"># Celular </label>
                                    <div class="col-md-6">
                                        <input type="text" id="example-phone" name="phone" class="form-control" placeholder="Ingrese su # de celular (whatsapp)">
                                        @if ($errors->has('phone'))
                                            <small class="form-text text-danger">
                                                {{ $errors->first('phone') }}
                                            </small>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="example-address">Dirección</label>
                                    <div class="col-md-6">
                                        <input type="text" id="example-address" name="address" class="form-control" placeholder="Ingrese su dirección">
                                        @if ($errors->has('address'))
                                            <small class="form-text text-danger">
                                                {{ $errors->first('address') }}
                                            </small>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="example-face">Facebook</label>
                                    <div class="col-md-6">
                                        <input type="text" id="example-face" name="face" class="form-control" placeholder="Ingrese su facebook personal">
                                        @if ($errors->has('face'))
                                            <small class="form-text text-danger">
                                                {{ $errors->first('face') }}
                                            </small>
                                        @endif
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


@section('usarDespues')
    <!-- Mini Top Stats Row -->
    <div class="row">
        <div class="col-sm-6 col-lg-3">
            <!-- Widget -->
            <a href="page_ready_article.html" class="widget widget-hover-effect1">
                <div class="widget-simple">
                    <div class="widget-icon pull-left themed-background-autumn animation-fadeIn">
                        <i class="fa fa-file-text"></i>
                    </div>
                    <h3 class="widget-content text-right animation-pullDown">
                        New <strong>Article</strong><br>
                        <small>Mountain Trip</small>
                    </h3>
                </div>
            </a>
            <!-- END Widget -->
        </div>
        <div class="col-sm-6 col-lg-3">
            <!-- Widget -->
            <a href="page_comp_charts.html" class="widget widget-hover-effect1">
                <div class="widget-simple">
                    <div class="widget-icon pull-left themed-background-spring animation-fadeIn">
                        <i class="gi gi-usd"></i>
                    </div>
                    <h3 class="widget-content text-right animation-pullDown">
                        + <strong>250%</strong><br>
                        <small>Sales Today</small>
                    </h3>
                </div>
            </a>
            <!-- END Widget -->
        </div>
        <div class="col-sm-6 col-lg-3">
            <!-- Widget -->
            <a href="page_ready_inbox.html" class="widget widget-hover-effect1">
                <div class="widget-simple">
                    <div class="widget-icon pull-left themed-background-fire animation-fadeIn">
                        <i class="gi gi-envelope"></i>
                    </div>
                    <h3 class="widget-content text-right animation-pullDown">
                        5 <strong>Messages</strong>
                        <small>Support Center</small>
                    </h3>
                </div>
            </a>
            <!-- END Widget -->
        </div>
        <div class="col-sm-6 col-lg-3">
            <!-- Widget -->
            <a href="page_comp_gallery.html" class="widget widget-hover-effect1">
                <div class="widget-simple">
                    <div class="widget-icon pull-left themed-background-amethyst animation-fadeIn">
                        <i class="gi gi-picture"></i>
                    </div>
                    <h3 class="widget-content text-right animation-pullDown">
                        +30 <strong>Photos</strong>
                        <small>Gallery</small>
                    </h3>
                </div>
            </a>
            <!-- END Widget -->
        </div>
        <div class="col-sm-6">
            <!-- Widget -->
            <a href="page_comp_charts.html" class="widget widget-hover-effect1">
                <div class="widget-simple">
                    <div class="widget-icon pull-left themed-background animation-fadeIn">
                        <i class="gi gi-wallet"></i>
                    </div>
                    <div class="pull-right">
                        <!-- Jquery Sparkline (initialized in admin/js/pages/index.js), for more examples you can check out http://omnipotent.net/jquery.sparkline/#s-about -->
                        <span id="mini-chart-sales"></span>
                    </div>
                    <h3 class="widget-content animation-pullDown visible-lg">
                        Latest <strong>Sales</strong>
                        <small>Per hour</small>
                    </h3>
                </div>
            </a>
            <!-- END Widget -->
        </div>
        <div class="col-sm-6">
            <!-- Widget -->
            <a href="page_widgets_stats.html" class="widget widget-hover-effect1">
                <div class="widget-simple">
                    <div class="widget-icon pull-left themed-background animation-fadeIn">
                        <i class="gi gi-crown"></i>
                    </div>
                    <div class="pull-right">
                        <!-- Jquery Sparkline (initialized in admin/js/pages/index.js), for more examples you can check out http://omnipotent.net/jquery.sparkline/#s-about -->
                        <span id="mini-chart-brand"></span>
                    </div>
                    <h3 class="widget-content animation-pullDown visible-lg">
                        Our <strong>Brand</strong>
                        <small>Popularity over time</small>
                    </h3>
                </div>
            </a>
            <!-- END Widget -->
        </div>
    </div>
    <!-- END Mini Top Stats Row -->

    <!-- Widgets Row -->
    <div class="row">
        <div class="col-md-6">
            <!-- Timeline Widget -->
            <div class="widget">
                <div class="widget-extra themed-background-dark">
                    <div class="widget-options">
                        <div class="btn-group btn-group-xs">
                            <a href="javascript:void(0)" class="btn btn-default" data-toggle="tooltip" title="Edit Widget"><i class="fa fa-pencil"></i></a>
                            <a href="javascript:void(0)" class="btn btn-default" data-toggle="tooltip" title="Quick Settings"><i class="fa fa-cog"></i></a>
                        </div>
                    </div>
                    <h3 class="widget-content-light">
                        Latest <strong>News</strong>
                        <small><a href="page_ready_timeline.html"><strong>View all</strong></a></small>
                    </h3>
                </div>
                <div class="widget-extra">
                    <!-- Timeline Content -->
                    <div class="timeline">
                        <ul class="timeline-list">
                            <li class="active">
                                <div class="timeline-icon"><i class="gi gi-airplane"></i></div>
                                <div class="timeline-time"><small>just now</small></div>
                                <div class="timeline-content">
                                    <p class="push-bit"><a href="page_ready_user_profile.html"><strong>Jordan Carter</strong></a></p>
                                    <p class="push-bit">The trip was an amazing and a life changing experience!!</p>
                                    <p class="push-bit"><a href="page_ready_article.html" class="btn btn-xs btn-primary"><i class="fa fa-file"></i> Read the article</a></p>
                                    <div class="row push">
                                        <div class="col-sm-6 col-md-4">
                                            <a href="img/placeholders/photos/photo1.jpg" data-toggle="lightbox-image">
                                                <img src="img/placeholders/photos/photo1.jpg" alt="image">
                                            </a>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <a href="img/placeholders/photos/photo22.jpg" data-toggle="lightbox-image">
                                                <img src="img/placeholders/photos/photo22.jpg" alt="image">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="active">
                                <div class="timeline-icon themed-background-fire themed-border-fire"><i class="fa fa-file-text"></i></div>
                                <div class="timeline-time"><small>5 min ago</small></div>
                                <div class="timeline-content">
                                    <p class="push-bit"><a href="page_ready_user_profile.html"><strong>Administrator</strong></a></p>
                                    <strong>Free courses</strong> for all our customers at A1 Conference Room - 9:00 <strong>am</strong> tomorrow!
                                </div>
                            </li>
                            <li class="active">
                                <div class="timeline-icon"><i class="gi gi-drink"></i></div>
                                <div class="timeline-time"><small>3 hours ago</small></div>
                                <div class="timeline-content">
                                    <p class="push-bit"><a href="page_ready_user_profile.html"><strong>Ella Winter</strong></a></p>
                                    <p class="push-bit"><strong>Happy Hour!</strong> Free drinks at <a href="javascript:void(0)">Cafe-Bar</a> all day long!</p>
                                    <div id="gmap-timeline" class="gmap"></div>
                                </div>
                            </li>
                            <li class="active">
                                <div class="timeline-icon"><i class="fa fa-cutlery"></i></div>
                                <div class="timeline-time"><small>yesterday</small></div>
                                <div class="timeline-content">
                                    <p class="push-bit"><a href="page_ready_user_profile.html"><strong>Patricia Woods</strong></a></p>
                                    <p class="push-bit">Today I had the lunch of my life! It was delicious!</p>
                                    <div class="row push">
                                        <div class="col-sm-6 col-md-4">
                                            <a href="img/placeholders/photos/photo23.jpg" data-toggle="lightbox-image">
                                                <img src="img/placeholders/photos/photo23.jpg" alt="image">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="active">
                                <div class="timeline-icon themed-background-fire themed-border-fire"><i class="fa fa-smile-o"></i></div>
                                <div class="timeline-time"><small>2 days ago</small></div>
                                <div class="timeline-content">
                                    <p class="push-bit"><a href="page_ready_user_profile.html"><strong>Administrator</strong></a></p>
                                    To thank you all for your support we would like to let you know that you will receive free feature updates for life! You are awesome!
                                </div>
                            </li>
                            <li class="active">
                                <div class="timeline-icon"><i class="fa fa-pencil"></i></div>
                                <div class="timeline-time"><small>1 week ago</small></div>
                                <div class="timeline-content">
                                    <p class="push-bit"><a href="page_ready_user_profile.html"><strong>Nicole Ward</strong></a></p>
                                    <p class="push-bit">Consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate.</p>
                                    Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus? Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales! Suspendisse potenti. Aliquam tincidunt sollicitudin sem nec ultrices. Sed at mi velit. Ut egestas tempor est, in cursus enim venenatis eget! Nulla quis ligula ipsum.
                                </div>
                            </li>
                            <li class="text-center">
                                <a href="javascript:void(0)" class="btn btn-xs btn-default">View more..</a>
                            </li>
                        </ul>
                    </div>
                    <!-- END Timeline Content -->
                </div>
            </div>
            <!-- END Timeline Widget -->
        </div>
        <div class="col-md-6">
            <!-- Your Plan Widget -->
            <div class="widget">
                <div class="widget-extra themed-background-dark">
                    <div class="widget-options">
                        <div class="btn-group btn-group-xs">
                            <a href="javascript:void(0)" class="btn btn-default" data-toggle="tooltip" title="Edit Widget"><i class="fa fa-pencil"></i></a>
                            <a href="javascript:void(0)" class="btn btn-default" data-toggle="tooltip" title="Quick Settings"><i class="fa fa-cog"></i></a>
                        </div>
                    </div>
                    <h3 class="widget-content-light">
                        Your <strong>VIP Plan</strong>
                        <small><a href="page_ready_pricing_tables.html"><strong>Upgrade</strong></a></small>
                    </h3>
                </div>
                <div class="widget-extra-full">
                    <div class="row text-center">
                        <div class="col-xs-6 col-lg-3">
                            <h3>
                                <strong>35</strong> <small>/50</small><br>
                                <small><i class="fa fa-folder-open-o"></i> Projects</small>
                            </h3>
                        </div>
                        <div class="col-xs-6 col-lg-3">
                            <h3>
                                <strong>25</strong> <small>/100GB</small><br>
                                <small><i class="fa fa-hdd-o"></i> Storage</small>
                            </h3>
                        </div>
                        <div class="col-xs-6 col-lg-3">
                            <h3>
                                <strong>65</strong> <small>/1k</small><br>
                                <small><i class="fa fa-building-o"></i> Clients</small>
                            </h3>
                        </div>
                        <div class="col-xs-6 col-lg-3">
                            <h3>
                                <strong>10</strong> <small>k</small><br>
                                <small><i class="fa fa-envelope-o"></i> Emails</small>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Your Plan Widget -->

            <!-- Charts Widget -->
            <div class="widget">
                <div class="widget-advanced widget-advanced-alt">
                    <!-- Widget Header -->
                    <div class="widget-header text-center themed-background">
                        <h3 class="widget-content-light text-left pull-left animation-pullDown">
                            <strong>Sales</strong> &amp; <strong>Earnings</strong><br>
                            <small>Last Year</small>
                        </h3>
                        <!-- Flot Charts (initialized in admin/js/pages/index.js), for more examples you can check out http://www.flotcharts.org/ -->
                        <div id="dash-widget-chart" class="chart"></div>
                    </div>
                    <!-- END Widget Header -->

                    <!-- Widget Main -->
                    <div class="widget-main">
                        <div class="row text-center">
                            <div class="col-xs-4">
                                <h3 class="animation-hatch"><strong>7.500</strong><br><small>Clients</small></h3>
                            </div>
                            <div class="col-xs-4">
                                <h3 class="animation-hatch"><strong>10.970</strong><br><small>Sales</small></h3>
                            </div>
                            <div class="col-xs-4">
                                <h3 class="animation-hatch">$<strong>31.230</strong><br><small>Earnings</small></h3>
                            </div>
                        </div>
                    </div>
                    <!-- END Widget Main -->
                </div>
            </div>
            <!-- END Charts Widget -->

            <!-- Weather Widget -->
            <div class="widget">
                <div class="widget-advanced widget-advanced-alt">
                    <!-- Widget Header -->
                    <div class="widget-header text-left">
                        <!-- For best results use an image with at least 150 pixels in height (with the width relative to how big your widget will be!) - Here I'm using a 1200x150 pixels image -->
                        <img src="img/placeholders/headers/widget5_header.jpg" alt="background" class="widget-background animation-pulseSlow">
                        <h3 class="widget-content widget-content-image widget-content-light clearfix">
                                                <span class="widget-icon pull-right">
                                                    <i class="fa fa-sun-o animation-pulse"></i>
                                                </span>
                            Weather <strong>Station</strong><br>
                            <small><i class="fa fa-location-arrow"></i> The Mountain</small>
                        </h3>
                    </div>
                    <!-- END Widget Header -->

                    <!-- Widget Main -->
                    <div class="widget-main">
                        <div class="row text-center">
                            <div class="col-xs-6 col-lg-3">
                                <h3>
                                    <strong>10&deg;</strong> <small>C</small><br>
                                    <small>Sunny</small>
                                </h3>
                            </div>
                            <div class="col-xs-6 col-lg-3">
                                <h3>
                                    <strong>80</strong> <small>%</small><br>
                                    <small>Humidity</small>
                                </h3>
                            </div>
                            <div class="col-xs-6 col-lg-3">
                                <h3>
                                    <strong>60</strong> <small>km/h</small><br>
                                    <small>Wind</small>
                                </h3>
                            </div>
                            <div class="col-xs-6 col-lg-3">
                                <h3>
                                    <strong>5</strong> <small>km</small><br>
                                    <small>Visibility</small>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <!-- END Widget Main -->
                </div>
            </div>
            <!-- END Weather Widget-->

            <!-- Advanced Gallery Widget -->
            <div class="widget">
                <div class="widget-advanced">
                    <!-- Widget Header -->
                    <div class="widget-header text-center themed-background-dark">
                        <h3 class="widget-content-light clearfix">
                            Awesome <strong>Gallery</strong><br>
                            <small>4 Photos</small>
                        </h3>
                    </div>
                    <!-- END Widget Header -->

                    <!-- Widget Main -->
                    <div class="widget-main">
                        <a href="page_comp_gallery.html" class="widget-image-container">
                            <span class="widget-icon themed-background"><i class="gi gi-picture"></i></span>
                        </a>
                        <div class="gallery gallery-widget" data-toggle="lightbox-gallery">
                            <div class="row">
                                <div class="col-xs-6 col-sm-3">
                                    <a href="img/placeholders/photos/photo15.jpg" class="gallery-link" title="Image Info">
                                        <img src="img/placeholders/photos/photo15.jpg" alt="image">
                                    </a>
                                </div>
                                <div class="col-xs-6 col-sm-3">
                                    <a href="img/placeholders/photos/photo5.jpg" class="gallery-link" title="Image Info">
                                        <img src="img/placeholders/photos/photo5.jpg" alt="image">
                                    </a>
                                </div>
                                <div class="col-xs-6 col-sm-3">
                                    <a href="img/placeholders/photos/photo6.jpg" class="gallery-link" title="Image Info">
                                        <img src="img/placeholders/photos/photo6.jpg" alt="image">
                                    </a>
                                </div>
                                <div class="col-xs-6 col-sm-3">
                                    <a href="img/placeholders/photos/photo13.jpg" class="gallery-link" title="Image Info">
                                        <img src="img/placeholders/photos/photo13.jpg" alt="image">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Widget Main -->
                </div>
            </div>
            <!-- END Advanced Gallery Widget -->
        </div>
    </div>
    <!-- END Widgets Row -->

@endsection

