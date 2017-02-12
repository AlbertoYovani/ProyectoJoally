<?php
include '../conexion.php';
    error_reporting(0);
    $foto= $_FILES['foto']['name'];
    $ruta= $_FILES['foto']['tmp_name'];
    $destino= "foto/".$foto;
    //copy($ruta, $destino);
    copy($_FILES['foto']['tmp_name'],'foto/'.$_FILES['foto']['name']);
    
    $nombre=filter_input(INPUT_POST, 'nombre');
    $correo=filter_input(INPUT_POST, 'correo');
    $telefono=filter_input(INPUT_POST, 'telefono');
    $fechanac=filter_input(INPUT_POST, 'fechanac');
    $usuario=filter_input(INPUT_POST, 'usuario');
    $ClPassword=filter_input(INPUT_POST, 'ClPassword');
    
    
    $cliente = mysqli_query(ConexionBd(), 
            "INSERT INTO cliente (id,
                                nombre,
                                correo,
                                telefono,
                                fechanac) 
                VALUES (0,'$nombre','$correo', '$telefono', '$fechanac')");
    
    $cuenta = mysqli_query(ConexionBd(), 
            "INSERT INTO cuenta (id,
                                foto,
                                usuario,
                                ClPassword) 
                VALUES (0, '$destino', '$usuario', '$ClPassword')");
    
    if($cliente and $cuenta){
        echo json_encode(array(
            'accion'=>'1'
        ));
    }else{
        echo json_encode(array(
            'accion'=>'2'
        ));
    }
            