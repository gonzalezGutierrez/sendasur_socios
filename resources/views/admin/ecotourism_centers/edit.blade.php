@extends('layouts.admin_lite')

@section('header_section')

    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">Actualizar centro ecoturistico</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Inicio</a></li>
                <li class="breadcrumb-item"><a href="{{asset('admin/centros_ecoturisticos/')}}">Centros ecoturisticos</a></li>
                <li class="breadcrumb-item active">Agregar</li>
            </ol>
        </div>
        <div class="">
            <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
        </div>
    </div>

@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Formulario de registro</h4>
                    @include('admin.ecotourism_centers.form',['url'=>'admin/centros_ecoturisticos/'.$place->slug,'method'=>'PUT'])
                </div>
            </div>
        </div>
    </div>
@stop

@section('js')
    <script src="{{asset('admin/js/slugify.js')}}"></script>
    <script src="{{asset('admin/js/image_preview.js')}}"></script>

    <script>
        let slugfy = new Slugify();
        let image  = new ImagePreview();
    </script>
@stop
