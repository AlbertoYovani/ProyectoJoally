<?php
include '../conexion.php';
    session_start();
    $nombre=filter_input(INPUT_POST, 'nombre');
    $correo=filter_input(INPUT_POST, 'correo');
    $telefono=filter_input(INPUT_POST, 'telefono');
    $fechanac=filter_input(INPUT_POST, 'fechanac');
    $usuario=filter_input(INPUT_POST, 'usuario');
    $ClPassword1=filter_input(INPUT_POST, 'ClPassword1');
    
    
    $cliente = mysqli_query(ConexionBd(), 
            "INSERT INTO cliente (id,
                                nombre,
                                correo,
                                telefono,
                                fechanac) 
                VALUES (0,'$nombre','$correo', '$telefono', '$fechanac')");
    
    $sqlmax = mysqli_query(ConexionBd(),"SELECT MAX(id) AS max_id FROM cliente");
    $max_id=$sqlmax->fetch_assoc();
    $id_user=$max_id['max_id'];
    $_SESSION['nuevo_usuario']=$id_user;
    $cuenta = mysqli_query(ConexionBd(), 
            "INSERT INTO cuenta (id,
                                idCliente,
                                usuario,
                                ClPassword1) 
                VALUES (0, $id_user,'$usuario', '$ClPassword1')");
    
    
    /*le asignamos un ID al cliente tmp, dependiendo si inicia sesion o se registra*/
    if(isset($_SESSION['cliente_tmp'])){
        $sql = mysqli_query(ConexionBd(), "UPDATE jy_pedidos_tmp SET cliente_id =".$max_id['max_id']." WHERE  cliente_tmp=".$_SESSION['cliente_tmp']);
    }
    if($cliente and $cuenta){
        echo json_encode(array(
            'accion'=>'1'
        ));
    }else{
        echo json_encode(array(
            'accion'=>'2'
        ));
    }
            