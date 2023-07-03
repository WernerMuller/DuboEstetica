@extends('layouts.template')


@section('content-csr')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('title','Inicio')
	
	
@section('content-general')



<div class="sub-banner">
    <img class="banner-img" src="{{ asset('assets/images/sub-banner.jpg') }}" alt="">
    <div class="detail">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="paging">
                        <h2>{{ $title }}</h2>
                        <ul>
							<li><a href="{{ url("./") }}">Home</a></li>
							<li><a>Servicios</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
		<!--Start Content-->
		<div class="content">

			<div class="container">

				<div class="row">
					<div class="col-md-12">
						<div class="main-title">
							<h2><span>DEPILACION LASER</span> </h2>
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

				<div class="row">
					@foreach ($packs AS $item)
					<div class="pricing-table text-center col-md-4">
						<h3 class="pricing-table-heading">{{ $item->menu }}</h3>
						<p class="table-price"></span>{{ format_money($item->precio) }}<span>{{ $item->sesiones }} Sesiones</span></p>
						<ul class="list list-unstyled">
							@foreach (servicios_packs($item->id) AS $element)
							<li>{{ $element->accion }}</li>
							@endforeach
						</ul>
						<hr>
						<ul class="list list-unstyled">
							<li>{{ 'Tiempo por Sesion '.$item->tiempo }}</li>
						</ul>
						<br>
						<div class="pricing-table-footer">
							<a href="https://wa.me/{{ $item->url }}"  target="_blank"><img class="img-wsp-icon-button" src="{{ asset('assets/images/swp.svg') }}" alt="">Reservar</a>
						</div>
					</div>
					@endforeach
				</div>
				
				<br>
				<br>

			


				<br>
				<br>
				<br>
				<br>


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
						<a class="gallery-sec fancybox photo-icon" href="{{ asset("assets/images/gallery/img1.jpg") }}"
							data-fancybox-group="gallery">
							<div class="image-hover img-layer-slide-left-right">
								<img src="{{ asset('assets/images/gallery/img1.jpg') }}" alt="">
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
								<img src="{{ asset("assets/images/gallery/img2.jpg") }}" alt="">
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
								<img src="{{ asset('assets/images/gallery/img3.jpg') }}" alt="">
								<div class="layer"> <i class="icon-video2"></i> </div>
							</div>

							<div class="detail">
								<h6>Perfección</h6>
								<span>Texto Texto Texto</span>
							</div>
						</a>
					</div>



					<div class="col-md-3">
						<a class="gallery-sec fancybox photo-icon" href="{{ asset('assets/images/gallery/img4.jpg') }}"
							data-fancybox-group="gallery">
							<div class="image-hover img-layer-slide-left-right">
								<img src="{{ asset('assets/images/gallery/img4.jpg') }}" alt="">
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
								<img src="{{ asset('assets/images/gallery/img5.jpg') }}" alt="">
								<div class="layer"> <i class="icon-video2"></i> </div>
							</div>

							<div class="detail">
								<h6>Antes / Despues</h6>
								<span>Texto Texto Texto</span>
							</div>
						</a>
					</div>



					<div class="col-md-3">
						<a class="gallery-sec fancybox photo-icon" href="{{ asset('assets/images/gallery/img6.jpg') }}"
							data-fancybox-group="gallery">
							<div class="image-hover img-layer-slide-left-right">
								<img src="{{ asset('assets/images/gallery/img6.jpg') }}" alt="">
								<div class="layer"> <i class="icon-image2"></i> </div>
							</div>

							<div class="detail">
								<h6>Antes / Despues</h6>
								<span>Texto Texto Texto</span>
							</div>
						</a>
					</div>



					<div class="col-md-3">
						<a class="gallery-sec fancybox photo-icon" href="{{ asset('assets/images/gallery/img7.jpg') }}"
							data-fancybox-group="gallery">
							<div class="image-hover img-layer-slide-left-right">
								<img src="{{ asset('assets/images/gallery/img7.jpg') }}" alt="">
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
								<img src="{{ asset('assets/images/gallery/img8.jpg') }}" alt="">
								<div class="layer"> <i class="icon-video2"></i> </div>
							</div>

							<div class="detail">
								<h6>Antes / Despues</h6>
								<span>Texto Texto Texto</span>
							</div>
						</a>
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
