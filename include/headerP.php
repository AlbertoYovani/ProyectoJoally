<?php  session_start();?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Joally Arreglos Frutales</title>
        <meta name="keywords" content="HTML5 Template" />
        <meta name="description" content="World Cup - Responsive HTML5 Template soccer and sports">
        <meta name="author" content="iwthemes.com">  
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
        <link href="css/style.css" rel="stylesheet" media="screen">
        <link href="css/theme-responsive.css" rel="stylesheet" media="screen">
        <link href="css/skins/purple/purple.css" rel="stylesheet" type="text/css">
        <link href="css/MyStyle/Mystyle.css" rel="stylesheet" type="text/css">
        <link rel="shortcut icon" href="img/logo_joally.png">
        <link rel="apple-touch-icon" href="img/icons/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="img/icons/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="img/icons/apple-touch-icon-114x114.png">  
        <link href="js/jquery-notifications/css/messenger.css" rel="stylesheet" type="text/css" media="screen"/>
        <link href="js/jquery-notifications/css/messenger-theme-flat.css" rel="stylesheet" type="text/css" media="screen"/>
        <link href="js/jquery-notifications/css/location-sel.css" rel="stylesheet" type="text/css" media="screen"/>
        <script src="js/modernizr.js"></script>
    </head>
    <body>
        <div class="preloader">
            <div class="status">&nbsp;</div>
        </div>
        <div id="layout">
            <header id="header" class="header-v2">
                <nav class="flat-mega-menu">
                    <label for="mobile-button"> <i class="fa fa-bars"></i></label>
                    <input id="mobile-button" type="checkbox">
                    <ul class="collapse">
                        <li class="title"><a><span>J</span>OALLY ARREGLOS FRUTALES<span></span></a></li>
                        <li><a href="PrincipalArreglos.php">ARREGLOS</a></li>
                        <li><a href="MiCuenta.php">MI CUENTA</a></li>
                        <li> <a href="MisPedidos.php">MIS PEDIDOS</a>
                        <li class="login-form " ><!-- login form -->
                            <i class="fa fa-user " style="font-size: 22px;margin-top: 20px"></i>
                            <ul class="drop-down hover-expand" id="cerrar">
                                <li >
                                    <a href="logout.php" style="font-size: 14px;">Cerrar Sesión <br><?php echo isset($error) ? utf8_decode($error) : ''; ?></a> 
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
                    </ul>
                </nav>
            </header>
            
            
            
              
