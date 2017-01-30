<?php include'./include/header.php';?>

            <section class="content-central">
                <section class="content_info">
                    <!-- Info Resalt-->
                    <div class="padding-bottom">
                        <div class="container">
                            <div class="row">
                                <div class="titles">
                                    <h2><span style="color: #843534 !important">JOALLY ARREGLOS FRUTALES</span></h2>
                                    <hr class="tall">
                                </div>                    
                            </div>
                        </div>
                        <div id="boxes-carousel">
                            <?php for ($index = 1; $index <= 10; $index++) {?>
                            <div>
                                <div class="img-hover">
                                    <img src="img/gallery-2/2.png" alt="" class="img-responsive">
                                    <div class="overlay">
                                        <a href="img/gallery-2/2.png" class="fancybox"><i class="fa fa-plus-circle"></i></a>
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