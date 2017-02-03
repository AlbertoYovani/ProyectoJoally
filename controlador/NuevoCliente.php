<?php
include '../conexion.php';
    $nombre=filter_input(INPUT_POST, 'nombre');
    $correo=filter_input(INPUT_POST, 'correo');
    
    $insert = mysqli_query(ConexionBd(), 
            "INSERT INTO cliente (id,
                                nombre,
                                correo) 
                VALUES (0,'$nombre','$correo')");
    
    if($insert){
        echo json_encode(array(
            'accion'=>'1'
        ));
    }else{
        echo json_encode(array(
            'accion'=>'2'
        ));
    }
            