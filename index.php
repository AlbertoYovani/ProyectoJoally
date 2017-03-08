<?php 
    include'./include/header.php';
    require_once 'conexion.php';
?>
<section class="content-central">
    <section class="content_info">
        <!-- Info Resalt-->
        <div class="padding-bottom">
            <div class="container">
                <div class="row">
                    <div class="titles">
                        <h2><span style="color: #F00001 !important; font-size: 40px !important">JOALLY ARREGLOS FRUTALES</span></h2>
                        <hr class="tall">
                    </div>                    
                </div>
            </div>
            <div id="boxes-carousel">
                <?php
                $sql = mysqli_query(ConexionBd(),"SELECT *FROM arreglo");
                while($res = mysqli_fetch_array($sql)){ ?>
                <div>
                    <div class="img-hover">
                        <img src="<?=$res['imagen']?>" alt="" class="img-responsive" style="width: 470px !important; height: 380px !important">
                        <div class="overlay">
                            <a href="<?=$res['imagen']?>" class="fancybox"><i class="fa fa-plus-circle "></i></a>
                        </div>
                    </div>
                    <div class="info-gallery">
                        <h3><?=$res['nombre'] ?><br></h3>
                        <div class="content-btn"><a class="btn btn-primary ver-arreglo" data-id="<?=$res['id']?>">Agregar a Carrito</a></div>
                        <div class="price"><span></span><b>Disponible</b></div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h4 class="losh4">OCASIONES ESPECIALES</h4>
                    <p class="losp">
                        Somos una empresa con gran prestigio, decididos a bindarles el mejor servicio de la mejor manera.
                        Para los mejores momentos al lado de la persona que estimas, regala un hermoso detalle.
                    </p>
                </div>
                <div class="col-md-6">
                    <div class="circulo">
                        <img src="img/arreglos/img1.png" style="width: 200px; height: 200px">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <h4 class="losh4">OCASIONES ESPECIALES</h4>
                    <P class="losp">
                        Somos una empresa con gran prestigio, decididos a bindarles el mejor servicio de la mejor manera.
                        Para los mejores momentos al lado de la persona que estimas, regala un hermoso detalle.
                    </p>
                </div>
                <div class="col-md-5">
                    <div class="circulo">
                        <img src="img/arreglos/img2.png" style="width: 200px; height: 200px">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <h4 class="losh4">OCASIONES ESPECIALES</h4>
                    <P class="losp">
                        Somos una empresa con gran prestigio, decididos a bindarles el mejor servicio de la mejor manera.
                        Para los mejores momentos al lado de la persona que estimas, regala un hermoso detalle.
                    </p>
                </div>
                <div class="col-md-4">
                    <div class="circulo">
                        <img src="img/arreglos/img3.png" style="width: 250px; height: 200px">
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>

<?php include './include/footer.php';?>
<script src="js/Arreglos.js?<?= md5(microtime())?>"></script>
