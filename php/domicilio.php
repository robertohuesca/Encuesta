<?php 
    include('conexion.php');
    
    $calle = $_POST["calle"];
    $col = $_POST["colonia"];
    $ext = $_POST["exterior"];
    $int = $_POST["interior"];
    $cp = $_POST["postal"];
    
    mysql_query("insert into domicilios (calle, colonia, n_exterior, n_interior, cp) values ('$calle','$col', $ext, $int, $cp)");
    
?>