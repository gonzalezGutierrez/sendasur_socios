<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Material Design for Bootstrap</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="{{asset('admin/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/mdb.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/custom.css')}}">
</head>

<body>


    <header id="header" class="mb-header">
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark mdb-color darken-3 scrolling-navbar">
            <div class="container">
                <a class="navbar-brand text-uppercase" href="{{asset('/')}}">
                    <img src="{{asset('admin/img/travel.png')}}" class="logo-avatar" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">

                    </ul>
                    <ul class="navbar-nav nav-flex-icons">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="{{asset('admin/')}}">
                                    <i class="fas fa-home"></i> Inicio <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{asset('admin/centros_ecoturisticos?type=socio')}}">
                                    <i class="fas fa-home"></i> Socios <span class="sr-only">(current)</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{asset('admin/centros_ecoturisticos?type=colaborador')}}">
                                    <i class="fas fa-home"></i> Colaboradores <span class="sr-only">(current)</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{asset('admin/_logout')}}">
                                    <i class="fas fa-home"></i> Salir <span class="sr-only">(current)</span>
                                </a>
                            </li>
                        </ul>
                    </ul>
                </div>
            </div>

        </nav>
    </header>

    <div class="space-header"></div>
    
    <main class="mt-5">
       @yield('content')
    </main>
   
    
   
    <script src="{{asset('admin/js/jquery.js')}}"></script>
    <script src="{{asset('admin/js/bootstrap.js')}}"></script>
    <script src="{{asset('admin/js/mdb.js')}}"></script>
    
</body>

</html>