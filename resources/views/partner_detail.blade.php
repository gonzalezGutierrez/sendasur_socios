@extends('layouts.app_lite')

@section('title','Socios')


@section('content')

    <div class="site-breadcrumb">
        <div class="container">
            <a href="{{asset('/')}}"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-right"></i>
            <a href="{{asset('/socios')}}"><i class="fa fa-check-circle"></i> Socios</a> <i class="fa fa-angle-right"></i>
            <span>{{$partner->name}}</span>
        </div>
    </div>

    <section class="blog-page-section spad pt-0">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="post-item post-details">
						<img src="{{$partner->image_url}}" class="post-thumb-full" alt="">
						<div class="post-content">
							<h3><a href="single-blog.html">{{$partner->name}}</a></h3>
							<div class="post-meta">
								<span><i class="fa fa-calendar-o"></i> 23 Mar 2018</span>
								<span><i class="fa fa-user"></i> Cathrine Zeta</span>
							</div>
                            <h4 class="mb-2">Descripción</h4>
							<p class="text-justify">
                                {{$partner->description}}
                            </p>

                            <p class="text-justify">
                                {{$partner->description_large}}
                            </p>

                            <h4 class="mb-2">Ubicación</h4>

                            <p class="text-justify">
                                {{$partner->ubication}}
                            </p>

                            <h4 class="mb-2">Actividades</h4>

                            <p class="text-justify">
                                {{$partner->activities}}
                            </p>
							
						</div>
						
						<div class="comment-warp">
							
							<div class="comment-form-warp">
								<h4 class="comment-title">Nueva reservación</h4>
								<form class="comment-form">
									<div class="row">
										<div class="col-sm-6">
											<input type="text" placeholder="Your Name">
										</div>
										<div class="col-sm-6">
											<input type="email" placeholder="Your Email">
										</div>
										<div class="col-sm-12">
											<textarea placeholder="Your Message"></textarea>
											<button class="site-btn">SEND COMMENT</button>
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
                                        <p><i class="fa fa-book"></i> Reservar</p>
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