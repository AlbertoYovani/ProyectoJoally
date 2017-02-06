<?php include'./include/headerR.php';?>
<br><br><br><br><br><br><br><br>
<div class="content-central"><br><br><br><br>
    <!-- Shadow Semiboxed -->
    <div class="semiboxshadow text-center">
        <img src="img/img-theme/shp.png" class="img-responsive" alt="">
    </div>
    <!-- End Shadow Semiboxed -->

    <!-- End content info - page Fill with -->
    <div class="content_info">
        <div class="container">
            <div class="row">
                <!-- Grid Elements-->
                <div class="col-md-12">
                    <!-- Title Results-->
                    <div class="title-results">
                        <h3 style="color: #843534 !important">ARREGLOS MÁS BUSCADOS</h3>
                    </div>
                    <div class="row">
                        <!-- Item Gallery-->
                        <?php for ($i = 1; $i < 11; $i++) {?>
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            
                            <div class="img-hover">
                                <img src="img/logo.png" alt="" class="img-responsive">
                                <div class="overlay"><a href="img/logo.png" class="fancybox"><i class="fa fa-plus-circle"></i></a></div>
                            </div>
                            <div class="info-gallery">
                                <h3>
                                    Sabor chocolate mexicano<br>
                                </h3>
                                <div class="content-btn"><a class="btn btn-primary avisoderegistro">Pedir</a></div>
                                <div class="price"><span>$</span><b>Desde</b>45</div>
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