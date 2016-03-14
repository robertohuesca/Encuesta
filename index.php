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
        <title>Ficha de Diagnóstico Inicial</title>
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/Style.css">
        <link rel="stylesheet" href="css/styles.css">
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/photo.js"></script>
    </head>
    <body>
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
                <div id="perfil"> 
                    <br>
                      <?php
                $dir = "php/upload/".$_SESSION['usuario']; // Indicar ruta
                    $abrir = opendir($dir); // Abrir archivos
                        while (($file = readdir($abrir)) !=FALSE) {
                            if ($file != "." && $file != ".." && $file != "Thumbs.bd")  {          

                                     echo "<img src='$dir/$file' id='mostrar' class='circular' />"; 
                                }
                        }
                     ?>
                </div>
        </nav>
             <div id="obj" class="arrow_box"  style="display:none">
             
               <div id="user"> <?php echo $_SESSION['usuario'];?></div>
                <div id="tipo"> <?php echo $_SESSION['categoria'];?></div>
                 <div id="tutor">Tutor: <?php echo $_SESSION['tutor'];?></div>
            
                      <?php
                            $dir = "php/upload/".$_SESSION['usuario']; // Indicar ruta
                                $abrir = opendir($dir); // Abrir archivos
                                    while (($file = readdir($abrir)) !=FALSE) {
                                        if ($file != "." && $file != ".." && $file != "Thumbs.bd")  {          

                                                 echo "<img src='$dir/$file' id='imagen' class='circular' />"; 
                                            }
                                        }
                     ?>
         
                 <div id="color"></div>
                <form action="php/salir.php"  method="post" >
                 <div id="button"><input type="submit" name="submit" value="Salir" id="but"></div></form>
            </div> 
        </header>
        
        
             
        <div id="titulo" >
            <section> 
                <article>
                    <h1>FICHA DE DIAGNOSTICO INICIAL</h1>     
                    <div id="linea"></div>       
                </article>
            </section>
        </div>
            <div class="tile"> 
                <img  class="rotateMe" src="images/questions.png" width="80px">
                <a href="questions.html"><h4>Preguntas Frecuentes</h4></a>
                <div id="contenido">Encuentre todas las respuestas a como utilizar este sitio para realizar una encuesta, subir fotografías de los alumnos, cambiar su perfil etc.
                    </div>
            </div>
            <div class="tile"> 
                <img class="rotateMe" src="images/users.png" width="80px">
                <a href="users.php"><h4>Agregar usuarios</h4></a>
                <div id="contenido">Si usted es adminisrador, ingrese y dé de alta a los nuevos usuarios, así como tambíen elimine o modifiquelos de acuerdo a sus necesidades.
                    </div>
            </div>
            <div class="tile">
                <img  class="rotateMe"src="images/pdf.png" width="80px">
               <a href="upload/ficha.pdf"> <h4>Descargar ficha</h4></a>
                <div id="contenido">Si desea adquirir una copia de la ficha de diagnóstico en blanco, lo puede hacer desde este modulo solo dando clic y se abrirá en formato pdf para que pueda ser descargado.
                    </div>
            </div>
    </body>
    <footer> Copyright (2016)
    </footer>
</html>
