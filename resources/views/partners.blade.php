@extends('layouts.app_lite')

@section('title','Socios')


@section('content')
    <div class="site-breadcrumb">
        <div class="container">
            <a href="{{asset('/')}}"><i class="fa fa-home"></i> Inicio</a> <i class="fa fa-angle-right"></i>
            <span>Socios</span>
        </div>
    </div>

    <section class="blog-page-section spad pt-0">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 post-list">
                    <div class="row">

                        @foreach($partners as $partner)

                            <div class="col-lg-6 col-md-6 course-item">
                                <div class="course-thumb">
                                    <img src="{{$partner->image_url}}" alt="">
                                    <div class="course-cat" style="cursor:pointer;">
                                        <a href="{{asset('lugar/'.$partner->slug)}}">
                                            <span> <i class="fa fa-book"></i> Reservar</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="course-info">

                                    <h5>{{$partner->name}}</h5>
                                </div>
                            </div>

                        @endforeach

                        {{$partners->links()}}

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
@endsection