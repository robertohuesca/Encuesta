<?php

    include('conexion.php');
        if (isset($_REQUEST['user'])) {
        $usuario = $_REQUEST['user'];
        } else {
        $usuario = "";
        }
        
        if (isset($_REQUEST['password'])) {
        $password = $_REQUEST['password'];
        } else {
        $password = "";
        }

    $sql = "select categoria, id_grupo,tutor from usuarios where usuario='$usuario' and password='$password'";
    $result=mysql_query($sql);
    $fila=mysql_fetch_row($result);
    $categoria=$fila[0];
    $id_grupo=$fila[1];
    $tutor=$fila[2];
    $count = mysql_num_rows($result);
    $user=strtoupper($usuario);
    $sql="select grado, grupo from grupos where id_grupo='$id_grupo'";
    $re=mysql_query($sql);
    $fila2=mysql_fetch_row($re);
    $grupo=$fila2[0];
    $grado=$fila2[1];
    
   
    if($count !=0){
        session_start();
        $_SESSION['usuario']=$user;
        $_SESSION['categoria']=$categoria;
        $_SESSION['tutor']=$tutor;
        $_SESSION['id_grupo']=$id_grupo;
        $_SESSION['grado']=$grado;
        $_SESSION['grupo']=$grupo;
       
        echo json_encode('datos');
        exit; 
    }
    
    else{
       echo json_encode(null);
    exit;
        
    }

/*
    $result=mysql_query($sql);
    
    if ($row=mysql_fetch_array($consulta)){
         session_start();
            $_SESSION['usuario']=$usuario;
            header("Location:index.php");
        /*if ($row["password"]==$password){
            session_start();
            $_SESSION['usuario']=$usuario;
            header("Location:index.php");
        }
        else{
             echo " <script language='JavaScript'>
                alert('Contraseña Incorrecto');
                window.location.href=\"login.php\"
                </script>";
            
        }*/
    
/*    else{
       echo " <script language='JavaScript'>
                alert('Usuario Incorrecto');
                window.location.href=\"login.php\"
                </script>";
        
    }
*/
   

?>
