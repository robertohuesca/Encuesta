<?php
 include('php/conexion.php');

    $usuario=$_POST["usuario"];
    $password=$_POST["pass"];
    $conf=$_POST["repass"];
    $categoria=$_POST["categoria"];
    $tutor=$_POST['tutor'];

            $nombre_archivo = $_FILES['userfile']['name'];
            $directorio_definitivo = "/var/www/proyecto/upload/";
            mysql_query("insert into usuarios (usuario, password, categoria, tutor) values ('$usuario','$password','$categoria','$tutor')");
           /* if (move_uploaded_file($_FILES['userfile']['tmp_name'], $directorio_definitivo.$nombre_archivo)){

                    

                   echo "El archivo ha sido cargado correctamente.";
                }else{
                   echo "Ocurrió algún error al subir el fichero. No pudo guardarse.";
                }*/
?>