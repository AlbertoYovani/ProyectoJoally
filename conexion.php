<?php
        //error_reporting(0);
        function ConexionBd() {
            
            $conexion= mysqli_connect("localhost","root","1","joally");
            mysqli_query ($conexion,"SET names 'utf8'");
            return $conexion;
}
	//$conexion=mysqli_connect("191.168.1.78","root","1","joally");
       // mysqli_query ($conexion,"SET names 'utf8'");
?>