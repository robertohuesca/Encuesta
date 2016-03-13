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

    $sql = "select categoria, tutor  from usuarios where usuario='$usuario' and password='$password'";
    
    $result=mysql_query($sql);
    $fila=mysql_fetch_row($result);
    $categoria=$fila[0];
    $tutor=$fila[1];
    $count = mysql_num_rows($result);
    $user=strtoupper($usuario);
  
 
    if($count == 1){
        session_start();
        $_SESSION['usuario']=$user;
        $_SESSION['categoria']=$categoria;
        $_SESSION['tutor']=$tutor;
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