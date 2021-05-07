{!! Form::open(['url'=>$url,'method'=>$method,'class'=>'form-material m-t-40']) !!}
    <div class="form-group">
        <label>Nombre</label>
        {!! Form::text('name',$place->name,['class'=>'form-control form-control-line','id'=>'name']) !!}
        @error('name')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    <div class="form-group">
        <label>Slug</label>
        {!! Form::text('slug',$place->slug,['class'=>'form-control form-control-line','id'=>'slug']) !!}
        @error('slug')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    <div class="form-group">
        <label>Tipo</label>
        {!! Form::select('type',['socio'=>'Socios','colaborador'=>'Colaboradores'],$place->type,['class'=>'form-control form-control-line','placeholder'=>'Selecciona una opción...']) !!}
        @error('type')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    <div class="form-group">
        <label>Imagen Url</label>
        {!! Form::text('image_url',$place->image_url,['class'=>'form-control form-control-line','id'=>'image_url']) !!}
        @error('image_url')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    <img src="{{asset('admin/assets/images/add-image.png')}}" id="preview_url" class="mb-4" style="height:300px; border-radius:4px; width:450px;" alt="">

    <div class="form-group">
        <label>Descripción</label>
        {!! Form::textarea('description',$place->description,['class'=>'form-control form-control-line']) !!}
        @error('description')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    <div class="form-group">
        <label>Descripción detallada</label>
        {!! Form::textarea('description_large',$place->description_large,['class'=>'form-control form-control-line']) !!}
        @error('description_large')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    <div class="form-group">
        <label>Actividades</label>
        {!! Form::textarea('activities',$place->activities,['class'=>'form-control form-control-line']) !!}
        @error('activities')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    <div class="form-group">
        <label>Servicios</label>
        {!! Form::textarea('services',$place->services,['class'=>'form-control form-control-line']) !!}
        @error('services')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    <div class="form-group">
        <label>Ubicación</label>
        {!! Form::textarea('ubication',$place->ubication,['class'=>'form-control form-control-line']) !!}
        @error('ubication')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>


    <div class="form-group">
        <button class="btn btn-outline-primary"><i class="fa fa-check-circle"></i> Guardar</button>
    </div>

{!! Form::close() !!}
