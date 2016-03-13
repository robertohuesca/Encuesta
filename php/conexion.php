<?php 
    $host_db = "localhost"; // Host de la BD
    $usuario_db = "root"; // Usuario de la BD
    $clave_db = ""; // Contraseña de la BD
    $nombre_db = "encuesta"; // Nombre de la BD
     
    //conectamos y seleccionamos db
    mysql_connect($host_db, $usuario_db, $clave_db);
    mysql_select_db($nombre_db);

    function Connect (){
 	$conn =	null;
 	$host = 'localhost';
 	$db = 	'encuesta';
 	$user = 'root';
 	$pwd = 	'root';
	try {
	   	$conn = new PDO('mysql:host='.$host.';dbname='.$db, $user, $pwd);
		//echo 'Connected succesfully.<br>';
	}
	catch (PDOException $e) {
		echo '<p>Cannot connect to database !!</p>';
	    exit;
	}
	return $conn;
 }
?>
