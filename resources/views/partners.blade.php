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
                    @foreach($partners as $center)
                        <div class="post-item">
                            <div class="post-thumb set-bg" data-setbg="{{$center->image_url}}"></div>
                            <div class="post-content">
                                <h3><a href="{{asset('socios/detalle/'.$center->slug)}}">{{$center->name}}</a></h3>
                                <div class="post-meta">
                                    <span><i class="fa fa-calendar-o"></i> desde {{$center->created_at->format('d-m-Y')}}</span>
                                </div>
                                <p class="text-justify">
                                    {{$center->description}}
                                </p>
                            </div>
                        </div>
                    @endforeach

					{{$partners->links()}}
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