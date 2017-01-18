<?php 

    include 'conexion.php';

    $usuario = $_POST['usuario'];
    $contrasenia = $_POST['contrasenia'];

    $con = conexion();
    $query = "SELECT * FROM cliente WHERE usuario = '".$usuario."' AND contrasenia='".$contrasenia."'";

    $q = mysql_query($query,$con);

    try{
        if(mysql_result($q, 0))
        {
            $result = mysql_result($q, 0);
            echo '<script>location.href="PrincipalArreglos.php";</script>';
        }else{
            echo '<script>alert("Datos incorrectos"); location.href="index.php";</script>';
        }
    }catch ( Exception $error){}
    
    mysql_close($con);

?>
