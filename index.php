<?php include'./include/header.php';?>

            <section class="content-central">
                <section class="content_info">
                    <!-- Info Resalt-->
                    <div class="padding-bottom">
                        <div class="container">
                            <div class="row">
                                <div class="titles">
                                    <h2><span style="color: #A30000 !important">JOALLY ARREGLOS FRUTALES</span></h2>
                                    <hr class="tall">
                                </div>                    
                            </div>
                        </div>
                        <div id="boxes-carousel">
                            <?php
                            require_once 'conexion.php';
                            $sql = mysqli_query(ConexionBd(),"SELECT *FROM arreglo");
                            while($res= mysqli_fetch_array($sql)){ ?>
                            <div>
                                <div class="img-hover">
                                    <img src="<?=$res['imagen']?>" alt="" class="img-responsive">
                                    <div class="overlay">
                                        <a href="<?=$res['imagen']?>" class="fancybox"><i class="fa fa-plus-circle"></i></a>
                                    </div>
                                </div>
                                <div class="info-gallery">
                                    <h3>Fresas con piña<br></h3>
                                    <div class="content-btn"><a class="btn btn-primary avisoderegistro">Pedir</a></div>
                                    <div class="price"><span>$</span><b>Desde</b>45</div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </section>  
            </section>
<?php include './include/footer.php';?>