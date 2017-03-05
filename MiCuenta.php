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
                                                    <span class="input-group-addon back-vt">
                                                        <i class="fa fa-user color-white"></i>
                                                    </span>
                                                    <input class="form-control"  value="<?=$res['nombre']?>" placeholder="Nombre Completo" name="nombre" type="text" required="" pattern="[a-zA-Z-\s]{1,30}" maxlength="40">
                                                    <!--<span class="input-group-addon back-vt">
                                                    </span> --> <!-- está parte agrega una orilla de color rojo -->
                                                </div>
                                                <br>
                                                <div class="input-group">
                                                    <span class="input-group-addon back-vt">
                                                        <i class="fa fa-envelope color-white"></i>
                                                    </span>
                                                    <input class="form-control" value="<?=$res['correo']?>" placeholder="ejemplo@hotmail.com" name="correo" type="email" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$">
                                                </div>
                                                <br>
                                                <div class="input-group">
                                                    <span class="input-group-addon back-vt">
                                                        <i class="fa fa-phone color-white"></i>
                                                    </span>
                                                    <input class="form-control" value="<?=$res['telefono']?>" placeholder="961 168 86 97" name="telefono" type="text" required="" maxlength="12" pattern="[0-9]{10,12}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon back-vt">               
                                                        <i class="fa fa-birthday-cake color-white"></i>
                                                    </span>
                                                    <input class="form-control" value="<?=$res['fechanac']?>" placeholder="Fecha de Nacimiento" name="fechanac" type="date" required="">
                                                </div>
                                                <br>
                                                <div class="input-group">
                                                    <span class="input-group-addon back-vt">
                                                        <i class="fa fa-user-secret color-white"></i>
                                                    </span>
                                                    <input class="form-control" value="<?=$res['usuario']?>" placeholder="Usuario" name="usuario" type="text" required="" maxlength="20" pattern="[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]{5,20}">
                                                </div>
                                                <br>
                                                <div class="input-group">
                                                    <span class="input-group-addon back-vt">
                                                        <i class="fa fa-unlock-alt color-white"></i>
                                                    </span>
                                                    <input class="form-control" placeholder="Contraseña" name="ClPassword" type="password" >
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
                                                <button class="btn btn-primary" type="submit" name="registrar">Guardar Cambios</button>
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