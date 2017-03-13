    <?php
    include '../conexion.php';
    session_start();
            /*Inicio de sesion de un cliente*/
    if($_POST['accion']=='IniciarSesion'){
        $usuario=$_POST['usuario'];
        $ClPassword1=$_POST['ClPassword1'];

        $sql = "SELECT * FROM cuenta WHERE usuario = '$usuario' AND ClPassword1='$ClPassword1' ";
        $query= mysqli_query(ConexionBd(),$sql);

        if (mysqli_num_rows($query)) {
            $res=$query->fetch_assoc();
            $_SESSION['CLIENTE_ID']=$res['idCliente'];
            $_SESSION['CUENTA_ID']=$res['id'];
            /*le asignamos un ID al cliente tmp, dependiendo si quien es el que inicia sesion*/
        if(isset($_SESSION['cliente_tmp'])){
            $sql = mysqli_query(ConexionBd(), "UPDATE jy_pedidos_tmp SET cliente_id =".$_SESSION['CLIENTE_ID']." WHERE  cliente_tmp=".$_SESSION['cliente_tmp']);
        }
            echo json_encode(array(
                'accion'=>'1'
            ));
        }else{
            echo json_encode(array(
                'accion'=>'2'
            ));
        }
    }
    if($_POST['accion']=='ver_detalles'){
        error_reporting(0);
        $sql= mysqli_query(ConexionBd(), "SELECT * FROM arreglo WHERE id=".$_POST['id']);
        
       
        $result= mysqli_fetch_array($sql,MYSQLI_ASSOC);
        echo json_encode(array(
            'accion'=>'1',
            'ArregloId'=>$result['id'],
            'ArregloNombre'=> $result['nombre'],
            'ArregloTamanio'=> utf8_encode($result['clasificacion']),
            'ArregloImagen'=> utf8_encode($result['imagen']),
            'ArregloDescripcion'=> utf8_encode($result['descripcion']),
            'Clasificaciones'=> utf8_encode($option),
        ));
    }
    if($_POST['accion']=='AgregarArreglo'){
        $filter = $_POST['filter'];
        if($filter ==0){
            $filter='';
        }
        if(isset($_SESSION['cliente_tmp'])){
            $cliente_tmp=$_SESSION['cliente_tmp'];
        }else{
            $_SESSION['cliente_tmp']=rand();
            $cliente_tmp=$_SESSION['cliente_tmp'];
        }
        $id_usuario='0';
        $pedidos_fecha= date('d/m/Y');//12/12/2017
        $pedidos_hora= date('H:i');
        $pedidos_cantidad= filter_input(INPUT_POST, 'pedidos_cantidad');
        $arreglo_id= filter_input(INPUT_POST, 'arreglo_id');
        for ($index = 1; $index <= $pedidos_cantidad; $index++) {
           $sql= mysqli_query(ConexionBd(), "INSERT INTO jy_pedidos_tmp (pedidos_id,pedidos_fecha,pedidos_hora,
                cliente_id,cliente_tmp,arreglo_id,clasificacion_id,tamanio_id,dedicatoria) 
                VALUES (0,'$pedidos_fecha','$pedidos_hora',0,$cliente_tmp,$arreglo_id,0,$filter,'')");
           if(isset($_SESSION['CUENTA_ID'])){ /*Valida si el cliente ya inicio sesion, le asigna su ID*/
            $sql = mysqli_query(ConexionBd(), "UPDATE jy_pedidos_tmp SET cliente_id =".$_SESSION['CLIENTE_ID']." WHERE  cliente_tmp=".$_SESSION['cliente_tmp']);
            }
            if(isset($_SESSION['nuevo_usuario'])){ /*Valida si el cliente ya inicio sesion, le asigna su ID*/
            $sql = mysqli_query(ConexionBd(), "UPDATE jy_pedidos_tmp SET cliente_id =".$_SESSION['nuevo_usuario']." WHERE  cliente_tmp=".$_SESSION['cliente_tmp']);
            }
        }
        if($sql){
            echo json_encode(array('accion'=>'1'));
        }else{
            echo json_encode(array('accion'=>'2'));
        }
    }
    if($_POST['accion']=='ObtenerTotal'){
        error_reporting(1);
        if(isset($_SESSION['cliente_tmp'])){
            $sql= mysqli_query(ConexionBd(), "SELECT COUNT(jy_pedidos_tmp.pedidos_id) AS total_cantidad FROM  jy_pedidos_tmp WHERE jy_pedidos_tmp.cliente_tmp=".$_SESSION['cliente_tmp']);
            $resul=mysqli_fetch_array($sql,MYSQLI_ASSOC);
            $total=$resul['total_cantidad'];
        }else{
            $total=0;
        }

        echo json_encode(array('total'=>$total));
    }
    if($_POST['accion']=='TablaPedidos'){
        error_reporting(0);
        /*Obtiene el TOTAL A PAGAR*/
        $totalpagar= mysqli_query(ConexionBd(),"SELECT SUM(tamanio.precio) AS total_pagar 
                                             FROM arreglo,tamanio, jy_clasificacion, jy_pedidos_tmp, cliente
                                             WHERE
                                             jy_pedidos_tmp.arreglo_id = arreglo.id AND
                                             jy_pedidos_tmp.tamanio_id = tamanio.tamanio_id AND
                                             jy_pedidos_tmp.clasificacion_id = jy_clasificacion.clasificacion_id AND
                                             jy_pedidos_tmp.cliente_tmp = ".$_SESSION['cliente_tmp']);
        $resultado= mysqli_fetch_array($totalpagar, MYSQLI_ASSOC);
        $totalpagare = $resultado['total_pagar'];
        $query= mysqli_query(ConexionBd(), "SELECT * FROM arreglo, jy_pedidos_tmp
                                                                    WHERE arreglo.id=jy_pedidos_tmp.arreglo_id AND
                                                                    jy_pedidos_tmp.cliente_tmp=".$_SESSION['cliente_tmp']);
        $tr='';
        /*Obtiene las clasificaciones del arreglo*/
        while ($row = mysqli_fetch_array($query)) {
            if($row['clasificacion_id']!=0){ /*Verifica si de la consulta, la clasificacion tiene un ID obtiene el nombre a partir de ese ID*/
                $sql_class= mysqli_query(ConexionBd(), "SELECT * FROM jy_clasificacion WHERE clasificacion_id=".$row['clasificacion_id']);
                $res_class=mysqli_fetch_array($sql_class,MYSQLI_ASSOC);
                $clasificacion=$res_class['clasificacion_nombre'];
            }else{ /*En caso contrario muestra "Sin especificar"*/
                $clasificacion='Sin Especificar';
            }
            if($row['tamanio_id']!=0){
                $sql_class= mysqli_query(ConexionBd(), "SELECT * FROM tamanio WHERE tamanio_id=".$row['tamanio_id']);
                $res_class=mysqli_fetch_array($sql_class,MYSQLI_ASSOC);
                $tamanio=$res_class['tamanio_nombre'];
            }else{
                $tamanio='Sin Especificar';
            }
            if($row['tamanio_id'!=0]){
                $sql_class= mysqli_query(ConexionBd(),"SELECT precio FROM tamanio, arreglo WHERE tamanio.arreglo_id = arreglo.id AND tamanio.tamanio_id=".$row['tamanio_id']);
                $res_class=mysqli_fetch_array($sql_class,MYSQLI_ASSOC);
                $precio=$res_class['precio'];
            }else{
                $preci=0;
            }
            $tr.='<tr>
                    <td>
                        <div class="img-hover">
                            <img src="'.$row['imagen'].'" alt="" class="img-responsive" style="width: 50px; height:50px">
                            <div class="overlay" style="width: 60px">
                                <a href="'.$row['imagen'].'" class="fancybox">
                                    <i class="fa fa-plus-circle fa-1x"></i>
                                </a>
                            </div>
                        </div>
                    </td>
                    <td>'.$row['nombre'].'</td>
                    <td>$'.$precio.'</td>
                    <td>'.$clasificacion.' <i class="fa fa-plus-circle pull-right tip pointer-icono cambiar-clasificacion" data-pedido="'.$row['pedidos_id'].'" data-id="'.$row['id'].'" data-original-title="Agregar Clasificación" data-placement="right"></i></td>
                    <td>'.$tamanio.' <i class="fa fa-plus-circle pull-right tip pointer-icono cambiar-tamanio" data-pedido="'.$row['pedidos_id'].'" data-id="'.$row['id'].'" data-original-title="Agregar Tamaño" data-placement="right"></i></td>
                    <td>
                        <li class="fa fa-edit fa-1x pointer-icono agregadedicatoria" style="float:right !important;" data-dedicatoria="'.$row['dedicatoria'].'" data-pedido="'.$row['pedidos_id'].'"></li>
                        <textarea rows="2" cols="25" style="color:#151515; border:none !important;background-color:#ffffff !important" disabled>'.$row['dedicatoria'].'</textarea>               
                    </td>
                    <td>
                        <i style="margin-left:15px !important" class="fa fa-trash-o fa-2x pointer-icono eliminarpedido" data-pedido="'.$row['pedidos_id'].'"></i>
                    </td>
                </tr>';
        }
        $tr.='<tr>
            <td colspan="6"></td>
            <td colspan="2"><strong>Total : $ '.$totalpagare.'.00</strong> </td>
        </tr>';
        echo json_encode(array('tr'=>$tr));
    }
            /*Realiza la consulta obteniendo las clasificaciones del arreglo registrados*/
    if($_POST['accion']=='ObtenerClasificacion'){
        $sql_clasificacion= mysqli_query(ConexionBd(), "SELECT * FROM arreglo, jy_clasificacion, jy_arreglo_clasificacion
                                                        WHERE
                                                        jy_arreglo_clasificacion.arreglo_id=arreglo.id AND
                                                        jy_arreglo_clasificacion.clasificacion_id=jy_clasificacion.clasificacion_id AND
                                                        arreglo.id=".$_POST['arreglo_id']);
        $option='';
        while ($row = mysqli_fetch_array($sql_clasificacion)) {
            $option.='<option value="'.$row['clasificacion_id'].'">'.$row['clasificacion_nombre'].'</option>';
        }
        echo json_encode(array('option'=>$option));
    }
            /*Realiza la consulta obteniendo los tamaños del arreglo registrados*/
    if($_POST['accion']=='ObtenerTamanio'){
        $sql_tamanio= mysqli_query(ConexionBd(), "SELECT * FROM arreglo,tamanio 
                                                  WHERE 
                                                  tamanio.arreglo_id=arreglo.id AND
                                                  arreglo.id=".$_POST['arreglo_id']);
        $option='';
        while ($row = mysqli_fetch_array($sql_tamanio)) {
            $option.='<option value="'.$row['tamanio_id'].'">'.$row['tamanio_nombre'].'</option>';
        }
        echo json_encode(array('option'=>$option));
    }
            /*Realiza el cambio de CLASIFICACION */
    if($_POST['accion']=='CambiarClasificacion'){
        $clasificacion_id=$_POST['clasificacion_id'];
        $sql= mysqli_query(ConexionBd(), "UPDATE jy_pedidos_tmp SET clasificacion_id='$clasificacion_id' WHERE  pedidos_id=".$_POST['pedidos_id']);
        if($sql){
            echo json_encode(array('accion'=>'1'));
        }else{
            echo json_encode(array('accion'=>'2'));
        }
    }
            /*Realiza el cambio de TAMAÑO */
    if($_POST['accion']=='CambiarTamanio'){
        $tamanio_id=$_POST['tamanio_id'];
        $sql= mysqli_query(ConexionBd(), "UPDATE jy_pedidos_tmp SET tamanio_id='$tamanio_id' WHERE  pedidos_id=".$_POST['pedidos_id']);
        if($sql){
            echo json_encode(array('accion'=>'1'));
        }else{
            echo json_encode(array('accion'=>'2'));
        }
    }
            /*Eliminar un pedido*/
    if($_POST['accion']=='EliminarPedido'){
        $pedidos_id=$_POST['pedidos_id'];
        $sql= mysqli_query(ConexionBd(), "DELETE FROM jy_pedidos_tmp  WHERE pedidos_id=$pedidos_id ");
        if($sql){
            echo json_encode(array('accion'=>'1'));
        }else{
            echo json_encode(array('accion'=>'2'));
        }
    }
            /*Realiza la INSERCCION de los datos del pedido con ENTREGA A DOMICILIO*/
    if($_POST['accion']=='RecojerSucursal'){

    }
            /*Realiza la CONSULTA de la dedicatoria del arreglo*/
    if($_POST['accion']=='ObtenerDedicatoria'){
        $sql= mysqli_query(ConexionBd(), "SELECT *FROM jy_pedidos_tmp WHERE pedidos_id=".$_POST['pedidos_id']);
        if($sql){
            echo json_encode(array('accion'=>'1'));
        }else{
            echo json_encode(array('accion'=>'2'));
        }
    }
            /*Realiza la INSERCCION de la dedicatoria del arreglo*/
    if($_POST['accion']=='InsetarDedicatoria'){
        $dedicatoria=$_POST['dedicatoria'];
        $sql= mysqli_query(ConexionBd(), "UPDATE jy_pedidos_tmp SET dedicatoria='$dedicatoria' WHERE pedidos_id=".$_POST['pedidos_id']);
        if($sql){
            echo json_encode(array('accion'=>'1'));
        }else{
            echo json_encode(array('accion'=>'2'));
        }
    }


