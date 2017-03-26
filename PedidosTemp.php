<?php include './include/header.php';?>
<div class="section-title-01" style="margin-bottom: 180px !important;">
    <div class="bg_parallax image_04_parallax" style="background: url(img/footer3.jpg);background-size: cover!important;background-position: center"></div>
    <div class="opacy_bg_02">
         <div class="container">
             <br><br><br><br>
             <img src="img/logo.png" style="width: 250px; height: 210px;">
        </div>  
    </div>  
</div>
<div class="content-central" style="margin-top: -300px">
    <div class="semiboxshadow text-center">
        <img src="img/img-theme/shp.png" class="img-responsive" alt="">
    </div>
    <div class="content_info">
        <div class="paddings-mini">
            <div class="container">
                <hr class="tall"> <!--Para mostrar uuna rayita -->
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="losp">MIS PEDIDOS</h2><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-bordered table-pedidos table-hover">
                            <thead>
                                <tr>
                                    <th style="color: #FA5882 !important;">Imagen</th>
                                    <th style="color: #FA5882 !important;">Nombre</th>
                                    <th style="color: #FA5882 !important;">Precio</th>
                                    <th style="color: #FA5882 !important;">Clasificación</th>
                                    <th style="color: #FA5882 !important;">Tamaño</th>
                                    <th style="color: #FA5882 !important;">Dedicatoria</th>
                                    <th style="color: #FA5882 !important;">Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr >
                                    <td colspan="7">
                                        <center>
                                            <i class="fa fa-spinner fa-pulse fa-2x"></i>
                                        </center>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- En esta muestra el total a pagar por todo los arreglos pedidos--> 
                <div class="row">
                    <div class="col-md-12">
                        <a href="Arreglos.php.php">Seguir ordenando...</a>
                    </div>
                </div>
                <br>
               <div class="row">
                    <div class="col-md-3">
                        <span class="input-group-btn">
                            <button class="btn btn-primary fa fa-taxi avisoderegistro" type="submit" name="domicilio">  Entrega a domicilio</button>
                        </span>
                    </div>
                    <div class="col-md-3">
                        <span class="input-group-btn">
                            <button class="btn btn-primary fa fa-home avisoderegistro" type="button" name="sucursal">  Recoger en sucursal</button>
                        </span>
                    </div>
                </div>
                <br><br>
            </div>
            <hr class="tall">
            <input type="hidden" name="Tabla" value="Pedidos">
        </div>
    </div>   
    <!-- End content info - page Fill with  --> 
</div>

<?php include'./include/footer.php';?>
<script src="js/Arreglos.js?<?=md5(microtime())?>'" type="text/javascript"></script>
        


