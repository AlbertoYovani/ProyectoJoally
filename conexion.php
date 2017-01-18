<?php

function conexion()
    {
        if(!($link=mysql_connect("localhost","root","1")))
            {
               echo '<script>alert("Error al conectarse"); </script>';
            }
        if(!mysql_select_db('joally',$link))
            {
                echo '<script>alert("Error al seleccionar la Base de Datos"); </script>';
            }
        return $link;
    }
    
?>