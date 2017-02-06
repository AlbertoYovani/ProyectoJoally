<?php
        //error_reporting(0);
        function ConexionBd() {
            return mysqli_connect("localhost","root","1","joally");
}
	//$conexion=mysqli_connect("191.168.1.69","root","1","joally");
       // mysqli_query ($conexion,"SET names 'utf8'");
?>