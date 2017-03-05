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
                    <a href="#" data-filter="todos" class="current losp">TODOS</a>
                    <a href="#" data-filter="sch" class="losp">SIN CHOCOLATE</a>
                    <a href="#beach" data-filter="ch" class="losp">CON CHOCOLATE</a>
                    <a href="#nature" data-filter="extch" class="losp">EXTRA-CHOCOLATE</a>
                </div>
                <div class="portfolioContainer">
                    <?php
                        require_once 'conexion.php';
                        $sql = mysqli_query(ConexionBd(),"SELECT *FROM arreglo, tamanio WHERE tamanio.arreglo_id=arreglo.id");
                        while($res= mysqli_fetch_array($sql)){ ?>
                    <!--Es es un arreglo para pedir-->
                        <div class="col-xs-12 col-sm-6 col-md-3 nature">
                        <div class="img-hover">
                            <img src="<?=$res['imagen']?>" alt="" class="img-responsive" style="width: 300px !important;height: 300px !important">
                            <div class="overlay"><a href="<?=$res['imagen']?>" class="fancybox" ><i class="fa fa-plus-circle"></i></a></div>
                        </div>
                            <div class="info-gallery" style="background: transparent">
                            <div class="content-btn"><a class="btn btn-primary ver-arreglo" data-id="<?=$res['id']?>">Agregar a Carrito</a></div>
                            <div class="price"><span>$</span><?=$res['precio'] ?>.00</div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
            
        </div>
    </div>
</section>
      
<?php include './include/footer.php';?>
<script src="js/Arreglos.js?<?= md5(microtime())?>"></script>