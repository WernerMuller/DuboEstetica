@extends('layouts.template')


@section('content-csr')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('title','Quienes Somos')

@section('content-general')

<div class="sub-banner">

    <img class="banner-img" src="{{ asset('assets/images/sub-banner.jpg') }}" alt="">
    <div class="detail">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="paging">
                        <h2>Sobre Nosotros</h2>
                        <ul>
                            <li><a href="{{ url("./") }}">Inicio</a></li>
                            <li><a>Sobre Nosotros</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>

        <!--End Banner-->



        <!--Start Content-->
        <div class="content">
            <div class="procedures">
                <div class="container">

                    <div class="row">
                        <div class="col-md-4">

                            <div class="procedures-links">
                                <span class="title">Preguntas Frecuentes</span>
                                <ul id="procedures-links" class="accordion">
                                    <li>
                                        <div class="link">¿Donde están ubicados?<i class="icon-chevron-down"></i></div>
                                        <ul class="submenu">
                                            <li><a href="#.">
                                                Av. Presidente Kennedy 5488 oficina 1106 torre norte
                                            </a></li>
                                        </ul>

                                    </li>
                                    <li class="open">
                                        <div class="link">Duración de los procedimientos<i
                                                class="icon-chevron-down"></i></div>
                                        <ul class="submenu" style="display:block;">
                                            @foreach ($especialidad as $item)
                                            <li><a href="#">{{ $item->nombre.' '.$item->tiempo }}</a></li>
                                            @endforeach

                                        </ul>
                                    </li>
                                    <li>
                                        <div class="link">Efectos Secundarios<i class="icon-chevron-down"></i></div>
                                        <ul class="submenu">
                                            {{-- @foreach ($especialidad as $item)
                                            <li><a href="#">{{ $item->nombre.' NO' }}</a></li>
                                            @endforeach --}}
                                            <li><a href="#">
                                                Botox: Generalemnte no ocurren, pero en algunos casos se pueden generar hematomas (moretones) pequeños por la puncion, estos desaparecen de 5-7 dias en desaparecer .
                                            </a></li>
                                            <li><a href="#">
                                                Plasma rico en plaquetas: Post procedimiento inmediato es posible obervar enrojecimiento que cesa considerablmente a las 24 hrs , en algunos casos se pueden generar hematomas (moretones) pequeños por la puncion, estos desaparecen rapidamente entre 5-7 dias.
                                            </a></li>
                                            <li><a href="#">
                                                Acido hialuronico: Post procedimiento se observa inflamacion en la zona tratada que disminuye gradualmente hasta llegar al dia 14 donde podras ver el real resultado. En algunos casos se pueden generar hematomas (moretones) pequeños por la puncion, estos desaparecen rapidamente en unos 7-15 dias.
                                            </a></li>
                                            <li><a href="#">
                                                Abdomen perfecto: Post procedimiento inmediato se podria evidenciar enrojecimiento en la zona tratada y hematomas (moretones) en algun sitio de puncion que desaparecen e  5-7 dias.
                                            </a></li>
                                            <li><a href="#">
                                                Hiperhidrosis: Algunos pacientes refieren perdida del tacto fino, no suele interferir con tu rutina diara y tiene una duracion maxima de 2 semanas.
                                                *No tomar baños de sauna, vapor o spa durante los primeros 3 dias del tratamiento.
                                                *No sumergirse en agua los primeros dias (baños de tina, piscina).
                                                *No realizar tratamientos de masaje facial los primeros dias.
                                                *Beber por lo menos 2 litros de agua diaria para favorecer la hidratacion.
                                                *No exponerse al sol directo ya que los sitios de puncion se podrian hiperpigmentar.
                                                *Utilizar bloqueador solar factor 50 y repasar cada 2 horas.
                                            </a></li>
                                        </ul>
                                    </li>
                                    {{-- <li>
                                        <div class="link">Otra pregunta<i class="icon-chevron-down"></i></div>
                                        <ul class="submenu">
                                            <li><a href="#">Respuesta 1</a></li>
                                            <li><a href="#">Respuesta 2</a></li>
                                            <li><a href="#">Respuesta 3</a></li>
                                            <li><a href="#">Respuesta 4</a></li>
                                            <li><a href="#">Respuesta 5</a></li>
                                            <li><a href="#">Respuesta 6</a></li>
                                            <li><a href="#">Respuesta 7</a></li>
                                        </ul>
                                    </li> --}}
                                    {{-- <li>
                                        <div class="link">Motivos para devolución de dinero<i
                                                class="icon-chevron-down"></i></div>
                                        <ul class="submenu">
                                            <li><a href="#">Por x</a></li>
                                            <li><a href="#">Por y</a></li>
                                            <li><a href="#">Por z</a></li>
                                            <li><a href="#">Porque no</a></li>
                                            <li><a href="#">Porque si</a></li>
                                        </ul>
                                    </li> --}}

                                </ul>

                            </div>


                        </div>



                        <div class="col-md-8">

                            <div class="main-title">
                                <h2><span>Quiénes </span> somos</h2>
                                <p>Somos un centro de estética enfocado en satisfacer tus expectativas y necesidades en el ambito de la belleza, para sacar la mejor versión de ti mismo(a), ofreciendote un espacio y tiempo para darle amor a la persona mas importante de tu vida...Tú.
                                </p>
                            </div>

                            <div class="procedure-text">

                                <div class="detail">
                                    <img class="right" src="images/cancer-img.jpg" alt="">
                                    <p>Entregamos una amplia diversidad de servicios en el area estetica, facial y corporal, para alcanzar los mejores resultados, al mejor precio.
                                    </p>
                                    <div class="title-main">
                                        <h4>Nuestra Misión</h4>
                                        <p>Nuesta mision es brindar atención personalizada, segura y de calidad a nuestros usuarios (as), con el objetivo de colaborar con su salud y bienestar</p>
                                    </div>
                                </div>

                                <ul>
                                    <li><span>Leales</span></li>
                                    <li><span>Confiables</span></li>
                                    <li><span>Profesionales</span></li>
                                    <li><span>100% Seguros</span></li>
                                    <li><span>Rapidos</span></li>
                                    <li><span>Eficaces</span></li>
                                    <li><span>Responsables</span></li>
                                    <li><span>Honestos</span></li>
                                    <li><span>Divertidos</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Content-->


    </div>

    @endsection

    @section('content-js')

    <script type="text/javascript" src="{{ asset('assets/js/jquery.js') }}"></script>

    <!-- SMOOTH SCROLL -->
    <script type="text/javascript" src="{{ asset("assets/js/scroll-desktop.js") }}"></script>
    <script type="text/javascript" src="{{ asset("assets/js/scroll-desktop-smooth.js") }}"></script>

    <!-- START REVOLUTION SLIDER -->
    <script type="text/javascript" src="{{ asset("assets/js/jquery.themepunch.revolution.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset("assets/js/jquery.themepunch.tools.min.js") }}"></script>



    <!-- Date Picker and input hover -->
    <script type="text/javascript" src="{{ asset('assets/js/classie.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery-ui-1.10.3.custom.js') }}"></script>

    <script type="text/javascript" src="{{ asset("assets/js/tabs.js") }}"></script>


    <!-- All Carousel -->
    <script type="text/javascript" src="{{ asset("assets/js/owl.carousel.js") }}"></script>

    <!-- Mobile Menu -->
    <script type="text/javascript" src="{{ asset("assets/js/jquery.mmenu.min.all.js") }}"></script>

    <!-- All Scripts -->
    <script type="text/javascript" src="{{ asset("assets/js/custom.js") }}"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @endsection
