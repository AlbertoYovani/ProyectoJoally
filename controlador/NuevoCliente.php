<?php
include '../conexion.php';

    $nombre=$_POST['nombre'];
    $correo=$_POST['correo'];
    $telefono=$_POST['telefono'];
    $fechanac=$_POST['fechanac'];
    $usuario=$_POST['usuario'];
    $ClPassword=$_POST['ClPassword'];
    
    $insert = mysqli_query(conexion(), 
            "INSERT INTO cliente (id,
                                nombre,
                                correo,
                                telefono,
                                fechanac,
                                usuario,
                                ClPassword) 
                VALUES (0,'$nombre','$correo','$telefono','$fechanac','$usuario','$ClPassword')");
    
    if($insert){
        echo json_encode(array(
            'mensaje'=>'1'
        ));
    }else{
        echo json_encode(array(
            'mensaje'=>'2'
        ));
    }
            