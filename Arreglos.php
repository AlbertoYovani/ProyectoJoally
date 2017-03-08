<?php 
    include'./include/headerR.php';
    require_once 'conexion.php';
?>
<br><br><br><br><br><br><br><br>
<div class="content-central"><br><br><br><br>
    <div class="semiboxshadow text-center">
        <img src="img/img-theme/shp.png" class="img-responsive" alt="">
    </div>
    <div class="content_info">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-results">
                        <h2 class="losp">ARREGLOS MÁS BUSCADOS</h2>
                    </div>
                    <div class="row">
                        <?php
                        $sql = mysqli_query(ConexionBd(),"SELECT *FROM arreglo,tamanio WHERE tamanio.arreglo_id=arreglo.id");
                        while($res = mysqli_fetch_array($sql)){ ?>
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            
                            <div class="img-hover">
                                <img src="<?=$res['imagen']?>" alt="" class="img-responsive" style="width: 430px !important; height: 340px !important">
                                <div class="overlay"><a href="<?=$res['imagen']?>" class="fancybox"><i class="fa fa-plus-circle"></i></a></div>
                            </div>
                            <div class="info-gallery">
                                <h3>
                                    <?=$res['nombre'] ?><br>
                                </h3>
                                <div class="content-btn"><a class="btn btn-primary ver-arreglo" data-id="<?=$res['id']?>">Agregar a Carrito</a></div>
                                <div class="price"><span></span><b>Disponible</b></div>
                            </div>
                            
                        </div>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </div>   
</div>
      
<?php include'./include/footer.php';?>
<script src="js/Arreglos.js?<?= md5(microtime())?>"></script>