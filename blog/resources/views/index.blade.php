<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PuntoVerde</title>

        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="{!! url('/css/app.css') !!}">
        <link rel="stylesheet" href="{!! url('/css/carousel.css') !!}">

    </head>
    <body>
        <div class="slider_container">
            <div id="header">
                <header>
                    <div class="">
                        <div class="row justify-content-center" >
                            <div class="col-lg-9 col-md-8 col-9">
                                <div class="row justify-content-center">
                                    <div class="col-3 header_text" id="home_header">
                                      Inicio
                                    </div>
                                    <div class="col-3 header_text" id="casas_header">
                                      Casas 
                                    </div>
                                    <div class="col-3 header_text" id="galeria_header">
                                      Galería
                                    </div>
                                    <div class="col-3 header_text" id="contacto_header">
                                      Contacto
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-1 calendarContainer">
                                <div class="row justify-content-end">
                                    <div id="calendar" class="col-4 calendar">
                                        <img class="icon" src="images/icons/calendar.svg">
                                    </div>
                                    <div class="col-4">
                                        <div class="phone">(55)80269704</div>
                                    </div>
                                </div>
                            </div>
                          </div>
                    </div>
                </header>
            </div>
            <ul class="slideshow">
                <li>
                    <span>Image 01</span>
                    <div class="header_text_animation">
                        Conoce tu nuevo hogar en un entorno privilegiado
                    </div>
                </li>
                <li>
                    <span>Image 02</span>
                    <div class="header_text_animation">
                        Punto Verde
                    </div>
                </li>
                <li>
                    <span>Image 03</span>
                    <div class="header_text_animation">
                        Una opción a tu alcance
                    </div>
                </li>
                <li>
                    <span>Image 04</span>
                    <div class="header_text_animation">
                        Comodidad, seguridad y tranquilidad
                    </div>
                </li>
                <li>
                    <span>Image 05</span>
                    <div class="header_text_animation">
                        Punto Verde
                    </div>
                </li>
                <li>
                    <span>Image 06</span>
                    <div class="header_text_animation">
                        Proyecto Residencial exclusivo
                    </div>
                </li>
            </ul>
            <div class="slider_cover">
            </div>
        </div>
        <div id="section_1">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-5 col-md-5 col-sm-6 col-8 image_col">
                    <img src="images/_MG_3702.jpg">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-9 col-9 text_containerr">
                    <div class="title Megant">
                        Punto Verde
                    </div>
                    <br>
                    <div class="text_container">                    
                        <p>
                            Bienvenido a punto verde un proyecto residencial con 13 casas en condominio totalmente nuevas con una magnifica distribución y acabados de primera calidad. El proyecto arquitectonico fue desarrollado respetando la vegetacion existente creando una atmosfera de tranquilidad y estilo de vida privilegiado
                        </p>
                        <p>
                            Detalles de Contruccion
                        </p>
                        <p>
                            Tres estilos de casas que van de 120 m2 a 140 m2 distribuidos en tres niveles. Logrando combinar diseño y confort, creadas en un entorno donde la sustentabilidad y el respeto por la naturaleza es una prioridad.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div id="section_2">
            <div class="header Megant">
                Contamos con
            </div>
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 ">
                    <img class="icon" src="images/icons/casas.svg">
                    <div class="icon_text Megant">Zona Tranquila Y Segura</div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 ">
                    <img class="icon" src="images/icons/guardaespaldas.svg">
                    <div class="icon_text Megant">Vigilancia 24 hrs</div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 ">
                    <img class="icon" src="images/icons/bicicleta.svg">
                    <div class="icon_text Megant">Áreas Verdes </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 ">
                    <img class="icon" src="images/icons/terraza.svg">
                    <div class="icon_text Megant">Terraza</div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 ">
                    <img class="icon" src="images/icons/estacionamiento.svg">
                    <div class="icon_text Megant">Estacionamiento</div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 ">
                    <img class="icon" src="images/icons/avenidas_principales.svg">
                    <div class="icon_text Megant">Cerca de avenida principales</div>
                </div>
                <div class="col-12 text_description">
                    Punto Verde es un desarrollo residencial diseñado y planeado para brindar a sus residentes
                    todas las comodidades ofreciendo equilibrio en su diseño, planeación en sus distribuciones,
                    tranquilidad y seguridad que necesitan para que disfruten cada día de su nuevo hogar.
                </div>
            </div>
        </div>

        <div id="section_3">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                    <img class="icon" src="images/icons/efectivo.svg">
                    <div class="icon_text Megant">PAGO DECONTADO</div>
                    <div class="text">
                        En pago de contado, aparta con

                        el 30% del valor de la casa, la mejor

                        ubicación con precio de preventa y 

                        el resto lo liquidas antes de la 

                        firma de escrituras.
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                    <img class="icon" src="images/icons/tarjeta_credito.svg">
                    <div class="icon_text Megant">CRÉDITO BANCARIO</div>
                    <div class="text">
                        Te asesoramos para obtener

                        las mejores condiciones de

                        un crédito, ya que contamos

                        con convenios con las principales

                        instituciones bancarias.
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                    <img class="icon" src="images/icons/contador.svg">
                    <div class="icon_text Megant">INFONAVIT</div>
                    <div class="text">
                        Usa tu crédito INFONAVIT en

                        cualquiera de sus modalidades:

                        Tradicional, Segundo Crédito, Apoyo

                        Infonavit y Cofinavit. Te ayudamos a

                        consultar tu perfil para saber

                        si aplica un 0% de enganche.
                    </div>
                </div>
            </div>
        </div>

        <div id="section_4">
            <div class="header_nav Megant">Distribución</div>

            <ul class="nav nav-tabs" role="tablist">
                <li id="tipo1_nav" class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#tipo1" role="tab">TIPO 1</a>
                </li>
                <li id="tipo2_nav" class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#tipo2" role="tab">TIPO 2</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tipo1" role="tabpanel">
                    <div class="container_tab">
                        <ul class="nav nav-tabs pisos_nav" role="tablist">
                            <li class="piso1_nav nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#piso1_p1" role="tab">PRIMER PISO</a>
                            </li>
                            <li class="piso2_nav nav-item">
                                <a class="nav-link" data-toggle="tab" href="#piso2_p1" role="tab">SEGUNDO PISO</a>
                            </li>
                            <li class="piso3_nav nav-item">
                                <a class="nav-link" data-toggle="tab" href="#piso3_p1" role="tab">TERCER PISO</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <!-- TIPO 1 PISO 1 -->
                            <div class="tab-pane active" id="piso1_p1" role="tabpanel">
                                <div class="row justify-content-center align-items-center">
                                    <div class="col-lg-4 col-md-4 col-sm-12 col-12 plano_txt text_container">
                                        <div class="row justify-content-center">
                                            <p class="col-11">
                                                PRIMER PISO   M2 : 51.26
                                            </p>
                                            <div id="t1_p1_cocina" class="col-lg-12 col-md-12 col-sm-2 col-2 icons_container">
                                                <img class="icon" src="images/icons/cocina.svg">
                                                <div class="icon_text">COCINA</div>
                                            </div>
                                            <div id="t1_p1_sala" class="col-lg-12 col-md-12 col-sm-2 col-2 icons_container">
                                                <img class="icon" src="images/icons/sala.svg">
                                                <div class="icon_text">SALA</div>
                                            </div>
                                            <div id="t1_p1_comedor" class="col-lg-12 col-md-12 col-sm-2 col-2 icons_container">
                                                <img class="icon" src="images/icons/silla.svg">
                                                <div class="icon_text">COMEDOR</div>
                                            </div>
                                            <div id="t1_p1_banio" class="col-lg-12 col-md-12 col-sm-2 col-2 icons_container">
                                                <img class="icon" src="images/icons/inodoro.svg">
                                                <div class="icon_text">BAÑO</div>
                                            </div>    
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-7 col-6 plano_img">
                                        <img id="t1_p1_plano_cocina" class="primer_piso" src="images/planos/t1_p1_cocina.png">
                                        <img id="t1_p1_plano_sala" class="primer_piso" src="images/planos/t1_p1_sala.png">
                                        <img id="t1_p1_plano_banio" class="primer_piso" src="images/planos/t1_p1_banio.png">
                                        <img id="t1_p1_plano_comedor" class="primer_piso" src="images/planos/t1_p1_comedor.png">
                                    </div>
                                </div>
                            </div>
                            <!-- TIPO 1 PISO 2 -->
                            <div class="tab-pane" id="piso2_p1" role="tabpanel">
                                <div class="row justify-content-center">
                                    <div class="col-lg-4 col-md-4 col-sm-12 col-12 plano_txt menos_iconos text_container">
                                        <div class="row justify-content-center">
                                            <p class="col-11">
                                                SEGUNDO PISO M2 : 45.28
                                            </p>
                                            <div id="t1_p2_recamara" class="col-lg-12 col-md-12 col-sm-2 col-2 icons_container">
                                                <img class="icon" src="images/icons/cama.svg">
                                                <div class="icon_text">RECAMARAS</div>
                                            </div>
                                            <div id="t1_p2_lavado" class="col-lg-12 col-md-12 col-sm-2 col-2 icons_container">
                                                <img class="icon" src="images/icons/lavadora.svg">
                                                <div class="icon_text">LAVADO</div>
                                            </div>
                                            <div id="t1_p2_banio" class="col-lg-12 col-md-12 col-sm-2 col-2 icons_container">
                                                <img class="icon" src="images/icons/inodoro.svg">
                                                <div class="icon_text">BAÑO</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-7 col-6 plano_img ">
                                        <img id="t1_p2_plano_recamara" src="images/planos/t1_p2_recamara.png">
                                        <img id="t1_p2_plano_lavado" src="images/planos/t1_p2_lavado.png">
                                        <img id="t1_p2_plano_banio" src="images/planos/t1_p2_banio.png">
                                    </div>
                                </div>
                            </div>
                            <!-- TIPO 1 PISO 3 -->
                            <div class="tab-pane" id="piso3_p1" role="tabpanel">
                                <div class="row justify-content-center">
                                    <div class="col-lg-4 col-md-4 col-sm-12 col-12 plano_txt menos_iconos text_container">
                                        <div class="row justify-content-center">
                                            <p class="col-11">
                                                TERCER PISO M2 : 36.69
                                            </p>
                                            <div id="t1_p3_recamara" class="col-lg-12 col-md-12 col-sm-2 col-2 icons_container">
                                                <img class="icon" src="images/icons/cama.svg">
                                                <div class="icon_text">RECAMARA</div>
                                            </div>
                                            <div id="t1_p3_terraza" class="col-lg-12 col-md-12 col-sm-2 col-2 icons_container">
                                                <img class="icon" src="images/icons/terraza.svg">
                                                <div class="icon_text">TERRAZA</div>
                                            </div>
                                            <div id="t1_p3_banio" class="col-lg-12 col-md-12 col-sm-2 col-2 icons_container">
                                                <img class="icon" src="images/icons/inodoro.svg">
                                                <div class="icon_text">BAÑO</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-7 col-6 plano_img">
                                        <div class="container">
                                            <img id="t1_p3_plano_recamara" src="images/planos/t1_p3_recamara.png">
                                            <img id="t1_p3_plano_terraza" src="images/planos/t1_p3_terraza.png">
                                            <img id="t1_p3_plano_banio" src="images/planos/t1_p3_banio.png">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tipo2" role="tabpanel">
                    <div class="container_tab">
                        <ul class="nav nav-tabs pisos_nav" role="tablist">
                            <li class="piso1_nav nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#piso1_p2" role="tab">PRIMER PISO</a>
                            </li>
                            <li class="piso2_nav nav-item">
                                <a class="nav-link" data-toggle="tab" href="#piso2_p2" role="tab">SEGUNDO PISO</a>
                            </li>
                            <li class="piso3_nav nav-item">
                                <a class="nav-link" data-toggle="tab" href="#piso3_p2" role="tab">TERCER PISO</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <!-- TIPO 2 PISO 1 -->
                            <div class="tab-pane active" id="piso1_p2" role="tabpanel">
                                <div class="row justify-content-center">
                                    <div class="col-lg-4 col-md-4 col-sm-12 col-12 plano_txt text_container">
                                        <div class="row justify-content-center">
                                            <p class="col-11">
                                                PRIMER PISO M2 : 51.26
                                            </p>
                                            <div  id="t2_p1_cocina" class="col-lg-12 col-md-12 col-sm-2 col-2 icons_container">
                                                <img class="icon" src="images/icons/cocina.svg">
                                                <div class="icon_text">COCINA</div>
                                            </div>
                                            <div  id="t2_p1_sala" class="col-lg-12 col-md-12 col-sm-2 col-2 icons_container">
                                                <img class="icon" src="images/icons/sala.svg">
                                                <div class="icon_text">SALA</div>
                                            </div>
                                            <div  id="t2_p1_comedor" class="col-lg-12 col-md-12 col-sm-2 col-2 icons_container">
                                                <img class="icon" src="images/icons/silla.svg">
                                                <div class="icon_text">COMEDOR</div>
                                            </div>
                                            <div  id="t2_p1_banio" class="col-lg-12 col-md-12 col-sm-2 col-2 icons_container">
                                                <img class="icon" src="images/icons/inodoro.svg">
                                                <div class="icon_text">BAÑO</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-7 col-6 plano_img">
                                        <img id="t2_p1_plano_cocina" class="primer_piso_2" src="images/planos/t2_p1_cocina.png">
                                        <img id="t2_p1_plano_sala" class="primer_piso_2" src="images/planos/t2_p1_sala2.png">
                                        <img id="t2_p1_plano_banio" class="primer_piso_2" src="images/planos/t2_p1_banio.png">
                                        <img id="t2_p1_plano_comedor" class="primer_piso_2" src="images/planos/t2_p1_comedor.png">
                                    </div>
                                </div>
                            </div>
                            <!-- TIPO 2 PISO 2 -->
                            <div class="tab-pane" id="piso2_p2" role="tabpanel">
                                <div class="row justify-content-center">
                                    <div class="col-lg-4 col-md-4 col-sm-12 col-12 plano_txt menos_iconos text_container">
                                        <div class="row justify-content-center">
                                            <p class="col-11">
                                                SEGUNDO PISO : 45.28
                                            </p>
                                            <div id="t2_p2_recamara" class="col-lg-12 col-md-12 col-sm-2 col-2 icons_container">
                                                <img class="icon" src="images/icons/cama.svg">
                                                <div class="icon_text">RECAMARA</div>
                                            </div>
                                            <div id="t2_p2_lavado" class="col-lg-12 col-md-12 col-sm-2 col-2 icons_container">
                                                <img class="icon" src="images/icons/lavadora.svg">
                                                <div class="icon_text">LAVADO</div>
                                            </div>
                                            <div id="t2_p2_banio" class="col-lg-12 col-md-12 col-sm-2 col-2 icons_container">
                                                <img class="icon" src="images/icons/inodoro.svg">
                                                <div class="icon_text">BAÑO</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-7 col-6 plano_img ">
                                        <img id="t2_p2_plano_recamara" src="images/planos/t2_p2_recamara.png">
                                        <img id="t2_p2_plano_lavado" src="images/planos/t2_p2_lavado.png">
                                        <img id="t2_p2_plano_banio" src="images/planos/t2_p2_banio.png">

                                    </div>
                                </div>
                            </div>
                            <!-- TIPO 2 PISO 3 -->
                            <div class="tab-pane" id="piso3_p2" role="tabpanel">
                                <div class="row justify-content-center">
                                    <div class="col-lg-4 col-md-4 col-sm-12 col-12 plano_txt menos_iconos text_container">
                                        <div class="row justify-content-center">
                                            <p class="col-11">
                                                TERCER PISO 26.14
                                            </p>
                                            <div id="t2_p3_terraza" class="col-lg-12 col-md-12 col-sm-2 col-2 icons_container">
                                                <img class="icon" src="images/icons/terraza.svg">
                                                <div class="icon_text">TERRAZA</div>
                                            </div>
                                            <div id="t2_p3_estudio" class="col-lg-12 col-md-12 col-sm-2 col-2 icons_container">
                                                <img class="icon" src="images/icons/sala.svg">
                                                <div class="icon_text">ESTUDIO</div>
                                            </div>
                                            <div id="t2_p3_banio" class="col-lg-12 col-md-12 col-sm-2 col-2 icons_container">
                                                <img class="icon" src="images/icons/inodoro.svg">
                                                <div class="icon_text">BAÑO</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-7 col-6 plano_img">
                                        <div class="container">
                                            <img id="t2_p3_plano_terraza" src="images/planos/t2_p3_terraza.png">
                                            <img id="t2_p3_plano_estudio" src="images/planos/t2_p3_estudio.png">
                                            <img id="t2_p3_plano_banio" src="images/planos/t2_p3_banio.png">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="section_5">
            <div id="titulo" class="Megant">Galería</div>
            <div class="galeria_container text-center">
                <div class="row">
                    <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <img width="900" height="1200" class="d-block image1 col-3 img-fluid" src="images/_MG_3876.jpg">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block image2 col-3 img-fluid" src="images/_MG_3803.jpg ">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block image3 col-3 img-fluid" src="images/_MG_3701.jpg ">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block image4 col-3 img-fluid" src="images/_MG_3858.jpg ">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block image5 col-3 img-fluid" src="images/_MG_3646.jpg ">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block image6 col-3 img-fluid" src="images/_MG_3770.jpg ">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block image6 col-3 img-fluid" src="images/_MG_3918.jpg ">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block image6 col-3 img-fluid" src="images/_MG_3912.jpg ">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block image6 col-3 img-fluid" src="images/_MG_3910.jpg ">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block image6 col-3 img-fluid" src="images/_MG_3899.jpg ">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block image6 col-3 img-fluid" src="images/_MG_3897.jpg ">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block image6 col-3 img-fluid" src="images/_MG_3876.jpg ">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block image6 col-3 img-fluid" src="images/_MG_3872.jpg ">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block image6 col-3 img-fluid" src="images/_MG_3858.jpg ">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block image6 col-3 img-fluid" src="images/_MG_3842.jpg ">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block image6 col-3 img-fluid" src="images/_MG_3827.jpg ">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block image6 col-3 img-fluid" src="images/_MG_3808.jpg ">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block image6 col-3 img-fluid" src="images/_MG_3791.jpg ">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block image6 col-3 img-fluid" src="images/_MG_3773.jpg ">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block image6 col-3 img-fluid" src="images/_MG_3747.jpg ">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block image6 col-3 img-fluid" src="images/_MG_3741.jpg ">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block image6 col-3 img-fluid" src="images/_MG_3692.jpg ">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block image6 col-3 img-fluid" src="images/_MG_3665.jpg ">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block image6 col-3 img-fluid" src="images/_MG_3653.jpg ">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block image6 col-3 img-fluid" src="images/_MG_3626.jpg ">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block image6 col-3 img-fluid" src="images/_MG_3592.jpg ">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="section_7">
            <div id="map"></div>
        </div>

        <div id="contacto">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-7 col-sm-12 col-12">
                        <div class="title">Contacto</div>
                        <form>
                            <label id="name_label" for="name">Nombre</label>
                            <input type="text" name="name" id="name" placeholder="Escriba su nombre completo">

                            <label id="mail_label" name="mail_label" for="mail">Correo electrónico</label>
                            <label id="tel_label" name="tel_label" for="tel">Teléfono</label>

                            <input type="mail" name="mail" id="mail" placeholder="ejemplo@mail.com">
                            <input type="number" name="tel" id="tel" placeholder="Ej: 5514909877">

                            <label id="message_label" for="message">Mensaje</label>
                            <input type="text" name="message" id="message">

                            <button type="submit">Enviar</button>
                        </form>
                    </div>
                    <div id="direction_container" class="col-lg-5 col-md-5 col-sm-12 col-12">
                        <div class="row justify-content-center">
                            <div class="col-lg-12 col-md-12 col-sm-5 col-5 txt">
                                <img class="icon" src="images/icons/ubicacion.svg">
                                <p>
                                    Dirección :  Aquiles Elorduy 25<br>
                                    Col. El Recreo Del. Cuauhtemoc<br>
                                    C.P. 02070 CDMX
                                </p>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-5 col-5 txt">
                                <img class="icon" src="images/icons/whatsapp.svg">
                                <p>
                                    (52) 55 80369704
                                </p>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-5 col-5 txt">
                                <img class="icon" src="images/icons/telefono.svg">
                                <p>
                                    (52) 55 80369704
                                </p>
                            </div>


                            <div class="col-lg-12 col-md-12 col-sm-5 col-5 txt">
                                <img class="icon" src="images/icons/email.svg">
                                <p>
                                    contacto@grupopuntoverde.mx
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- The Modal -->
        <div id="modal" class="modal">
          <span class="close">&times;</span>
          <!-- <img class="modal-content" id="img01"> -->
          <div class="modal-content">
            
            <div id="carousel_modal" class="carousel slide " data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block" src="images/_MG_3876.jpg" data-color="lightblue" alt="First Image">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" src="images/_MG_3803.jpg" data-color="firebrick" alt="Second Image">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" src="images/_MG_3701.jpg" data-color="violet" alt="third Image">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" src="images/_MG_3858.jpg" data-color="violet" alt="fourth Image">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" src="images/_MG_3646.jpg" data-color="violet" alt="fifth Image">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" src="images/_MG_3770.jpg" data-color="violet" alt="sixth Image">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" src="images/_MG_3918.jpg" data-color="firebrick" alt="Second Image">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" src="images/_MG_3912.jpg" data-color="violet" alt="third Image">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" src="images/_MG_3910.jpg" data-color="violet" alt="fourth Image">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" src="images/_MG_3899.jpg" data-color="firebrick" alt="Second Image">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" src="images/_MG_3897.jpg" data-color="violet" alt="third Image">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" src="images/_MG_3876.jpg" data-color="violet" alt="fourth Image">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" src="images/_MG_3872.jpg" data-color="violet" alt="fifth Image">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" src="images/_MG_3858.jpg" data-color="violet" alt="sixth Image">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" src="images/_MG_3842.jpg" data-color="firebrick" alt="Second Image">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" src="images/_MG_3827.jpg" data-color="violet" alt="third Image">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" src="images/_MG_3808.jpg" data-color="violet" alt="fourth Image">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" src="images/_MG_3791.jpg" data-color="violet" alt="fifth Image">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" src="images/_MG_3773.jpg" data-color="violet" alt="sixth Image">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" src="images/_MG_3747.jpg" data-color="violet" alt="sixth Image">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" src="images/_MG_3741.jpg" data-color="violet" alt="third Image">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" src="images/_MG_3692.jpg" data-color="violet" alt="fourth Image">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" src="images/_MG_3665.jpg" data-color="violet" alt="fifth Image">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" src="images/_MG_3653.jpg" data-color="violet" alt="sixth Image">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" src="images/_MG_3626.jpg" data-color="violet" alt="sixth Image">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" src="images/_MG_3592.jpg" data-color="violet" alt="sixth Image">
                    </div>
                </div>
                <!-- Controls -->
                <a class="carousel-control-prev" href="#carousel_modal" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel_modal" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
          </div>
        </div>

        <div id="contacto_modal" class="modal contacto_modal">
            <div style="position: relative;">
                <span class="close_contacto">&times;</span>
                <div class="modal-content">
                    <div id="title">
                        Agenda una visita
                    </div>
                    <form method="POST" action="{{ '/contactoMail' }}">
                        @csrf

                        <div class="form-group">
                            <div id="form" class="row justify-content-center">
                                <div class="col-6">
                                    <input type="text" required placeholder="Nombre" name="nombre" autofocus>
                                    <input type="text" required placeholder="Fecha" name="fecha">
                                </div>
                                <div class="col-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email"  >

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <input type="number" required placeholder="Teléfono" name="telefono">
                                </div>
                                <div class="col-12">
                                    <input id="mensaje" type="text" placeholder="Mensaje" name="mensaje">
                                </div>
                                <div class="col-12">
                                    <button type="submit">Enviar</button>
                                </div>
                            </div>


                        </div>

                       <!--  <div class="form-group">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div> -->
                    </form>
                </div>
            </div>
        </div>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAVPyg5gOhZtCErpZ4ZpgQAAeTeQ3-NNTY&callback=initMap"
        async defer></script>
        
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>

        <script type="text/javascript" src="{{ URL::asset('/js/landing.js') }}"></script>


        <script>
          var map;
          function initMap() {
            // The location of Uluru
            var location = {lat: 19.4750199, lng: -99.1857254};
            // The map, centered at location
            var map = new google.maps.Map(
                document.getElementById('map'), {zoom: 17, center: location});
            // The marker, positioned at location
            var marker = new google.maps.Marker({position: location, map: map});
          }

        </script>
    </body>
</html>
