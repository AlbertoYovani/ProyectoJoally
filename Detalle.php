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
                    $id= $_GET['id'];
                    $sql = "SELECT *FROM arreglo WHERE arreglo.id =".$id;
                    $query = mysqli_query(ConexionBd(),$sql);
                    $res=$query->fetch_assoc();
                    ?>
                   
                    <div class="col-md-7 col-md-offset-1">
                        <div id="single-carousel">
                            <div class="img-hover">
                                <div class="overlay"> <a href="<?=$res['imagen']?>" class="fancybox" rel="gallery"></a></div>
                                <img src="<?=$res['imagen']?>" alt="" class="img-responsive" >
                            </div>
                        </div>    
                        <br>
                        <h2 title="Nombre del arreglo" style="color: #308DE4"><?=$res['nombre']?></h2>
                        <br>
                        <h4 style="margin-left: 20px;">Tamaños</h4>
                        <div class=" col-md-12">
                            <a title="Seleccione" href="#" class="btn btn-primary precio" data-id="<?=$res['id']?>" id="1">Extra-Grande</a>
                            <a title="Seleccione" href="#" class="btn btn-primary precio" data-id="<?=$res['id']?>" id="2">Grande</a>
                            <a title="Seleccione" href="#" class="btn btn-primary precio" data-id="<?=$res['id']?>" id="3">Mediano</a>
                            <a title="Seleccione" href="#" class="btn btn-primary precio" data-id="<?=$res['id']?>" id="4">Junior</a>
                            <a title="Seleccione" href="#" class="btn btn-primary precio" data-id="<?=$res['id']?>" id="5">Pequeño</a>
                        </div>
                        <br>
                        <div id="precios">
                            <br><br>
                            <h5 style="font-size: 14px; color: #000000; margin-left: 170px">Precio: << Seleccione un tamaño >> </h5> 
                        </div>
                        <br>
                        <div style="margin-left: 160px">
                            <h5>Cantidad: <input type="number" name="pedidos_cantidad" title="Cantidad a ordenar" class="form-control-static"></h5>
                        </div>
                        <div class="col-md-5 pointer-icono" style="margin-left: 150px !important;">
                            <br>
                            <div style="color: #308DE4; border: solid 1px #000 !important; text-align: center; background-color: #000;">
                                <i class="fa fa-cart-plus fa-2x" style="color:#88C425"> 
                                    <h6 style="color: #88C425;">AGREGAR A CARRITO</h6>
                                </i>
                            </div><br><br>
                        </div>
                        
                        <hr class="separator">
                        <div class="row">
                            <div class="col-md-7">
                                <h5 style="margin-top: 0px"><i class="fa fa-phone"></i> 9191222708</h5>
                                <h5 style="margin-top: 0px"><i class="fa fa-envelope-o"></i> joallyfrutas@hotmail.com</h5>
                            </div>
                        </div>
                        <br>
                        <h4 style="color: #308DE6">Descripción</h4>
                        <p class="text-justify"><?=$res['descripcion'] ?></p>
                        <br>
                        <h4 style="color: #308DE6">Categoría</h4>
                        <p>Sin Chocolate</p>
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
                            <div class="col-md-4">
                                <div class="img-hover">
                                    <img src="" alt="" class="img-responsive">
                                    <div class="overlay"><a href="img/arreglos/img3.png" class="fancybox"><i class="fa fa-plus-circle"></i></a></div>
                                </div>
                            </div>
                            <div class="col-md-5" style="padding: 0px">
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
                        $sql = mysqli_query(ConexionBd(),"SELECT *FROM arreglo limit 8");
                        while($res= mysqli_fetch_array($sql)){ ?>
                        <h4></h4>
                        <a href="Arreglos.php">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="img-hover">
                                        <img src="<?=$res['imagen'] ?>" alt="" class="img-responsive">                     
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