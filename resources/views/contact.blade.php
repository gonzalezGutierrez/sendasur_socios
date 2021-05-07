@extends('layouts.app_lite')

@section('title','Contacto')

@section('content')

    <div class="site-breadcrumb">
        <div class="container">
            <a href="{{asset('/')}}"><i class="fa fa-home"></i> Inicio</a> <i class="fa fa-angle-right"></i>
            <span>Contacto</span>
        </div>
    </div>

    <section class="contact-page spad pt-0">
        <div class="container">
            <div class="map-section">
                <div class="contact-info-warp">
                    <div class="contact-info">
                        <h4>Dirección</h4>
                        <p style="width:300px; margin:auto;">	Av. Almolonga 28 A Entre la Francisco León y Rubón Ramos Barrio de Santa Lucia C.p 29250 San Cristobal de las Casas, Chiapas.</p>
                    </div>
                    <div class="contact-info">
                        <h4>Telefono</h4>
                        <p>(967) 101 9387</p>
                    </div>
                    <div class="contact-info">
                        <h4>Correo electronico</h4>
                        <p>contacto@sendasur.org</p>
                    </div>
                    <div class="contact-info">
                        <h4>Horario de atención</h4>
                        <p>Lunes - Sabado: 09 AM - 02 PM y 4:00pm - 8:00PM</p>
                    </div>
                </div>
                <!-- Google map -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m12!1m8!1m3!1d15283.127715160144!2d-92.63691315155009!3d16.737729236986212!3m2!1i1024!2i768!4f13.1!2m1!1s%09Av.%20Almolonga%2028%20A%20Entre%20la%20Francisco%20Le%E8%B4%B8n%20y%20Rub%E8%8C%85n%20Ramos%20Barrio%20de%20Santa%20Lucia%20C.p%2029250%20San%20Crist%E8%B4%B8bal%20de%20las%20Casas%2C%20Chiapas.!5e0!3m2!1ses!2smx!4v1620243737155!5m2!1ses!2smx" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="contact-form spad pb-0">
                <div class="section-title text-center">
                    <h3>CONTACTANOS</h3>
                    <p>Contáctenos para obtener las mejores ofertas.</p>
                </div>
                <form action="{{asset('contacto')}}" method="POST" class="comment-form --contact">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            {!! Form::text('nombre','',['placeholder'=>'Nombre','required']) !!}
                        </div>
                        <div class="col-lg-6">
                            {!! Form::email('email','',['placeholder'=>'Correo electronico']) !!}
                        </div>
                        <div class="col-lg-6">
                            {!! Form::text('asunto','',['placeholder'=>'Asunto','required']) !!}
                        </div>
                        <div class="col-lg-6">
                            {!! Form::text('telefono','',['placeholder'=>'Telefono','required']) !!}
                        </div>
                        <div class="col-lg-12">
                            {!! Form::textarea('message','',['placeholder'=>'Mensaje','required']) !!}
                            <div class="text-center">
                                <button type="submit" class="site-btn">ENVÍAR</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

@stop
