<?php
include '../conexion.php';

	$usuario=$_POST['usuario'];
	$pass=$_POST['ClPassword'];
        
        
        $sql=  mysqli_query($conexion, "SELECT * FROM cliente WHERE usuario='$usuario' AND ClPassword=('$pass')");
        $row=mysqli_fetch_array($sql);
        if(!empty($row)){
                session_start();
		header('location:PrincipalArreglos.php');
        }else{
            echo '<script>alert("Datos incorrectos"); window.location.href="index.php";</script>';
        }
?>
