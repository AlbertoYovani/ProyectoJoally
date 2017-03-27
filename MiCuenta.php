<?php include './include/headerP.php';?>
<link href="js/html5imageupload/demo.html5imageupload.css" rel="stylesheet" type="text/css">
<link href="js/html5imageupload/html5imageupload.css" rel="stylesheet" type="text/css">

            <section class="content-central miborder" style="margin-top: 8%" >
                <!-- Shadow Semiboxed -->
                <div class="semiboxshadow text-center">
                    <img src="img/img-theme/shp.png" class="img-responsive" alt="">
                </div>
                <!-- End Shadow Semiboxed -->

                <!-- End content info - page Fill with -->
                <div class="content_info">
                    <div class="paddings-mini">
                        <div class="container" >
                            <h3 class="cuenta losp">ADMINISTRAR MI CUENTA</h3>  
                            <div class="row">
                                <!-- Newsletter-->
                                <div class="col-md-8 col-centered" >                                    
                                    <!-- FORMULARIO DE REGISTRO DE UN CLIENTE-->
                                    <br>
                                    <br>
                                    <form id="nuevo_registro" method="POST" action="">
                                        <div class="row">
                                            <div class="col-md-6">
                                                
                                            </div>
                                        </div>
                                        <div class="row">
                                            <?php
                                                require_once './conexion.php';
                                                $ID=$_SESSION['CUENTA_ID'];
                                                $sql = mysqli_query(ConexionBd(), "SELECT * FROM cliente,cuenta WHERE cliente.id=cuenta.idCliente AND cuenta.id='$ID' ;");
                                                $res=$sql->fetch_assoc(); 
                                                
                                                ?>
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    Nombre: <input style="background: #ffffff; border: none;" value="<?=$res['nombre']?>" data-nombre="<?=$res['nombre']?>" type="text" name="nombre">
                                                    <!--<span class="input-group-addon back-vt">
                                                    </span> --> <!-- está parte agrega una orilla de color rojo -->
                                                </div>
                                                <br>
                                                <div class="input-group">
                                                    E-mail: <input style="background: #ffffff; border: none;" value="<?=$res['correo']?>" data-correo="<?=$res['correo']?>" type="email" name="correo">
                                                </div>
                                                <br>
                                                <div class="input-group">
                                                    Telefono Celular: <input style="background: #ffffff; border: none" disabled="true" value="<?=$res['telefono']?>" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    Fecha de Nacimiento: <input style="background: #ffffff; border: none;" disabled="true" value="<?=$res['fechanac']?>" type="date">
                                                </div>
                                                <br>
                                                <div class="input-group">
                                                   Nombre de Usuario: <input <input style="background: #ffffff; border: none;" disabled="true" value="<?=$res['usuario']?>" type="text">
                                                </div>
                                                <br>
                                                <div class="input-group">
                                                    <br>
                                                    <div class="mensaje"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                        <div class="row">
                                        <div class="col-md-3">
                                            <span class="input-group-btn">
                                                <button class="btn btn-primary editardatos" type="button">Editar Datos</button>
                                            </span>
                                        </div>
                                    </div>   
                                </form>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </section>
<?php include './include/footer.php';?>
<script type="text/javascript" src="js/html5imageupload/html5imageupload.js"></script>
<script type="text/javascript" src="js/saveperfil.js?<?= md5(microtime())?>"></script>