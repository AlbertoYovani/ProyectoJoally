<?php  session_start();?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Joally Arreglos Frutales</title>
        <meta name="keywords" content="Joally Arreglos Frutales" />
        <meta name="description" content="Joally Arreglos Frutales"/>
        <meta name="author" content="Joally Arreglos Frutales"/>  
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="css/style.css" rel="stylesheet" media="screen">
        <link href="css/theme-responsive.css" rel="stylesheet" media="screen">
        <link href="css/skins/purple/purple.css" rel="stylesheet" type="text/css">
        <link href="css/MyStyle/Mystyle.css" rel="stylesheet" type="text/css">
        <link rel="shortcut icon" href="img/logo_joally.png">
        <link rel="apple-touch-icon" href="img/icons/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="img/icons/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="img/icons/apple-touch-icon-114x114.png">  
        <script src="js/modernizr.js"></script>
        <link href="js/jquery-notifications/css/messenger.css" rel="stylesheet" type="text/css" media="screen"/>
        <link href="js/jquery-notifications/css/messenger-theme-flat.css" rel="stylesheet" type="text/css" media="screen"/>
        <link href="js/jquery-notifications/css/location-sel.css" rel="stylesheet" type="text/css" media="screen"/>
    </head>
    
    <body>
        <div class="preloader">
            <div class="status"></div>
        </div>
        <div id="layout">
            <header id="header" class="header-v2">
                <nav class="flat-mega-menu">            
                    <label for="mobile-button"> 
                        <i class="fa fa-bars"></i>
                    </label>
                    <input id="mobile-button" type="checkbox"> 
                    
                    <ul class="collapse">
                        
                        <li class="title">
                            <a><span>J</span>OALLY ARREGLOS FRUTALES</a>
                        </li>
                        <li>
                            <a href="index.php">INICIO</a>
                        </li>
                        <li> 
                            <a href="Nosotros.php">NOSOTROS</a>
                        </li>
                        <li>
                            <a href="Contactos.php">CONTACTOS</a>
                        </li>
                        <li> 
                            <a href="Arreglos.php">ARREGLOS</a>
                        </li>
                        <li> 
                            <a href="PedidosTemp.php">MIS PEDIDOS</a>
                        </li>
                        <li class="inisiosesion fa fa-user pointer-icono login-form" style="font-size: 16px !important;margin-right: -60px !important; margin-left: 30px !important;">  Iniciar Sesión</li>
                        <li class="login-form" onclick="window.location.href='PedidosTemp.php'">
                            <div >
                                <i class="fa fa-shopping-cart" style="font-size: 22px;margin-top: 20px" ></i>
                                <div style="top: 5px;right: -5px;position: absolute;background: white;color: black;border-radius: 50%; width: 25px;height: 25px;">
                                    <div style="position: absolute;left: 0px;right: 0px;top: -17px;font-weight: bold" class="cantidad-productos">0</div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </nav>
            </header>
           <section class="tp-banner-container no-margin">
                <!-- SLIDE  -->
                <div class="tp-banner" >
                    <!-- SLIDES CONTENT-->
                    <ul>    
                        <!-- SLIDE 01-->
                        <li data-transition="zoomout" data-slotamount="7"  data-masterspeed="1500">
                            <!-- MAIN IMAGE -->
                            <img src="img/fondo8.jpg"  alt="slidebg1"  data-bgfit="cover" data-bgposition="center top" data-bgrepeat="no-repeat">

                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption medium_text lft stl"
                                data-x="right"
                                data-y="240"
                                data-speed="300"
                                data-start="800"
                                data-splitin="lines"
                                data-splitout="none"
                                data-easing="easeOutExpo">VISITANOS
                            </div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption large_bold_white sft stb"
                                data-x="right"
                                data-y="260"
                                data-speed="300"
                                data-start="1000"
                                data-splitin="lines"
                                data-splitout="none"
                                data-easing="easeOutExpo">AQUI ENCONTRARAS
                            </div>

                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption small_light_white sfb stb"
                                data-x="right"
                                data-y="325"
                                data-speed="500"
                                data-start="1200"
                                data-splitin="lines"
                                data-splitout="none"
                                data-easing="easeOutExpo">LOS MEJORES ARREGLOS PARA TU OCASION ESPECIAL
                            </div>

                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption lft stl fadeout" 
                                data-x="left" data-hoffset="0"
                                data-y="top" data-voffset="100"
                                data-speed="300" data-endspeed="300"
                                data-start="400"
                                data-easing="Power3.easeInOut">
                                <img alt="" src="img/arreglos/img1.png">
                            </div>
                        </li>
                        <!-- END SLIDE 01-->

                        <!-- SLIDE 02-->
                        <li data-transition="zoomout" data-slotamount="7"  data-masterspeed="1500">
                            <!-- MAIN IMAGE -->
                            <img src="img/fondo11.jpg"  alt="slidebg1"  data-bgfit="cover" data-bgposition="center top" data-bgrepeat="no-repeat">

                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption medium_text lft stl"
                                data-x="70"
                                data-y="280"
                                data-speed="300"
                                data-start="800"
                                data-splitin="lines"
                                data-splitout="none"
                                data-easing="easeOutExpo">MEJORES SABORES Y COLORES
                            </div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption large_bold_white sft stb"
                                data-x="60"
                                data-y="300"
                                data-speed="300"
                                data-start="1000"
                                data-splitin="lines"
                                data-splitout="none"
                                data-easing="easeOutExpo">COMBINACIONES DE SABORES
                            </div>

                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption small_light_white sfb stb"
                                data-x="63"
                                data-y="360"
                                data-speed="500"
                                data-start="1200"
                                data-splitin="lines"
                                data-splitout="none"
                                data-easing="easeOutExpo">LOS MEJORES SABORES
                            </div>

                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption sfr fadein" 
                                data-x="right" data-hoffset="-100"
                                data-y="top" data-voffset="120"
                                data-speed="2300" data-endspeed="300"
                                data-start="1400"
                                data-easing="Power3.easeInOut">
                                <img alt="" src="img/arreglos/img2.png">
                            </div>

                            <!-- LAYER NR. 5 -->
                            <div class="tp-caption sft fadeout" 
                                data-x="right" data-hoffset="-700"
                                data-y="top" data-voffset="120"
                                data-speed="2300" data-endspeed="300"
                                data-start="1400"
                                data-easing="Power3.easeInOut">
                                <img alt="" src="img/arreglos/img3.png">
                            </div>
                        </li>
                        <!-- END SLIDE 02-->

                        <!-- SLIDE 01-->
                        <li data-transition="zoomout" data-slotamount="7"  data-masterspeed="1500">
                            <!-- MAIN IMAGE -->
                            <img src="img/fondo8.jpg"  alt="slidebg1"  data-bgfit="cover" data-bgposition="center top" data-bgrepeat="no-repeat">

                           <!-- LAYER NR. 1 -->
                            <div class="tp-caption medium_text lft stl"
                                data-x="center"
                                data-y="240"
                                data-speed="300"
                                data-start="800"
                                data-splitin="lines"
                                data-splitout="none"
                                data-easing="easeOutExpo">SABORES
                            </div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption large_bold_white sft stb"
                                data-x="center"
                                data-y="260"
                                data-speed="300"
                                data-start="1000"
                                data-splitin="lines"
                                data-splitout="none"
                                data-easing="easeOutExpo">COLORES
                            </div>

                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption small_light_white sfb stb"
                                data-x="center"
                                data-y="325"
                                data-speed="500"
                                data-start="1200"
                                data-splitin="lines"
                                data-splitout="none"
                                data-easing="easeOutExpo">PARA TU OCASION ESPECIAL
                            </div>

                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption sfr fadein" 
                                data-x="left" data-hoffset="0"
                                data-y="bottom" data-voffset="-160"
                                data-speed="2300" data-endspeed="300"
                                data-start="1400"
                                data-easing="Power3.easeInOut">
                                <img alt="" src="img/arreglos/img2.png">
                            </div>

                            <!-- LAYER NR. 5 -->
                            <div class="tp-caption sft fadeout" 
                                data-x="right" data-hoffset="0"
                                data-y="top" data-voffset="50"
                                data-speed="2500" data-endspeed="300"
                                data-start="1800"
                                data-easing="Power3.easeInOut">
                                <img alt="" src="img/arreglos/img2.png">
                            </div>
                        </li>
                        <!-- END SLIDE 01-->
                    </ul>
                    <!-- END SLIDES  --> 
                    <div class="tp-bannertimer"></div>  
                </div>
                 <!-- SLIDE CONTENT-->
            </section>
            