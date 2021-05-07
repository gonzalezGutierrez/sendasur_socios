@extends('layouts.app_lite')

@section('content')

<div class="site-breadcrumb">
    <div class="container">
        <a href="{{asset('/')}}"><i class="fa fa-home"></i> Inicio</a> <i class="fa fa-angle-right"></i>
        <span>Centros ecoturísticos</span>
    </div>
</div>

<section class="full-courses-section spad pt-0">
    <div class="container">
        <div class="row">
            @foreach($colaboradores as $colaborador)
                <div class="col-lg-4 col-md-6 course-item">
                    <div class="course-thumb">
                        <img src="{{$colaborador->image_url}}" alt="">
                        <div class="course-cat" style="cursor:pointer;">
                            <a href="{{asset('lugar/'.$colaborador->slug)}}">
                                <span> <i class="fa fa-book"></i> Reservar</span>
                            </a>
                        </div>
                    </div>
                    <div class="course-info">

                        <h5> {{$colaborador->name}} </h5>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

@stop