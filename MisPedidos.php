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
                        <h2 style="color: #A30000 !important">MIS PEDIDOS</h2><br>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>
                                        Imagen
                                    </th>
                                    <th>
                                        Nombre
                                    </th>
                                    <th>
                                        Categoria
                                    </th>
                                    <th>
                                        Clasificación
                                    </th>
                                    <th>
                                        Precio
                                    </th>
                                    <th>
                                        Dedicatoria
                                    </th>
                                    <th>
                                        X
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="img-hover">
                                            <img src="img/arreglos/img1.png" alt="" class="img-responsive" style="width: 50px; height:50px">
                                            <div class="overlay" style="width: 60px"><a href="img/arreglos/img1.png" class="fancybox"><i class="fa fa-plus-circle"></i></a></div>
                                        </div>
                                    </td>
                                    <td>
                                        Sin chocolate
                                    </td>
                                    <td>
                                       Bodas
                                    </td>
                                    <td>
                                        Sin Chocolate
                                    </td>
                                    <td>
                                        7
                                    </td>
                                    <td style="width: 200px;"> 
                                        <textarea style="border: none !important" name="dedicatoria" class="form-control pedido opc" placeholder="Mi tarjeta tiene que decir... "></textarea>
                                    </td>
                                    <td style="width: 20px">
                                        <i class="fa fa-trash-o"></i>
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
                            <button class="btn btn-primary fa fa-home" type="button" name="sucursal">  Recoger en sucursal</button>
                        </span>
                    </div>
                </div>
                <br><br>
                <!-- En esta muestra el total a pagar por todo los arreglos pedidos--> 
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>
                                        Total
                                    </th>
                                    <th style="width: 100px !important">
                                         $ 1200.00
                                    </th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
               
            </div>
            <hr class="tall"> <!--Para mostrar una rayita -->
        </div>
    </div>   
    <!-- End content info - page Fill with  --> 
</div>

<?php include'./include/footer.php';?>
        

