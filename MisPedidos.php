<?php include './include/headerP.php';?>

<div class="content-central">
    <!-- Shadow Semiboxed -->
    <div class="semiboxshadow text-center">
        <img src="img/img-theme/shp.png" class="img-responsive" alt="">
    </div>
    <!-- End Shadow Semiboxed -->

    <!-- End content info - page Fill with -->
    <div class="content_info">
        <div class="paddings-mini">
            <div class="container">
                <br><br><br><br><br><br><br><br>
                <hr class="tall"> <!--Para mostrar uuna rayita -->

                <div class="row">
                    <div class="col-md-12">
                        <h2 class="losp">MIS PEDIDOS</h2><br>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-bordered table-pedidos">
                            <thead>
                                <tr>
                                    <th>Imagen</th>
                                    <th>Nombre</th>
                                    <th>Categoria</th>
                                    <th>Precio</th>
                                    <th>Clasificación</th>
                                    <th>Dedicatoria</th>
                                    <th>Acción</th>
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
               
               <div class="row">
                    <div class="col-md-3">
                        <span class="input-group-btn">
                            <button class="btn btn-primary fa fa-taxi entrega" type="submit" name="domicilio">  Entrega a domicilio</button>
                        </span>
                    </div>
                    <div class="col-md-3">
                        <span class="input-group-btn">
                            <button class="btn btn-primary fa fa-home entregaDomicilio" type="button" name="sucursal">  Recoger en sucursal</button>
                        </span>
                    </div>
                </div>
                <br><br>
                <!-- En esta muestra el total a pagar por todo los arreglos pedidos--> 
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-bordered ">
                            <thead>
                                <tr>
                                    <th>
                                        Total
                                    </th>
                                    <th style="width: 200px !important">
                                         $ 1200.00
                                    </th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
               
            </div>
            <hr class="tall">
            <input type="hidden" name="Tabla" value="Pedidos">
        </div>
    </div>   
    <!-- End content info - page Fill with  --> 
</div>

<?php include'./include/footer.php';?>
<script src="js/Arreglos.js" type="text/javascript"></script>
        

