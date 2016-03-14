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
          <link rel="stylesheet" href="css/reset.css">    
          <link rel="stylesheet" href="css/model-box.css">  
          <link rel="stylesheet" href="css/Style.css">
          <link rel="stylesheet" href="css/styles.css">
          <script src="js/load.js"></script> 
    </head>
    <body>
        <div id="wrapper">
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
            <div id="main">
                <div id="column_left" >
                    <ul id="menulateral">
                        <li><a href="javascript:Enviar('default.php','column_right')" title="Prueba">Seguimiento</a></li>
                        <li><a href="#" ><span>Referencia</span></a></li>
                        <li><a href="#"><span>Consulta</span></a></li>
                    </ul>
                </div>
                <div id="column_right">
                    <br style="clear:both;" />
                </div>
                
            </div>
            <div id="footer">
            </div>
        </div>
    </body>
</html>