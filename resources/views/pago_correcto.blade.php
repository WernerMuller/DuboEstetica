@extends('layouts.template')

@section('content-csr')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('title','Pago correcto')
	
	
@section('content-general')

<div class="sub-banner">
   
    <img class="banner-img" src="images/sub-banner.jpg" alt="">
 <div class="detail">
     <div class="container">
         <div class="row">
             <div class="col-md-12">
                 
                 <div class="paging">
                     <h2>Reserva / Pago</h2>
                     <ul>
                     <li><a href="{{ url("./") }}">Inicio</a></li>
                     <li><a>Pago Transbank</a></li>
                     </ul>
                 </div>
                 
             </div>
         </div>
     </div>
 </div>

</div>	

<div class="content">
		
    <div class="text-posts">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    
                    <div class="post-sec">
                        <a href="news-detail.html" class="title">Pago realizado con exito</a>
                        {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie. Curabitur pellentesque massa eu porttitorarcu porttitor. Quisque volutpat pharetra felis, eu cursus lorem molestie vitae. Nulla vehicula.</p> --}}
                        <ul>
                            <li><img src="images/news-dr1.jpg" alt=""> <span>Especialidad</span></li>
                            <li><i class="icon-clock3"></i> <span>Reserva Apr 22, 2015</span></li>
                            {{-- <li><a href="news-detail.html"><i class="icon-icons206"></i> <span>2 Comments</span></a></li> --}}
                        </ul>
                    </div>
                    
                    <div class="post-sec">
                        <a href="news-detail.html" class="title">Detalle</a>
                        {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie. Curabitur pellentesque massa eu porttitorarcu porttitor. <a href="#.">Quisque volutpat pharetra</a> felis, eu cursus lorem molestie vitae. Nulla vehicula.</p> --}}
                        <table class="table">
                            <tbody>

                              <tr>
                                <th scope="row">N Transaccion</th>
                                <td>{{ $compra_id }}</td>
                              </tr>

                              <tr>
                                <th scope="row">Total</th>
                                <td>{{ format_money($val_total) }}</td>
                              </tr>

                              <tr>
                                <th scope="row">Fecha Compra</th>
                                <td>{{ $fecha_compra }}</td>
                              </tr>

                              <tr>
                                <th scope="row">Hora de compra</th>
                                <td>{{ $hora_compra }}</td>
                              </tr>

                              <tr>
                                <th scope="row">Fecha Reserva</th>
                                <td>{{ $fecha_reserva }}</td>
                              </tr>

                              <tr>
                                <th scope="row">Hora Reserva</th>
                                <td>{{ $hora_reserva }}</td>
                              </tr>

                              <tr>
                                <th scope="row">Especialidad</th>
                                <td>{{ $especialidad }}</td>
                              </tr>
                            
                              <tr>
                                <th scope="row">Forma de pago</th>
                                <td>{{ $tipo_tarjeta }}</td>
                              </tr>

                              <tr>
                                <th scope="row">4 último numero de tarjeta</th>
                                <td>{{ $n_tarjeta }}</td>
                              </tr>
                              @if($if_credit == "VC" || $if_credit == "SI" || $if_credit == "S2" || $if_credit == "NC")
                                {{-- @if($if_credit == "VC" || $if_credit == "SI" ) --}}
                                <tr>
                                  <th scope="row">N Ctas</th>
                                  <td>{{ $n_ctas }}</td>
                                </tr>
                                <tr>
                                  <th scope="row">Val Ctas</th>
                                  <td>{{ format_money($val_ctas) }}</td>
                                </tr>
                                {{-- @endif --}}
                              @endif

                            </tbody>
                          </table>

                        
                        <div class="post-sec">
                            <p><a href="{{ url("./") }}">Ir al Inicio</a> </p>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </div>




</div>

@endsection

@section('content-js')

<script type="text/javascript" src="{{ asset('assets/js/jquery.js') }}"></script>

<!-- SMOOTH SCROLL -->	
<script type="text/javascript" src="{{ asset("assets/js/scroll-desktop.js") }}"></script>
<script type="text/javascript" src="{{ asset("assets/js/scroll-desktop-smooth.js") }}"></script>

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

@endsection
