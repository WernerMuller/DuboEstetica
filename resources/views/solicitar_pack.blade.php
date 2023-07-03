@extends('layouts.template')


@section('content-csr')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('title','Inicio')
	
	
@section('content-general')

<div class="sub-banner">
   
    <img class="banner-img" src="images/sub-banner.jpg" alt="">
 <div class="detail">
     <div class="container">
         <div class="row">
             <div class="col-md-12">
                 
                 <div class="paging">
                     <h2>{{ $menu }}</h2>
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

<!--End Banner-->



<!--Start Content-->
<div class="content">


<!--Start Welcome-->
        <div class="welcome-two">
            <div class="container">

                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-title">
                                <h2>{{ $menu }}</h2>
                                <p>{{ $descripcion }}</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="welcome-detail">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="detail">
                                    <p>
                                        {{ $nota }}
                                    </p>
                                    <ul>
                                        <li><span>{{ $sessiones." Sesiones" }}</span></li>
                                        <li><span>{{ $detalle_session }}</span></li>
                                        <li><span>{{ format_money($precio) }}</span></li>
                                        <li><span>{{ "Tiempo ".$tiempo }}</span></li>
                                    </ul>
                                </div>
                                <table class="table">
                                    <thead>
                                      <tr>
                                        <th scope="col">Servicios</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                    @foreach(servicios_packs($id_servicio) as $item)
                                      <tr>
                                        <td>{{ $item->accion }}</td>
                                      </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    
                    



                </div>




                <div class="col-md-6">
                    <div class="appointment-form">

                        <div class="main-title">
                            <h2><span>Reservar</span> Ahora</h2>

                        </div>

                        <div class="form">

                            <section class="bgcolor-a">
                                <form>
                                    <div class="form-group">
                                      <label for="exampleInputEmail1">Nombre Apellido</label>
                                      <input type="text" class="form-control"  placeholder="" id="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Rut</label>
                                        <input type="text" class="form-control"  placeholder="11222333-4" id="rut">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Telefono</label>
                                        <input type="text" class="form-control"  placeholder="" id="telefono">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input type="email" class="form-control"  placeholder="" id="email">
                                    </div>

                                    <div class="form-group">
                                        <input class="input__field input__field--kohana input-selected" type="text" id="datepicker"  placeholder="Fecha sesión"  name="datepicker" autocomplete="off" style="color:black"/>	
                                        <small id="emailHelp" class="form-text text-muted">Selecciona Fecha de Reservar</small>

                                    </div>
                                    <br><br>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Hora Reserva</label>
                                        <select id="horario-filtro" class="form-control form-control-sm" >
                                            <option value="0">Horas</option>
                                        </select>
                                    </div>

                                    <input name="submit_appointment" type="submit" value="Reservar"
                                    onclick="agregar_registro_hora(event);">

                                  </form>

                            </section>

                        </div>

                    </div>
                </div>
                
            </div>
        </div>
    



        <input type="hidden" id="value_especialist" name="input-31" placeholder="Precio" disabled>
        <input type="hidden" value="{{ $id_servicio }}" id="select-esp">


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

<script type="text/javascript" src="{{ asset("assets/js/especialista.js") }}"></script>  

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script type="text/javascript" src="{{ asset("assets/js/especialidad.js") }}"></script>

<script>
    especialiti_selected();
</script>


@endsection