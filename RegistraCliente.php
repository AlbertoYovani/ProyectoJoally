<?=include './include/header.php';?>

            <section class="content-central miborder" style="margin-top: 8%" >
                <!-- Shadow Semiboxed -->
                <div class="semiboxshadow text-center">
                    <img src="img/img-theme/shp.png" class="img-responsive" alt="">
                </div>
                <!-- End Shadow Semiboxed -->

                <!-- End content info - page Fill with -->
                <div class="content_info">
                    <div class="paddings-mini">
                        <div class="container" >
                            <div class="row">
                                <!-- Newsletter-->
                                <div class="col-md-8 col-centered" >
                                    <h3>CREAR CUENTA</h3>  
                                    <!-- FORMULARIO DE REGISTRO DE UN CLIENTE-->
                                    <br>
                                    <br>
                                    <form id="nuevo_registro" method="POST" action="">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon back-vt">
                                                        <i class="fa fa-user color-white"></i>
                                                    </span>
                                                    <input class="form-control" placeholder="Nombre Completo" name="nombre" type="text" required="" pattern="[a-zA-Z-\s]{1,30}" maxlength="40" autofocus>
                                                    <!--<span class="input-group-addon back-vt">
                                                    </span> --> <!-- está parte agrega una orilla de color rojo -->
                                                </div>
                                                <br>
                                                <div class="input-group">
                                                    <span class="input-group-addon back-vt">
                                                        <i class="fa fa-envelope color-white"></i>
                                                    </span>
                                                    <input class="form-control" placeholder="ejemplo@hotmail.com" name="correo" type="email" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$">
                                                </div>
                                                <br>
                                                <div class="input-group">
                                                    <span class="input-group-addon back-vt">
                                                        <i class="fa fa-phone color-white"></i>
                                                    </span>
                                                    <input class="form-control" placeholder="961 168 86 97" name="telefono" type="text" required="" maxlength="12" pattern="[0-9]{10,12}">
                                                </div>
                                                <br>
                                                <div class="input-group">
                                                    <span class="input-group-addon back-vt">               
                                                        <i class="fa fa-birthday-cake color-white"></i>
                                                    </span>
                                                    <input class="form-control" placeholder="Fecha de Nacimiento" name="fechanac" type="date" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon back-vt">
                                                        <i class="fa fa-user-secret color-white"></i>
                                                    </span>
                                                    <input class="form-control" placeholder="Usuario" name="usuario" type="text" required="" maxlength="20" pattern="[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]{5,20}">
                                                </div>
                                                <br>
                                                <div class="input-group">
                                                    <span class="input-group-addon back-vt">
                                                        <i class="fa fa-unlock-alt color-white"></i>
                                                    </span>
                                                    <input class="form-control" placeholder="Contraseña" name="ClPassword" type="password" >
                                                </div>
                                                <br>
                                                <div class="input-group">
                                                    <span class="input-group-addon back-vt">
                                                        <i class="fa fa-unlock-alt color-white"></i>
                                                    </span>
                                                    <input class="form-control" placeholder="Confirmar Contraseña" name="ClPasswordConf" type="password" > 
                                                </div>
                                                
                                                <div class="input-group">
                                                    <br>
                                                    <div class="mensaje"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                        <div class="row">
                                        <div class="col-md-3">
                                            <span class="input-group-btn">
                                                <button class="btn btn-primary" type="submit" name="registrar">Registrar</button>
                                            </span>
                                        </div>
                                        <div class="col-md-3">
                                            <span class="input-group-btn">
                                                <button class="btn btn-primary" type="button" name="cancelar" onclick="location.href='index.php'">Cancelar</button>
                                            </span>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </section>
            <!-- End Content Central -->
            <footer id="footer" class="footer-v3">
                        <div class="container">
                            <div class="row">         
                                <div class="col-md-4">
                                    <div class="img-footer">
                                        <img src="img/arreglos-png/micorazonestuyo.png" class="img-responsive" alt="img">
                                    </div>
                                </div>                  

                                <div class="col-md-offset-1 col-md-7">
                                    <div class="row">                             
                                        <!-- Social Us-->
                                        <div class="col-md-6">
                                            <h3>BUSCANOS EN...</h3>
                                            <ul class="social">
                                                <li class="facebook"><span><i class="fa fa-facebook"></i></span><a href="https://www.facebook.com/arreglosfrutales.joallyocosingo?fref=ts">Facebook</a></li>
                                                <li class="twitter"><span><i class="fa fa-twitter"></i></span><a href="#">Twitter</a></li>
                                            </ul>
                                        </div>
                                    </div>  
                                    <div class="divisor"></div>
                                </div>
                            </div>
                        </div>

                        <!-- footer Down-->
                        <div class="footer-down">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-5">
                                        <p>&copy; Arreglos Frutales Joally - Derechos Reservados</p>
                                    </div>
                                </div>
                            </div>
                        </div>
            </footer>
                        <!-- footer Down-->
        </div
        <!-- End layout-->

        <!-- ======================= JQuery libs =========================== -->
        <!-- jQuery local--> 
        <script src="js/jquery.js"></script>  
        <script src="js/jquery-ui.1.10.4.min.js"></script>                
        <!--Nav-->
        <script src="js/nav/jquery.sticky.js" type="text/javascript"></script>    
        <!--Totop-->
        <script type="text/javascript" src="js/totop/jquery.ui.totop.js" ></script>  
         <!--Accorodion-->
        <script type="text/javascript" src="js/accordion/accordion.js" ></script>  
        <!--Slide Revolution-->
        <script type="text/javascript" src="js/rs-plugin/js/jquery.themepunch.tools.min.js" ></script>      
        <script type='text/javascript' src='js/rs-plugin/js/jquery.themepunch.revolution.min.js'></script>    
        <!-- Maps -->
        <script src="js/maps/gmap3.js"></script>            
        <!--Ligbox--> 
        <script type="text/javascript" src="js/fancybox/jquery.fancybox.js"></script> 
        <!-- carousel.js-->
        <script src="js/carousel/carousel.js"></script>
        <!-- Filter -->
        <script src="js/filters/jquery.isotope.js" type="text/javascript"></script>
        <!-- Twitter Feed-->
        <script src="js/twitter/jquery.tweet.js"></script> 
        <!-- flickr Feed-->
        <script src="js/flickr/jflickrfeed.min.js"></script>    
        <!--Theme Options-->
        <script type="text/javascript" src="js/theme-options/theme-options.js"></script>
        <script type="text/javascript" src="js/theme-options/jquery.cookies.js"></script> 
        <!-- Bootstrap.js-->
        <script type="text/javascript" src="js/bootstrap/bootstrap.js"></script>
        <script type="text/javascript" src="js/bootstrap/bootstrap-slider.js"></script> 
        <!--MAIN FUNCTIONS-->
        <script type="text/javascript" src="js/main.js"></script>
        
        <script type="text/javascript" src="js/bootbox.min.js" ></script>
        <!-- ======================= End JQuery libs =========================== -->


        <script src="controlador/ClienteNuevo.js" type="text/javascript"></script>
        
        <!--Slider Function-->
        <script type="text/javascript">
            jQuery(document).ready(function() { 
                jQuery('.tp-banner').show().revolution({
                    dottedOverlay:"none",
                    delay:9000,
                    startwidth:1170,
                    startheight:800,
                    minHeight:500,
                    navigationType:"none",
                    navigationArrows:"solo",
                    navigationStyle:"preview1"
                });             
            }); //ready
        </script>
        <!--End Slider Function-->
    </body>
</html>