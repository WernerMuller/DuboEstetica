@extends('layouts.template')

@section('content-csr')
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<link href="{{ asset("assets/css/style.css") }}" rel="stylesheet" type="text/css">
    <link href="{{ asset("assets/css/settings.css") }}" rel="stylesheet" type="text/css">
    <link href="{{ asset("assets/css/extralayers.css") }}" rel="stylesheet" type="text/css">
@endsection

@section('title','Contactanos')
    
	
@section('content-general') 

   
   <div class="sub-banner">
		<img class="banner-img" src="{{ asset("assets/images/sub-banner.jpg") }}" alt="">
			<div class="detail">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
						
							<div class="paging">
								<h2>Contáctanos </h2>
								<ul>
									<li><a href="index.html">Inicio</a></li>
									<li><a>Contáctanos</a></li>
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
		<div class="contact-us">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="our-location">
							<div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3330.9117729615937!2d-70.57857678424602!3d-33.39946590228462!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662cf39268490b3%3A0x2704a91293dc42a6!2sAv.%20Pdte.%20Kennedy%205488%2C%20oficina%201106%2C%207630716%20Vitacura%2C%20Regi%C3%B3n%20Metropolitana!5e0!3m2!1ses-419!2scl!4v1679081712298!5m2!1ses-419!2scl"></iframe></div>
									{{-- <div class="get-directions">
										<form action="http://maps.google.com/maps" method="get" target="_blank">
										<input type="text" name="saddr" placeholder="Ingresa" />
										<input type="hidden" name="daddr" value="Envato Pty Ltd, Elizabeth Street, Melbourne, Victoria, Australia" />
										<input type="submit" value="Get directions" class="direction-btn" />
										</form>
									</div> --}}
							</div>
						</div>
					</div>
				</div>
			
				<div class="leave-msg dark-back">
					<div class="container">
						<div class="rox">
							<div class="col-md-7">
								<div class="main-title">
									<h2><span>Formulario</span> Contacto <span></span></h2>
									{{-- <p>cursus lorem molestie vitae. Nulla vehicula, lacus ut suscipit fermentum, turpis felis ultricies dui, ut rhoncus libero augue. </p> --}}
								</div>
								
								<div class="form">
									<div class="row">
										<p class="success" id="success" style="display:none;"></p>
										<p class="error" id="error" style="display:none;"></p>
										<form name="contact_form" id="contact_form" method="post" action="#" onSubmit="return false">
											<div class="col-md-4"><input type="text" data-delay="300" placeholder="Nombre" name="contact_name" id="contact_name" class="input"></div>
											<div class="col-md-4"><input type="text" data-delay="300" placeholder="Tu Email" name="contact_email" id="contact_email" class="input"></div>
											<div class="col-md-4"><input type="text" data-delay="300" placeholder="Asunto" name="contact_subject" id="contact_subject" class="input"></div>
											<div class="col-md-12"><textarea data-delay="500" class="required valid" placeholder="Mensajes" name="message" id="message"></textarea></div>
											<div class="col-md-3"><input name=" " type="submit" value="Enviar" onclick="send_contacto(event);"></div> 
										</form>
									</div>
								</div>

							</div>
							
							<div class="col-md-5">
								<div class="contact-get">
									<div class="main-title">
										<h2><span>Datos</span> Contacto</h2>
										{{-- <p>cursus lorem molestie vitae. Nulla vehicula, lacus ut suscipit fermentum, turpis felis ultricies.</p> --}}
									</div>
								
									<div class="get-in-touch">
										<div class="detail">
											<span><b>Telefono:</b>{{ $phone }}</span>
											<span><b>Email:</b> <a href="#.">{{ $email_contact }}</a></span>
											{{-- <span><b>Web:</b> <a href="#.">{{ "eternite.cl" }}</a></span> --}}
											<span><b>Direccion:</b> {{ $direccion }}</span>
										</div>
									
										{{-- <div class="social-icons">
												<a href="#." class="fb"><i class="icon-euro"></i></a>
												<a href="#." class="fb"><i class="icon-yen"></i></a>
												<a href="#." class="gp"><i class="icon-google-plus"></i></a>
												<a href="#." class="vimeo"><i class="icon-vimeo4"></i></a>
		                    			</div> --}}

                            </div>

                        </div>


                    </div>

                </div>

            </div>


        </div>
    </div>
    <!--End Welcome-->


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
    <script type="text/javascript" src="{{ asset("js/jquery-ui-1.10.3.custom.js") }}"></script>


    <!-- Welcome Tabs -->	
    <script type="text/javascript" src="{{ asset("assets/js/tabs.js") }}"></script>

    <!-- All Carousel -->
    <script type="text/javascript" src="{{ asset("assets/js/owl.carousel.js") }}"></script>

    <!-- Mobile Menu -->
    <script type="text/javascript" src="{{ asset("assets/js/jquery.mmenu.min.all.js") }}"></script>

    <!-- All Scripts -->
    <script type="text/javascript" src="{{ asset("assets/js/custom.js") }}"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script type="text/javascript" src="{{ asset("assets/js/contactos.js") }}"></script>

@endsection
