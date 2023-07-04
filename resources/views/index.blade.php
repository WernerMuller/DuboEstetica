@extends('layouts.template')


@section('content-csr')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('title','Inicio')


@section('content-general')



<div class="container">
    <div class="time-table-sec">
        <ul id="accordion2" class="accordion2">
            <li>
                <ul class="submenu time-table">
                    <li class="tit">
                        <h5>Horario laborales</h5>
                    </li>
                    <li><span class="day">Lunes-Viernes</span> <span class="divider">-</span><span class="time">{{ $apertura }} - {{ $cierre }}</span></li>
                    <li><span class="day">Sábado</span> <span class="divider">-</span> <span class="time">{{ $sab_apertura }} - {{ $sab_cierre }}</span></li>
                    <li><span class="day">Domingos</span> <span class="divider">-</span> <span class="time">Cerrados</span></li>
                </ul>
                <div class="link"><img class="time-tab" src="{{ asset("assets/images/timetable-menu.png") }}" alt=""></div>

            </li>
        </ul>
    </div>
</div>

   <!--Start Banner-->

   <div class="tp-banner-container">
		<div class="tp-banner" >
			<ul>	<!-- SLIDE  -->

                <li data-transition="fade" data-slotamount="7" data-masterspeed="500"  data-saveperformance="on"  data-title="Intro Slide">

                    <img  src="{{ asset("assets/images/slides/limp_facial.jpg") }}" alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">


                    <div class="tp-caption customin customout rs-parallaxlevel-0"
                        data-x="right"
                        data-y="188"
                        data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                        data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                        data-speed="700"
                        data-start="1200"
                        data-easing="Power3.easeInOut"
                        data-elementdelay="0.1"
                        data-endelementdelay="0.1"
                        style="z-index: 4;"><img class="img-banner" style="border-bottom:solid 6px #02adc6; " src="{{ asset("assets/images/slides/transprint-bg.png") }}" alt="" >

                    </div>

                    <div class="tp-caption title-bold tp-resizeme rs-parallaxlevel-0 fade start"
                        data-x="670"
                        data-y="218"
                        data-speed="1000"
                        data-start="1800"
                        data-easing="Power3.easeInOut"
                        data-splitin="none"
                        data-splitout="none"
                        data-elementdelay="0.1"
                        data-endelementdelay="0.1"
                        data-endspeed="300"
                        style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">Limpieza facial
                    </div>

                    <div class="tp-caption small-title tp-resizeme rs-parallaxlevel-0 fade start"
                        data-x="670"
                        data-y="255"
                        data-speed="1000"
                        data-start="1800"
                        data-easing="Power3.easeInOut"
                        data-splitin="none"
                        data-splitout="none"
                        data-elementdelay="0.1"
                        data-endelementdelay="0.1"
                        data-endspeed="300"
                        style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">
                    </div>

                    <div class="tp-caption paragraph tp-resizeme rs-parallaxlevel-0 fade start"
                        data-x="670"
                        data-y="325"
                        data-speed="1000"
                        data-start="1800"
                        data-easing="Power3.easeInOut"
                        data-splitin="none"
                        data-splitout="none"
                        data-elementdelay="0.05"
                        data-endelementdelay="0.1"
                        data-endspeed="300"
                        style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;"><div style="text-align:left;">La base de todo tratamiento estético <br> facial es tener la piel limpia de impurezas</div>
                    </div>


                    <div class="tp-caption banner-button tp-resizeme rs-parallaxlevel-0  fade start"
                        data-x="670"
                        data-y="402"
                        data-speed="1000"
                        data-start="1800"
                        data-easing="Power3.easeInOut"
                        data-splitin="none"
                        data-splitout="none"
                        data-elementdelay="0.05"
                        data-endelementdelay="0.1"
                        data-endspeed="300"
                        style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap; border-radius: 5px;"><div style="text-align:left; background:#525866; border-radius: 5px;">
                        <a href="https://wa.me/+56999711819" target="_blanck" class="read-more" style=" line-height: initial; color: #fff; text-transform: uppercase; font-weight: 500; padding: 12px 36px; display: inline-block; font-size: 18px; "><img class="img-wsp-icon-button" src="{{ asset('assets/images/swp.svg') }}" alt="">Reservar</a>
                        </div>
                    </div>

	            </li>



    {{-- *  --}}
	<li data-transition="fade" data-slotamount="7" data-masterspeed="500"  data-saveperformance="on"  data-title="Intro Slide">

		<img src="{{ asset("assets/images/slides/hianurocito.jpg") }}"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">


		<div class="tp-caption customin customout rs-parallaxlevel-0"
			data-x="left"
			data-y="188"
			data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
			data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
			data-speed="700"
			data-start="1200"
			data-easing="Power3.easeInOut"
			data-elementdelay="0.1"
			data-endelementdelay="0.1"
			style="z-index: 4;"><img class="img-banner" style="border-bottom:solid 6px #02adc6;" src="{{ asset("assets/images/slides/transprint-bg.png") }}" alt="" >

		</div>


		<div class="tp-caption title-bold tp-resizeme rs-parallaxlevel-0 fade start"
			data-x="30"
			data-y="218"
			data-speed="1000"
			data-start="1800"
			data-easing="Power3.easeInOut"
			data-splitin="none"
			data-splitout="none"
			data-elementdelay="0.1"
			data-endelementdelay="0.1"
			data-endspeed="300"
			style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">Ácido hialuronico
		</div>

        <div class="tp-caption small-title tp-resizeme rs-parallaxlevel-0 fade start"
			data-x="30"
			data-y="255"
			data-speed="1000"
			data-start="1800"
			data-easing="Power3.easeInOut"
			data-splitin="none"
			data-splitout="none"
			data-elementdelay="0.1"
			data-endelementdelay="0.1"
			data-endspeed="300"
			style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">Labios Perfectos
		</div>

		<div class="tp-caption paragraph tp-resizeme rs-parallaxlevel-0 fade start"
			data-x="30"
			data-y="325"
			data-speed="1000"
			data-start="1800"
			data-easing="Power3.easeInOut"
			data-splitin="none"
			data-splitout="none"
			data-elementdelay="0.05"
			data-endelementdelay="0.1"
			data-endspeed="300"
			style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;"><div style="text-align:left;"> Obtiene los labios que siempre has soñado con el relleno
                <br />o perfilado de labios</div>
		</div>

		<div class="tp-caption banner-button tp-resizeme rs-parallaxlevel-0  fade start"
			data-x="30"
			data-y="402"
			data-speed="1000"
			data-start="1800"
			data-easing="Power3.easeInOut"
			data-splitin="none"
			data-splitout="none"
			data-elementdelay="0.05"
			data-endelementdelay="0.1"
			data-endspeed="300"
			style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap; border-radius: 5px;"><div style="text-align:left; background:#525866; border-radius: 5px;">
                <a href="https://wa.me/+56999711819" target="_blanck" class="read-more" style=" line-height: initial; color: #fff; text-transform: uppercase; font-weight: 500; padding: 12px 36px; display: inline-block; font-size: 18px; "><img class="img-wsp-icon-button" src="{{ asset('assets/images/swp.svg') }}" alt="">Reservar</a>
			</div>
		</div>

	</li>

    {{-- * botox derecha --}}
    <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on"
        data-title="Intro Slide">

        <img src="{{ asset('assets/images/slides/botox.jpg') }}" alt="" data-bgposition="center top" data-bgfit="cover"
            data-bgrepeat="no-repeat">

        <div class="tp-caption customin customout rs-parallaxlevel-0" data-x="right" data-y="188"
            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
            data-speed="700" data-start="1200" data-easing="Power3.easeInOut" data-elementdelay="0.1"
            data-endelementdelay="0.1" style="z-index: 4;"><img style="border-bottom:solid 6px #02adc6;" class="img-banner"
                src="{{ asset('assets/images/slides/transprint-bg.png') }}" alt="">
        </div>

        <div class="tp-caption title-bold tp-resizeme rs-parallaxlevel-0 fade start" data-x="670"
            data-y="218" data-speed="1000" data-start="1800" data-easing="Power3.easeInOut"
            data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1"
            data-endspeed="300"
            style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">Toxina botulínica
        </div>

        <div class="tp-caption small-title tp-resizeme rs-parallaxlevel-0 fade start" data-x="670"
            data-y="255" data-speed="1000" data-start="1800" data-easing="Power3.easeInOut"
            data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1"
            data-endspeed="300"
            style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">Eliminación de
            las arrugas faciales
        </div>

        <div class="tp-caption paragraph tp-resizeme rs-parallaxlevel-0 fade start" data-x="670"
            data-y="325" data-speed="1000" data-start="1800" data-easing="Power3.easeInOut"
            data-splitin="none" data-splitout="none" data-elementdelay="0.05" data-endelementdelay="0.1"
            data-endspeed="300"
            style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">
            <div style="text-align:left;">Neurotoxina que paraliza parcialmente <br> algunos músculos previniendo las
                líneas de expresión
            </div>
        </div>

        <div class="tp-caption banner-button tp-resizeme rs-parallaxlevel-0  fade start" data-x="670"
            data-y="402" data-speed="1000" data-start="1800" data-easing="Power3.easeInOut"
            data-splitin="none" data-splitout="none" data-elementdelay="0.05" data-endelementdelay="0.1"
            data-endspeed="300"
            style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap; border-radius: 5px;">
            <div style="text-align:left; background:#525866; border-radius: 5px;">
                <a href="https://wa.me/+56999711819" target="_blanck" class="read-more" style=" line-height: initial; color: #fff; text-transform: uppercase; font-weight: 500; padding: 12px 36px; display: inline-block; font-size: 18px; "><img class="img-wsp-icon-button" src="{{ asset('assets/images/swp.svg') }}" alt="">Reservar</a>
            </div>
        </div>

    </li>


</ul>
<div class="tp-bannertimer"></div>	</div>
</div>


   <!--Start Content-->
<div class="content">

    <div class="services-one">
        <div class="container">
            <div class="row">

                {{-- * BOTOX --}}
                <div class="col-md-6">
                    <div class="service-sec">
                        <img style="width: 97px" src="{{ asset('assets/images/icon/plasma.png') }}" alt="">
                        <div class="detail">
                            <h5>Toxina Botulínica</h5>
                            <p>Neurotoxina que paraliza parcialmente algunos músculos previniendo las líneas de expresión.</p>
                        </div>
                    </div>
                </div>

                {{-- * Plasma rico en plaquetas --}}
                <div class="col-md-6">
                    <div class="service-sec">
                        {{-- <div class="icon">
                            <i class="icon-eye"></i>
                        </div> --}}
                        <img style="width: 97px" src="{{ asset('assets/images/icon/plasma.png') }}" alt="">
                        <div class="detail">
                            <h5>Plasma rico en plaquetas</h5>
                            <p>Estima el colágeno y elastina de tu piel, con el plasma rico en plaquetas, mejorando visiblemente la calidad de esta.</p>
                        </div>
                    </div>
                </div>

                {{-- * Rejuvenecimiento Facial --}}
                <div class="col-md-6">
                    <div class="service-sec">
                        {{-- <div class="icon">
                            <i class="icon-eye"></i>
                        </div> --}}
                        <img style="width: 97px" src="{{ asset('assets/images/icon/rejuvenecimiento.png') }}" alt="">
                        <div class="detail mod-new">
                            <h5>Rejuvenecimiento Facial</h5>
                            <p>Administraremos principios activos que revitalizan tu rostro con resultados naturales.</p>
                        </div>
                    </div>
                </div>


                {{-- * accido hianuronico --}}
                <div class="col-md-6">
                    <div class="service-sec">
                        {{-- <div class="icon">
                            <i class="icon-eye"></i>
                        </div> --}}
                        <img style="width: 97px" src="{{ asset('assets/images/icon/acido.png') }}" alt="">
                        <div class="detail">
                            <h5>Ácido hialuronico</h5>
                            <p>Usando este elemento podemos dar volumen y/o hidratación en la zona que se decida tratar.</p>
                        </div>
                    </div>
                </div>

                {{-- * Bioestimulacion  --}}

                <div class="col-md-6">
                    <div class="service-sec">
                        {{-- <div class="icon">
                            <i class="icon-eye"></i>
                        </div> --}}
                        <img style="width: 97px" src="{{ asset('assets/images/icon/bioestimulacion.png') }}" alt="">
                        <div class="detail">
                            <h5>Bioestimulacion</h5>
                            <p>La técnica consiste en combatir la flacidez del rostro con la administración de hilos PDO.</p>
                        </div>
                    </div>
                </div>

                {{-- *  Abdomen perfecto --}}

                <div class="col-md-6">
                    <div class="service-sec">
                        {{-- <div class="icon">
                            <i class="icon-user6"></i>
                        </div> --}}
                        <img style="width: 97px" src="{{ asset('assets/images/icon/adomen.png') }}" alt="">
                        <div class="detail">
                            <h5>Abdomen perfecto</h5>
                            <p>Usando la técnica de mesoterapia se administran principios activos que favorecen la reducción de grasa localizada en el abdomen.</p>
                                {{-- mediante la focalización selectiva de energía
                                ultrasónica. --}}
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>
   <!--End Services-->

   <!--Start Welcome-->
   <div class="welcome dark-back">
                <div class="container">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-title">
                                <h2><span>Encuentra nuestros</span> Pack de promo</h2>
                                <p>Solo en Dubó estética encontrarás las mejores promociones, en manos de expertos. Se parte de esta experiencia en Dubó estética.</p>
                            </div>
                        </div>
                    </div>

                    <div id="tabbed-nav">
                        <ul>
                            <li><a>Lifting Facial</a></li>
                            <li><a>Toxina Botulínica </a></li>
                            <li><a>Limpieza facial</a></li>
                            {{-- <li><a>Micropigmentación</a></li> --}}
                        </ul>
                        <div>
                            @foreach ($packs as $item)
                            <div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="welcome-serv-img">
                                            <img src="{{ asset($item->img) }}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="detail">
                                            <h4>{{ $item->title }}</h4>
                                            <p>
                                                {{ $item->texto }}<br/><br/>
                                                {{ $item->texto_2 }}
                                            </p>
                                            <a href="https://wa.me/{{ $item->url }}"  target="_blank"><img class="img-wsp-icon-button" src="{{ asset('assets/images/swp.svg') }}" alt="">Reservar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>

                </div>
            </div>
   <!--End Welcome-->





    </div>
</div>
   <!--End Latest News-->


   <!--Start Testimonials-->
   <div class="patients-testi dark-testi">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="main-title main-title2">
                    <h2><span>Lo que nuestras clientas </span> dicen de nosotras</h2>
                </div>
            </div>
        </div>

        <div id="testimonials">
            <div class="container">
                <div class="row">

                    <div class="col-md-12">
                        <div class="span12">

                            <div id="owl-demo2" class="owl-carousel">

                                <div class="testi-sec">


                                    <img src="{{ asset("assets/images/testimonial-img1.jpg") }}" alt="">
                                    <div class="height10"></div>
                                    <span class="name">Paula Sánchez</span>
                                    <span class="patient">Paula Sánchez</span>
                                    <div class="height30"></div>
                                    <p>¡Me siento renovada después de mi lifting facial en el centro de estética!
                                        Después de notar que mi piel comenzaba a mostrar signos de envejecimiento, decidí tomar medidas para mejorar mi apariencia. Después de investigar diversas opciones, decidí probar un lifting facial en el centro de estética, y debo decir que fue una de las mejores decisiones que he tomado.
                                        En el centro de estética, el personal fue muy profesional y me guió a través del proceso del lifting facial. Me realizaron una evaluación de mi piel y me explicaron cómo se llevaría a cabo el procedimiento. El procedimiento en sí no fue doloroso en absoluto y me sentí en buenas manos todo el tiempo.</p>
                                    <div class="height35"></div>


                                </div>
                                <div class="testi-sec">


                                    <img src="{{ asset("assets/images/testimonial-img2.jpg") }}" alt="">
                                    <div class="height10"></div>
                                    <span class="name">María González</span>
                                    <span class="patient">Toxina botulínica</span>
                                    <div class="height30"></div>
                                    <p>¡Gracias al tratamiento de Toxina botulínica en el centro de estética, me siento como una nueva persona! Después de luchar con arrugas faciales durante algún tiempo, finalmente decidí probar el tratamiento de Toxina botulínica. En el centro de estética, el personal fue amable y profesional, y el tratamiento fue rápido y sin dolor. Ahora, algunas semanas después, estoy muy contenta con los resultados y recomiendo el tratamiento a cualquiera que busque reducir la apariencia de las arrugas faciales.</p>

                                </div>
                                <div class="testi-sec">
                                    <img src="{{ asset("assets/images/testimonial-img3.jpg") }}" alt="">
                                    <div class="height10"></div>
                                    <span class="name">Ana Flores</span>
                                    <span class="patient">Limpieza Facial</span>
                                    <div class="height30"></div>

                                    <p>Hace poco, me realicé una limpieza facial en un centro de estética y debo decir que fue una de las mejores decisiones que he tomado en mi vida. Después de luchar con la piel opaca y con impurezas durante algún tiempo, estaba buscando una solución que no incluyera productos agresivos o costosos.</p>
                                    <div class="height35"></div>


            </div>


        </div>

    </div>
</div>

</div>
</div>
</div>

</div>
</div>


<!--End Testimonials-->

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

    <script type="text/javascript" src="{{ asset("assets/js/jquery-ui.min.js") }}"></script>

    <!-- Fun Facts Counter -->
    <script type="text/javascript" src="{{ asset("assets/js/counter.js") }}"></script>


    <!-- Welcome Tabs -->
    <script type="text/javascript" src="{{ asset("assets/js/tabs.js") }}"></script>


    <!-- All Carousel -->
    <script type="text/javascript" src="{{ asset("assets/js/owl.carousel.js") }}"></script>

    <!-- Mobile Menu -->
    <script type="text/javascript" src="{{ asset("assets/js/jquery.mmenu.min.all.js") }}"></script>

    <!-- All Scripts -->
    <script type="text/javascript" src="{{ asset("assets/js/custom.js") }}"></script>
    <script type="text/javascript" src="{{ asset("assets/js/especialista.js") }}"></script>



    <script type="text/javascript" src="{{ asset("assets/js/especialidad.js") }}"></script>

    <!-- Revolution Slider -->
    <script type="text/javascript">
    // pasar a espanol


    $('.z-arrow').html(`<img clss="jq-img"
                            style="width:10px;
                                    height:auto;
                                    margin-top:19px;"
                            src="{{ asset("assets/images/arrow-right.png") }}" alt="" srcset="">`)


    jQuery('.tp-banner').show().revolution(
    {
    dottedOverlay:"none",
    delay:16000,
    startwidth:1170,
    startheight:720,
    hideThumbs:200,

    thumbWidth:100,
    thumbHeight:50,
    thumbAmount:5,

    navigationType:"nexttobullets",
    navigationArrows:"solo",
    navigationStyle:"preview",

    touchenabled:"on",
    onHoverStop:"on",

    swipe_velocity: 0.7,
    swipe_min_touches: 1,
    swipe_max_touches: 1,
    drag_block_vertical: false,

    parallax:"mouse",
    parallaxBgFreeze:"on",
    parallaxLevels:[7,4,3,2,5,4,3,2,1,0],

    keyboardNavigation:"off",

    navigationHAlign:"center",
    navigationVAlign:"bottom",
    navigationHOffset:0,
    navigationVOffset:20,

    soloArrowLeftHalign:"left",
    soloArrowLeftValign:"center",
    soloArrowLeftHOffset:20,
    soloArrowLeftVOffset:0,

    soloArrowRightHalign:"right",
    soloArrowRightValign:"center",
    soloArrowRightHOffset:20,
    soloArrowRightVOffset:0,

    shadow:0,
    fullWidth:"on",
    fullScreen:"off",

    spinner:"spinner4",

    stopLoop:"off",
    stopAfterLoops:-1,
    stopAtSlide:-1,

    shuffle:"off",

    autoHeight:"off",
    forceFullWidth:"off",



    hideThumbsOnMobile:"off",
    hideNavDelayOnMobile:1500,
    hideBulletsOnMobile:"off",
    hideArrowsOnMobile:"off",
    hideThumbsUnderResolution:0,

    hideSliderAtLimit:0,
    hideCaptionAtLimit:0,
    hideAllCaptionAtLilmit:0,
    startWithSlide:0,
    videoJsPath:"rs-plugin/videojs/",
    fullScreenOffsetContainer: ""
    });


    </script>

   @endsection
