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
                        <form id="nuevo_registro">
                            <div class="row">
                                <div class="col-md-4">
                                    <div id="retrievingfilename" class="html5imageupload" data-width="500" data-height="500" data-url="controllers/copiarimagen" style="width: 100%;height: 100%;">
                                        <input type="file" name="thumb" style="height: 250px!important">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <span class="input-group-addon back-vt">
                                                    <i class="fa fa-user color-white"></i>
                                                </span>
                                                <input class="form-control" placeholder="Nombre Completo" name="nombre" type="text">
                                            </div>           
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <span class="input-group-addon back-vt">
                                                    <i class="fa fa-user color-white"></i>
                                                </span>
                                                <input class="form-control" placeholder="correo" name="correo" type="text" >
                                            </div>  
                                            <div class="form-group">
                                                <button class="btn btn-primary">Guardar</button>
                                            </div>
                                        </div>
                                    </div>
                                     
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