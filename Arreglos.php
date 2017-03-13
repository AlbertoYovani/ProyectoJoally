<?php 
    include'./include/headerR.php';
    require_once 'conexion.php';
?>  
<link href="css/simplePagination.css" rel="stylesheet">
<div class="section-title-01">
    <div class="bg_parallax image_04_parallax" style="background: url(img/fondo1.jpg);background-size: cover;background-position: center"></div>
    <div class="opacy_bg_02">
<<<<<<< HEAD
=======
         <div class="container">
            <h1>Arreglos Frutales</h1>
<<<<<<< HEAD
            <div class="crumbs">
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li>/</li>
                    <li>Arreglos Frutales</li>    
                </ul>    
            </div>
=======
>>>>>>> origin/master
        </div>  
>>>>>>> origin/master
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
<div class="content-central" style="margin-top: -250px;">
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
                        <input type="text" name="arreglo_nombre" placeholder="Nombre del Arreglo" class="form-control">
                        <br>
                        <h4>FILTRAR ARREGLOS</h4>
                        
                        <label class="radio inline" > 
                            <input type="radio" name="arreglo_clasficacion" value="0" data-tipo="General">
                            <span>Todos los Arreglos </span> 
                        </label><br>
                        <label class="radio inline"> 
                            <input type="radio" name="arreglo_clasficacion" value="1" data-tipo="Clasificacion">
                            <span>Sin Chocolate </span> 
                        </label><br>
                        <label class="radio inline"> 
                            <input type="radio" name="arreglo_clasficacion" value="2" data-tipo="Clasificacion">
                            <span>Con Chocolate </span> 
                        </label><br>
                        <label class="radio inline"> 
                            <input type="radio" name="arreglo_clasficacion" value="3" data-tipo="Clasificacion">
                            <span>Con Extra Chololate </span> 
                        </label>
                    </div>
                </div>
                <!-- End Left Sidebar-->

                <div class="col-md-9 col-content" >
                    <br><br>
                    <div class="row list-view row-list-arreglos " style="height: 750px"></div>
                    <br><br><br>
                    <div class="row list-view row-list-arreglos scrollable" style="overflow-x: auto;height:750px"></div>
                    <br>
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