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

    <img class="banner-img" src="{{ asset("assets/images/botox/banner.jpg") }}" alt="">
    <div class="detail">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="paging">
                        <h2>Bioestimulación</h2>
                        <ul>
                            <li><a href="{{ url("/") }}">inicio</a></li>
                            <li><a>Bioestimulación</a></li>
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
                        <h2><span>Bioestimulación </span> </h2>
                        <p>

                        </p>
                    </div>
                </div>
            </div>

            <div id="tabbed-nav">
                <ul>
                    @foreach($especialidades AS $index => $item)
                    <li><a>{{ $item->nombre }}</a></li>
                    @endforeach
                </ul>
                <div>

                    @foreach($especialidades AS $item)
                    <div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="welcome-serv-img">
                                    <img src="{{ asset("assets/images").'/'.$item->img }}" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="detail">
                                    <h4>{{ $item->nombre }}</h4>
                                    <p class="text-center">
                                        {{ $item->txt1 }}
                                        <br/><br/>
                                        {{ $item->txt2 }}
                                    </p>
                                    <p class="price big dark">DESDE {{ format_money($item->precio) }}</p>
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
