<?php include './include/headerP.php';?>
<div class="section-title-01" style="margin-bottom: 180px !important;">
    <div class="bg_parallax image_04_parallax" style="background: url(img/footer3.jpg);background-size: cover!important;background-position: center"></div>
    <div class="opacy_bg_02">
         <div class="container">
             <br><br><br><br>
             <img src="img/logo.png" style="width: 250px; height: 210px;">
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
                        require_once 'conexion.php';
                        $arre = "SELECT *, clasificacion.id AS clasificacion_id, 
                                 arreglo.nombre AS nombre_A, clasificacion.nombre AS nombre_Cla 
                                 FROM arreglo,clasificacion 
                                 WHERE clasificacion.id = arreglo.idCa 
                                 AND arreglo.id =".$_GET['id'];
                        $queri = mysqli_query(ConexionBd(),$arre);
                        $ress=$queri->fetch_assoc();
                    ?>
                    <div class="col-md-7 col-md-offset-1">
                        <div id="single-carousel">
                            <div class="img-hover">
                                <div class="overlay"> <a href="<?php echo 'data:image/jpeg;base64,' . base64_encode($ress['imagen']) . ''; ?>" class="fancybox" rel="gallery"></a></div>
                                <?php echo '<img alt="" class="img-responsive" src="data:image/jpeg;base64,' . base64_encode($ress['imagen']) . '">'; ?>
                            </div>
                        </div>    
                        <br>
                        <h2 title="Nombre del arreglo" style="color: #FA5882"><?=$ress['nombre_A']?></h2>
                        <br>

                    <div class="row">
                            <div class="col-md-4">
                                <a style="width: 200px; margin-bottom: 8px; background: #308DE4 !important;" 
                                   data-tamanio="1" class="btn btn-primary Precio-arreglo-tamanio">Extra-Grande
                                </a>
                                <a style="width: 200px; margin-bottom: 8px; background: #308DE4 !important;" 
                                   data-tamanio="2" class="btn btn-primary Precio-arreglo-tamanio">Grande
                                </a>
                                <a style="width: 200px; margin-bottom: 8px; background: #308DE4 !important;" 
                                   data-tamanio="3" class="btn btn-primary Precio-arreglo-tamanio">Mediano
                                </a>
                                <a style="width: 200px; margin-bottom: 8px; background: #308DE4 !important;" 
                                   data-tamanio="4" class="btn btn-primary Precio-arreglo-tamanio">Pequeño
                                </a>
                                <a style="width: 200px; margin-bottom: 8px; background: #308DE4 !important;" 
                                   data-tamanio="5" class="btn btn-primary Precio-arreglo-tamanio">Junior
                                </a>
                            </div>
                            <div class="col-md-5 col-md-offset-2">
                                <div class="precio-arreglo">
                                    <h2 style=" font-size:40px ;color: #308DE4;">MXN$ 00.00</h2> 
                                </div>
                                <!--Obtiene el nombre del arreglo, sirve para realizarel INSERT  del arreglo-->
                                <input type="hidden" id="tamanio_id" name="tamanio_id" class="form-control" value="">
                                <input type="hidden" id="arreglo_nombre" name="arreglo_nombre" class="form-control" value="<?=$ress['nombre_A']?>">
                                <input type="hidden" name="clasificacion_id" class="form-control" value="<?=$ress['clasificacion_id']?>">
                                <input type="number" placeholder="Cantidad" autofocus="" name="pedidos_cantidad" class="form-control">
                                <br>
                                <input type="button" name="pedidos_cantidad" class="btn btn-primary btn-block agregar-pedido" value="GREGAR A CARRITO">
                            </div>
                        </div>
                        <hr class="separator">
                        <br>
                        <h4 style="color: #308DE6">Descripción</h4>
                        <p style="color: #6E6E6E" class="text-justify"><?=$ress['descripcion']?></p>
                        <h4 style="color: #308DE6">Clasificación</h4>
                        <p style="color: #6E6E6E" class="text-justify"><?=$ress['nombre_Cla']?></p>
                        <hr class="separator">
                        <div class="row">
                            <div class="col-md-7">
                                <h5 style="margin-top: 0px"><i class="fa fa-phone"></i> 9191222708</h5>
                                <h5 style="margin-top: 0px"><i class="fa fa-envelope-o"></i> joallyfrutas@hotmail.com</h5>
                            </div>
                        </div>
                        <br>
                        <h4 style="color: #308DE6">Servicios</h4>
                        <div class="row">
                            <div class="col-md-3 text-center">
                                <i class="fa fa-taxi fa-2x" style="color: #88C425"></i><br>
                                <p style="font-size: 12px;line-height: 1.2;color: #FA5882">Entrega a Domicilio</p>
                            </div>
                            <div class="col-md-3 text-center">
                                <i class="fa fa-home fa-2x" style="color: #88C425"></i><br>
                                <p style="font-size: 12px;line-height: 1.2;color: #FA5882">Recojer en sucursal</p>
                            </div>
                        </div>
                        <br>
                        <h3 class="text-center" style="color:#308DE5 ">El mejor servicio</h3>
                        <hr class="separator">
                        <br>
                        <div class="row mas-info-habitacion">
                            <div class="col-md-5 col-md-offset-4" style="padding: 0px">
                                <h6 style="margin-top: -6px; margin-left:75px !important;">
                                    <a href="Contactos.php" class="mas-info-click no-decoration" data-class="1">Más Información</a>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <h3>Más arreglos</h3>
                        <?php
                        require_once 'conexion.php';
                        $sql = mysqli_query(ConexionBd(),"SELECT *FROM arreglo WHERE arreglo.tamanio = 1 LIMIT 8");
                        while($res= mysqli_fetch_array($sql)){ ?>
                        <h4></h4>
                        <a href="Detalle.php?id=<?=$res['id']?>">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="img-hover">
                                        <?php echo '<img alt="" class="img-responsive" src="data:image/jpeg;base64,' . base64_encode($res['imagen']) . '">'; ?>                     
                                    </div>
                                </div>
                                <div class="col-md-6" style="padding-left: 2px">
                                    <h6 style=""><strong><?=$res['nombre'] ?></strong></h6>
                                    <h6><i class="fa fa-star-half-o" style="color: #88C425"></i> <?= substr($res['descripcion'],0,10)?>...</h6>
                                </div>
                            </div>
                        </a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>   
    </div>
</div>
<?php include './include/footer.php';?>
<script src="js/Arreglos.js?<?= md5(microtime())?>"></script>