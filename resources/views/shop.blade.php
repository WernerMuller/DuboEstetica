@extends('layouts.template')

@section('content-csr')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('title','Productos')

@section('content-general') 

	<div id="wrap">

		{{-- <div id="preloader">
			<div id="status">&nbsp;</div>
			<div class="loader">
				<h1>Loading...</h1>
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div> --}}


		<!--Start Banner-->

		<div class="sub-banner">

			<img class="banner-img" src="{{ asset("assets/images/sub-banner.jpg") }}" alt="">
			<div class="detail">
				<div class="container">
					<div class="row">
						<div class="col-md-12">

							<div class="paging">
								<h2>Tienda</h2>
								<ul>
									<li><a href="index.html">Inicio</a></li>
									<li><a>Tienda</a></li>
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



			<div class="services-content">
				<div class="container">


					<div class="row">
						<div class="col-md-9">
							<ul class="shop clearfix list-unstyled">
								<li>
									<div class="product">
										<div class="product-thumb">
											<a><img src="{{ asset("assets/images/productos/kit_cejas.jpg") }}" alt=""></a>
										</div>
										<div class="product-description clearfix">
											<h3><a href="shop-detail.html">Kit Para Cejas Semipermanentes</a></h3>
											<p class="price">&pound;55.00</p>
											<span class="double-border"></span>
											<a href="#." class="product-cart-btn pull-left"><i class="icon-basket"></i>
												Al carro</a>
											<a href="shop-detail.html" class="product-detail-btn pull-right"><i
													class="icon-browser"></i> Ver mas</a>
										</div>
									</div>
								</li>
								<li>
									<div class="product">
										<div class="product-thumb">
											<label>35%</label>
											<a><img src="{{ asset("assets/images/productos/kit_cejas.jpg") }}" alt=""></a>
										</div>
										<div class="product-description clearfix">
											<h3><a href="shop-detail.html">Kit Para Cejas Semipermanentes</a></h3>
											<p class="price"><u>&pound;55.00</u> £24.00</p>
											<span class="double-border"></span>
											<a href="#." class="product-cart-btn pull-left"><i class="icon-basket"></i>
												Al carro</a>
											<a href="shop-detail.html" class="product-detail-btn pull-right"><i
													class="icon-browser"></i> Ver mas</a>
										</div>
									</div>
								</li>
								<li>
									<div class="product">
										<div class="product-thumb">
											<a><img src="{{ asset("assets/images/productos/kit_cejas.jpg") }}" alt=""></a>
										</div>
										<div class="product-description clearfix">
											<h3><a href="shop-detail.html">Kit Para Cejas Semipermanentes</a></h3>
											<p class="price">&pound;55.00</p>
											<span class="double-border"></span>
											<a href="#." class="product-cart-btn pull-left"><i class="icon-basket"></i>
												Al carro</a>
											<a href="shop-detail.html" class="product-detail-btn pull-right"><i
													class="icon-browser"></i> Ver mas</a>
										</div>
									</div>
								</li>
								<li>
									<div class="product">
										<div class="product-thumb">
											<a><img src="{{ asset("assets/images/productos/kit_cejas.jpg") }}" alt=""></a>
										</div>
										<div class="product-description clearfix">
											<h3><a href="shop-detail.html">Kit Para Cejas Semipermanentes</a></h3>
											<p class="price">&pound;55.00</p>
											<span class="double-border"></span>
											<a href="#." class="product-cart-btn pull-left"><i class="icon-basket"></i>
												Al carro</a>
											<a href="shop-detail.html" class="product-detail-btn pull-right"><i
													class="icon-browser"></i> Ver mas</a>
										</div>
									</div>
								</li>
								<li>
									<div class="product">
										<div class="product-thumb">
											<a><img src="{{ asset("assets/images/productos/kit_cejas.jpg") }}" alt=""></a>
										</div>
										<div class="product-description clearfix">
											<h3><a href="shop-detail.html">Kit Para Cejas Semipermanentes</a></h3>
											<p class="price">&pound;55.00</p>
											<span class="double-border"></span>
											<a href="#." class="product-cart-btn pull-left"><i class="icon-basket"></i>
												Al carro</a>
											<a href="shop-detail.html" class="product-detail-btn pull-right"><i
													class="icon-browser"></i> Ver mas</a>
										</div>
									</div>
								</li>
								<li>
									<div class="product">
										<div class="product-thumb">
											<a><img src="{{ asset("assets/images/productos/kit_cejas.jpg") }}" alt=""></a>
										</div>
										<div class="product-description clearfix">
											<h3><a href="shop-detail.html">Kit Para Cejas Semipermanentes</a></h3>
											<p class="price">&pound;55.00</p>
											<span class="double-border"></span>
											<a href="#." class="product-cart-btn pull-left"><i class="icon-basket"></i>
												Al carro</a>
											<a href="shop-detail.html" class="product-detail-btn pull-right"><i
													class="icon-browser"></i> Ver mas</a>
										</div>
									</div>
								</li>
								<li>
									<div class="product">
										<div class="product-thumb">
											<label>25%</label>
											<a><img src="{{ asset("assets/images/productos/kit_cejas.jpg") }}" alt=""></a>
										</div>
										<div class="product-description clearfix">
											<h3><a href="shop-detail.html">Kit Para Cejas Semipermanentes</a></h3>
											<p class="price"><u>&pound;55.00</u> £24.00</p>
											<span class="double-border"></span>
											<a href="#." class="product-cart-btn pull-left"><i class="icon-basket"></i>
												Al carro</a>
											<a href="shop-detail.html" class="product-detail-btn pull-right"><i
													class="icon-browser"></i> Ver mas</a>
										</div>
									</div>
								</li>
								<li>
									<div class="product">
										<div class="product-thumb">
											<a><img src="{{ asset("assets/images/productos/kit_cejas.jpg") }}" alt=""></a>
										</div>
										<div class="product-description clearfix">
											<h3><a href="shop-detail.html">Kit Para Cejas Semipermanentes</a></h3>
											<p class="price">&pound;55.00</p>
											<span class="double-border"></span>
											<a href="#." class="product-cart-btn pull-left"><i class="icon-basket"></i>
												Al carro</a>
											<a href="shop-detail.html" class="product-detail-btn pull-right"><i
													class="icon-browser"></i> Ver mas</a>
										</div>
									</div>
								</li>
								<li>
									<div class="product">
										<div class="product-thumb">
											<a><img src="{{ asset("assets/images/productos/kit_cejas.jpg") }}" alt=""></a>
										</div>
										<div class="product-description clearfix">
											<h3><a href="shop-detail.html">Kit Para Cejas Semipermanentes</a></h3>
											<p class="price">&pound;55.00</p>
											<span class="double-border"></span>
											<a href="#." class="product-cart-btn pull-left"><i class="icon-basket"></i>
												Al carro</a>
											<a href="shop-detail.html" class="product-detail-btn pull-right"><i
													class="icon-browser"></i> Ver mas</a>
										</div>
									</div>
								</li>
							</ul>
						</div>
						<div class="col-md-3">
							<aside>
								<div class="sidebar-widget no-margin">
									<h3>FILTRAR PRECIO</h3>
									<div id="slider-range" class="ui-slider"></div>
									<div class="price-range clearfix">
										<p>Filter</p>
										<input type="text" readonly="" id="amount">
									</div>
								</div>
								<hr class="margin-top-40 margin-bottom-40">
								<div class="sidebar-widget">
									<h3>CATEGORIA DE PRODUCTOS</h3>
									<ul class="list-arrow list-unstyled">
										<li><a href="#."><i class="fa fa-angle-right"></i>Cejas</a></li>
										<li><a href="#."><i class="fa fa-angle-right"></i>Pestañas</a></li>
										<li><a href="#."><i class="fa fa-angle-right"></i>Uñas</a></li>
										<li><a href="#."><i class="fa fa-angle-right"></i>otro</a></li>
										<li><a href="#."><i class="fa fa-angle-right"></i>otros</a></li>
									</ul>
								</div>
								<hr class="margin-top-40 margin-bottom-40">
								<div class="sidebar-widget">
									<h3>TOP PRODUCTS</h3>
									<div class="top-products clearfix">
										<a href="#."><img src="{{ asset("assets/images/shop/top-products-1.jpg") }}" alt=""></a>
										<div class="top-products-detail">
											<h4><a href="#.">Woo Ninja</a></h4>
											<p>£55.00</p>
											<div class="ratings">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
										</div>
									</div>
									<div class="top-products clearfix">
										<a href="#."><img src="{{ asset("assets/images/shop/top-products-1.jpg") }}" alt=""></a>
										<div class="top-products-detail">
											<h4><a href="#.">Woo Ninja</a></h4>
											<p>£55.00</p>
											<div class="ratings">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
										</div>
									</div>
									<div class="top-products clearfix">
										<a href="#."><img src="{{ asset("assets/images/shop/top-products-1.jpg") }}" alt=""></a>
										<div class="top-products-detail">
											<h4><a href="#.">Woo Ninja</a></h4>
											<p>£55.00</p>
											<div class="ratings">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
										</div>
									</div>
								</div>
							</aside>
						</div>
					</div>

				</div>
			</div>


		</div>
		<!--End Content-->

    @endsection

	<script type="text/javascript" src="{{ asset("assets/js/jquery.js") }}"></script>

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

	<!-- All Scripts -->
	<script type="text/javascript" src="{{ asset("assets/js/price-slider.js") }}"></script>

	<script>
		(function () {
			"use strict";
			/* ------------------------------------------------------------------------ 
								   RANGE SLIDER [price filter]
			------------------------------------------------------------------------ */
			jQuery("#slider-range").slider({
				range: true,
				min: 24781,
				max: 50000,
				values: [28781, 45000],

				slide: function (event, ui) {

					jQuery("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
				},

				stop: function (event, ui) {
					jQuery("#sort_price_max").val(ui.values[1]);
					jQuery("#sort_price_min").val(ui.values[0]);
				}
			});
			jQuery("#amount").val("$" + jQuery("#slider-range").slider("values", 0) +
				" - $" + jQuery("#slider-range").slider("values", 1));
		})(jQuery);
	</script>

	<!-- Mobile Menu -->
	<script type="text/javascript" src="js/jquery.mmenu.min.all.js"></script>

	<!-- All Scripts -->
	<script type="text/javascript" src="js/custom.js"></script>

</body>

</html>