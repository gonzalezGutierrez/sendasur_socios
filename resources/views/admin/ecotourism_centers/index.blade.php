@extends('layouts.admin_lite')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <form action="{{asset('admin/centros_ecoturisticos')}}">
                    <input type="hidden" name="type"  value="{{$type}}">
                    <div class="input-group input-group-lg box-gray">
                        <input type="text" name="like" value="{{$like}}" placeholder="Buscar {{$type}}..." class="form-control form-control-lg " aria-label="Text input with dropdown button">
                        <div class="input-group-append">
                            <button class="btn btn-default btn-md m-0 px-3 py-2 z-depth-0 waves-effect waves-light" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12">
                <div class="box-gray text-center">
                    <a href="#" class="btn btn-default waves-effect waves-light">
                        <i class="fas fa-plus-circle"></i>
                        Nuevo
                    </a>
                </div>
            </div>
        </div>
        <div class="space-50"></div>
        <div class="row">
            <div class="col-md-12 mb-5 card card-body">
                <table class="table  table-striped">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Tipo</th>
                            <th>Estatus</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($ecotourism_centers as $center)
                            <tr>
                                <td>{{$center->name}}</td>
                                <td class="">
                                    <span class="badge badge-primary">
                                        <i class="fas fa-check"></i>
                                        {{$center->type}}
                                    </span>
                                </td>
                                <td>
                                    @if($center->is_active == 1)
                                        <span class="badge badge-primary">
                                            <i class="fas fa-check"></i>
                                            Activo
                                        </span>
                                    @endif 

                                    @if($center->is_active == 2)
                                        <span class="badge badge-warning">
                                            <i class="fas fa-trash"></i>
                                            Inactivo
                                        </span>
                                    @endif 
                                </td>
                                <td>
                                    <a target="_blank" href="{{asset('/').$center->type.'/detalle/'.$center->slug}}" class="btn btn-sm btn-outline-primary">
                                        <i class="fas fa-chevron-circle-right"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#open_model_{{$type}}_{{$center->slug}}" class="btn btn-sm btn-outline-info">
                                        <i class="fas fa-images"></i>
                                    </a>

                                    <a href="{{asset('admin/centros_ecoturisticos/'.$center->slug.'/edit')}}" class="btn btn-sm btn-outline-info">
                                        <i class="fas fa-edit"></i>
                                    </a>

                                   <!-- Modal -->
                                   <div class="modal fade" id="open_model_{{$type}}_{{$center->slug}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    {{$center->name}}
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <img src="{{$center->image_url}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                {{$ecotourism_centers->appends(['type'=>$type])->links()}}
            </div>
        </div>
    </div>

@stop