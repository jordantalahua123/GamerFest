@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')

    <div class="container">
        <div class="row" style="text-align: center;justify-content: center">
            <div class="card border-primary mb-3" style="max-width: 18rem; margin: 2px 30px 2px;">
                <div class="card-header">Dinero Recaudado</div>
                <div class="card-body text-primary">
                    <h5 class="card-title">100 Inscritos</h5>
                    <br>
                    <strong>$120.50</strong>
                </div>
            </div>
            <div class="card border-secondary mb-3" style="max-width: 18rem; margin: 2px 30px 2px;">
                <div class="card-header">Visitas de la página</div>
                <div class="card-body text-secondary">

                    <h5 class="card-title">
                        <div id="current_date">
                            </p>
                            <script>
                                document.getElementById("current_date").innerHTML = Date();
                            </script>
                    </h5>
                    <p class="card-text"><strong>1200</strong></p>
                </div>
            </div>
            <div class="card border-success mb-3" style="max-width: 18rem; margin: 2px 30px 2px;">
                <div class="card-header">Juegos</div>
                <div class="card-body text-success">
                    <h5 class="card-title">Actualizados</h5>
                    <p class="card-text"><strong>12</strong></p>
                </div>
            </div>
        </div>
        <div class="row" style="text-align: center;justify-content: center">

            <div class="card border-secondary mb-3" style="max-width: 18rem; margin: 2px 30px 2px;">
                <div class="card">
                    <img src="../../../public/img/dota2_social.jpg" alt="Avatar" style="width:100%">
                    <div class="container">
                        <h4><b>Personas en linea</b></h4>
                        <p>Architect & Engineer</p>
                    </div>
                </div>



            </div>
            <div class="card border-danger mb-3" style="max-width: 18rem; margin: 2px 30px 2px;">
                <div class="card-header">Total de Participantes</div>
                <div class="card-body text-danger">
                    <h5 class="card-title">122 Participantes</h5>
                    <br>
                    <strong>$120.50</strong>
                </div>
            </div>
            <div class="card border-success mb-3" style="max-width: 18rem; margin: 2px 30px 2px;">
                <div class="card-header">Participantes Destacados</div>
                <div class="card-body text-success">
                    
                    Ariel<br>Jordan <br>Diego
                    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="card border-light mb-3" style="max-width: 30rem;margin: 2px 30px 2px;">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                        <h5 class="card-title">Light card title</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit perferendis
                            minus nesciunt ex esse deleniti labore distinctio. Ad error corrupti, quibusdam doloremque
                            maxime perspiciatis neque sit illo atque alias maiores.</p>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card border-light mb-3" style="max-width: 25rem ;height= 300; margin: 2px 30px 2px;">
                    <div class="card-header">Ubicación del evento</div>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.2120238450116!2d-78.58828638531446!3d-0.9988702992713614!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d4639e3fb9755f%3A0x22fe7f63301b5fee!2sESPE%20-%20Campus%20Belisario%20Quevedo!5e0!3m2!1ses!2sec!4v1669939064489!5m2!1ses!2sec"
                        width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

        </div>
    </div>
    <!-- <style>
    

        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: "Righteous", cursive;
            min-height: 100vh;
            background-color: #a9c9ff;
            background-image: linear-gradient(180deg, #a9c9ff 0%, #ffbbec 100%);

            .container {
                max-width: 100vw;
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
                grid-gap: 35px;
                margin: 0 auto;
                padding: 40px 0;

                .card {
                    position: relative;
                    width: 300px;
                    height: 400px;
                    margin: 0 auto;
                    background: #000;
                    border-radius: 15px;
                    box-shadow: 0 15px 60px rgba(0, 0, 0, 0.5);

                    .face {
                        position: absolute;
                        bottom: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        display: flex;
                        justify-content: center;
                        align-items: center;

                        &.face1 {
                            box-sizing: border-box;
                            padding: 20px;

                            h2 {
                                margin: 0;
                                padding: 0;
                            }

                            .java {
                                background-color: #fffc00;
                                -webkit-background-clip: text;
                                -webkit-text-fill-color: transparent;
                            }

                            .python {
                                background-color: #00fffc;
                                -webkit-background-clip: text;
                                -webkit-text-fill-color: transparent;
                            }

                            .cSharp {
                                background-color: #fc00ff;
                                -webkit-background-clip: text;
                                -webkit-text-fill-color: transparent;
                            }
                        }

                        &.face2 {
                            transition: 0.5s;

                            h2 {
                                margin: 0;
                                padding: 0;
                                font-size: 10em;
                                color: #fff;
                                transition: 0.5s;
                                text-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
                                z-index: 10;
                            }
                        }
                    }
                }

                .card:hover .face.face2 {
                    height: 60px;

                    h2 {
                        font-size: 2em;
                    }
                }

                .card:nth-child(1) .face.face2 {
                    background-image: linear-gradient(40deg,
                            #fffc00 0%,
                            #fc00ff 45%,
                            #00fffc 100%);
                    border-radius: 15px;
                }

                .card:nth-child(2) .face.face2 {
                    background-image: linear-gradient(40deg,
                            #fc00ff 0%,
                            #00fffc 45%,
                            #fffc00 100%);
                    border-radius: 15px;
                }

                .card:nth-child(3) .face.face2 {
                    background-image: linear-gradient(40deg,
                            #00fffc 0%,
                            #fc00ff 45%,
                            #fffc00 100%);
                    border-radius: 15px;
                }
            }
        }
    </style> -->
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
