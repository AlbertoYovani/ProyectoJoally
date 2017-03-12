<?php
    include '../conexion.php';
    include '../controlador/Funciones.php';
    session_start();
    if($_POST['accion']=='BUSCAR_ARREGLOS'){
        $ARREGLO_NOMBRE=$_POST['arreglo_nombre'];
        $ARREGLO_CLAS=$_POST['arreglo_clasificacion'];
        $ARREGLO_TAM=$_POST['arreglo_tamanio'];
        
        if($ARREGLO_NOMBRE!=''){
            $sql= mysqli_query(ConexionBd(), "SELECT * FROM arreglo, jy_clasificacion, jy_arreglo_clasificacion
                                        WHERE
                                        jy_arreglo_clasificacion.clasificacion_id=jy_clasificacion.clasificacion_id AND
                                        jy_arreglo_clasificacion.arreglo_id=arreglo.id AND arreglo.nombre LIKE '%$ARREGLO_NOMBRE%'");
        }if($ARREGLO_CLAS!=''){
            $sql= mysqli_query(ConexionBd(), "SELECT * FROM arreglo, jy_clasificacion, jy_arreglo_clasificacion
                                        WHERE
                                        jy_arreglo_clasificacion.clasificacion_id=jy_clasificacion.clasificacion_id AND
                                        jy_arreglo_clasificacion.arreglo_id=arreglo.id AND  jy_clasificacion.clasificacion_id=$ARREGLO_CLAS");
        }if($ARREGLO_TAM!=''){
            $sql= mysqli_query(ConexionBd(), "SELECT * FROM arreglo, jy_clasificacion, jy_arreglo_clasificacion
                                        WHERE
                                        jy_arreglo_clasificacion.clasificacion_id=jy_clasificacion.clasificacion_id AND
                                        jy_arreglo_clasificacion.arreglo_id=arreglo.id AND arreglo.nombre LIKE '%$ARREGLO_NOMBRE%'");
        }
        
        $col='';
        while ($row = mysqli_fetch_array($sql)) {
            $Tam= mysqli_query(ConexionBd(), "SELECT * FROM tamanio WHERE tamanio.arreglo_id=".$row['id']);
            $TAM_LIST='';
            while ($RESUL_TAM = mysqli_fetch_array($Tam)) {
                $TAM_LIST.=$RESUL_TAM['tamanio_nombre'].', ';
            }
            $col.=' <div class="col-md-12">
                        <div class="img-hover">
                            <img src="'.$row['imagen'].'" alt="" class="img-responsive">
                            <div class="overlay"><a href="'.$row['imagen'].'" class="fancybox"><i class="fa fa-plus-circle"></i></a></div>
                        </div>

                        <div class="info-gallery">
                            <h3 style="text-transform: uppercase">
                                '.$row['nombre'].'<br>
                                <span style="text-transform: none"><b>Tamaños:</b> '. trim($TAM_LIST, ', ').'</span>
                            </h3>
                            <hr class="separator">
                            <p style="height: 40px;"><b>Descripción:</b> '. substr($row['descripcion'], 0,150).'...</p>
                            <ul class="starts">
                                <li><i class="fa fa-bookmark-o"></i> '.$row['clasificacion_nombre'].'</li>
                            </ul>
                            <div class="content-btn">
                                <a href="#" class="btn btn-primary">VER DETALLES</a>
                            </div>
                        </div>
                    </div>';
        }
        JSON_ENCONDE_RESUL(array('arreglos'=>$col));
    }