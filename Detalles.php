<?php include './include/header.php';?>
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
                        <div class="row">
<style>
    .maxl{
      margin:25px ;
    }
    .inline{
      display: inline-block;
    }
    .inline{
        margin-bottom: -3px; 
    }
    .inline + .inline{
      margin-left:10px;
    }
    .radio{
      color:#999;
      font-size:15px;
      position:relative;
    }
    .radio span{
      position:relative;
       padding-left:20px;
    }
    .radio span:after{
      content:'';
      width:15px;
      height:15px;
      border:3px solid;
      position:absolute;
      left:0;
      top:1px;
      border-radius:100%;
      -ms-border-radius:100%;
      -moz-border-radius:100%;
      -webkit-border-radius:100%;
      box-sizing:border-box;
      -ms-box-sizing:border-box;
      -moz-box-sizing:border-box;
      -webkit-box-sizing:border-box;
    }
    .radio input[type="radio"]{
       cursor: pointer; 
      position:absolute;
      width:100%;
      height:100%;
      z-index: 1;
      opacity: 0;
      filter: alpha(opacity=0);
      -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)"
    }
    .radio input[type="radio"]:checked + span{
      color:#0B8;  
    }
    .radio input[type="radio"]:checked + span:before{
        content:'';
      width:5px;
      height:5px;
      position:absolute;
      background:#0B8;
      left:5px;
      top:6px;
      border-radius:100%;
      -ms-border-radius:100%;
      -moz-border-radius:100%;
      -webkit-border-radius:100%;
    }

</style>
                            
                            <div class="col-md-4">
                                <button class="btn btn-primary btn-mini">Pequeño</button>
                                <h4>Tamaños</h4>
                                    <label class="radio inline" title="Seleccionar"> 
                                    <input type="radio" name="arreglo_tamanio" value="0" data-tipo="tamanio">
                                    <span>Extra-Grande </span> 
                                </label><br>
                                <label class="radio inline" title="Seleccionar"> 
                                    <input type="radio" name="arreglo_tamanio" value="1" data-tipo="tamanio">
                                    <span>Grande </span> 
                                </label><br>
                                <label class="radio inline" title="Seleccionar"> 
                                    <input type="radio" name="arreglo_tamanio" value="2" data-tipo="tamanio">
                                    <span>Mediano </span> 
                                </label><br>
                                <label class="radio inline" title="Seleccionar"> 
                                    <input type="radio" name="arreglo_tamanio" value="4" data-tipo="tamanio">
                                    <span>Junior </span> 
                                </label><br>
                                <label class="radio inline" title="Seleccionar"> 
                                    <input type="radio" name="arreglo_tamanio" value="5" data-tipo="tamanio">
                                    <span>Pequeño </span> 
                                </label>
                            </div>
                            <div class="col-md-5 col-md-offset-3">
                                <br><br>
                                <div id="precios">
                                    <h2 style=" font-size:40px ;color: #308DE4;">MXN$ 123.00 </h2> 
                                </div>
                                <br>
                                <input type="number" placeholder="Cantidad" autofocus="" name="pedidos_cantidad" class="form-control">
                                <br>
                                <input type="button" name="pedidos_cantidad" class="btn btn-primary btn-block" value="GREGAR A CARRITO">
                            </div>
                            <br><br>
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
