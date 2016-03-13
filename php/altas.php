<?php
    include('conexion.php');

    $nom=$_POST["nombre"];
    $paterno=$_POST["paterno"];
    $materno=$_POST["materno"];
    $genero=$_POST["genero"];
    $nacionalidad=$_POST["nacionalidad"];
    $estado=$_POST["estado"];
    $nacimiento=$_POST["fecha"];
    $curp=$_POST["curp"];


    $calle = $_POST["calle"];
    $col = $_POST["colonia"];
    $ext = $_POST["exterior"];
    $int = $_POST["interior"];
    $cp = $_POST["postal"];
    
    $sql1= "insert into domicilios (calle, colonia, n_exterior, n_interior, cp) values ('$calle','$col', $ext, $int, $cp)";
    mysql_query($sql1);
    $id=mysql_insert_id();

    $sql2="insert into personas (id_domicilio, nombre, ap_paterno, ap_materno, genero, nacionalidad, lugar_nac, fecha_nac, curp) values ($id, '$nom', '$paterno', '$materno',  '$genero', '$nacionalidad', '$estado', $nacimiento, '$curp')";

    mysql_query($sql2);

     echo " <script language='JavaScript'>
                alert('Datos ingresados correctamente');
                 window.location.href=\"default.php\"
                </script>";

    //echo "<iframe width='80%' height='80%' href='Familiares.php' name='iframe_a'></iframe>"
?>