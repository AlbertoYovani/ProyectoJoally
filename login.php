<?php
    require_once('conexion.php');
    session_start();
    $usuario=$_POST['usuario'];
    $ClPassword1=$_POST['ClPassword1'];
    $error = '';

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
?>

