<?php    
   session_start();
    
    if(!isset($_SESSION['usuario'])){
        header('Location:login.php');
        exit();
    }
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Usuarios</title>
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/Style.css">
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="css/users.css">
        <script language="JavaScript" type="text/javascript" src="js/users_d.js"></script>
    </head>
    <body onload="mostrar();">
           <header>
            <nav>
                <div id="logo">
                <img src="images/log.png" height="80px" width="90px">
                </div>
                <ul id="menu">
                    <li><a href="index.php"><span class="primero"><i class="icon icon-home3"></i></span>Inicio</a></li>
                    <li><a href="#"><span class="segundo"><i class="icon icon-newspaper"></i></span>Encuestas</a>
                        <ul>
                            <li><a href="survey.php">Iniciar Encuestas</a> </li>  
                        </ul>
                    </li>
                    <li><a href="#"><span class="tercero"><i class="icon icon-address-book"></i></span>Control</a>
                        <ul> 
                            <li><a href="seguimiento.php">Seguimiento de Alumnos</a> </li> 
                        </ul>
                    </li>
                    <li><a href="#"><span class="cuarto"><i class="icon icon-camera"></i></span>Fotografías</a></li>
                </ul>
        </nav>
        </header>
        <label class="title">Tabla de usuarios</label>
        <div id="box-table" >
        
        </div>
        <label class="title">Ingresar nuevo usuario</label>
        
        <form enctype="multipart/form-data" action="php/insert.php" method="post" class="ingreso" name="users" >
            <ul>
                <li><label>Usuario:</label></li>
                <li><input type="text" name="usuario"></li>
                <li><label>Semestre:</label></li>
                
                <li><select name="semestre">
                        <option value="">Seleccionar</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select></li>
                <li><label>Grupo:</label></li>
                <li><select name="grupo">
                        <option value="">Seleccionar</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option value="E">E</option>
                        <option value="F">F</option>
                    </select></li>
                <li><label>Contraseña:</label></li>
                <li><input type="password" name="pass"></li>
                <li><label>Confirme contraseña:</label></li>
                <li><input type="password" name="repass"></li>
                
                <li><label>Tipo de usuario:</label></li>
                <li><select name="categoria">
                        <option value="">Seleccionar</option>
                        <option value="ADMINISTRADOR">Administrador</option>
                        <option value="USUARIO">Usuario</option>
                    </select></li>
                <li><label>Tutor de Grupo:</label></li>
                <li><input type="text" name="tutor"></li>
                <li><label>Imagen de perfil</label></li>
                <li><input type="hidden" name="MAX_FILE_SIZE" value="2097152"></li>
                <li><input type="file" name="userfile"></li>
                <li><span ><input id="btn" type="submit" name="Registrar" value="Registrar"></li></span>
            </ul>
        </form>
        
     </body>
</html>

