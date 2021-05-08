@extends('layouts.app_lite')

@section('title',$place->name)


@section('content')

    <div class="site-breadcrumb">
        <div class="container">
            <a href="{{asset('/')}}"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-right"></i>
            <span>{{$place->name}}</span>
        </div>
    </div>

    <section class="blog-page-section spad pt-0">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="post-item post-details">
						<img src="{{$place->image_url}}" class="post-thumb-full" alt="">
						<div class="post-content">
							<h3><a href="#">{{$place->name}}</a></h3>
                            <h4 class="mb-2 mt-4 text-uppercase">Descripción</h4>

                            <p class="text-justify">
                                {{$place->description_large}}
                            </p>

                            <hr>

                            <h4 class="mb-2 mt-4 text-uppercase">Ubicación</h4>

                            <p class="text-justify">
                                {{$place->ubication != null ? $place->ubication : 'Sin ubicación registrada'}}
                            </p>

                            <hr>

                            <h4 class="mb-2 mt-4 text-uppercase">Actividades</h4>

                            <p class="text-justify">
                                {{$place->activities != null ? $place->activities : 'Sin actividades registradas'}}
                            </p>

                            <hr>

                            <h4 class="mb-2 mt-4 text-uppercase">Servicíos</h4>

                            <p class="text-justify">
                                {{$place->services != null ? $place->services : 'Sin servicios registrados'}}
                            </p>

						</div>

						<div class="comment-warp">

							<div class="comment-form-warp">
								<h4 class="comment-title">Nueva reservación</h4>
								<form  action="{{asset('contacto/'.$place->slug)}}" method="post" class="comment-form">
                                    @csrf
									<div class="row">
										<div class="col-sm-6">
                                            {!! Form::text('nombre','',['placeholder'=>'Nombre','required']) !!}
										</div>
                                        <div class="col-sm-6">
											{!! Form::text('apellido','',['placeholder'=>'Apellido','required']) !!}
										</div>
										<div class="col-sm-6">
											{!! Form::email('email','',['placeholder'=>'Correo electronico']) !!}
										</div>
                                        <div class="col-sm-6">
											{!! Form::text('telefono','',['placeholder'=>'Numero telefonico','required']) !!}
										</div>
                                        <div class="col-sm-6">
											{!! Form::date('fecha_llegada','',['placeholder'=>'Fecha de llegada','required']) !!}
										</div>
                                        <div class="col-sm-6">
											{!! Form::number('habitaciones','',['placeholder'=>'Numero de habitaciones','required']) !!}
										</div>
										<div class="col-sm-12">
                                            {!! Form::textarea('message','',['placeholder'=>'Tus observaciones']) !!}
											<div class="row justify-content-md-center">
												<div>
													<button type="submit" class="site-btn">RESERVAR <i class="fa fa-envelope"></i></button>
													<a href="https://wa.me/9671019387?text=Hola quiero hacer una reservación en {{$place->name}} , link={{asset('/').'lugar/'.$place->slug}}" target="_blank" class="site-btn btn-whatsapp" style="background-color:rgb(52, 135, 43)">RESERVAR POR WHATSAPP <i class="fa fa-whatsapp"></i></a>
												</div>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- sidebar -->
				<div class="col-sm-8 col-md-5 col-lg-4 col-xl-3 offset-xl-1 offset-0 pl-xl-0 sidebar">

					<div class="widget">
						<h5 class="widget-title">Centros ecoturisticos</h5>
						<div class="recent-post-widget">
							<!-- recent post -->
                            @foreach($ecoturismCenters as $center)
                                <div class="rp-item">
                                    <div class="rp-thumb set-bg" data-setbg="{{$center->image_url}}"></div>
                                    <div class="rp-content">
                                        <h6>{{$center->name}}</h6>
                                        <p><a href="{{asset('lugar/'.$center->slug)}}"><i class="fa fa-book"></i> Reservar</a></p>
                                    </div>
                                </div>
                            @endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@stop
