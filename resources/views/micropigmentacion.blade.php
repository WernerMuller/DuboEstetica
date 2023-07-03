@extends('layouts.template')


@section('content-csr')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset("assets/css/style.css") }}" rel="stylesheet" type="text/css">
    <link href="{{ asset("assets/css/settings.css") }}" rel="stylesheet" type="text/css">
    <link href="{{ asset("assets/css/extralayers.css") }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset("assets/css/demo.css") }}">
@endsection


@section('title','Inicio')
	
	
@section('content-general')

<div class="sub-banner">

    <img class="banner-img" src="{{ asset('assets/images/micropig/sub-banner.jpg') }}" alt="">
    <div class="detail">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="paging">
                        <h2>Micropigmentación</h2>
                        <ul>
                            <li><a href="{{ url('/') }}">inicio</a></li>
                            <li><a>Micropigmentación</a></li>
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




    <!--Start Welcome-->
    <div class="welcome">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="main-title">
                        <h2><span>Micropigmentación</span></h2>
                        <p> Es una técnica que te ayudará a corregir, embellecer o mejorar algunos rasgos
                                    faciales o corporales, tanto seas mujer como hombre. Se trata de un tipo de
                                    tratamiento que contribuye a pigmentar la piel y repoblar zonas que pueden estar
                                    afectadas como las cejas, los labios, etcétera. <BR></BR>

                                    La micropigmentación es una alternativa al tatuaje de cejas o de labios ya que te
                                    ofrece una técnica más natural y respetuosa con tu cuerpo. Te permite lucir un
                                    maquillaje semipermanente para que te olvides de los retoques y luzcas una imagen
                                    mucho más cuidada en todo momento.</p>
                    </div>
                </div>
            </div>

            <div id="tabbed-nav">
                <ul>
                    @foreach($especialidades AS $item)
                    <li><a>{{ $item->nombre }}</a></li>
                    @endforeach
                </ul>


                <div>
                    @foreach($especialidades AS $item)
                    <div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="welcome-serv-img">
                                    <img src="{{ asset('assets/images').'/'.$item->img }}" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="detail">
                                    <h4>{{ $item->nombre }}</h4>
                                    <p> 
                                        {{ $item->txt1 }}}
                                        <br /><br />
                                        {{ $item->txt2 }}
                                    </p>
                                    <p class="price big dark">{{ format_money($item->precio) }}</p>
                                    <a href="{{ $item->url }}">Lo quiero
                                    </a>
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
<script type="text/javascript" src="{{ asset("assets/js/classie.js") }}"></script>
<script type="text/javascript" src="{{ asset("assets/js/jquery-ui-1.10.3.custom.js") }}"></script>

<!-- Welcome Tabs -->
<script type="text/javascript" src="{{ asset("assets/js/tabs.js") }}"></script>

<!-- All Carousel -->
<script type="text/javascript" src="{{ asset("assets/js/owl.carousel.js") }}"></script>

<!-- Mobile Menu -->
<script type="text/javascript" src="{{ asset("assets/js/jquery.mmenu.min.all.js") }}"></script>

<!-- All Scripts -->
<script type="text/javascript" src="{{ asset("assets/js/custom.js") }}"></script> 


<script>
    // let div = document.getElementsByClassName('z-arrow');
    // div.value = "hola";
    // div.innerHTML += `<p>Este es una demo</p>`;
    $('.z-arrow').html(`<img clss="jq-img" 
                            style="width:10px; 
                                    height:auto;
                                    margin-top:19px;" 
                            src="{{ asset("assets/images/arrow-right.png") }}" alt="" srcset="">`)
    
    $(".z-tabs-mobile").click(function(){
        if($(".z-tabs-mobile").hasClass("z-state-closed") == true){
            //console.log("bajar click");
        }else{
            //console.log("subir click");
        }

        
    });

</script>

@endsection

