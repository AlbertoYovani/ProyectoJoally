<?php
    require_once('conexion.php');
    session_start();
    $usuario = filter_input(INPUT_POST, 'usuario');
    $ClPassword = filter_input(INPUT_POST, 'ClPassword');
    $error = '';

    $sql = "SELECT * FROM cuenta WHERE usuario = '$usuario' AND ClPassword='$ClPassword' ";
    $query= mysqli_query(ConexionBd(),$sql);

    if (mysqli_num_rows($query)) {
        $res=$query->fetch_assoc();
        $_SESSION['id']= $res['id'];
        echo json_encode(array(
            'accion'=>'1'
        ));
    }else{
        echo json_encode(array(
            'accion'=>'2'
        ));
    }
?>

