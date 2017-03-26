    <?php
    include '../conexion.php';
    session_start();
            /*Inicio de sesion de un cliente*/
    if($_POST['accion']=='IniciarSesion'){
        $usuario=$_POST['usuario'];
        $ClPassword1=$_POST['ClPassword1'];

        $sql = "SELECT * FROM cuenta
                WHERE usuario = '$usuario'
                AND ClPassword1='$ClPassword1' ";
        $query= mysqli_query(ConexionBd(),$sql);

        if (mysqli_num_rows($query)) {
            $res=$query->fetch_assoc();
            $_SESSION['CLIENTE_ID']=$res['idCliente'];
            $_SESSION['CUENTA_ID']=$res['id'];
            /*le asignamos un ID al cliente tmp, dependiendo si quien es el que inicia sesion*/
        if(isset($_SESSION['cliente_tmp'])){
            $sql = mysqli_query(ConexionBd(), "UPDATE jy_pedidos_tmp SET cliente =".$_SESSION['CLIENTE_ID']." 
                                               WHERE  cliente_tmp=".$_SESSION['cliente_tmp']);
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
    if($_POST['accion']=='AgregarArreglo'){
        
        
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
        $arreglo_nombre= filter_input(INPUT_POST, 'arreglo_nombre');
        $tamanio_precio= filter_input(INPUT_POST, 'tamanio_precio');
        $clasificacion_id= filter_input(INPUT_POST, 'clasificacion_id');
        //OBTENGO EL ID DEL TAMAÑO DEL ARREGLO DEPENDIENDO DE SU PRECIO, CLASIFICACION Y NOMBRE
        $query = mysqli_query(ConexionBd(), "SELECT tamanio.id as id_tamanio FROM arreglo, tamanio, clasificacion 
                                             WHERE arreglo.tamanio = tamanio.id AND arreglo.idCa = clasificacion.id 
                                             AND arreglo.precio ='".$tamanio_precio."' 
                                             AND arreglo.nombre = '".$arreglo_nombre."'
                                             AND arreglo.idCa = ".$clasificacion_id."");
        $ress=$query->fetch_assoc();
        $id_tamanio = $ress['id_tamanio'];
        
        for ($index = 1; $index <= $pedidos_cantidad; $index++) {
           $sql= mysqli_query(ConexionBd(), "INSERT INTO jy_pedidos_tmp 
                                                (pedidos_id,pedidos_fecha,pedidos_hora,
                                                cliente,cliente_tmp,arreglo_nombre,clasificacion_id,
                                                tamanio_id,dedicatoria) 
                                                VALUES (0,'$pedidos_fecha','$pedidos_hora',0,
                                                '$cliente_tmp','$arreglo_nombre',
                                                '$clasificacion_id','$id_tamanio','')");
           
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
            $sql= mysqli_query(ConexionBd(), "SELECT COUNT(jy_pedidos_tmp.pedidos_id)
                                              AS total_cantidad FROM  jy_pedidos_tmp 
                                              WHERE jy_pedidos_tmp.cliente_tmp=".$_SESSION['cliente_tmp']);
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
        $totalpagar= mysqli_query(ConexionBd(),"SELECT SUM(arreglo.precio) AS total_pagar 
                                                FROM jy_pedidos_tmp, tamanio, arreglo 
                                                WHERE arreglo.nombre = jy_pedidos_tmp.arreglo_nombre 
                                                AND tamanio.id = jy_pedidos_tmp.tamanio_id 
                                                AND jy_pedidos_tmp.tamanio_id = arreglo.tamanio 
                                                AND jy_pedidos_tmp.cliente_tmp = ".$_SESSION['cliente_tmp']);
        $resultado= mysqli_fetch_array($totalpagar, MYSQLI_ASSOC);
        $totalpagare = $resultado['total_pagar'];
        //OBETEMOS LOS DATOS PARA LLENAR LA TABLA DE PEDIDOS
        $query= mysqli_query(ConexionBd(), "SELECT *, arreglo.nombre AS nombre_arreglo, tamanio.nombre 
                                            AS tamanio_nombre, clasificacion.nombre AS clasifi_nombre
                                            FROM jy_pedidos_tmp, tamanio, arreglo, clasificacion 
                                            WHERE arreglo.nombre = jy_pedidos_tmp.arreglo_nombre 
                                            AND tamanio.id = jy_pedidos_tmp.tamanio_id 
                                            AND jy_pedidos_tmp.clasificacion_id = clasificacion.id
                                            AND jy_pedidos_tmp.tamanio_id = arreglo.tamanio 
                                            AND jy_pedidos_tmp.cliente_tmp =".$_SESSION['cliente_tmp']);
        $tr='';
        while ($row = mysqli_fetch_array($query)) {
            $tr.='<tr>
                    <td>
                        <div class="img-hover">
                                <?php echo <img src="data:image/jpeg;base64,' . base64_encode($row['imagen']) . '" class="img-responsive" style="width: 65px; height:50px">; ?>
                            <div class="overlay" style="width: 65px; height: 50px;">
                                <a href="<?php echo data:image/jpeg;base64,' . base64_encode($row['imagen']) .'; ?>" class="fancybox">
                                    <i class="fa fa-plus-circle fa-1x"></i>
                                </a>
                            </div>
                        </div>
                    </td>
                    <td>'.$row['nombre_arreglo'].'</td>
                    <td>$'.$row['precio'].'</td>
                    <td>'.$row['clasifi_nombre'].'</i></td>
                    <td>'.$row['tamanio_nombre'].'</i></td>
                    <td>
                        <li class="fa fa-edit fa-1x pointer-icono agregadedicatoria" style="float:right !important; color: #88C425 !important;" data-dedicatoria="'.$row['dedicatoria'].'" data-pedido="'.$row['pedidos_id'].'"></li>
                        <textarea rows="2" cols="25" style="color:#308DE4; border:none !important;background:#F5F5F5 !important" disabled>'.$row['dedicatoria'].'</textarea>               
                    </td>
                    <td>
                        <i style="margin-left:15px !important; color: #88C425 !important;" class="fa fa-trash-o fa-2x pointer-icono eliminarpedido" data-pedido="'.$row['pedidos_id'].'"></i>
                    </td>
                </tr>';
        }
        $tr.='<tr>
            <td colspan="6"></td>
            <td colspan="2"><strong>Total : $ '.$totalpagare.'.00</strong> </td>
        </tr>';
        echo json_encode(array('tr'=>$tr));
    }
            /*Eliminar un pedido*/
    if($_POST['accion']=='EliminarPedido'){
        $pedidos_id=$_POST['pedidos_id'];
        $sql= mysqli_query(ConexionBd(), "DELETE FROM jy_pedidos_tmp
                                          WHERE pedidos_id=$pedidos_id ");
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
        $sql= mysqli_query(ConexionBd(), "SELECT *FROM jy_pedidos_tmp
                                          WHERE pedidos_id=".$_POST['pedidos_id']);
        if($sql){
            echo json_encode(array('accion'=>'1'));
        }else{
            echo json_encode(array('accion'=>'2'));
        }
    }
            /*Realiza la INSERCCION de la dedicatoria del arreglo*/
    if($_POST['accion']=='InsetarDedicatoria'){
        $dedicatoria=$_POST['dedicatoria'];
        $sql= mysqli_query(ConexionBd(), "UPDATE jy_pedidos_tmp SET dedicatoria='$dedicatoria'
                                          WHERE pedidos_id=".$_POST['pedidos_id']);
        if($sql){
            echo json_encode(array('accion'=>'1'));
        }else{
            echo json_encode(array('accion'=>'2'));
        }
    }
    //Mostrar o filtrar los precios de cada arreglo, dependiendo del tamaño
    if($_POST['accion']=='filtroprecio'){
        error_reporting(0);
        $nomarreglo = $_POST['arreglo_nombre'];
        $tamanio = $_POST['tamanio'];
        
        $arre = mysqli_query(ConexionBd(), "SELECT * FROM arreglo, tamanio, clasificacion 
                                            WHERE arreglo.tamanio = tamanio.id 
                                            AND arreglo.idCa = clasificacion.id 
                                            AND arreglo.nombre = '".$nomarreglo."'
                                            AND tamanio.id =".$tamanio."");
        $ress=$arre->fetch_assoc();
        echo $ress['precio'];
    }

