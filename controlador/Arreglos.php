<?php
include '../conexion.php';
session_start();
if($_POST['accion']=='ver_detalles'){
    error_reporting(0);
    $sql= mysqli_query(ConexionBd(), "SELECT * FROM arreglo WHERE id=".$_POST['id']);
    $result= mysqli_fetch_array($sql,MYSQLI_ASSOC);
    echo json_encode(array(
        'accion'=>'1',
        'ArregloId'=>$result['id'],
        'ArregloNombre'=> utf8_encode($result['nombre']),
        'ArregloTamanio'=> utf8_encode($result['clasificacion']) ,
        'ArregloImagen'=> utf8_encode($result['imagen']) ,
        'ArregloDescripcion'=> utf8_encode($result['descripcion']),
        'ArregloPrecio'=> utf8_encode($result['precio']),
        'Clasificaciones'=> utf8_encode($option) 
    ));
}
if($_POST['accion']=='AgregarArreglo'){
    if(isset($_SESSION['cliente_tmp'])){
        $cliente_tmp=$_SESSION['cliente_tmp'];
    }else{
        $_SESSION['cliente_tmp']=rand();
        $cliente_tmp=$_SESSION['cliente_tmp'];
    }
    $pedidos_fecha= date('d/m/Y');//12/12/2017
    $pedidos_hora= date('H:i');
    $pedidos_cantidad= filter_input(INPUT_POST, 'pedidos_cantidad');
    $arreglo_id= filter_input(INPUT_POST, 'arreglo_id');
    
    for ($index = 1; $index <= $pedidos_cantidad; $index++) {
       $sql= mysqli_query(ConexionBd(), "INSERT INTO jy_pedidos_tmp (pedidos_id,pedidos_fecha,pedidos_hora,cliente_id,cliente_tmp,arreglo_id) 
            VALUES (0,'$pedidos_fecha','$pedidos_hora',0,$cliente_tmp,$arreglo_id)"); 
    }
    
    if($sql){
        echo json_encode(array('accion'=>'1'));
    }else{
        echo json_encode(array('accion'=>'2'));
    }
}
if($_POST['accion']=='ObtenerTotal'){
    
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
    $query= mysqli_query(ConexionBd(), "SELECT * FROM arreglo, jy_pedidos_tmp,categoria
                                                                WHERE arreglo.id=jy_pedidos_tmp.arreglo_id AND 
                                                                arreglo.categoria_id=categoria.categoria_id AND
                                                                jy_pedidos_tmp.cliente_tmp=".$_SESSION['cliente_tmp']);
    $tr='';
    while ($row = mysqli_fetch_array($query)) {
        if($row['clasificacion_id']!=''){
            $sql_class= mysqli_query(ConexionBd(), "SELECT * FROM jy_clasificacion WHERE clasificacion_id=".$row['clasificacion_id']);
            $res_class=mysqli_fetch_array($sql_class,MYSQLI_ASSOC);
            $clasificacion=$res_class['clasificacion_nombre'];
        }else{
            $clasificacion='Sin Especificar';
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
                <td>'.$row['categoria_nombre'].'</td>
                <td>'.$row['precio'].'</td>
                <td>'.$clasificacion.' <i class="fa fa-plus-circle pull-right tip pointer-icono cambiar-clasificacion" data-pedido="'.$row['pedidos_id'].'" data-id="'.$row['id'].'" data-original-title="Agregar Clasificación" data-placement="right"></i></td>
                <td>
                    <textarea style="border: none !important" name="dedicatoria" class="form-control pedido opc" placeholder="Mi tarjeta tiene que decir... "> </textarea></td>
                </td>
                <td>
                
                </td>
            </tr>';

    }
    echo json_encode(array('tr'=>$tr));
}
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
if($_POST['accion']=='CambiarClasificacion'){
    $clasificacion_id=$_POST['clasificacion_id'];
    $sql= mysqli_query(ConexionBd(), "UPDATE jy_pedidos_tmp SET clasificacion_id='$clasificacion_id' WHERE  pedidos_id=".$_POST['pedidos_id']);
    if($sql){
        echo json_encode(array('accion'=>'1'));
    }else{
        echo json_encode(array('accion'=>'2'));
    }
}
    
    

