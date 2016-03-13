<?php
 include('conexion.php');

    $user=$_POST["usuario"];
    $sem=$_POST["semestre"];
    $grupo=$_POST["grupo"];
    $pass=$_POST["pass"];
    $rpass=$_POST["repass"];
    $cat=$_POST["categoria"];
    $tut=$_POST['tutor'];

            $type= $_FILES['userfile']['type'] ;
            $temp=$_FILES['userfile']['tmp_name'];
            $archivo = $_FILES['userfile']['name'];

            if ($pass==$rpass){
                
                if (($type=="image/png") || ($type=="image/jpeg") ||($type=="image/jpg")){
                    
                    $directory="./upload/$user/"; 
                    mkdir($directory, 0777, true);

                    move_uploaded_file($temp, "upload/$user/$archivo");
                    
                    $sql="select id_grupo from grupos where grado=$sem and grupo='$grupo'";
                    $result=mysql_query($sql);
                    $fila=mysql_fetch_row($result);
                    $res=$fila[0];
                    $id=$res;
                    
                   // $sql2="insert into grupos (id_grupo, grado, grupo) values ($id, $semestre, '$grupo' )";
                //    mysql_query($sql2);
                    
                    
                    $sql3="insert into usuarios (id_grupo, usuario, password, categoria, tutor) values                  ($id,'$user','$pass','$cat','$tut')";
                    
                    mysql_query($sql3);  

                        echo " <script language='JavaScript'>
                        alert('Usuario registrado correctamente');
                        window.location.href=\"../users.php\"
                            </script>";

                }

                else {
                     echo " <script language='JavaScript'>
                        alert('Error de formato! Solo se aceptan imágenes formato: JPEG/JPG/PNG');
                        window.location.href=\"../users.php\"
                            </script>";

                }
                  }  
        
            else {
                echo " <script language='JavaScript'>
                        alert('No coinciden las contraseñas, favor de ingresar nuevamente');
                        window.location.href=\"../users.php\"
                            </script>";
            }
           
                
           
        
?>