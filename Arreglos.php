<?php 
    include'./include/headerP.php';
    require_once 'conexion.php';
    error_reporting(0);
?>  
<link href="css/simplePagination.css" rel="stylesheet">
<div class="section-title-01">
    <div class="bg_parallax image_04_parallax" style="background: url(img/fondo1.jpg);background-size: cover;background-position: center"></div>
    <div class="opacy_bg_02">

        <div class="container" style="margin-top: -50px !important">
            <h1><img src="img/logo.png" style="width: 250px; height: 210px;"></h1><br><br><br><br>
            <div class="crumbs">
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li>/</li>
                    <li>Arreglos Frutales</li>    
                </ul>    
            </div>
        </div>  
    </div>
</div>  
<style>
.maxl{
  margin:25px ;
}
.inline{
  display: inline-block;
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
<!--Content Central -->
<div class="content-central" style="margin-top: -125px;">
    <div class="semiboxshadow text-center">
        <img src="img/img-theme/shp.png" class="img-responsive" alt="">
    </div>
    <div class="content_info">
        <div class="container">
            <div class="row">
                <!-- Left Sidebar-->
                <div class="col-md-3 ">
                    <div class=" col-filtro padding-top-mini ">
                        
                        <h4>BUSCAR ARREGLOS</h4>
                        <form method="GET" action="Arreglos.php">
                        <div class="input-group">
                            <input type="hidden" name="Clasificacion" value="120">
                            <input type="hidden" name="Tipo" value="Nombre">
                            <input type="text" class="form-control" placeholder="Buscar Arreglo" value="<?=$_GET['Query']?>" name="Query">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit">Buscar</button>
                            </span>
                        </div>
                        </form>
                        <br>
                        <h4>FILTRAR ARREGLOS</h4>
                        <a href="Arreglos.php?Tipo=General&Clasificacion=0&Query=" class="filtro_class">
                            <label class="radio inline" > 
                                <input type="radio" name="arreglo_clasficacion" <?=$_GET['Clasificacion']==0 ? 'checked': ''?> value="0" data-tipo="General">
                                <span>Todos los Arreglos </span> 
                            </label>
                        </a><br>
                        <a href="Arreglos.php?Tipo=Clasificacion&Clasificacion=1&Query=" class="filtro_class">
                            <label class="radio inline"> 
                                <input type="radio" name="arreglo_clasficacion" <?=$_GET['Clasificacion']==1 ? 'checked': ''?> value="1" data-tipo="Clasificacion">
                                <span>Sin Chocolate </span> 
                            </label>
                        </a><br>
                        <a href="Arreglos.php?Tipo=Clasificacion&Clasificacion=2&Query=" class="filtro_class">
                            <label class="radio inline"> 
                                <input type="radio" name="arreglo_clasficacion" <?=$_GET['Clasificacion']==2 ? 'checked': ''?> value="2" data-tipo="Clasificacion">
                                <span>Con Chocolate </span> 
                            </label>
                        </a><br>
                        <a href="Arreglos.php?Tipo=Clasificacion&Clasificacion=3&Query=" class="filtro_class">
                            <label class="radio inline"> 
                                <input type="radio" name="arreglo_clasficacion" <?=$_GET['Clasificacion']==3 ? 'checked': ''?> value="3" data-tipo="Clasificacion">
                                <span>Con Extra Chololate </span> 
                            </label>
                        </a>
                    </div>
                </div>
                <!-- End Left Sidebar-->

                <div class="col-md-9 col-content" >
                    <br><br>
                    <div class="row list-view row-list-arreglos " >
                        <?php
                            if(isset($_GET['Tipo'])){
                                $Valor=$_GET['Query'];
                                $FILTRO_TIPO=$_GET['Tipo'];
                                $Clasificacion=$_GET['Clasificacion'];
                                if($FILTRO_TIPO=='Nombre'){
                                    $sql= mysqli_query(ConexionBd(), "SELECT * FROM arreglo, jy_clasificacion, jy_arreglo_clasificacion
                                                                WHERE
                                                                jy_arreglo_clasificacion.clasificacion_id=jy_clasificacion.clasificacion_id AND
                                                                jy_arreglo_clasificacion.arreglo_id=arreglo.id AND arreglo.nombre LIKE '%$Valor%'");
                                }if($FILTRO_TIPO=='Clasificacion'){
                                    $sql= mysqli_query(ConexionBd(), "SELECT * FROM arreglo, jy_clasificacion, jy_arreglo_clasificacion
                                                                WHERE
                                                                jy_arreglo_clasificacion.clasificacion_id=jy_clasificacion.clasificacion_id AND
                                                                jy_arreglo_clasificacion.arreglo_id=arreglo.id AND  jy_clasificacion.clasificacion_id=$Clasificacion");
                                }if($FILTRO_TIPO=='General'){
                                    $sql= mysqli_query(ConexionBd(), "SELECT * FROM arreglo, jy_clasificacion, jy_arreglo_clasificacion
                                                                WHERE
                                                                jy_arreglo_clasificacion.clasificacion_id=jy_clasificacion.clasificacion_id AND
                                                                jy_arreglo_clasificacion.arreglo_id=arreglo.id ");
                                }
                            }else{
                                $sql= mysqli_query(ConexionBd(), "SELECT * FROM arreglo, jy_clasificacion, jy_arreglo_clasificacion
                                        WHERE
                                        jy_arreglo_clasificacion.clasificacion_id=jy_clasificacion.clasificacion_id AND
                                        jy_arreglo_clasificacion.arreglo_id=arreglo.id LIMIT 20");
                            }
                        $col='';
                        while ($row = mysqli_fetch_array($sql)) {
                            $Tam= mysqli_query(ConexionBd(), "SELECT * FROM tamanio WHERE tamanio.arreglo_id=".$row['id']);
                            $TAM_LIST='';
                            while ($RESUL_TAM = mysqli_fetch_array($Tam)) {
                                $TAM_LIST.=$RESUL_TAM['tamanio_nombre'].', ';
                            }
                            
                        ?>
                        <div class="col-md-12">
                            <div class="img-hover">
                                <img src="<?=$row['imagen']?>" alt="" class="img-responsive">
                                <div class="overlay"><a href="<?=$row['imagen']?>" class="fancybox"><i class="fa fa-plus-circle"></i></a></div>
                            </div>

                            <div class="info-gallery">
                                <h3 style="text-transform: uppercase">
                                    <?=$row['nombre']?><br>
                                    <span style="text-transform: none"><b>Tamaños:</b> <?= trim($TAM_LIST, ', ')?></span>
                                </h3>
                                <hr class="separator">
                                <p style="height: 40px;"><b>Descripción:</b> <?= substr($row['descripcion'], 0,150)?>...</p>
                                <ul class="starts">
                                    <li><i class="fa fa-bookmark-o"></i> <?=$row['clasificacion_nombre']?></li>
                                </ul>
                                <div class="content-btn">
                                    <a href="Detalle.php?id=<?=$row['id']?>" class="btn btn-primary">Ver Detalles</a>
                                </div>
                            </div>
                        </div>
                        <?php }?>
                    </div>
                    <br><br><br>
                </div>
            </div>
        </div>
    </div>   
</div>
<!-- End Content Central -->
<!-- End Section Title-->
<?php include'./include/footer.php';?>
<script src="js/jquery.bootpag.min.js" type="text/javascript"></script>
<script src="js/Jy_Arreglos.js?<?= md5(microtime())?>"></script>
<script src="js/Arreglos.js?<?= md5(microtime())?>"></script>