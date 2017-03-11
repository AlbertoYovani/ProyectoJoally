<?php include './include/headerP.php';?>
<div class="section-title-01">
    <div class="bg_parallax image_04_parallax" style="background: url(img/footer3.jpg);background-size: cover!important;background-position: center"></div>
    <div class="opacy_bg_02">
         <div class="container">
             <h1 style="text-transform: none">Arreglos</h1>
        </div>  
    </div>  
</div> 
<div class="content-central" style="margin-top: -250px!important">
    <!-- Shadow Semiboxed -->
    <div class="semiboxshadow text-center">
        <img src="img/img-theme/shp.png" class="img-responsive" alt="">
    </div>
    <div class="content_info">
        <div class="container">
            <div class="row">
                <!-- Left Sidebar-->
                <div class="col-md-3">
                    <div class="container-by-widget-filter bg-dark color-white">
                        <!-- Widget Filter -->
                        <aside class="widget padding-top-mini">
                            <h3 class="title-widget">Filtrar resultados</h3>

                            <!-- FILTER widget-->
                            <div class="filter-widget">
                                <input type="text" required="required" placeholder="Buscar arreglos" class="input-large color-black input-search-hotel">
                                <br>
                                <div class="selector">
                                    <select class="order-by-nombre">
                                        <option value="DESC">A-Z</option>
                                        <option value="ASC">Z-A</option>
                                    </select>
                                    <span class="custom-select">Ordenar por nombre</span>
                                </div>
                                <div class="selector">
                                    <select class="guests-input order-by-precio" >
                                        <option value="DESC">Orden Ascendente</option>
                                        <option value="ASC">Orden Descendente</option>
                                    </select>
                                    <span class="custom-select">Ordenar por precio</span>
                                </div>
                            </div>
                        </aside>
                        <aside class="widget" style="padding: 7px">
                            <br><br><br><br>
                            <h4>Rango de Precios:</h4>
                            <b>$ 1000</b> <b class="pull-right">$ 6000</b>
                            <input type="range" class="span2 slider-range rango-precios" value="" data-slider-min="1000" data-slider-max="6000" data-slider-step="1000" data-slider-value="[0,6000]"/> 
                        </aside>
                        <aside class="widget" style="padding: 7px;margin-top: -10px!important">
                            <h4 >Estrellas: 
                                <i class="fa fa-star" style="color: #FFBB00"></i> 
                                <i class="fa fa-star" style="color: #FFBB00"></i> 
                                <i class="fa fa-star" style="color: #FFBB00"></i> 
                                <i class="fa fa-star" style="color: #FFBB00"></i> 
                                <i class="fa fa-star" style="color: #FFBB00"></i>
                                <i class="fa fa-star" style="color: #FFBB00"></i>
                            </h4>
                            
                            <input type="range" class="span2 slider-range rango-estrellas" value="" data-slider-min="1" data-slider-max="6" data-slider-step="2" data-slider-value=""/> 
                        </aside>
                    </div>
                </div>
                <!-- End Left Sidebar-->

                <div class="col-md-9">
                    <br>
                    <div class="row list-view list-view-hoteles"></div>
                    <div class="loading-result text-center">
                         <?php
                            require_once 'conexion.php';
                            $sql = mysqli_query(ConexionBd(),"SELECT *FROM arreglo limit 2");
                            while($res= mysqli_fetch_array($sql)){ ?>
                                <!--Es es un arreglo para pedir-->
                                 
                            <div class="col-xs-12 col-sm-6 col-md-12 nature">
                                <div class="row" style="border: solid 1px #04B404 !important;">
                                    <div class="col-md-4">
                                        <div class="img-hover">
                                            <img src="<?=$res['imagen']?>" alt="" class="img-responsive" style="width: 180px !important;height: 180px !important">
                                            <div class="overlay"><a href="<?=$res['imagen']?>" class="fancybox" ><i class="fa fa-plus-circle"></i></a></div>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <p style="color: #04B404"><strong> <?=$res['nombre']?> </strong></p>
                                        <hr class="separator">
                                        <div style="background: transparent; height: 80px !important; color: #777">
                                            <?=$res['descripcion']?>
                                        </div>
                                        <div class="content-btn"><a href="Detalle.php?arreglo=<?=$res['id']?>" class="btn btn-primary" style="background-color: #F00001 !important;" data-id="<?=$res['id']?>">Ver Detalles</a></div>
                                        <br>
                                    </div>
                                    <br>
                                </div>
                                <br><br>
                            </div><br><br>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>   
    <!-- End content info - page Fill with  --> 
</div><?php include './include/footer.php';?>