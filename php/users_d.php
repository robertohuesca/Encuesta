<?php

include('conexion.php');
 //variable GET
   $idemp=$_GET['id_usuario'];
 //elimina el registro de la tabla empleados
   $sql="DELETE FROM USUARIOS WHERE ID_USUARIO=$idemp";
 mysql_query($sql);

?>