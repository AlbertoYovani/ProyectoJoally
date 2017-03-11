<?php include './include/headerP.php';?>
<div class="section-title-01">
    <div class="bg_parallax image_04_parallax" style="background: url(img/footer3.jpg);background-size: cover!important;background-position: center"></div>
    <div class="opacy_bg_02">
         <div class="container">
             <h1 style="text-transform: none">Arreglos</h1>
        </div>  
    </div>  
</div>
<div class="content-central" style="margin-top: -300px">
    <div class="semiboxshadow text-center">
        <img src="img/img-theme/shp.png" class="img-responsive" alt="">
    </div>
    <div class="content_info">
        <div class=" paddings-mini tabs-detailed">
            <div class="container wow fadeInUp">
                <div class="row" >
                    
                    <?php 
                    include './conexion.php';
                    $sql = mysqli_query(ConexionBd(), "SELECT * FROM arreglo, jy_clasificacion, jy_arreglo_clasificacion, tamanio
                                                        WHERE
                                                        jy_arreglo_clasificacion.arreglo_id=arreglo.id AND
                                                        jy_arreglo_clasificacion.clasificacion_id=jy_clasificacion.clasificacion_id AND
                                                        tamanio.arreglo_id = arreglo.id AND
                                                        arreglo.id=".$_GET['arreglo']);
                    $res=mysqli_fetch_array($sql);
                    ?>
                   
                    <div class="col-md-7 col-md-offset-1">
                        <div id="single-carousel" style="margin-left: 40px !important;">
                            <div class="img-hover">
                                <div class="overlay" style="width: 55%"> <a href="img/arreglos/img2.png" class="fancybox" rel="gallery"></a></div>
                                <img src="img/arreglos/img2.png" alt="" class="img-responsive" style="width: 55%">
                            </div>
                        </div>    
                        <br>
                        <h2 style="color: #308DE4"><?=$res['nombre']?></h2>
                        <hr class="separator">
                        <div class="row">
                            <div class="col-md-7">
                                <h5 style="margin-top: 0px"><i class="fa fa-phone"></i> 9191222708</h5>
                                <h5 style="margin-top: 0px"><i class="fa fa-envelope-o"></i> joallyfrutas@hotmail.com</h5>
                            </div>
                            <div class="col-md-5">
                                <h5 style="color: #308DE4; border: solid 1px #000 !important; text-align: center; background-color: #000" class="text-left">AGREGAR A CARRITO</h5>
                            </div>
                        </div>
                        <h4>Acerca del hotel</h4>
                        <p class="text-justify">Fiesta Americana Veracruz es un exclusivo hotel con estupendas instalaciones tanto para el viajero de negocios como para el vacacionista que busca alojamiento refinado en el Puerto de Veracruz. Cuenta con dos restaurantes, tres bares, spa, piscina al aire libre y 233 elegantes habitaciones con una extensa gama de servicios y amenidades. La propiedad está situada frente al mar en las playas de Boca del Río.
                            El hotel está en proceso de remodelación en áreas públicas hasta nuevo aviso (el resto funciona de manera habitual). Favor de disculpar los inconvenientes.</p>
                        <br>
                        <h4>Categoría</h4>
                        <p>Familiar, Negocios</p>
                        <h4>Servicios</h4>
                        <div class="row">
                            <div class="col-md-3 text-center">
                                <i class="fa fa-wifi fa-2x"></i><br>
                                <p style="font-size: 12px;line-height: 1.2;color: #308DE5">Internet</p>
                            </div>
                            <div class="col-md-3 text-center">
                                <i class="fa fa-television fa-2x"></i><br>
                                <p style="font-size: 12px;line-height: 1.2;color: #308DE5">Caja de Seguridad</p>
                            </div>
                        </div>
                        <br>
                        <h3 class="text-center" style="color:#308DE5 ">Habitaciones</h3>
                        <hr class="separator">
                        <br>
                        <div class="row mas-info-habitacion">
                            <div class="col-md-4">
                                <div class="img-hover">
                                    <img src="" alt="" class="img-responsive">
                                    <div class="overlay"><a href="img/arreglos/img3.png" class="fancybox"><i class="fa fa-plus-circle"></i></a></div>
                                </div>
                            </div>
                            <div class="col-md-5" style="padding: 0px">
                                <h3 style="font-size: 15px;color:#308DE5;margin-top: -6px ">
                                    Superior Doble Vista al Mar<br>
                                </h3>
                                <h6 style="margin-top: -6px">
                                    <i class="fa fa-bed"></i>Camas: 2 camas Matrimoniales<br><br>
                                    <i class="fa fa-users"></i> Capacidad Max: 4 personas<br><br>
                                    <i class="fa fa-clock-o"></i> Llegada: 03:00PM 
                                    <i class="fa fa-clock-o"></i> Salida: 12:00PM                                    <br><br>
                                    <a href="#" class="mas-info-click no-decoration" data-class="1">Más Información</a>
                                </h6>
                            </div>
                            <div class="col-md-3">
                                <h3 class="text-right" style="color: #308DE5">$4,333.00</h3>
                                <h6 class="text-right" style="font-size: 12px;margin-top: -12px!important">Impuestos incluidos</h6>
                            </div>
                            <div class="col-md-12 mas-info-1 text-justify hide">
                                <p><strong>Servicios :</strong> Aire Acondicionado,Cafetera,Plancha,Caja de Seguridad,Reloj Despertador,Acceso a Internet,Tabla para Planchar,Internet Inalámbrico,Amenidades de Baño,Secadora de Cabello,Minibar,Room Service</p>
                                <p><strong>Descripción:</strong> Situadas en los pisos del 1 al 5, estas amplias habitaciones están decoradas en estilo contemporáneo y equipadas con modernos servicios. Tienen espaciosas ventanas y un balcón privado con relajantes vistas. Disfruta una estancia llena de comodidades durante tu próximo viaje a la zona de Boca del Río en Veracruz.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <h4>Más Arreglos</h4>
                        <a href="img/arreglos/img2.png">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="img-hover">
                                        <img src="img/arreglos/img2.png" alt="" class="img-responsive" style="width: 100%">                     
                                    </div>
                                </div>
                                <div class="col-md-6" style="padding-left: 2px">
                                    <h6 style=""><strong>Galería Plaza Verac...</strong></h6>
                                    <h6 style="margin-top: -7px;"><i class="fa fa-phone"></i> 01.800.083.5886</h6>
                                    <h6 style="margin-top: -12px;width: 100%"><i class="fa fa-map-marker"></i> Blvd. Adolfo Ruiz ...</h6>
                                </div>
                            </div>
                        </a>
                        <h4>Más Buscados</h4>
                        <a href="img/arreglos/img2.png">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="img-hover">
                                        <img src="img/arreglos/img2.png" alt="" class="img-responsive" style="width: 100%">                     
                                    </div>
                                </div>
                                <div class="col-md-6" style="padding-left: 0px;margin-top: -5px">
                                    <h6 style="color: #308DE5"><strong>El Nuevo Veracruzano...</strong></h6>
                                    <h6 style="margin-top: -7px;"><i class="fa fa-map-marker"></i> Avenida Independe...</h6>
                                    <h6 style="margin-top: -12px;width: 100%"><i class="fa fa-pencil"></i> Venta de comida e...</h6>
                                </div>
                            </div>
                        </a>
                        <h4>Tours</h4>
                        <a href="img/arreglos/img2.png">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="img-hover">
                                        <img src="img/arreglos/img2.png" alt="" class="img-responsive" style="width: 100%">                     
                                    </div>
                                </div>
                                <div class="col-md-6" style="padding-left: 0px;margin-top: -5px">
                                    <h6 style="color: #308DE5"><strong>Turibus-Acuario, Ver...</strong></h6>
                                    <h6 style="margin-top: -7px;"><i class="fa fa-map-marker"></i> Boulevard Ávila ...</h6>
                                    <h6 style="margin-top: -12px;width: 100%"><i class="fa fa-pencil"></i> En el Tour Turibu...</h6>
                                </div>
                            </div>
                        </a>
                        <a href="img/arreglos/img2.png">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="img-hover">
                                        <img src="img/arreglos/img2.png" alt="" class="img-responsive" style="width: 100%">                     
                                    </div>
                                </div>
                                <div class="col-md-6" style="padding-left: 0px;margin-top: -5px">
                                    <h6 style="color: #308DE5"><strong>Tour en Tranvía a S...</strong></h6>
                                    <h6 style="margin-top: -7px;"><i class="fa fa-map-marker"></i> Veracruz Puerto...</h6>
                                    <h6 style="margin-top: -12px;width: 100%"><i class="fa fa-pencil"></i> Descubre algunas ...</h6>
                                </div>
                            </div>
                        </a>
                        <h4>Atractivos</h4>
                        <a href="img/arreglos/img2.png">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="img-hover">
                                        <img src="img/arreglos/img2.png" alt="" class="img-responsive" style="width: 100%">                     
                                    </div>
                                </div>
                                <div class="col-md-6" style="padding-left: 0px;margin-top: -5px">
                                    <h6 style="color: #308DE5"><strong>Parque acuático “...</strong></h6>
                                    <h6 style="margin-top: -7px;"><i class="fa fa-tags"></i> Familiar</h6>
                                    <h6 style="margin-top: -12px;width: 100%"><i class="fa fa-pencil"></i> Parque acuático ...</h6>
                                </div>
                            </div>
                        </a>
                        <a href="img/arreglos/img2.png">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="img-hover">
                                        <img src="img/arreglos/img2.png" alt="" class="img-responsive" style="width: 100%">                     
                                    </div>
                                </div>
                                <div class="col-md-6" style="padding-left: 0px;margin-top: -5px">
                                    <h6 style="color: #308DE5"><strong>Callejón del Niño ...</strong></h6>
                                    <h6 style="margin-top: -7px;"><i class="fa fa-tags"></i> Familiar</h6>
                                    <h6 style="margin-top: -12px;width: 100%"><i class="fa fa-pencil"></i> Se ubica en pleno...</h6>
                                </div>
                            </div>
                        </a>
                        <a href="img/arreglos/img2.png">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="img-hover">
                                        <img src="img/arreglos/img2.png" alt="" class="img-responsive" style="width: 100%">                     
                                    </div>
                                </div>
                                <div class="col-md-6" style="padding-left: 0px;margin-top: -5px">
                                    <h6 style="color: #308DE5"><strong>Huerto del Bambú...</strong></h6>
                                    <h6 style="margin-top: -7px;"><i class="fa fa-tags"></i> Familiar</h6>
                                    <h6 style="margin-top: -12px;width: 100%"><i class="fa fa-pencil"></i> Campamento Ecotur...</h6>
                                </div>
                            </div>
                        </a>
                        <h4>Festividades</h4>
                        <a href="img/arreglos/img2.png">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="img-hover">
                                        <img src="img/arreglos/img2.png" alt="" class="img-responsive" style="width: 100%">                     
                                    </div>
                                </div>
                                <div class="col-md-6" style="padding-left: 0px;margin-top: -5px">
                                    <h6 style="color: #308DE5"><strong>Fiestas al Niño Dio...</strong></h6>
                                    <h6 style="margin-top: -7px;"><i class="fa fa-calendar"></i> Del 2016/01/01</h6>
                                    <h6 style="margin-top: -12px;width: 100%"><i class="fa fa-pencil"></i> Se celebran con p...</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>   
    </div>
</div>
<?php include './include/footer.php';?>