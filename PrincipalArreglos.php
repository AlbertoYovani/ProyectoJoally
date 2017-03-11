<?php include './include/headerP.php';?>

            <!--Content Central -->
<section class="content-central">
    <!-- Shadow Semiboxed -->
    <div class="semiboxshadow text-center">
        <img src="img/img-theme/shp.png" class="img-responsive" alt="">
    </div>
    <div class="content_info">
        <div class="paddings-mini">
            <br><br>
            <div class="container">
                <br><br><br><br><br>
                <hr class="tall">
                <!-- Nav Filters -->
                <div class="portfolioFilter">
                    <a href="" id="0" data-filter="" class="current losp query">TODOS</a>
                    <a href="" id="1" data-filter="" class="losp query">SIN CHOCOLATE</a>
                    <a href="" id="2" data-filter="" class="losp query">CON CHOCOLATE</a>
                    <a href="" id="3" data-filter="" class="losp query">EXTRA-CHOCOLATE</a>
                </div>
                <div class="portfolioContainer">
                    <div style="margin-left:500px !important;" class="loading-arreglos hide">
                            <i class="fa fa-spinner fa-pulse fa-3x"></i>  Espere por favor...
                        </div>
                    <div id="contenido"> 
                        <?php
                            require_once 'conexion.php';
                            $sql = mysqli_query(ConexionBd(),"SELECT *FROM arreglo");
                            while($res= mysqli_fetch_array($sql)){ ?>
                        <!--Es es un arreglo para pedir-->
                            <div class="col-xs-12 col-sm-6 col-md-3 nature">
                                <div class="img-hover">
                                    <img src="<?=$res['imagen']?>" alt="" class="img-responsive" style="width: 300px !important;height: 300px !important">
                                    <div class="overlay"><a href="<?=$res['imagen']?>" class="fancybox" ><i class="fa fa-plus-circle"></i></a></div>
                                </div>
                                <div class="info-gallery" style="background: transparent">
                                    <div class="content-btn"><a class="btn btn-primary ver-arreglo" data-id="<?=$res['id']?>">Agregar a Carrito</a></div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
      
<?php include './include/footer.php';?>
<script src="js/Arreglos.js?<?= md5(microtime())?>"></script>