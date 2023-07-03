@extends('layouts.template')

@section('content-csr')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('title','Servicio')

@section('content-general') 

		<div class="sub-banner">

			<img class="banner-img" src="images/sub-banner.jpg" alt="">
			<div class="detail">
				<div class="container">
					<div class="row">
						<div class="col-md-12">

							<div class="paging">
								<h2>MicroPigmentación</h2>
								<ul>
									<li><a href="index.html">Inicio</a></li>
									<li><a>MicoPigmentación</a></li>
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




			<div class="container">


				<!-- <div class="row">
				<div class="pricing-table text-center col-md-6">
					<h3 class="pricing-table-heading">Standard</h3>
					<p class="table-price"><span class="currency">&pound;</span>49<span>per month</span></p>
					<ul class="list list-unstyled">
						<li>24/7 Free Tech Support</li>
						<li>2GB Bandwidth Available</li>
						<li>Unlimited User Access</li>
						<li>200GB Storage Space</li>
					</ul>
					<br>
					<div class="pricing-table-footer">
						<a href="#.">Sign up</a>
					</div>
				</div>
				<div class="pricing-table text-center col-md-6">
					<h3 class="pricing-table-heading">Exclusive</h3>
					<p class="table-price"><span class="currency">&pound;</span>139<span>per month</span></p>
					<ul class="list list-unstyled">
						<li>24/7 Free Tech Support</li>
						<li>2GB Bandwidth Available</li>
						<li>Unlimited User Access</li>
						<li>200GB Storage Space</li>
					</ul>
					<br>
					<div class="pricing-table-footer">
						<a href="#.">Sign up</a>
					</div>
				</div>-->

				<div class="row">
					<div class="col-md-12">
						<div class="main-title">
							<h2><span>Beneficios en </span> cejas y labios</h2>
							<p>En Eternite nos gusta informarte de todos nuestros tratamientos y técnicas más
								efectivas e indoloras. En este caso, el tratamiento que queremos presentarte hoy es la
								micropigmentación de cejas y labios. Este tratamiento consiste en implantar pigmentos
								para dotar de color o darle forma a ciertas partes del cuerpo. En particular, las
								mujeres suelen usar </p>
						</div>
					</div>
				</div>
				<br>
				<br>
				<br>

				<!--<br>
			<br>
			<br> -->

				<div class="row">
					<div class="pricing-table text-center col-md-4">
						<h3 class="pricing-table-heading">Plan Simple</h3>
						<p class="table-price"></span>$ 15.000<span>1 tratamiento</span></p>
						<ul class="list list-unstyled">
							<li>24/7 Free Tech Support</li>
							<li>2GB Bandwidth Available</li>
							<li>Unlimited User Access</li>
							<li>200GB Storage Space</li>
						</ul>
						<br>
						<div class="pricing-table-footer">
							<a href="reservar.html">reservar</a>
						</div>
					</div>
					<div class="pricing-table text-center col-md-4 highlight">
						<h3 class="pricing-table-heading">Plan Medio</h3>
						<p class="table-price"></span>$ 25.000<span>3 tratamientos</span></p>
						<ul class="list list-unstyled">
							<li>24/7 Free Tech Support</li>
							<li>2GB Bandwidth Available</li>
							<li>Unlimited User Access</li>
							<li>200GB Storage Space</li>
						</ul>
						<br>
						<div class="pricing-table-footer">
							<a href="#.">reservar</a>
						</div>
					</div>
					<div class="pricing-table text-center col-md-4">
						<h3 class="pricing-table-heading">Plan Exclusivo</h3>
						<p class="table-price"></span>$ 34.990<span>6 tratamientos</span></p>
						<ul class="list list-unstyled">
							<li>24/7 Free Tech Support</li>
							<li>2GB Bandwidth Available</li>
							<li>Unlimited User Access</li>
							<li>200GB Storage Space</li>
						</ul>
						<br>
						<div class="pricing-table-footer">
							<a href="#.">reservar</a>
						</div>
					</div>
				</div>


				<br>
				<br>
				<br>
				<br>

				<!-- <div class="row">
				<div class="pricing-table text-center col-md-3">
					<h3 class="pricing-table-heading">Starter</h3>
					<p class="table-price"><span class="currency">&pound;</span>19<span>per month</span></p>
					<ul class="list list-unstyled">
						<li>24/7 Free Tech Support</li>
						<li>2GB Bandwidth Available</li>
						<li>Unlimited User Access</li>
						<li>200GB Storage Space</li>
					</ul>
					<br>
					<div class="pricing-table-footer">
						<a href="#.">Sign up</a>
					</div>
				</div>
				<div class="pricing-table text-center col-md-3">
					<h3 class="pricing-table-heading">premium</h3>
					<p class="table-price"><span class="currency">&pound;</span>99<span>per month</span></p>
					<ul class="list list-unstyled">
						<li>24/7 Free Tech Support</li>
						<li>2GB Bandwidth Available</li>
						<li>Unlimited User Access</li>
						<li>200GB Storage Space</li>
					</ul>
					<br>
					<div class="pricing-table-footer">
						<a href="#.">Sign up</a>
					</div>
				</div>
				<div class="pricing-table text-center col-md-3 highlight">
					<h3 class="pricing-table-heading">Standard</h3>
					<p class="table-price"><span class="currency">&pound;</span>175<span>per month</span></p>
					<ul class="list list-unstyled">
						<li>24/7 Free Tech Support</li>
						<li>2GB Bandwidth Available</li>
						<li>Unlimited User Access</li>
						<li>200GB Storage Space</li>
					</ul>
					<br>
					<div class="pricing-table-footer">
						<a href="#.">Sign up</a>
					</div>
				</div>
				<div class="pricing-table text-center col-md-3">
					<h3 class="pricing-table-heading">Exclusive</h3>
					<p class="table-price"><span class="currency">&pound;</span>295<span>per month</span></p>
					<ul class="list list-unstyled">
						<li>24/7 Free Tech Support</li>
						<li>2GB Bandwidth Available</li>
						<li>Unlimited User Access</li>
						<li>200GB Storage Space</li>
					</ul>
					<br>
					<div class="pricing-table-footer">
						<a href="#.">Sign up</a>
					</div>
				</div>
			</div> -->


			</div>
		</div>


	</div>
	<!--End Content-->

	<div class="gallery">
		<div class="container">

			<div class="row">
				<div class="col-md-12">
					<div class="main-title">
						<h2><span>Antes /</span> Después</h2>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="main-gallery">

					<div class="col-md-3">
						<a class="gallery-sec fancybox photo-icon" href="images/gallery/img1.jpg"
							data-fancybox-group="gallery">
							<div class="image-hover img-layer-slide-left-right">
								<img src="images/gallery/img1.jpg" alt="">
								<div class="layer"> <i class="icon-image2"></i> </div>
							</div>

							<div class="detail">
								<h6>Antes / Después</h6>
								<span>Texto Texto Texto</span>
							</div>
						</a>
					</div>


					<div class="col-md-3">
						<a class="gallery-sec fancybox-media video-icon" href="https://www.youtube.com/watch?v=MgEcSr5g6Uc">
							<div class="image-hover img-layer-slide-left-right">
								<img src="images/gallery/img2.jpg" alt="">
								<div class="layer"> <i class="icon-video2"></i> </div>
							</div>

							<div class="detail">
								<h6>¿Como lo hacemos?</h6>
								<span>Texto Texto Texto</span>
							</div>
						</a>
					</div>


					<div class="col-md-3">
						<a class="gallery-sec fancybox-media video-icon" href="https://www.youtube.com/watch?v=8LmKqolg518">
							<div class="image-hover img-layer-slide-left-right">
								<img src="images/gallery/img3.jpg" alt="">
								<div class="layer"> <i class="icon-video2"></i> </div>
							</div>

							<div class="detail">
								<h6>Perfección</h6>
								<span>Texto Texto Texto</span>
							</div>
						</a>
					</div>



					<div class="col-md-3">
						<a class="gallery-sec fancybox photo-icon" href="images/gallery/img4.jpg"
							data-fancybox-group="gallery">
							<div class="image-hover img-layer-slide-left-right">
								<img src="images/gallery/img4.jpg" alt="">
								<div class="layer"> <i class="icon-image2"></i> </div>
							</div>

							<div class="detail">
								<h6>Antes / Despues</h6>
								<span>Texto Texto Texto</span>
							</div>
						</a>
					</div>



					<div class="col-md-3">
						<a class="gallery-sec fancybox-media video-icon" href="http://vimeo.com/36031564">
							<div class="image-hover img-layer-slide-left-right">
								<img src="images/gallery/img5.jpg" alt="">
								<div class="layer"> <i class="icon-video2"></i> </div>
							</div>

							<div class="detail">
								<h6>Antes / Despues</h6>
								<span>Texto Texto Texto</span>
							</div>
						</a>
					</div>



					<div class="col-md-3">
						<a class="gallery-sec fancybox photo-icon" href="images/gallery/img6.jpg"
							data-fancybox-group="gallery">
							<div class="image-hover img-layer-slide-left-right">
								<img src="images/gallery/img6.jpg" alt="">
								<div class="layer"> <i class="icon-image2"></i> </div>
							</div>

							<div class="detail">
								<h6>Antes / Despues</h6>
								<span>Texto Texto Texto</span>
							</div>
						</a>
					</div>



					<div class="col-md-3">
						<a class="gallery-sec fancybox photo-icon" href="images/gallery/img7.jpg"
							data-fancybox-group="gallery">
							<div class="image-hover img-layer-slide-left-right">
								<img src="images/gallery/img7.jpg" alt="">
								<div class="layer"> <i class="icon-image2"></i> </div>
							</div>

							<div class="detail">
								<h6>Antes / Despues</h6>
								<span>Texto Texto Texto</span>
							</div>
						</a>
					</div>



					<div class="col-md-3">
						<a class="gallery-sec fancybox-media video-icon" href="http://vimeo.com/36031564">
							<div class="image-hover img-layer-slide-left-right">
								<img src="images/gallery/img8.jpg" alt="">
								<div class="layer"> <i class="icon-video2"></i> </div>
							</div>

							<div class="detail">
								<h6>Antes / Despues</h6>
								<span>Texto Texto Texto</span>
							</div>
						</a>
					</div>
					<!-- <div class="col-md-12">
							<div class="paging">
								<a href="#." class="selected">1</a>
								<a href="#">2</a>
								<a href="#">3</a>
							</div>
						</div> -->

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

    <!-- START REVOLUTION SLIDER -->	
    <script type="text/javascript" src="{{ asset("assets/js/jquery.themepunch.revolution.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset("assets/js/jquery.themepunch.tools.min.js") }}"></script>


    <!-- Date Picker and input hover -->
    <script type="text/javascript" src="{{ asset("assets/js/classie.js") }}"></script> 
    {{-- <script type="text/javascript" src="{{ asset("js/jquery-ui-1.10.3.custom.js") }}"></script> --}}


    <!-- Welcome Tabs -->	
    <script type="text/javascript" src="{{ asset("assets/js/tabs.js") }}"></script>

    <!-- All Carousel -->
    <script type="text/javascript" src="{{ asset("assets/js/owl.carousel.js") }}"></script>

    <!-- Mobile Menu -->
    <script type="text/javascript" src="{{ asset("assets/js/jquery.mmenu.min.all.js") }}"></script>

    <!-- All Scripts -->
    {{-- <script type="text/javascript" src="{{ asset("assets/js/custom.js") }}"></script> --}}

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script type="text/javascript" src="{{ asset("assets/js/contactos.js") }}"></script>

@endsection
