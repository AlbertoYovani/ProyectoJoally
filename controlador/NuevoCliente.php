<?php
include '../conexion.php';

    $nombre=$_POST['nombre'];
    $correo=$_POST['correo'];
    $telefono=$_POST['telefono'];
    $fechanac=$_POST['fechanac'];
    $usuario=$_POST['usuario'];
    $contrasenia=$_POST['contrasenia'];
    
    $insert = mysqli_query(conexion(), 
            "INSERT INTO cliente (
                                nombre,
                                correo,
                                telefono,
                                fechanac,
                                usuario,
                                contrasenia) 
                VALUES ('$nombre','$correo','$telefono','$fechanac','$usuario','$contrasenia')");
    
    if($insert){
        echo json_encode(array(
            'mensaje'=>'1'
        ));
    }else{
        echo json_encode(array(
            'mensaje'=>'2'
        ));
    }
            