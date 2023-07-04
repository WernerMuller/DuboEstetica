<!DOCTYPE html>
<html>
    <head>
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

        <link rel="icon" type="image/png" href="{{ asset("assets/images/favicon-medical.png") }}">

        <!--main file-->
        <link href="{{ asset("assets/css/medical-guide.css") }}" rel="stylesheet" type="text/css">

        <!--Medical Guide Icons-->
        <link href="{{ asset("assets/fonts/medical-guide-icons.css") }}" rel="stylesheet" type="text/css">

        <!-- Default Color-->
        <link href="{{ asset("assets/css/default-color.css") }}" rel="stylesheet" id="color" type="text/css">

        <!--bootstrap-->
        <link href="{{ asset("assets/css/bootstrap.css") }}" rel="stylesheet" type="text/css">

        <!--Dropmenu-->
        <link href="{{ asset("assets/css/dropmenu.css") }}" rel="stylesheet" type="text/css">

        <!--Sticky Header-->
        <link href="{{ asset("assets/css/sticky-header.css") }}" rel="stylesheet" type="text/css">

        <!--revolution-->
        <link href="{{ asset("assets/css/style.css") }}" rel="stylesheet" type="text/css">
        <link href="{{ asset("assets/css/settings.css") }}" rel="stylesheet" type="text/css">
        <link href="{{ asset("assets/css/extralayers.css") }}" rel="stylesheet" type="text/css">

        <!--Accordion-->
        <link href="{{ asset("assets/css/accordion.css") }}" rel="stylesheet" type="text/css">

        <!--tabs-->
        <link href="{{ asset("assets/css/tabs.css") }}" rel="stylesheet" type="text/css">

        <!--Owl Carousel-->
        <link href="{{ asset("assets/css/owl.carousel.css") }}" rel="stylesheet" type="text/css">

        <!-- Mobile Menu -->
        <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/jquery.mmenu.all.css") }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/demo.css") }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/tao.css") }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/loading.css") }}" />

        <!--PreLoader-->
        <link href="{{ asset("assets/css/loader.css") }}" rel="stylesheet" type="text/css">

        {{-- full calendar --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/main.css">
        <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/main.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/locales-all.js"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/fontawesome.min.css" integrity="sha512-cHxvm20nkjOUySu7jdwiUxgGy11vuVPE9YeK89geLMLMMEOcKFyS2i+8wo0FOwyQO/bL8Bvq1KMsqK4bbOsPnA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        @yield("content-csr")

        <title>@yield('title')</title>
    </head>
<body>
    {{-- * boton de wassap --}}
    <a href="https://wa.me/+56999711819" class="whatsapp" target="_blank"> <img class="img-wsp-icon" src="{{ asset('assets/images/swp.svg') }}" alt=""></a>

    <div id="wrap">
        {{--
        * es el loading permite que cargue antes de cualquier cosa
        ! se debe correigr al entrar  ala vista de contacto el loader bloquea esa vista,
        ! por ende se debe corregir la var $selected == 4 esta en el controlador de la vista
        ! contacto
        --}}
        @if($selected != 4)
        <div id="preloader">
             <div id="status">&nbsp;</div>
             <div class="loader">
                 <h1>Cargando...</h1>
                 <span></span>
                 <span></span>
                 <span></span>
             </div>
         </div>
         @endif
         <!--End PreLoader-->
        <!--Start Top Bar-->
        <div class="top-bar">
            <div class="container">
                <div class="row">

                    <div class="col-md-5">
                        <span>{{ $direccion }}</span>
                    </div>

                    <div class="col-md-7">

                        <div class="get-touch">

                            <ul>
                                <li><a href="tel+{{ $phone }}"><i class="icon-phone4"></i>{{ $phone }}</a></li>
                                <li><a href="mailto:{{ $email_contact }}"><i class="icon-mail"></i>{{ $email_contact }}</a></li>
                            </ul>

                            <ul class="social-icons">
                                <li><a href="{{ $facebook }}" target="_blank" class="fb"><i class="icon-facebook2"></i> </a></li>
                                <li><a href="{{ $instagram }}" target="_blank" class="tw"><i class="icon-instagram"></i> </a></li>
                                <li><a href="tel+{{ $phone }}" class="gp"><i class="icon-phone5"></i> </a></li>
                            </ul>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--Top Bar End-->

        <!--Start Header-->
        <header class="header">
            <div class="container">

                <div class="row">

                    <div class="col-md-3">
                        <a href="{{ url("./") }}" class="logo"><img style="width: 150px" src="{{ asset("assets/images/logo_.png") }}" alt=""></a>
                    </div>

                    <div class="col-md-9">

                        <nav class="menu-2">
                            <ul class="nav wtf-menu">
                                <li class="{{ $selected == 1 ? 'item-select' : '' }} parent"><a href="{{ url('./') }}">Inicio</a></li>
                                <li class="{{ $selected == 2 ? 'item-select' : '' }} parent"><a href="#.">Servicios</a>
                                    <ul class="submenu">
                                        {{-- *menu original --}}
                                        @foreach (servicios() AS $item)
                                        <li class="parent"> <a href="{{ url($item->url) }}">{{ ucfirst(strtolower($item->nombre)) }}</a> </i></li>
                                        @endforeach
                                    </ul>

                                </li>


                                {{-- <li><a href="{{ url("./shop") }}">Tienda</a></li> --}}

                                <li class="{{ $selected == 4 ? 'item-select' : '' }}"><a href="{{ url('./quienessomos') }}">Quiénes  somos</a></li>

                                <li class="{{ $selected == 5 ? 'item-select' : '' }} parent"><a href="{{ url('./contactanos') }}">Contacto</a></li>

                                {{-- <li class="item-select parent"><a href="{{ $url_general }}"><img class="img-wsp-icon-button" src="{{ asset('assets/images/swp.svg') }}" alt="">Reservar</a></li> --}}
                                {{-- <a href="{{ $item->url }}">Reservar</a> --}}

                            </ul>
                        </nav>

                    </div>

                </div>


            </div>
        </header>


        {{-- * NAV RESPONSIVE DESIGNE --}}
        <div class="container">
            <div id="page">
                <header class="header">
                    <a href="#menu"></a>

                </header>

                <nav id="menu">
                    <ul>
                        <li class="select"><a href="{{ url("./") }}">Inicio</a></li>

                        @foreach (servicios() AS $item)
                        <li> <a href="{{ url($item->url) }}">{{  ucfirst(strtolower($item->nombre)) }}</a> </i></li>
                        @endforeach
                        <li class=""><a href="{{ url('./quienessomos') }}">Quienes somos</a></li>
                        <li class=""><a href="{{ url('./contactanos') }}">Contacto</a></li>
                    </ul>

                </nav>
            </div>
        </div>




    @yield('content-general')


    <footer class="footer" id="footer">
        <div class="container">
            <!-- <div class="row">
                <div class="col-md-12">
                    <div class="emergency">
                        <i class="icon-phone5"></i>
                        <span class="text">Contactanos</span>
                        <span class="number">56 2 7894 5612</span>
                        <img src="images/emergency-divider.png" alt="">
                    </div>
                </div>
            </div> -->


            <div class="main-footer">
                <div class="row">

                    <div class="col-md-3">

                        <div class="useful-links">
                            <div class="title">
                                <h5>Guia de belleza</h5>
                            </div>

                            <div class="detail">
                                <ul>

                                    <li><a href="{{ url('./') }}">Inicio</a></li>
                                    {{-- <li><a href="#.">Servicios</a></li> --}}
                                    {{-- <li><a href="{{ url("./shop") }}">Tienda</a></li> --}}
                                    <li><a href="{{ url("./quienessomos") }}">Quienes somos</a></li>
                                    <li><a href="{{ url('./contactanos') }}">Contacto</a></li>

                                </ul>
                            </div>

                        </div>

                    </div>

                    <div class="col-md-3">

                        <div class="newsletter">
                            <div class="title">
                                <h5>NEWSLETTER</h5>
                            </div>

                            <div class="detail">

                                <div class="signup-text">
                                    <i class="icon-dollar"></i>
                                    <span>Regístrese con su nombre y correo para recibir actualizaciones.</span>
                                </div>

                                <div class="form">
                                    <p class="subscribe_success" id="subscribe_success" style="display:none;"></p>
                                    <p class="subscribe_error" id="subscribe_error" style="display:none;"></p>

                                    <form name="subscribe_form" id="subscribe_form" method="post" action="#"
                                        onSubmit="return false">
                                        <input type="text" data-delay="300" placeholder="Nombre"
                                            name="subscribe_name" id="subscribe_name"
                                            class="input">
                                        <input type="text" data-delay="300" placeholder="Email"
                                            name="subscribe_email" id="subscribe_email"
                                            class="input">
                                        <input name="Subscribe" type="submit" value="Suscribirme"
                                            onclick="insert_newslatter(event);">
                                    </form>
                                </div>

                            </div>


                        </div>

                    </div>
                    <div class="col-md-3">

                        <div class="get-touch">
                            <div class="title">
                                <h5>CONTACTO</h5>
                            </div>

                            <div class="detail">
                                <div class="get-touch">

                                    <ul>
                                        <li><i class="icon-location"></i> <span>{{ $direccion }}</span></li>
                                        <li><i class="icon-phone4"></i> <span>{{ $phone }}</span></li>
                                        <li><a href="malito:{{ $email_contact }}"><i class="icon-dollar"></i>
                                                <span>{{ $email_contact }}</span></a></li>
                                    </ul>

                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="col-md-3">

                        <div class="get-touch">
                            <div class="title">
                                <h5>Horario</h5>
                            </div>

                            <div class="detail">
                                <div class="get-touch">


                                    <ul>
                                        <li><i class="icon-time"></i> <span>Lunes - Viernes </span></li>
                                        <li><i class=""></i> <span>09.00hrs-18.00hrs</span></li>
                                        <li><i class="icon-time"></i> <span>Sábado</span></li>
                                        <li><i class=""></i> <span>09.00hrs - 12.00hrs</span></li>
                                        <li><i class="icon-time"></i> <span>Domingo - Cerrado </span></li>
                                    </ul>

                                </div>
                            </div>

                        </div>

                    </div>


                </div>

            </div>

        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="row">

                    <div class="col-md-6">
                        <span class="copyrights">Copyright &copy; {{ date("Y") }} duboestetica.cl. Todos los derechos
                            reservados.</span>
                    </div>

                    <div class="col-md-6">
                        <div class="social-icons">
                            <a href="{{ $facebook }}" target="_blank" class="fb"><i class="icon-facebook2"></i></a>
                            <a href="{{ $instagram }}" target="_blank" class="tw"><i class="icon-instagram"></i></a>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </footer>
    <!--End Footer-->


    <a href="#0" class="cd-top"></a>
</div>
<script>
    var _Url = "{{ url('/') }}/";
</script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@yield('content-js')
<script src="{{ asset("assets/js/newslatter.js") }}"></script>
<script src="{{ asset("assets/js/agenda.js") }}"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-11217750342">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-11217750342');
</script>
</body>
</html>
