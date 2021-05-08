@extends('layouts.admin_lite')

@section('title','Centros ecoturisticos')

@section('header_section')
<div class="row page-titles">
    <div class="col-md-5 align-self-center">

    </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Inicio</a></li>
            <li class="breadcrumb-item active">Centros ecoturisticos</li>
        </ol>
    </div>
    <div>
        <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
    </div>
</div>
@stop


@section('content')
    <div class="row">
        <div class="col-12">
            {{--@include('elements.notifications')--}}
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="card-title">Centros ecoturisticos</h4>
                        <a href="{{asset('admin/centros_ecoturisticos/create')}}" class="btn btn-outline-primary btn-sm"><i class="fa fa-plus-circle"></i> Agregar</a>
                    </div>
                    <div class="table-responsive m-t-40">
                        <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Tipo</th>
                                <th class="no-print">Acciones</th>
                            </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Tipo</th>
                                    <th class="no-print">Acciones</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach($places as $place)
                                    <tr>
                                        <td>{{$place->name}}</td>
                                        <td>{{$place->type}}</td>
                                        <td><a href="{{asset('admin/centros_ecoturisticos/'.$place->slug.'/edit')}}" class="btn btn-outline-primary btn-sm"><i class="fa fa-edit"></i>Editar</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop