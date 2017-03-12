<?php 
    include'./include/headerP.php';
    require_once 'conexion.php';
?>  
<div class="section-title-01">
    <div class="bg_parallax image_04_parallax" style="background: url(img/fondo1.jpg);background-size: cover;background-position: center"></div>
    <div class="opacy_bg_02">
         <div class="container">
            <h1>Arreglos Frutales</h1>
            <div class="crumbs">
                <ul>
                    <li><a href="PrincipalArreglos.php">Principal</a></li>
                    <li>/</li>
                    <li>Arreglos Frutales</li>    
                </ul>    
            </div>
        </div>  
    </div>
</div>   
<!--Content Central -->
<div class="content-central">
    <div class="semiboxshadow text-center">
        <img src="img/img-theme/shp.png" class="img-responsive" alt="">
    </div>
    <div class="content_info">
        <div class="container">
            <div class="row">
                <!-- Left Sidebar-->
                <div class="col-md-3">
                    <div class="container-by-widget-filter bg-dark color-white">
                        <aside class="widget padding-top-mini">
                            <h3 class="title-widget">Buscar Arreglos</h3>
                            <div class="filter-widget">
                                <input type="text" name="arreglo_nombre" placeholder="Nombre del Arreglo" class="input-large">
                                <div class="selector">
                                    <select class="guests-input" name="arreglo_clasficacion">
                                        <option value="1" selected="">Sin Chocolate</option>
                                        <option value="2">Con Chocolate</option>
                                        <option value="3">Con Extra Chocolate</option>
                                    </select>
                                    <span class="custom-select">Por Clasificación</span>
                                </div>
                                <div class="selector">
                                    <select class="guests-input" name="arreglo_tamanio">
                                        <?php 
                                        $Tam= mysqli_query(ConexionBd(), "SELECT * FROM tamanio GROUP BY tamanio.tamanio_nombre");
                                        while ($row= mysqli_fetch_array($Tam)){?>
                                        <option value="<?=$row['tamanio_nombre']?>"><?=$row['tamanio_nombre']?></option>
                                        <?php }?>
                                    </select>
                                    <span class="custom-select">Por Tamaño</span>
                                </div>
                            </div>
                            <!-- END FILTER widget-->
                        </aside><br><br><br><br><br>
                    </div>
                </div>
                <!-- End Left Sidebar-->

                <div class="col-md-9">
                    <!-- sort-by-container-->
                    <div class="sort-by-container tooltip-hover">
                        <div class="row"></div>
                    </div>
                    <div  class="row col-buscando-arreglos hide">
                        <div class="col-md-12" style="margin-top: calc(15%)">
                            <center>
                                <i class="fa fa-spinner fa-pulse fa-3x" style="color: #88C425 !important"></i><br>
                                <h4>Bucando arreglos, espero por favor...</h4>
                            </center>
                        </div>
                    </div>
                    <div class="row list-view row-list-arreglos">
                    </div>
                </div>
            </div>
        </div>
    </div>   
</div>
<!-- End Content Central -->
<!-- End Section Title-->
<?php include'./include/footer.php';?>
<script src="js/Jy_Arreglos.js?<?= md5(microtime())?>"></script>