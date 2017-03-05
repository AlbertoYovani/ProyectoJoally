<?php  session_start();?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Basic -->
        <meta charset="utf-8">
        <title>Joally Arreglos Frutales</title>
        <meta name="keywords" content="HTML5 Template" />
        <meta name="description" content="World Cup - Responsive HTML5 Template soccer and sports">
        <meta name="author" content="iwthemes.com">  

        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
        <!-- Theme CSS -->
        <link href="css/style.css" rel="stylesheet" media="screen">
        <!-- Responsive CSS -->
        <link href="css/theme-responsive.css" rel="stylesheet" media="screen">
        <!-- Skins Theme -->
        <link href="css/skins/purple/purple.css" rel="stylesheet" type="text/css">
        <link href="css/MyStyle/Mystyle.css" rel="stylesheet" type="text/css">
        <!-- para el perfil -->

        <!-- Favicons -->
        <link rel="shortcut icon" href="img/logo_joally.png">
        <link rel="apple-touch-icon" href="img/icons/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="img/icons/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="img/icons/apple-touch-icon-114x114.png">  
        
        <link href="js/jquery-notifications/css/messenger.css" rel="stylesheet" type="text/css" media="screen"/>
        <link href="js/jquery-notifications/css/messenger-theme-flat.css" rel="stylesheet" type="text/css" media="screen"/>
        <link href="js/jquery-notifications/css/location-sel.css" rel="stylesheet" type="text/css" media="screen"/>
       <!-- <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">  -->
        <!-- Head Libs -->
        <script src="js/modernizr.js"></script>
    </head>
    
    <body>
       <!--Preloader-->
        <div class="preloader">
            <div class="status">&nbsp;</div>
        </div>
        <div id="layout">
            <!-- Header-->
            <header id="header" class="header-v2">
                <!-- Main Nav -->
                <nav class="flat-mega-menu">            
                    <!-- flat-mega-menu class -->
                    <label for="mobile-button"> <i class="fa fa-bars"></i></label><!-- mobile click button to show menu -->
                    <input id="mobile-button" type="checkbox"> 
                    
                   <!-- <img src="img/logo_joally.png" style="width: 4%"> -->
                    <ul class="collapse"><!-- collapse class for collapse the drop down -->
                        <!-- website title - Logo class -->
                        <li class="title">
                            <a>  <span>J</span>OALLY ARREGLOS FRUTALES<span></span></a>
                        </li>
                        <!-- End website title - Logo class -->
                        
                        <li><a>ARREGLOS</a><ul class="drop-down one-column hover-fade" style="background-color:#F00001 !important"><!-- first level drop down -->
                                <li><a href="PrincipalArreglos.php">CUMPLEAÑOS</a> </li>
                                <li><a href="PrincipalArreglos.php">XV AÑOS</a> </li>
                                <li><a href="PrincipalArreglos.php">BODAS</a> </li>
                                <li><a href="PrincipalArreglos.php">BAUTIZOS</a> </li>
                                <li><a href="PrincipalArreglos.php">TODOS</a> </li>
                            </ul>
                        </li>
                        <li><a href="MiCuenta.php">MI CUENTA</a></li>
                        
                        <li> <a href="MisPedidos.php">MIS PEDIDOS</a>
                            
                        <li class="login-form " ><!-- login form -->
                            <i class="fa fa-user " style="font-size: 22px;margin-top: 20px"></i>
                            <ul class="drop-down hover-expand" id="cerrar">
                                <li >
                                    <a href="logout.php" style="font-size: 16px;">Cerrar Sesión <br><?php echo isset($error) ? utf8_decode($error) : ''; ?></a> 
                                </li>
                            </ul>
                        </li>
                        <li class="login-form" onclick="window.location.href='MisPedidos.php'">
                            <div >
                                <i class="fa fa-shopping-cart" style="font-size: 22px;margin-top: 20px" ></i>
                                <div style="top: 5px;right: -5px;position: absolute;background: white;color: black;border-radius: 50%; width: 25px;height: 25px;">
                                    <div style="position: absolute;left: 0px;right: 0px;top: -17px;font-weight: bold" class="cantidad-productos">0</div>
                                </div>
                            </div>
                            
                        </li>
                        <li class="search-bar"> 
                            <i class="fa fa-search " style="font-size: 22px;margin-top: 20px"></i><!-- search bar -->
                            <ul class="drop-down hover-expand">
                                <li>
                                    <form method="post" action="#">
                                        <table>
                                            <tr>
                                                <td> <input type="search" required="required" name="serach_bar" placeholder="Buscar..."> </td>
                                                <td> <input type="submit" value="Buscar"> </td>
                                            </tr>
                                        </table>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- Main Nav -->
            </header>
            
            
            
              
