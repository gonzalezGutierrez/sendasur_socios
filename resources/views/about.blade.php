@extends('layouts.app_lite')

@section('title','Nosotros')

@section('content')

    <div class="site-breadcrumb">
        <div class="container">
            <a href="{{asset('/')}}"><i class="fa fa-home"></i> Inicio</a> <i class="fa fa-angle-right"></i>
            <span>Nosotros</span>
        </div>
    </div>

    <section class="about-section spad pt-0">
        <div class="container">
            <div class="section-title text-center">
                <h3>BIENVENIDO A SENDASUR</h3>
                <p>Turismo Comunitario de Chiapas</p>
            </div>
            <div class="row">
                <div class="col-lg-6 about-text">
                    <h5>¿Quienes Somos?</h5>

                    <p class="text-justify">
                        SendaSur es una red de turismo comunitario del estado de Chiapas, integrada por organizaciones
                        indígenas consolidadas, que trabaja en función del desarrollo local y familiar,
                        como una forma de aumentar y diversificar nuestros recursos económicos, con el fin de generar desarrollo
                        y un alto impacto social en nuestra región.
                    </p>

                    <p class="text-justify">
                        SendaSur agremia a comunidades de distintos orígenes étnicos, con diferentes identidades
                        culturales y formas de organización, quienes suman sus fuerzas para lograr
                        la representatividad de un turismo responsable en Chiapas.
                        Con esta iniciativa nuestro compromiso es rescatar, conservar y preservar
                        nuestro patrimonio natural y cultural, y ayudar en la construcción de un
                        turismo alternativo y sustentable. Incorporando como principios la equidad,
                        la tolerancia y el reparto justo. Porque estamos convencidos que nuestra fuerza
                        y riqueza proviene de nuestras diferencias. El respeto es la llave de
                        un mundo grandioso y frágil que queremos dar a conocer, preservando
                        siempre los equilibrios ecológicos y humanos.
                    </p>

                    <p class="text-justify">
                        Con SendaSur, proponemos servicios de hospedaje, alimentos y actividades en la Selva Lacandona
                        y Selva el Ocote. Así como tours y excursiones a las extraordinarias reservas
                        y áreas naturales de Chiapas. De uno o varios días, los viajes que ofrecemos pueden incluir
                        visitas a zonas arqueológicas, cascadas, lagos y lagunas, parques nacionales, ríos,
                        pueblos mágicos, comunidades indígenas, zonas cafetaleras y playas. Donde se
                        realizan actividades en contacto con la naturaleza como: senderismo y
                        caminatas guiadas en los verdes rincones de la selva, paseos en lancha,
                        balsas, cayuco y caballos. Hospedaje en campamentos o centros ecoturísticos,
                        y para los más atrevidos, actividades emocionantes como descenso en río,
                        kayak, rappel, tirolesa, entre otros.
                    </p>




                    <h5 class="pt-4">Nuestra Historia</h5>
                    <p class="text-justify">
                        SendaSur está conformada por 11 centros ecoturísticos comunitarios y una transportadora turística. El 5 de abril del 2006 abren, en la ciudad de San Cristóbal de Las Casas, Chiapas, el Centro de Información y Reservaciones SendaSur: un espacio diferente, dedicado a la promoción de un turismo responsable y respetuoso de la naturaleza, así como de los hombres y mujeres que la habitan.

                        Por primera vez en el Estado, comunidades de distintos orígenes étnicos suman sus fuerzas para lograr una representatividad del ecoturismo en Chiapas. Con esta iniciativa se busca poner en contacto a los visitantes con los centros ecoturísticos ubicados en las áreas naturales más atractivas, pero más aisladas del estado, con un público en búsqueda de una forma de viajar más auténticos.

                        Nacido de un sueño y una labor colectiva, SendaSur representa mucho más que una visión; es ahora una realidad, una invitación a descubrir un turismo diferente y cautivante, viajar por el maravilloso mundo ecoturístico de Chiapas y convivir con sus comunidades, guardianes de las culturas ancestrales y belleza naturales.

                    </p>

                    <h5 class="pt-4">Misión</h5>

                    <p class="text-justify">
                        Proporcionar a los socios y usuarios los servicios estandarizados de promoción Comprometidos en rescatar, conservar y preservar nuestro patrimonio natural y cultural, a través de un turismo alternativo y sustentable. Trabajamos para la equidad, la tolerancia y el reparto justo, y preservando siempre los equilibrios ecológicos y humanos.
                    </p>

                    <h5 class="pt-4">Objetivos</h5>

                    <ul class="about-list">
                        <li class="text-justify"><i class="fa fa-check-square-o"></i> SendaSur tiene el objetivo de proporcionar a sus socios y usuarios, servicios estandarizados de promoción, difusión, comercialización y reservación, para compartir con el viajero quien cree en nuestros valores, la diversidad, riqueza y belleza de nuestros paisajes y de nuestra gente.</li>
                        <li class="text-justify"><i class="fa fa-check-square-o"></i> Facilitar y mejorar la comunicación entre los centros ecoturísticos comunitarios, turista, operadores, agencia de viajes.</li>
                        <li class="text-justify"><i class="fa fa-check-square-o"></i> Favorecer a través de sus socios, el rescate, la conservación y revitalización del patrimonio natural y cultural, para que los visitantes y las futuras generaciones puedan disfrutar de nuestra riqueza.</li>
                        <li class="text-justify"><i class="fa fa-check-square-o"></i> Promover el desarrollo del turismo en las comunidades, generando beneficios económicos para mejorar la calidad de vida de sus habitantes.</li>
                    </ul>

                </div>
                <div class="col-lg-6 pt-5 pt-lg-0">
                    <img class="mt-5" src="{{asset('web/img/about.jpg')}}" alt="">
                    <img class="mt-5" src="{{asset('web/img/about.jpg')}}" alt="">
                    <img class="mt-5" src="{{asset('web/img/about.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </section>

@stop
