<?php
include '../conexion.php';
    $nombre=filter_input(INPUT_POST, 'nombre');
    
    $foto= $_FILES['foto']['name'];
    $ruta= $_FILES['foto']['tmp_name'];
    $destino= "foto/".$foto;
    //copy($ruta, $destino);
    copy($_FILES['foto']['tmp_name'],'foto/'.$_FILES['foto']['name']);
    $correo=filter_input(INPUT_POST, 'correo');
    $telefono=filter_input(INPUT_POST, 'telefono');
    $fechanac=filter_input(INPUT_POST, 'fechanac');
    $usuario=filter_input(INPUT_POST, 'usuario');
    $ClPassword=filter_input(INPUT_POST, 'ClPassword');
    
    
    $insert = mysqli_query(ConexionBd(), 
            "INSERT INTO cliente (id,
                                foto,
                                nombre,
                                correo,
                                telefono,
                                fechanac,
                                usuario,
                                ClPassword) 
                VALUES (0,'$destino','$nombre','$correo', '$telefono', '$fechanac', '$usuario', '$ClPassword')");
    
    if($insert){
        echo json_encode(array(
            'accion'=>'1'
        ));
    }else{
        echo json_encode(array(
            'accion'=>'2'
        ));
    }
            