<!DOCTYPE html>
<html lang="en">
<head>
	<title>SendaSur - @yield('title')</title>
	<meta charset="UTF-8">
	<meta name="description" content="Unica University Template">
	<meta name="keywords" content="event, unica, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{asset('web/css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('web/css/font-awesome.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('web/css/themify-icons.css')}}"/>
	<link rel="stylesheet" href="{{asset('web/css/magnific-popup.css')}}"/>
	<link rel="stylesheet" href="{{asset('web/css/animate.css')}}"/>
	<link rel="stylesheet" href="{{asset('web/css/owl.carousel.css')}}"/>
	<link rel="stylesheet" href="{{asset('web/css/style.css')}}"/>

    <style>
        input[type='date'] , input[type='number']{
            width: 100%;
            border: 1px solid #cccccc;
            font-size: 14px;
            padding: 18px 20px;
            margin-bottom: 30px;
            border-radius: 2px;
        }

        @media only screen and (max-width: 767px) {
            .site-breadcrumb {
                padding: 20px 10px !important;
            }
        }
    </style>



	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>

    <!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

    <!-- header section -->
    <header class="header-section">
        <div class="container d-flex align-items-center justify-content-between">
            <a href="{{asset('/')}}" class="site-logo"><img src="{{asset('logo.png')}}" width="290px" height="80px" alt=""></a>
            <div class="nav-switch">
                <i class="fa fa-bars"></i>
            </div>
            <div class="header-info">
                <div class="hf-item">
                    <i class="fa fa-phone"></i>
                    <p><span>Tel:</span> (967) 101 9387</p>
                </div>
                <div class="hf-item">
                    <i class="fa fa-map-marker"></i>
                    <p><span>Encu??ntranos en:</span>San Cristobal de las Casas Chiapas M??xico CP.29230</p>
                </div>
            </div>
        </div>
    </header>
    <!-- header section end-->


    <!-- Header section  -->
    <nav class="nav-section">
        <div class="container">

            <ul class="main-menu">
                <li class="{{request()->is('/') ? 'active' : ''}}"><a href="{{asset('/')}}">Inicio</a></li>
                <li class="{{request()->is('nosotros') ? 'active' : ''}}"><a href="{{asset('nosotros')}}">Acerca de</a></li>
                <li><a href="{{asset('/servicios')}}">Servicios</a></li>
                <li class="{{request()->is('centros_ecoturisticos') ? 'active' : ''}}"><a href="{{asset('/centros_ecoturisticos')}}">Centros ecotur??sticos</a></li>
                <li class="{{request()->is('socios') ? 'active' : ''}}"><a href="{{asset('socios')}}">Socios</a></li>
                <li class="{{request()->is('contacto') ? 'active' : ''}}"><a href="{{asset('contacto')}}">Contacto</a></li>
            </ul>
        </div>
    </nav>

    @yield('content')



    {{-- <!-- Hero section -->
    <section class="hero-section">
        <div class="hero-slider owl-carousel">
            <div class="hs-item set-bg" data-setbg="{{asset('web/img/hero-slider/1.jpg')}}">
                <div class="hs-text">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="hs-subtitle">Award Winning UNIVERSITY</div>
                                <h2 class="hs-title">An investment in knowledge pays the best interest.</h2>
                                <p class="hs-des">Education is not just about going to school and getting a degree. It's about widening your<br> knowledge and absorbing the truth about life. Knowledge is power.</p>
                                <div class="site-btn">GET STARTED</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hs-item set-bg" data-setbg="{{asset('web/img/hero-slider/2.jpg')}}">
                <div class="hs-text">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="hs-subtitle">Award Winning UNIVERSITY</div>
                                <h2 class="hs-title">An investment in knowledge pays the best interest.</h2>
                                <p class="hs-des">Education is not just about going to school and getting a degree. It's about widening your<br> knowledge and absorbing the truth about life. Knowledge is power.</p>
                                <div class="site-btn">GET STARTED</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero section end -->


    <!-- Counter section  -->
    <section class="counter-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-6">
                    <div class="big-icon">
                        <i class="fa fa-graduation-cap"></i>
                    </div>
                    <div class="counter-content">
                        <h2>NEXT COUSRE: Sales & Marketing Alignment</h2>
                        <p><i class="fa fa-calendar-o"></i>07:00 PM - 09:00 PM</p>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="counter">
                        <div class="counter-item"><h4>20</h4>Days</div>
                        <div class="counter-item"><h4>08</h4>Hrs</div>
                        <div class="counter-item"><h4>40</h4>Mins</div>
                        <div class="counter-item"><h4>56</h4>secs</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Counter section end -->


    <!-- Services section -->
    <section class="service-section spad">
        <div class="container services">
            <div class="section-title text-center">
                <h3>OUR SERVICES</h3>
                <p>We provides the opportunity to prepare for life</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 service-item">
                    <div class="service-icon">
                        <img src="{{asset('web/img/services-icons/1.png')}}" alt="1">
                    </div>
                    <div class="service-content">
                        <h4>Art Studio</h4>
                        <p>Lorem ipsum dolor sitdo amet, consectetur dont adipis elit. Vivamus interdum ultrices augue. Aenean dos cursus lania.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 service-item">
                    <div class="service-icon">
                        <img src="{{asset('web/img/services-icons/2.png')}}" alt="1">
                    </div>
                    <div class="service-content">
                        <h4>Great Facility</h4>
                        <p>Lorem ipsum dolor sitdo amet, consectetur dont adipis elit. Vivamus interdum ultrices augue. Aenean dos cursus lania.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 service-item">
                    <div class="service-icon">
                        <img src="{{asset('web/img/services-icons/3.png')}}" alt="1">
                    </div>
                    <div class="service-content">
                        <h4>Activity Hub</h4>
                        <p>Lorem ipsum dolor sitdo amet, consectetur dont adipis elit. Vivamus interdum ultrices augue. Aenean dos cursus lania.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 service-item">
                    <div class="service-icon">
                        <img src="{{asset('web/img/services-icons/4.png')}}" alt="1">
                    </div>
                    <div class="service-content">
                        <h4>Fully Qualified</h4>
                        <p>Lorem ipsum dolor sitdo amet, consectetur dont adipis elit. Vivamus interdum ultrices augue. Aenean dos cursus lania.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 service-item">
                    <div class="service-icon">
                        <img src="{{asset('web/img/services-icons/5.png')}}" alt="1">
                    </div>
                    <div class="service-content">
                        <h4>Flexible Schedule</h4>
                        <p>Lorem ipsum dolor sitdo amet, consectetur dont adipis elit. Vivamus interdum ultrices augue. Aenean dos cursus lania.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 service-item">
                    <div class="service-icon">
                        <img src="{{asset('web/img/services-icons/6.png')}}" alt="1">
                    </div>
                    <div class="service-content">
                        <h4>Chemistry Lab</h4>
                        <p>Lorem ipsum dolor sitdo amet, consectetur dont adipis elit. Vivamus interdum ultrices augue. Aenean dos cursus lania.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services section end -->


    <!-- Enroll section -->
    <section class="enroll-section spad set-bg" data-setbg="{{asset('web/img/enroll-bg.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-title text-white">
                        <h3>ENROLLMENT</h3>
                        <p>Get started with us to explore the exciting</p>
                    </div>
                    <div class="enroll-list text-white">
                        <div class="enroll-list-item">
                            <span>1</span>
                            <h5>Contact</h5>
                            <p>Lorem ipsum dolor sitdo amet, consectetur dont adipis elit. Vivamus interdum ultrices augue.</p>
                        </div>
                        <div class="enroll-list-item">
                            <span>2</span>
                            <h5>Consulting</h5>
                            <p>Lorem ipsum dolor sitdo amet, consectetur dont adipis elit. Vivamus interdum ultrices augue.</p>
                        </div>
                        <div class="enroll-list-item">
                            <span>3</span>
                            <h5>Register</h5>
                            <p>Lorem ipsum dolor sitdo amet, consectetur dont adipis elit. Vivamus interdum ultrices augue.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1 p-lg-0 p-4">
                    <img src="{{asset('web/img/encroll-img.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Enroll section end -->


    <!-- Courses section -->
    <section class="courses-section spad">
        <div class="container">
            <div class="section-title text-center">
                <h3>OUR COURSES</h3>
                <p>Building a better world, one course at a time</p>
            </div>
            <div class="row">
                <!-- course item -->
                <div class="col-lg-4 col-md-6 course-item">
                    <div class="course-thumb">
                        <img src="{{asset('web/img/course/1.jpg')}}" alt="">
                        <div class="course-cat">
                            <span>BUSINESS</span>
                        </div>
                    </div>
                    <div class="course-info">
                        <div class="date"><i class="fa fa-clock-o"></i> 22 Mar 2018</div>
                        <h4>Certificate Course in Writing<br>for a Global Market</h4>
                        <h4 class="cource-price">$100<span>/month</span></h4>
                    </div>
                </div>
                <!-- course item -->
                <div class="col-lg-4 col-md-6 course-item">
                    <div class="course-thumb">
                        <img src="{{asset('web/img/course/2.jpg')}}" alt="">
                        <div class="course-cat">
                            <span>Marketing</span>
                        </div>
                    </div>
                    <div class="course-info">
                        <div class="date"><i class="fa fa-clock-o"></i> 22 Mar 2018</div>
                        <h4>Google AdWords: Get More<br> Customers with Search Marketing </h4>
                        <h4 class="cource-price">$150<span>/month</span></h4>
                    </div>
                </div>
                <!-- course item -->
                <div class="col-lg-4 col-md-6 course-item">
                    <div class="course-thumb">
                        <img src="{{asset('web/img/course/3.jpg')}}" alt="">
                        <div class="course-cat">
                            <span>DESIGN</span>
                        </div>
                    </div>
                    <div class="course-info">
                        <div class="date"><i class="fa fa-clock-o"></i> 22 Mar 2018</div>
                        <h4>The Ultimate Drawing Course<br> Beginner to Advanced</h4>
                        <h4 class="cource-price">$180<span>/month</span></h4>
                    </div>
                </div>
                <!-- course item -->
                <div class="col-lg-4 col-md-6 course-item">
                    <div class="course-thumb">
                        <img src="{{asset('web/img/course/4.jpg')}}" alt="">
                        <div class="course-cat">
                            <span>DATABASE</span>
                        </div>
                    </div>
                    <div class="course-info">
                        <div class="date"><i class="fa fa-clock-o"></i> 22 Mar 2018</div>
                        <h4>Ultimate MySQL Bootcamp: Go from SQL Beginner to Expert</h4>
                        <h4 class="cource-price">$150<span>/month</span></h4>
                    </div>
                </div>
                <!-- course item -->
                <div class="col-lg-4 col-md-6 course-item">
                    <div class="course-thumb">
                        <img src="{{asset('web/img/course/5.jpg')}}" alt="">
                        <div class="course-cat">
                            <span>PROGRAM</span>
                        </div>
                    </div>
                    <div class="course-info">
                        <div class="date"><i class="fa fa-clock-o"></i> 22 Mar 2018</div>
                        <h4>Web Developer Bootcamp<br>Make web  applications</h4>
                        <h4 class="cource-price">$250<span>/month</span></h4>
                    </div>
                </div>
                <!-- course item -->
                <div class="col-lg-4 col-md-6 course-item">
                    <div class="course-thumb">
                        <img src="{{asset('web/img/course/6.jpg')}}" alt="">
                        <div class="course-cat">
                            <span>BUSINESS</span>
                        </div>
                    </div>
                    <div class="course-info">
                        <div class="date"><i class="fa fa-clock-o"></i> 22 Mar 2018</div>
                        <h4>How to Start an Amazon<br>FBA Store on a Tight Budget</h4>
                        <h4 class="cource-price">$150<span>/month</span></h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Courses section end-->


    <!-- Fact section -->
    <section class="fact-section spad set-bg" data-setbg="{{asset('web/img/fact-bg.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3 fact">
                    <div class="fact-icon">
                        <i class="ti-crown"></i>
                    </div>
                    <div class="fact-text">
                        <h2>50</h2>
                        <p>YEARS</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 fact">
                    <div class="fact-icon">
                        <i class="ti-briefcase"></i>
                    </div>
                    <div class="fact-text">
                        <h2>80</h2>
                        <p>TEACHERS</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 fact">
                    <div class="fact-icon">
                        <i class="ti-user"></i>
                    </div>
                    <div class="fact-text">
                        <h2>500</h2>
                        <p>STUDENTS</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 fact">
                    <div class="fact-icon">
                        <i class="ti-pencil-alt"></i>
                    </div>
                    <div class="fact-text">
                        <h2>800+</h2>
                        <p>LESSONS</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Fact section end-->


    <!-- Event section -->
    <section class="event-section spad">
        <div class="container">
            <div class="section-title text-center">
                <h3>OUR EVENTS</h3>
                <p>Our department  initiated a series of events</p>
            </div>
            <div class="row">
                <div class="col-md-6 event-item">
                    <div class="event-thumb">
                        <img src="{{asset('web/img/event/1.jpg')}}" alt="">
                        <div class="event-date">
                            <span>24 Mar 2018</span>
                        </div>
                    </div>
                    <div class="event-info">
                        <h4>The dos and don'ts of writing a personal<br>statement for languages</h4>
                        <p><i class="fa fa-calendar-o"></i> 08:00 AM - 10:00 AM <i class="fa fa-map-marker"></i> Center Building, Block A</p>
                        <a href="" class="event-readmore">REGISTER <i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 event-item">
                    <div class="event-thumb">
                        <img src="{{asset('web/img/event/2.jpg')}}" alt="">
                        <div class="event-date">
                            <span>22 Mar 2018</span>
                        </div>
                    </div>
                    <div class="event-info">
                        <h4>University interview tips:<br>confidence won't make up for flannel</h4>
                        <p><i class="fa fa-calendar-o"></i> 08:00 AM - 10:00 AM <i class="fa fa-map-marker"></i> Center Building, Block A</p>
                        <a href="" class="event-readmore">REGISTER <i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Event section end -->


    <!-- Gallery section -->
    <div class="gallery-section">
        <div class="gallery">
            <div class="grid-sizer"></div>
            <div class="gallery-item gi-big set-bg" data-setbg="{{asset('web/img/gallery/1.jpg')}}">
                <a class="img-popup" href="{{asset('web/img/gallery/1.jpg')}}"><i class="ti-plus"></i></a>
            </div>
            <div class="gallery-item set-bg" data-setbg="img/gallery/2.jpg')}}">
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
    <!-- Gallery section -->


    <!-- Blog section -->
    <section class="blog-section spad">
        <div class="container">
            <div class="section-title text-center">
                <h3>LATEST NEWS</h3>
                <p>Get latest breaking news & top stories today</p>
            </div>
            <div class="row">
                <div class="col-xl-6">
                    <div class="blog-item">
                        <div class="blog-thumb set-bg" data-setbg="{{asset('web/img/blog/1.jpg')}}"></div>
                        <div class="blog-content">
                            <h4>Parents who try to be their children???s best friends</h4>
                            <div class="blog-meta">
                                <span><i class="fa fa-calendar-o"></i> 24 Mar 2018</span>
                                <span><i class="fa fa-user"></i> Owen Wilson</span>
                            </div>
                            <p>Integer luctus diam ac scerisque consectetur. Vimus dot euismod neganeco lacus sit amet. Aenean interdus mid vitae sed accumsan...</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="blog-item">
                        <div class="blog-thumb set-bg" data-setbg="{{asset('web/img/blog/2.jpg')}}"></div>
                        <div class="blog-content">
                            <h4>Graduations could be delayed as external examiners</h4>
                            <div class="blog-meta">
                                <span><i class="fa fa-calendar-o"></i> 23 Mar 2018</span>
                                <span><i class="fa fa-user"></i> Owen Wilson</span>
                            </div>
                            <p>Integer luctus diam ac scerisque consectetur. Vimus dot euismod neganeco lacus sit amet. Aenean interdus mid vitae sed accumsan...</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="blog-item">
                        <div class="blog-thumb set-bg" data-setbg="{{asset('web/img/blog/3.jpg')}}"></div>
                        <div class="blog-content">
                            <h4>Private schools adopt a Ucas style application system</h4>
                            <div class="blog-meta">
                                <span><i class="fa fa-calendar-o"></i> 24 Mar 2018</span>
                                <span><i class="fa fa-user"></i> Owen Wilson</span>
                            </div>
                            <p>Integer luctus diam ac scerisque consectetur. Vimus dot euismod neganeco lacus sit amet. Aenean interdus mid vitae sed accumsan...</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="blog-item">
                        <div class="blog-thumb set-bg" data-setbg="{{asset('web/img/blog/4.jpg')}}"></div>
                        <div class="blog-content">
                            <h4>Cambridge digs in at the top of university league table</h4>
                            <div class="blog-meta">
                                <span><i class="fa fa-calendar-o"></i> 23 Mar 2018</span>
                                <span><i class="fa fa-user"></i> Owen Wilson</span>
                            </div>
                            <p>Integer luctus diam ac scerisque consectetur. Vimus dot euismod neganeco lacus sit amet. Aenean interdus mid vitae sed accumsan...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog section -->


    <!-- Newsletter section -->
    <section class="newsletter-section">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-lg-7">
                    <div class="section-title mb-md-0">
                    <h3>NEWSLETTER</h3>
                    <p>Subscribe and get the latest news and useful tips, advice and best offer.</p>
                </div>
                </div>
                <div class="col-md-7 col-lg-5">
                    <form class="newsletter">
                        <input type="text" placeholder="Enter your email">
                        <button class="site-btn">SUBSCRIBE</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Newsletter section end -->	--}}



    <!-- Footer section -->
    <footer class="footer-section">
        <div class="container footer-top">
            <div class="row">
                <!-- widget -->
                <div class="col-sm-6 col-lg-3 footer-widget">
                    <div class="about-widget">
                        <img src="{{asset('logo.png')}}" alt="">
                        <p>Sendasur est?? conformada por 11 centros ecotur??sticos comunitarios y una transportadora tur??stica.</p>
                        <div class="social pt-1">
                            <a href="https://www.facebook.com/SendaSur.Chiapas"><i class="fa fa-facebook-square"></i></a>
                            <a href="https://www.instagram.com/sendasur_chiapas/"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <!-- widget -->
                <div class="col-sm-6 col-lg-3 footer-widget">
                    <h6 class="fw-title">ENLACES</h6>
                    <div class="dobule-link">
                        <ul>
                            <li><a href="{{asset('/')}}">Inicio</a></li>
                            <li><a href="{{asset('/nosotros')}}">Nosotros</a></li>
                            <li><a href="{{asset('/servicios')}}">Servicios</a></li>
                        </ul>
                        <ul>
                            <li><a href="{{asset('/centros_ecoturisticos')}}">Centros Ecotur??sticos</a></li>
                            <li><a href="{{asset('/socios')}}">Socios</a></li>
                            <li><a href="{{asset('/contacto')}}">Contacto</a></li>
                        </ul>
                    </div>
                </div>
                <!-- widget -->
                <div class="col-sm-6 col-lg-3 footer-widget">
                    <h6 class="fw-title">CENTROS ECOTUR??STICOS</h6>
                    <ul class="recent-post">
                        <li>
                            <p>Localidad Lacanj?? Chansayab</p>
                        </li>
                        <li>
                            <p>Localidad Nueva Palestina</p>
                        </li>
                        <li>
                            <p>Localidad Frontera Corozal</p>
                        </li>
                        <li><a href="{{asset('/centros_ecoturisticos')}}" class="text-light">Ver m??s</a></li>
                    </ul>
                </div>
                <!-- widget -->
                <div class="col-sm-6 col-lg-3 footer-widget">
                    <h6 class="fw-title">CONTACTO</h6>
                    <ul class="contact">
                        <li><p><i class="fa fa-map-marker"></i> Av. Almolonga 28 A Entre la Francisco Le??n y Rub??n Ramos Barrio de Santa Lucia C.p 29250 San Cristobal de las Casas, Chiapas.</p></li>
                        <li><p><i class="fa fa-phone"></i> (967) 101 9387 </p></li>
                        <li><p><i class="fa fa-envelope"></i> contacto@sendasur.org</p></li>
                        <li><p><i class="fa fa-clock-o"></i> Lunes - Sabado: 09 AM - 02 PM y 4:00pm - 8:00PM
                        </p></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- copyright -->
        <div class="copyright">
            <div class="container text-light">
                Copyright ?? 2021 SendaSur
            </div>
        </div>
    </footer>



	<!-- Footer section end-->



	<!--====== Javascripts & Jquery ======-->
	<script src="{{asset('web/js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('web/js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('web/js/jquery.countdown.js')}}"></script>
	<script src="{{asset('web/js/masonry.pkgd.min.js')}}"></script>
	<script src="{{asset('web/js/magnific-popup.min.js')}}"></script>
	<script src="{{asset('web/js/main.js')}}"></script>

    <script src="{{ asset('js/app.js') }}" defer></script>

</body>
</html>
