@extends('layouts.app')
@section('title', __('Bienvenidos'))
@section('content')


    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
            rel="stylesheet">

        <title>Cyborg - Awesome HTML5 Template</title>

        <!-- Bootstrap core CSS -->
        <link href="template/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


        <!-- Additional CSS Files -->
        <link rel="stylesheet" href="template/assets/css/fontawesome.css">
        <link rel="stylesheet" href="template/assets/css/templatemo-cyborg-gaming.css">
        <link rel="stylesheet" href="template/assets/css/owl.css">
        <link rel="stylesheet" href="template/assets/css/animate.css">
        <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
        <!--

        TemplateMo 579 Cyborg Gaming

        https://templatemo.com/tm-579-cyborg-gaming

        -->
    </head>


    <body>

        <!-- ***** Preloader Start ***** -->
        <div id="js-preloader" class="js-preloader">
            <div class="preloader-inner">
                <span class="dot"></span>
                <div class="dots">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
        <!-- ***** Preloader End ***** -->

        <!-- ***** Header Area Start ***** -->

        <header class="header-area header-sticky">
            <div class="container my-5">
                <div class="row">
                    <div class="col-12">
                        <nav class="main-nav">
                            <!-- ***** Logo Start ***** -->
                            <a href="index.html" class="logo">
                                <img src="assets/images/logo.png" alt="">
                            </a>
                            <!-- ***** Logo End ***** -->
                            <!-- ***** Search End ***** -->

                            <!-- ***** Search End ***** -->
                            <!-- ***** Menu Start ***** -->
                            <ul class="nav">
                                <li><a href="index.html" class="active">Inicio</a></li>
                                <li><a href="browse.html">¿Quines Somos?</a></li>
                                <li><a href="details.html">Información</a></li>
                                <li><a href="streams.html">Tienda</a></li>

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

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-content">

                        <!-- ***** Banner Start ***** -->
                        <div class="main-banner">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="header-text">
                                        <h6>Bienvenido a</h6>
                                        <h4><em>Gamer Fest</em> el evento esports mas grande del centro del pais </h4>
                                        <div class="main-button">
                                            <a href="browse.html">Información</a>
                                        </div>
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
                                        <div class="col-lg-6">
                                            <div class="item">
                                                <div class="row">
                                                    <div class="col-lg-6 col-sm-6">
                                                        <div class="item inner-item">
                                                            <img src="/template/assets/images/popular-05.png" alt="">
                                                            <h4>Free Fire<br><span>Acción</span></h4>
                                                            <ul>
                                                                <li><i class="fa fa-star"></i> 4.8</li>
                                                                <li><i class="fa fa-download"></i> 2.3M</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-sm-6">
                                                        <div class="item">
                                                            <img src="template/assets/images/popular-06.png" alt="">
                                                            <h4>Call of Duty<br><span>Acción</span></h4>
                                                            <ul>
                                                                <li><i class="fa fa-star"></i> 4.8</li>
                                                                <li><i class="fa fa-download"></i> 2.3M</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
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
                                        <div class="col-lg-12">
                                            <div class="main-button">
                                                <a href="browse.html">Descubre más</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ***** Most Popular End ***** -->

                        <!-- ***** Gaming Library Start ***** -->
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
                                            <h4>Dota 2</h4><span>Sandbox</span>
                                        </li>
                                        <li>
                                            <h4>Date Added</h4><span>24/08/2036</span>
                                        </li>
                                        <li>
                                            <h4>Hours Played</h4><span>634 H 22 Mins</span>
                                        </li>
                                        <li>
                                            <h4>Currently</h4><span>Downloaded</span>
                                        </li>
                                        <li>
                                            <div class="main-border-button border-no-active"><a
                                                    href="#">Donwloaded</a></div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="item">
                                    <ul>
                                        <li><img src="assets/images/game-02.jpg" alt="" class="templatemo-item">
                                        </li>
                                        <li>
                                            <h4>Fortnite</h4><span>Sandbox</span>
                                        </li>
                                        <li>
                                            <h4>Date Added</h4><span>22/06/2036</span>
                                        </li>
                                        <li>
                                            <h4>Hours Played</h4><span>740 H 52 Mins</span>
                                        </li>
                                        <li>
                                            <h4>Currently</h4><span>Downloaded</span>
                                        </li>
                                        <li>
                                            <div class="main-border-button"><a href="#">Donwload</a></div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="item last-item">
                                    <ul>
                                        <li><img src="assets/images/game-03.jpg" alt="" class="templatemo-item">
                                        </li>
                                        <li>
                                            <h4>CS-GO</h4><span>Sandbox</span>
                                        </li>
                                        <li>
                                            <h4>Date Added</h4><span>21/04/2036</span>
                                        </li>
                                        <li>
                                            <h4>Hours Played</h4><span>892 H 14 Mins</span>
                                        </li>
                                        <li>
                                            <h4>Currently</h4><span>Downloaded</span>
                                        </li>
                                        <li>
                                            <div class="main-border-button border-no-active"><a
                                                    href="#">Donwloaded</a></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="main-button">
                                    <a href="profile.html">Ver todos los juegos dispinibles</a>
                                </div>
                            </div>
                        </div>
                        <!-- ***** Gaming Library End ***** -->
                    </div>
                </div>
            </div>
        </div>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p>Copyright © 2036 <a href="#">Ultimate Developers</a> Company. All rights reserved.

                        </p>
                    </div>
                </div>
            </div>
        </footer>


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
