<?php include './include/headerR.php';?>
<link href="js/html5imageupload/demo.html5imageupload.css" rel="stylesheet" type="text/css">
<link href="js/html5imageupload/html5imageupload.css" rel="stylesheet" type="text/css">
<section class="content-central miborder" style="margin-top: 8%" >
    <div class="semiboxshadow text-center">
        <img src="img/img-theme/shp.png" class="img-responsive" alt="">
    </div>
    <div class="content_info">
        <div class="paddings-mini">
            <div class="container" >
                <h3 class="cuenta" style="color: #A30000 !important">CREAR MI CUENTA</h3>
                <div class="row">
                    <!-- Newsletter-->
                    <div class="col-md-10 col-centered" >
                        <form id="nuevo_registro" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-6">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="perfil">
                                            <div id="retrievingfilename" class="html5imageupload" data-width="500" data-height="500" data-url="controllers/copiarimagen" style="width: 250px;height: 211px;">
                                                <input type="file" style="height: 250px!important" name="foto" id="foto">
                                            </div>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon back-vt">
                                                <i class="fa fa-user color-white"></i>
                                            </span>
                                            <input class="form-control" placeholder="Nombre Completo" name="nombre" type="text" maxlength="40" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <span class="input-group-addon back-vt">
                                                <i class="fa fa-envelope color-white"></i>
                                            </span>
                                            <input class="form-control" placeholder="ejemplo@hotmail.com" name="correo" type="email" >
                                        </div>
                                        <br>
                                        <div class="input-group">
                                            <span class="input-group-addon back-vt">
                                                <i class="fa fa-phone color-white"></i>
                                            </span>
                                            <input class="form-control" placeholder="961 168 86 97" name="telefono" type="text" required="" maxlength="12" pattern="[0-9]{10,12}">
                                        </div>
                                        <br>
                                        <div class="input-group">
                                            <span class="input-group-addon back-vt">               
                                                <i class="fa fa-birthday-cake color-white"></i>
                                            </span>
                                            <input class="form-control" placeholder="Fecha de Nacimiento" name="fechanac" type="date" >
                                        </div>
                                        <br>
                                        <div class="input-group">
                                            <span class="input-group-addon back-vt">
                                                <i class="fa fa-user-secret color-white"></i>
                                            </span>
                                            <input class="form-control" placeholder="Usuario" name="usuario" type="text" maxlength="20" >
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
                                            <span class="input-group-addon back-vt">
                                                <i class="fa fa-unlock-alt color-white"></i>
                                            </span>
                                            <input class="form-control" placeholder="Confirmar Contraseña" name="ClPasswordConf" type="password" > 
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
                                        <button class="btn btn-primary" type="submit" name="registrar">Guardar</button>
                                    </span>
                                </div>
                                <div class="col-md-3">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary" type="button" name="cancelar" onclick="location.href='index.php'">Cancelar</button>
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