@extends('layouts.app')
@section('title', __('Bienvenidos'))
@section('content')


    <head>
        <script
        defer
        src = "https://app.embed.im/snow.js"></script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"&amp;gt;>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bebas+Neue:wght@700&display=swap">

        <!-- Bootstrap core CSS -->
        <link href="template/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


        <!-- Additional CSS Files -->
        <link rel="stylesheet" href="template/assets/css/fontawesome.css">
        <link rel="stylesheet" href="template/assets/css/templatemo-cyborg-gaming.css">
        <link rel="stylesheet" href="template/assets/css/animate.css">
        <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    </head>

    <body>


        <header class="header-area header-sticky">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <nav class="main-nav">
                            <!-- ***** Logo Start ***** -->
                            <img src="img/gamerfest.png" alt="GamerFest" style="width:auto; height:120px;margin-right:250px;">
                            <ul class="nav">
                                <li><a href="/" class="active" style="font-size: 20px;">Inicio</a></li>
                                <li><a href="http://127.0.0.1:8000/login" style="font-size: 20px;">Login</a></li>
                                <li><a href="http://127.0.0.1:8000/register" style="font-size: 20px;">Registrarse</a></li>
                                <li style="display: none;"><a href="/"></a></li>
                            </ul>
                            <a class='menu-trigger'></a>
                                <span>Menu</span>
                            </a>
                            <!-- ***** Menu End ***** -->
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!-- ***** Header Area End ***** -->

        <div class="container my-4">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-content">

                        <div class="main-banner">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="header-text">
                                        <h6>Bienvenido a</h6>
                                        <h4><em>Gamer Fest</em> el evento esports mas grande del centro del pais </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ***** Banner End ***** -->

                        <!-- ***** Most Popular Start ***** -->
                        <div class="most-popular">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="heading-section" style="text-align:center;">
                                        <h4 style="font-size: 28px;"><em>Listado de juegos</em> Individuales </h4>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="item">
                                                <a href="#"><img src="template/assets/images/just_dance.png" alt=""></a>
                                                <h4>Just Dance<br><span>Bailes</span></h4>
                                                <ul>
                                                    <li><i class="fa fa-money-bill"></i> 5</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="item">
                                                <a href="#"><img src="template/assets/images/popular-07.png" alt=""></a>
                                                <h4>Fifa<br><span>Deportes</span></h4>
                                                <ul>
                                                    <li><i class="fa fa-money-bill"></i> 5</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="item">
                                                <a href="#"><img src="/template/assets/images/popular-08.png" alt=""></a>
                                                <h4>Mario Kart<br><span>Carreras</span></h4>
                                                <ul>
                                                    <li><i class="fa fa-money-bill"></i> 5</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="item">
                                                <a href="#"><img src="/template/assets/images/popular-04.png" alt=""></a>
                                                <h4>Smash Bros<br><span>Peleas</span></h4>
                                                <ul>
                                                    <li><i class="fa fa-money-bill"></i> 5</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="item">
                                                <div class="item inner-item">
                                                    <a href="#"><img src="/template/assets/images/fortnite.png" alt=""></a>
                                                    <h4>Fortnite<br><span>Battle Royal</span></h4>
                                                    <ul>
                                                        <li><i class="fa fa-money-bill"></i> 5</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="item">
                                                <a href="#"><img src="template/assets/images/popular-05.png" alt=""></a>
                                                <h4>Free fire<br><span>Battle Royal</span></h4>
                                                <ul>
                                                    <li><i class="fa fa-money-bill"></i> 5</li>
                                                </ul>
                                                </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="item">
                                                <a href="#"><img src="template/assets/images/popular-02.png" alt=""></a>
                                                <h4>Clash Royale<br><span>Estrategia</span></h4>
                                                <ul>
                                                    <li><i class="fa fa-money-bill"></i> 5</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="item">
                                                <a href="#"><img src="template/assets/images/tenkaichi.png" alt=""></a>
                                                <h4>Dragon Ball Budokai <br><span>Peleas</span></h4>
                                                <ul>
                                                    <li><i class="fa fa-money-bill"></i> 5</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="most-popular">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="heading-section" style="text-align:center;">
                                        <h4 style="font-size: 28px;"><em>Listado de juegos</em> Grupales </h4>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="item">
                                                <a href="#"><img src="template/assets/images/popular-03.png" alt=""></a>
                                                <h4>Dota 2<br><span>Estrategia</span></h4>
                                                <ul>
                                                    <li><i class="fa fa-money-bill"></i> 25</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="item">
                                                <a href="#"><img src="template/assets/images/LOL_2.png" alt=""></a>
                                                <h4>LOL<br><span>Estrategia</span></h4>
                                                <ul>
                                                    <li><i class="fa fa-money-bill"></i> 25</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="item">
                                                <a href="#"><img src="/template/assets/images/popular-01.png" alt=""></a>
                                                <h4>Valorant<br><span>Shooter</span></h4>
                                                <ul>
                                                    <li><i class="fa fa-money-bill"></i> 25</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="most-popular" style="text-align:center;margin-left: auto">
                            <div class="row" >
                                <div class="col-3"></div>
                                <div class="col-6">
                                    <div class="heading-section">
                                        <h4 style="font-size: 28px;"><em>Ubicación</em> del evento </h4>
                                    </div>
                                        <div class="item" style="text-align:center;margin-left: auto; margin-right: auto;">
                                            <div class="row" style="text-align:center;margin-left: auto; margin-right: auto;">
                                                <div class="col-sm-12" style="text-align:center; margin-left: auto; margin-right: auto;">
                                                    <div class="" style="text-align:center;margin-left: auto; margin-right: auto;">
                                                        <iframe
                                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1350.6032121715434!2d-78.58631550355919!3d-0.9988007781148552!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d4639e3fb9755f%3A0x22fe7f63301b5fee!2sESPE%20-%20Campus%20Belisario%20Quevedo!5e0!3m2!1ses!2sec!4v1671309884965!5m2!1ses!2sec"
                                                            width="400" height="400" style="border:0;"
                                                            allowfullscreen="" loading="lazy"
                                                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="most-popular">
                            <div class="row" >
                                <div class="col-3"></div>
                                <div class="col-6">
                                    <div class="heading-section" style="text-align:center;">
                                        <h4 style="font-size: 28px;"><em>Concurso</em> de videojuegos </h4>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="most-popular">
                            <div class="row" >
                                <div class="col-3"></div>
                                <div class="col-6">
                                    <div class="heading-section" style="text-align:center;">
                                        <h4 style="font-size: 28px;"><em>Concurso</em> de cosplays </h4>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="most-popular">
                            <div class="row" >
                                <div class="col-3"></div>
                                <div class="col-6">
                                    <div class="heading-section" style="text-align:center;">
                                        <h4 style="font-size: 28px;"><em>Sponsors</em> del evento </h4>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
            <section class="">
        <!-- Footer -->
        <footer class="text-white text-center" style="background-color: rgba(60,60,60, 0.2);">
            <!-- Grid container -->
            <div class="container p-4">
                <!--Grid row-->
                <div class="row">
                    <!--Grid column-->
                    <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Justificaciones</h5>

                        <p>
                            Cabe recalcar que aquellas personas que se inscriban en cualquiera de los
                            juegos disponibles en el evento, recibirán un certificado que podrán usar
                            para justificar sus faltas en las clases que pierdan a causa del evento.
                        </p>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Reglamento</h5>
                        <br>
                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="pdf/Clash_Royale.pdf" class="text-white" target="_blank" title="Juego para Móviles">Clash Royale</a>
                            </li>
                            <br>
                            <li>
                                <a href="pdf/Dota2.pdf" class="text-white" target="_blank" title="Juego para Computadoras">Dota 2</a>
                            </li>
                            <br>
                            <li>
                                <a href="pdf/Drabon_ball.pdf" class="text-white" target="_blank" title="Juego de Play Station">Dragon Ball Z</a>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-2">Contactos</h6>
                        <a>
                            <i class="fas fa-envelope "></i>
                            Joan Velasco  joanvelasco202@gmail.com
                        </a>
                        <br>
                        <a>
                            <i class="fas fa-envelope "></i>
                            Diego Tutin   diegotutin3255@gmail.com
                        </a>
                        <br>
                        <a>
                            <i class="fas fa-envelope "></i>
                            Jordan Talahua  jordantalahua@gmail.com
                        </a>
                        <br>
                        <a>
                            <i class="fas fa-envelope "></i>
                            Oscar Tenorio   darwintz2.0@gmail.com
                        </a>
                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->
            </div>
            <!-- Grid container -->

            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: black;">
                © 2023 Copyright:
                <a class="text-white">Ultimate Developers</a>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->
    </section>
        <!-- Scripts -->
        <!-- Bootstrap core JavaScript -->
        <script src="template/vendor/jquery/jquery.min.js"></script>
        <script src="template/vendor/bootstrap/js/bootstrap.min.js"></script>

        <script src="template/assets/js/isotope.min.js"></script>
        <script src="template/assets/js/tabs.js"></script>
        <script src="template/assets/js/popup.js"></script>
        <script src="template/assets/js/custom.js"></script>


    </body>

@endsection
