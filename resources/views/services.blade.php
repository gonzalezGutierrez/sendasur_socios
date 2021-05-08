@extends('layouts.app_lite')

@section('title','Servicios')

@section('content')

    <div class="site-breadcrumb">
        <div class="container">
            <a href="{{asset('/')}}"><i class="fa fa-home"></i> Inicio</a> <i class="fa fa-angle-right"></i>
            <span>Servicios</span>
        </div>
    </div>

    
        <div class="container">
            <div class="section-title text-center">
                <h3>SERVICIOS</h3>
                <p>Turismo Comunitario de Chiapas</p>
            </div>
        </div>
  
    <section class="about-section spad pt-0">
     <div class="container">
        <div class="card-group">

          <div class="card m-3">
            <div class="text-center">
            <img class="card-img-top text-center" style="height:150px; width:150px;" src="{{asset('web/img/services-icons/003-bed.png')}}" alt="Bologna">
            </div>
            <div class="card-body">
              <h4 class="card-title text-center">HOSPEDAJE</h4>
              <h6 class="card-subtitle mb-2 text-center">En campamentos o centros ecoturísticos</h6>
              <p class="card-text text-center"> Hemos seleccionado cuidadosamente los hoteles y centros ecoturísticos sustentables que trabajan en pro de la conservación del medio ambiente. </p>
            </div>
            </div>

            <div class="card m-3">
                <div class="text-center">
                <img class="card-img-top text-center" style="height:150px; width:150px;" src="{{asset('web/img/services-icons/009-dish.png')}}" alt="Bologna">
                </div>
                <div class="card-body">
                  <h4 class="card-title text-center">ALIMENTOS</h4>
                  <h6 class="card-subtitle mb-2 text-center">En campamentos o centros ecoturísticos</h6>
                  <p class="card-text text-center"> Todos nuestros paquetes, pueden incluir todos los alimentos o
                    pueden ser sin comida, dependiendo lo que el cliente desea que incluya en su paquete. </p>
                </div>
                </div>

                <div class="card m-3">
                    <div class="text-center">
                    <img class="card-img-top text-center" style="height:150px; width:150px;" src="{{asset('web/img/services-icons/026-ship.png')}}" alt="Bologna">
                    </div>
                    <div class="card-body">
                      <h4 class="card-title text-center">ACTIVIDADES RECREATIVAS</h4>
                      <h6 class="card-subtitle mb-2 text-center"> En la Selva Lacandona y Selva El Ocote</h6>
                      <p class="card-text text-center"> Podrás visitar el Estado de Chiapas de una manera más auténtica y
                        mágica, sin prisas, sin presiones, sin itinerarios apretados. </p>
                    </div>
                    </div>

                    <div class="card m-3">
                        <div class="text-center">
                        <img class="card-img-top text-center" style="height:150px; width:150px;" src="{{asset('web/img/services-icons/013-navigation.png')}}" alt="Bologna">
                        </div>
                        <div class="card-body">
                          <h4 class="card-title text-center">TOURS</h4>
                          <h6 class="card-subtitle mb-2 text-center">A las extraordinarias reservas y áreas naturales de Chiapas</h6>
                          <p class="card-text text-center"> Para ofrecer un mejor servicio y apoyar a la economía local, contratamos a guías comunitarios en
                            cada lugar turístico que visitamos y en las zonas arqueológicas. </p>
                        </div>
                        </div>

                        

          
        </div>

        <div class="card-group">

            <div class="card m-3">
              <div class="text-center">
              <img class="card-img-top text-center" style="height:150px; width:150px;" src="{{asset('web/img/services-icons/012-global.png')}}" alt="Bologna">
              </div>
              <div class="card-body">
                <h4 class="card-title text-center">VISITAS</h4>
                <h6 class="card-subtitle mb-2 text-center">A los maravillosos rincones de Chiapas</h6>
                <p class="card-text text-center"> A zonas arqueológicas, cascadas, lagos y lagunas, parques nacionales, ríos, pueblos mágicos, comunidades indígenas, zonas cafetaleras y playas.</p>
              </div>
              </div>
  
              <div class="card m-3">
                  <div class="text-center">
                  <img class="card-img-top text-center" style="height:150px; width:150px;" src="{{asset('web/img/services-icons/015-woman.png')}}" alt="Bologna">
                  </div>
                  <div class="card-body">
                    <h4 class="card-title text-center">CAMINATAS</h4>
                    <h6 class="card-subtitle mb-2 text-center">Actividades en contacto con la naturaleza guiadas en los verdes rincones de la selva</h6>
                    <p class="card-text text-center"> El Ecoturismo por medio del senderismo nos permite recorrer nuestra identidad cultural recorriendo los caminos propios del estado, conociendo sus riquezas biológicas, valorándolas y conservándolas. </p>
                  </div>
                  </div>
  
                  <div class="card m-3">
                      <div class="text-center">
                      <img class="card-img-top text-center" style="height:150px; width:150px;" src="{{asset('web/img/services-icons/005-camera.png')}}" alt="Bologna">
                      </div>
                      <div class="card-body">
                        <h4 class="card-title text-center">PASEOS</h4>
                        <h6 class="card-subtitle mb-2 text-center"> En lancha, balsas, cayuco y caballos </h6>
                        <p class="card-text text-center"> Uno de los mejores momentos para interactuar y conocer turistas de todo el mundo en los tours y excursiones. </p>
                      </div>
                      </div>
  
                      <div class="card m-3">
                          <div class="text-center">
                          <img class="card-img-top text-center" style="height:150px; width:150px;" src="{{asset('web/img/services-icons/027-road sign.png')}}" alt="Bologna">
                          </div>
                          <div class="card-body">
                            <h4 class="card-title text-center">DIVERSION EXTREMA</h4>
                            <h6 class="card-subtitle mb-2 text-center"> Actividades emocionantes como descenso en río, kayak, rappel, tirolesa, entre otros
                             </h6>
                            <p class="card-text text-center"> Chiapas ha sido bendecido por la naturaleza con extraordinarios lugares para la práctica del turismo de aventura. </p>
                          </div>
                          </div>
  
                          
  
            
          </div>
      
      </div>
    </section>

    <section class="about-section spad pt-0">
        <div class="container">
            <div class="gallery">
                <div class="grid-sizer"></div>
                <div class="gallery-item gi-big set-bg" data-setbg="{{asset('web/img/gallery/1.jpg')}}">
                    <a class="img-popup" href="{{asset('web/img/gallery/1.jpg')}}"><i class="ti-plus"></i></a>
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
    </section>
   
@stop
