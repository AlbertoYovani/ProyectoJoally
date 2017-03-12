<?php include './include/header.php';?>
            <div class="section-title-01">
                <div class="bg_parallax image_04_parallax" style="background: url(img/footer3.jpg);background-size: cover!important;background-position: center"></div>
                <div class="opacy_bg_02">
                     <div class="container">
                         <br><br><br><br>
                         <img src="img/logo.png" style="width: 250px; height: 210px;">
                    </div>  
                </div>  
            </div><br><br>
            <section class="content-central">
                <!-- Shadow Semiboxed -->
                <div class="semiboxshadow text-center">
                    <img src="" class="img-responsive" alt="">
                </div>
                <div class="content_info">
                    <div class="content-boxes">
                    <?php
                        require_once 'conexion.php';
                        $sql = mysqli_query(ConexionBd(),"SELECT *FROM arreglo limit 2");
                        while($res= mysqli_fetch_array($sql)){ ?>
                        
                        <div class="item-boxed"><br><br>
                            <div class="image-boxed">
                                <span class="overlay"></span>
                                <div class="img-hover">
                                    <div class="overlay"> <a href="<?=$res['imagen']?>" class="fancybox" rel="gallery"></a></div>
                                    <img src="<?=$res['imagen']?>" alt="" class="img-responsive" >
                                </div>
                                <a href="Arreglos.php" class="more-boxe"><i class="fa fa-plus-circle"></i></a>
                            </div>
                            <div class="info-boxed boxed-top">
                                <h3>
                                    <?=$res['nombre']?> <br>
                                    <span>Diferentes tamaños</span>
                                </h3>
                                <hr class="separator">
                                <p><?= substr($res['descripcion'],0,55)?>...</p>
                                <ul class="starts">
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-half-empty"></i></a></li>
                                </ul>
                                <div class="content-btn">
                                    <a href="Detalle.php" class="btn btn-primary" data-id="<?=$res['id'] ?>">Ver Detalles</a>
                                </div>
                            </div>
                        </div>
                    <?php } 
                        require_once 'conexion.php';
                        $sql = mysqli_query(ConexionBd(),"SELECT *FROM arreglo WHERE arreglo.id > 10 limit 2");
                        while($res= mysqli_fetch_array($sql)){ ?>
                        <div class="item-boxed">
                            <div class="info-boxed boxed-bottom">
                                <h3>
                                    <?=$res['nombre']?><br>
                                    <span>Diferentes tamaños</span>
                                </h3>
                                <hr class="separator">
                                <p><?= substr($res['descripcion'],0,55)?>...</p>
                                <ul class="starts">
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-half-empty"></i></a></li>
                                </ul>
                                <div class="content-btn"><a href="Detalle.php" class="btn btn-primary" data-id="<?=$res['id'] ?>">Ver Detalles</a></div>
                            </div>
                            <br><br>
                            <div class="image-boxed image-bottom">
                                <span class="overlay"></span>
                                <div class="img-hover">
                                    <div class="overlay"> <a href="<?=$res['imagen']?>" class="fancybox" rel="gallery"></a></div>
                                    <img src="<?=$res['imagen']?>" alt="" class="img-responsive">
                                </div>
                                <a href="Arreglos.php" class="more-boxe"><i class="fa fa-plus-circle"></i></a>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>   
                <br>
                <section class="content_info">
                    <!-- Info Resalt-->
                    <div class="padding-bottom">
                        <!-- Title -->
                        <div class="container">
                            <div class="row">
                                <div class="titles">
                                    <h2 style="color: #42A9D3">Para toda ocasión</h2>
                                    <hr class="tall">
                                </div>                    
                            </div>
                        </div>
                        <div id="boxes-carousel">
                            <div>
                                <div class="img-hover">
                                    <img src="img/slider/boda2.jpg" alt="" class="img-responsive">
                                    <div class="overlay"><a href="img/slider/boda2.jpg" class="fancybox"><i class="fa fa-plus-circle"></i></a></div>
                                </div>

                                <div class="info-gallery">
                                    <h3>
                                        Bodas
                                    </h3>
                                    <hr class="separator">
                                    <p>Los mejores arreglos frutales para una ocasión unica en la vida, disfrutalo acompañado de estos hermosos arreglos.</p>
                                    <div class="content-btn"><a href="#" class="btn btn-primary">Ver más</a></div>
                                </div>
                            </div>
                            <div>
                                <div class="img-hover">
                                    <img src="img/slider/cumple2.jpg" alt="" class="img-responsive">
                                    <div class="overlay"><a href="img/slider/cumple2.jpg" class="fancybox"><i class="fa fa-plus-circle"></i></a></div>
                                </div>
                                <div class="info-gallery">
                                    <h3>
                                        Cumpleaños
                                    </h3>
                                    <hr class="separator">
                                    <p>Para que sienta el afecto, porque no regalar un arreglo de frutas, muy ricos y frutas de temporada.</p>
                                    <div class="content-btn"><a href="#" class="btn btn-primary">Ver más</a></div>
                                </div>
                            </div>
                            <div>
                                <div class="img-hover">
                                    <img src="img/slider/xvanios2.jpg" alt="" class="img-responsive">
                                    <div class="overlay"><a href="img/slider/xvanios2.jpg" class="fancybox"><i class="fa fa-plus-circle"></i></a></div>
                                </div>
                                <div class="info-gallery">
                                    <h3>
                                        XV años
                                    </h3>
                                    <hr class="separator">
                                    <p>Para una fecha unica, un arreglo unico que acomapañe a esas grandes princesas en un gran día.</p>
                                    <div class="content-btn"><a href="#" class="btn btn-primary">Ver más</a></div>
                                </div>
                                
                            </div>
                            <div>
                                <div class="img-hover">
                                    <img src="img/slider/bautizos1.jpg" alt="" class="img-responsive" style="height: 206px !important; width: 350px !important;">
                                    <div class="overlay"><a href="img/slider/bautizos1.jpg" class="fancybox"><i class="fa fa-plus-circle"></i></a></div>
                                </div>
                                <div class="info-gallery">
                                    <h3>
                                        Bautizos
                                    </h3>
                                    <hr class="separator">
                                    <p>Para los pequeños gigantes, los que siempre disfrutan de algo delicioso, acompañalos con un buen regalo.</p>
                                    <div class="content-btn"><a href="#" class="btn btn-primary">Ver más</a></div>
                                </div>
                            </div>
                            <div>
                                <div class="img-hover">
                                    <img src="img/slider/aniversario1.png" alt="" class="img-responsive" style="height: 206px !important;">
                                    <div class="overlay"><a href="img/slider/aniversario1.png" class="fancybox"><i class="fa fa-plus-circle"></i></a></div>
                                </div>
                                <div class="info-gallery">
                                    <h3>
                                        Aniversarios
                                    </h3>
                                    <hr class="separator">
                                    <p>La fecha más esperada, puede estar acompañada de un buen regalo de dulces colores y sabores en diferentes medidas.</p>
                                    <div class="content-btn"><a href="#" class="btn btn-primary">Ver más</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> 
                <br>
                <!-- End content info - Services Items-->
                <div class="content_info">
                    <div class="bg-dark color-white border-top" style="background-color: #FA5882 !important;">
                        <div class="container">
                            <div class="row">
                                <!-- Info Resalt - Info Services -->
                                <div class="col-md-4 ">
                                    <div class="services-lines-info">
                                        <h2>Bienvenido a Joally Arreglos Frutales</h2>
                                        <p class="lead">
                                            Realiza tus pedidos de la manera más fácil.
                                            <span class="line"></span>
                                        </p>

                                        <p>Si buscas momentos inolvidables al lado de las personas que mas quieres, te recomendamos un arreglo especial, con colores, sabores y distintas presenataciones que solo Joally Arreglos Frutales te ofrece.</p>
                                    </div>
                                </div>   
                                <!-- End Info Resalt - Info Services --> 

                                <!-- Services Items -->
                                <div class="col-md-8">
                                    <ul class="services-lines">
                                    <?php
                                    require_once 'conexion.php';
                                    $sql = mysqli_query(ConexionBd(),"SELECT *FROM arreglo WHERE arreglo.id < 13 limit 8");
                                    while($res= mysqli_fetch_array($sql)){ ?>    
                                        <li>
                                            <div class="item-service-line">
                                                <img src="<?=$res['imagen'] ?>" style="width: 80px; height: 80px;">
                                                <h5 style="color:#FA5882 !important;"><?=$res['nombre']?></h5>
                                            </div>
                                        </li>
                                    <?php } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </section>
            <!-- End Content Central -->
      <?php include './include/footer.php';?>
    <script src="js/Arreglos.js?<?= md5(microtime())?>"></script>