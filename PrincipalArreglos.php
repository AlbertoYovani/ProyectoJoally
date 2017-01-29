<?=include './include/headerP.php';?>

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
                    <a href="#" data-filter="*" class="current">TODOS</a>
                    <a href="#" data-filter=".beach">GRANDES</a>
                    <a href="#beach" data-filter="*">MEDIANOS</a>
                    <a href="#nature" data-filter=".nature">PEQUEÑOS</a>
                </div>
                <div class="portfolioContainer">
                    <!--Es es un arreglo para pedir-->
                    <div class="col-xs-12 col-sm-6 col-md-3 nature">
                        <div class="img-hover">
                            <img src="img/gallery-2/1.jpg" alt="" class="img-responsive">
                            <div class="overlay"><a href="img/gallery-2/1.jpg" class="fancybox"><i class="fa fa-plus-circle"></i></a></div>
                        </div>
                        <div class="info-gallery">
                            <div class="content-btn"><a class="btn btn-primary ventana" >Agregar a mi lista</a></div>
                            <div class="price"><span>$</span>45</div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>
      
<?=include './include/footer.php';?>
            <script src="js/Arreglos.js"></script>