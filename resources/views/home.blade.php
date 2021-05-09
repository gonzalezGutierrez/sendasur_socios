@extends('layouts.app_lite')

@section('title','Inicio')

@section('content')
    <section class="hero-section">
        <div class="hero-slider owl-carousel">
            <div class="hs-item set-bg"  data-setbg="https://images.unsplash.com/photo-1605964576380-ea1486cc0a27?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80">
                <div class="hs-text">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="hs-subtitle">Turismo comunitario SENDASUR.</div>
                                <h2 class="hs-title">CENTRO ECOTURÍSTICO LAS GUACAMAYAS.</h2>
                                <p class="hs-des">El Centro Ecoturístico las Guacamayas, fue creado con la finalidad de desarrollar un proyecto
                                    de conservación de las guacamayas rojas, especies amenazadas por la cacería y al
                                    comercio ilegal debido a su colorido y exótico plumaje.</p>
                                <div class="site-btn">Leer más</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hs-item set-bg" data-setbg="{{asset('web/img/sliders/02.jpg')}}">
                <div class="hs-text">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="hs-subtitle">Campamentos comunitarios</div>
                                <h2 class="hs-title">Campamento Yatoch Barum</h2>
                                <p class="hs-des">El campamento Yatoch Barum está integrado por la familia del Sr. Vicente Kin Paniagua
                                    perteneciente a la etnia Maya Lacandón, originarios de la comunidad de Nahá ubicado al noreste de
                                    la Reserva de la Biosfera Montes Azules.</p>
                                <div class="site-btn">Leer más</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="service-section spad">
        <div class="container services">
            <div class="section-title text-center">
                <h3>Nuestros servicios</h3>
                <p>Con SendaSur, proponemos servicios de hospedaje, alimentos y actividades en la Selva Lacandona
                    y Selva el Ocote. Así como tours y excursiones a las extraordinarias reservas y áreas naturales de
                    Chiapas.</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 service-item">
                    <div class="service-icon">
                        <img src="{{asset('web/img/services-icons/003-bed.png')}}" alt="1">
                    </div>
                    <div class="service-content">
                        <h4>Hospedaje</h4>
                        <p class="text-justify">Hemos seleccionado cuidadosamente los hoteles y centros ecoturísticos sustentables que
                            trabajan en pro de la conservación del medio ambiente.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 service-item">
                    <div class="service-icon">
                        <img src="{{asset('web/img/services-icons/009-dish.png')}}" alt="1">
                    </div>
                    <div class="service-content">
                        <h4>Alimentos</h4>
                        <p class="text-justify">Todos nuestros paquetes, pueden incluir todos los alimentos o
                            pueden ser sin comida, dependiendo lo que el cliente desea que incluya en su paquete.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 service-item">
                    <div class="service-icon">
                        <img src="{{asset('web/img/services-icons/013-navigation.png')}}" alt="1">
                    </div>
                    <div class="service-content">
                        <h4>Tours</h4>
                        <p class="text-justify">Para ofrecer un mejor servicio y apoyar a la economía local, contratamos a guías comunitarios en
                            cada lugar turístico que visitamos y en las zonas arqueológicas.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 service-item">
                    <div class="service-icon">
                        <img src="{{asset('web/img/services-icons/026-ship.png')}}" alt="1">
                    </div>
                    <div class="service-content">
                        <h4>Actividades recreativas</h4>
                        <p class="text-justify">Podrás visitar el Estado de Chiapas de una manera más auténtica y
                            mágica, sin prisas, sin presiones, sin itinerarios apretados.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 service-item">
                    <div class="service-icon">
                        <img src="{{asset('web/img/services-icons/021-mountain.png')}}" alt="1">
                    </div>
                    <div class="service-content">
                        <h4>Actividades en la selva</h4>
                        <p class="text-justify"> En estos asombrosos lugares puedes realizar turismo de aventura y ecoturismo, podrás nadar en cascadas, senderismo, hacer rafting. </p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 service-item">
                    <div class="service-icon">
                        <img src="{{asset('web/img/services-icons/006-camping.png')}}" alt="1">
                    </div>
                    <div class="service-content">
                        <h4>Excursiones </h4>
                        <p class="text-justify"> Uno de los mejores momentos para interactuar y conocer turistas de todo el mundo en los tours y excursiones.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="enroll-section spad set-bg" data-setbg="https://images.unsplash.com/photo-1564874076878-5adacfc42cd8?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1351&q=80">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-title text-white">
                        <h3>RESERVACIÓN</h3>
                        <p>Complete el formulario de reserva, y le enviaremos un presupuesto personalizado, podemos
                            hacer todo tipo de ajuste y modificaciones de acuerdo a sus necesidades en particular.</p>
                    </div>
                    <div class="enroll-list text-white">
                        <div class="enroll-list-item">
                            <span>1</span>
                            <h5>Contactanos</h5>
                            <p>Llena el formulario de reservación para que conoscamos un poco mas acerca de tu viaje</p>
                        </div>
                        <div class="enroll-list-item">
                            <span>2</span>
                            <h5>Consulta tu viaje</h5>
                            <p>Te haremos llegar una cotización con los mejores precios y la mejor calidad.</p>
                        </div>
                        <div class="enroll-list-item">
                            <span>3</span>
                            <h5>Disfruta</h5>
                            <p>
                                Nuestra empresa está enfocada en brindarles a nuestros clientes la mejor experiencia de viaje.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1 p-lg-0 p-4">
                    <img src="{{asset('web/img/reservacion.jpg')}}" style="border-radius:5px;" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="courses-section spad">
        <div class="container">
            <div class="section-title text-center">
                <h3>Nuestros Socios</h3>
                <p>
                    Estamos integrados por organizaciones
                    indígenas consolidadas, que trabaja en función del desarrollo local y familiar ,
                    como una forma de aumentar y diversificar nuestros recursos económicos, con el fin de generar desarrollo y un alto
                    impacto social en nuestra región.
                </p>
            </div>
            <div class="row">

                @foreach($partners as $partner)

                    <div class="col-lg-4 col-md-6 course-item">
                        <div class="course-thumb">
                            <img src="{{$partner->image_url}}" alt="">
                            <div class="course-cat">
                                <a href="{{asset('lugar/'.$partner->slug)}}">
                                    <span><i class="fa fa-book"></i> Reservar</span>
                                </a>
                            </div>
                        </div>
                        <div class="course-info">
                            <div class="date"><i class="fa fa-clock-o"></i> 22 Mar 2018</div>
                            <h4>{{$partner->name}}</h4>

                        </div>
                    </div>

                @endforeach

            </div>
        </div>
    </section>
    <section class="fact-section spad set-bg" data-setbg="{{asset('web/img/fact-bg.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3 fact">
                    <div class="fact-icon">
                        <i class="ti-calendar"></i>
                    </div>
                    <div class="fact-text">
                        <h2>10+</h2>
                        <p>AÑOS</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 fact">
                    <div class="fact-icon">
                        <i class="ti-medall"></i>
                    </div>
                    <div class="fact-text">
                        <h2>{{$ecoturismCentersCount}}+</h2>
                        <p>Centros ecoturisticos</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 fact">
                    <div class="fact-icon">
                        <i class="ti-medall"></i>
                    </div>
                    <div class="fact-text">
                        <h2>{{$partnersCount}}+</h2>
                        <p>Socios</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 fact">
                    <div class="fact-icon">
                        <i class="ti-user"></i>
                    </div>
                    <div class="fact-text">
                        <h2>1000+</h2>
                        <p>Clientes</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="event-section spad">
        <div class="container">
            <div class="section-title text-center">
                <h3>Nuestros colaboradores</h3>
                <p>
                    SendaSur agremia a comunidades de distintos orígenes étnicos, con diferentes identidades
                    culturales y formas de organización, quienes suman sus fuerzas para lograr la representatividad de
                    un turismo responsable en Chiapas.
                </p>
            </div>
            <div class="row">
                @foreach($ecoturismCenters as $center)
                    <div class="col-md-6 event-item">
                        <div class="event-thumb">
                            <img src="{{$center->image_url}}" alt="">
                            <div class="event-date">
                                <a href="{{asset('lugar/'.$center->slug)}}">
                                    <span> <i class="fa fa-book"></i> Reservar</span>
                                </a>
                            </div>
                        </div>
                        <div class="event-info">
                            <h4>{{$center->name}}</h4>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    <div class="gallery-section">
        <div class="section-title text-center container">
            <h3>Conoce lo mejor de Chiapas</h3>
            <p>
                Por primera vez en el Estado, comunidades de distintos orígenes étnicos suman sus fuerzas para
                lograr una representatividad del ecoturismo en Chiapas. Con esta iniciativa se busca poner en
                contacto a los visitantes con los centros ecoturísticos ubicados en las áreas naturales más atractivas.
            </p>
        </div>
        <div class="gallery">
            <div class="grid-sizer"></div>
            <div class="gallery-item gi-big set-bg" data-setbg="{{asset('web/img/gallery/1.jpeg')}}">
                <a class="img-popup" href="{{asset('web/img/gallery/1.jpeg')}}"><i class="ti-plus"></i></a>
            </div>
            <div class="gallery-item set-bg" data-setbg="{{asset('web/img/gallery/2.jpg')}}">
                <a class="img-popup" href="{{asset('web/img/gallery/2.jpg')}}"><i class="ti-plus"></i></a>
            </div>
            <div class="gallery-item set-bg" data-setbg="{{asset('web/img/gallery/3.jpg')}}">
                <a class="img-popup" href="{{asset('web/img/gallery/3.jpg')}}"><i class="ti-plus"></i></a>
            </div>
            <div class="gallery-item gi-long set-bg" data-setbg="{{asset('web/img/gallery/5.jpg')}}">
                <a class="img-popup" href="{{asset('web/img/gallery/5.jpg')}}"><i class="ti-plus"></i></a>
            </div>
            <div class="gallery-item gi-big set-bg" data-setbg="{{asset('web/img/gallery/8.jpg')}}">
                <a class="img-popup" href="{{asset('web/img/gallery/8.jpg')}}"><i class="ti-plus"></i></a>
            </div>
            <div class="gallery-item gi-long set-bg" data-setbg="{{asset('web/img/gallery/4.jpg')}}">
                <a class="img-popup" href="{{asset('web/img/gallery/4.jpg')}}"><i class="ti-plus"></i></a>
            </div>
            <div class="gallery-item set-bg" data-setbg="{{asset('web/img/gallery/6.jpg')}}">
                <a class="img-popup" href="{{asset('web/img/gallery/6.jpg')}}"><i class="ti-plus"></i></a>
            </div>
            <div class="gallery-item set-bg" data-setbg="{{asset('web/img/gallery/7.jpg')}}">
                <a class="img-popup" href="{{asset('web/img/gallery/7.jpg')}}"><i class="ti-plus"></i></a>
            </div>
        </div>
    </div>

    <section class="newsletter-section">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-lg-7">
                    <div class="section-title mb-md-0">
                    <h3>BOLETÍN INFORMATIVO</h3>
                    <p>Suscríbase y obtenga las últimas noticias sobre SendaSur</p>
                </div>
                </div>
                <div class="col-md-7 col-lg-5">
                    <form class="newsletter">
                        <input type="text" placeholder="Escribe tu email">
                        <button class="site-btn">SUSCRÍBETE</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
