@extends('layouts.app')
@section('title', __('Bienvenidos'))
@section('content')


<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="template/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="template/assets/css/fontawesome.css">
    <link rel="stylesheet" href="template/assets/css/templatemo-cyborg-gaming.css">
    <link rel="stylesheet" href="template/assets/css/owl.css">
    <link rel="stylesheet" href="template/assets/css/animate.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
</head>


<body>


    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <img src="img/gamerfest.png" alt="GamerFest"
                            style="width:auto; height:120px;margin-right:250px;">
                        <ul class="nav">
                            <li><a href="/" class="active">Inicio</a></li>
                            <li><a href="http://127.0.0.1:8000/login">Login</a></li>
                            <li><a href="http://127.0.0.1:8000/register">Registrarse</a></li>
                            <li><a href="/"></a></li>
                        </ul>
                        <a class='menu-trigger'>
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
                                <div class="heading-section">
                                    <h4><em>Juegos más populares</em> Ahora Mismo </h4>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="item">
                                            <img src="template/assets/images/popular-01.png" alt="">
                                            <h4>Valorant<br><span>Shooter</span></h4>
                                            <ul>
                                                <li><i class="fa fa-star"></i> 4.8</li>
                                                <li><i class="fa fa-download"></i> 2.3M</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="item">
                                            <img src="template/assets/images/popular-02.png" alt="">
                                            <h4>Clash Royale<br><span>Estrategia</span></h4>
                                            <ul>
                                                <li><i class="fa fa-star"></i> 4.8</li>
                                                <li><i class="fa fa-download"></i> 2.3M</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="item">
                                            <img src="/template/assets/images/popular-03.png" alt="">
                                            <h4>Dota2<br><span>Steam</span></h4>
                                            <ul>
                                                <li><i class="fa fa-star"></i> 4.8</li>
                                                <li><i class="fa fa-download"></i> 2.3M</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="item">
                                            <img src="/template/assets/images/popular-04.png" alt="">
                                            <h4>Super Smash Bros<br><span>Crossover</span></h4>
                                            <ul>
                                                <li><i class="fa fa-star"></i> 4.8</li>
                                                <li><i class="fa fa-download"></i> 2.3M</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="item">
                                            <div class="item inner-item">
                                                <img src="/template/assets/images/popular-05.png" alt="">
                                                <h4>Free Fire<br><span>Acción</span></h4>
                                                <ul>
                                                    <li><i class="fa fa-star"></i> 4.8</li>
                                                    <li><i class="fa fa-download"></i> 2.3M</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="item">
                                            <img src="template/assets/images/popular-06.png" alt="">
                                            <h4>Call of Duty<br><span>Acción</span></h4>
                                            <ul>
                                                <li><i class="fa fa-star"></i> 4.8</li>
                                                <li><i class="fa fa-download"></i> 2.3M</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="item">
                                            <img src="template/assets/images/popular-07.png" alt="">
                                            <h4>Fifa 23<br><span>Deportes</span></h4>
                                            <ul>
                                                <li><i class="fa fa-star"></i> 4.8</li>
                                                <li><i class="fa fa-download"></i> 2.3M</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="item">
                                            <img src="template/assets/images/popular-08.png" alt="">
                                            <h4>Crash Team Racing <br><span>Carreras</span></h4>
                                            <ul>
                                                <li><i class="fa fa-star"></i> 4.8</li>
                                                <li><i class="fa fa-download"></i> 2.3M</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="most-popular">
                        <div class="row">
                            <div class="col-3"></div>
                            <div class="col-6">
                                <div class="heading-section">
                                    <h4><em>Ubicación</em> del evento </h4>
                                </div>
                                <div class="item">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="item inner-item">
                                                <iframe
                                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1350.6032121715434!2d-78.58631550355919!3d-0.9988007781148552!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d4639e3fb9755f%3A0x22fe7f63301b5fee!2sESPE%20-%20Campus%20Belisario%20Quevedo!5e0!3m2!1ses!2sec!4v1671309884965!5m2!1ses!2sec"
                                                    width="400" height="400" style="border:0;" allowfullscreen=""
                                                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="gaming-library">
                        <div class="col-lg-12">
                            <div class="heading-section">
                                <h4><em>Biblioteca</em> de Juegos</h4>
                            </div>
                            <div class="item">
                                <ul>
                                    <li><img src="assets/images/game-01.jpg" alt="" class="templatemo-item">
                                    </li>
                                    <li>
                                        <h4>Dota 2</h4><span>MOBA</span>
                                    </li>
                                    <li>
                                        <h4>Tipo de juego</h4><span>Enfrentamiento multijugador</span>
                                    </li>
                                    <li>
                                        <h4>Jugadores</h4><span>5v5</span>
                                    </li>
                                    <li>
                                        <h4>Actualmente</h4><span>Disponible</span>
                                    </li>
                                    <li>
                                        <div class="main-border-button"><a href="https://www.dota2.com/home"
                                                target="_blank">Información</a></div>
                                    </li>
                                </ul>
                            </div>
                            <div class="item">
                                <ul>
                                    <li><img src="assets/images/game-02.jpg" alt="" class="templatemo-item">
                                    </li>
                                    <li>
                                        <h4>Fortnite</h4><span>Battle Royal</span>
                                    </li>
                                    <li>
                                        <h4>Tipo de juego</h4><span>Enfrentamiento Royale</span>
                                    </li>
                                    <li>
                                        <h4>Jugadores</h4><span>5v5</span>
                                    </li>
                                    <li>
                                        <h4>Actualmente</h4><span>Disponible</span>
                                    </li>
                                    <li>
                                        <div class="main-border-button"><a
                                                href="https://www.epicgames.com/fortnite/es-ES/home"
                                                target="_blank">Información</a></div>
                                    </li>
                                </ul>
                            </div>
                            <div class="item last-item">
                                <ul>
                                    <li><img src="assets/images/game-03.jpg" alt="" class="templatemo-item">
                                    </li>
                                    <li>
                                        <h4>CS-GO</h4><span>MOBA</span>
                                    </li>
                                    <li>
                                        <h4>Tipo de juego</h4><span>Shooter primera persona</span>
                                    </li>
                                    <li>
                                        <h4>Jugadores</h4><span>5v5</span>
                                    </li>
                                    <li>
                                        <h4>Actualmente</h4><span>Disponible</span>
                                    </li>
                                    <li>
                                        <div class="main-border-button"><a href="https://blog.counter-strike.net"
                                                target="_blank">Información</a></div>
                                    </li>
                                </ul>
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
                        <h5 class="text-uppercase">A cerca de la página</h5>

                        <p>
                            Esta página web fue creada como proyecto de parcial para la materia de
                            programación web avanzada, y tiene como finalidad, brindar a la Universidad un sistema
                            capaz de administrar el evento GamerFest producido por la carrera de Software.
                        </p>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Reglamento</h5>
                        <br>
                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="pdf/Clash_Royale.pdf" class="text-white" target="_blank">Clash Royale</a>
                            </li>
                            <br>
                            <li>
                                <a href="pdf/Dota2.pdf" class="text-white" target="_blank">Dota 2</a>
                            </li>
                            <br>
                            <li>
                                <a href="pdf/Drabon_ball.pdf" class="text-white" target="_blank">Dragon Ball Z</a>
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
    <script src="template/assets/js/owl-carousel.js"></script>
    <script src="template/assets/js/tabs.js"></script>
    <script src="template/assets/js/popup.js"></script>
    <script src="template/assets/js/custom.js"></script>


</body>

@endsection