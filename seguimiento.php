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
          <link rel="stylesheet" href="css/general.css">    
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
                    <div class="main" id="seguimiento">
                        <div class="tit"><label>Buscar Alumno</label></div>
                        
                        <div id="matri">
                            <form>
                                <label>Ingrese Matrícula:</label>
                                <input id="entrada" type="text" name="matricula" placeholder="421310443" required>
                                  <input type="submit"  id="btn" value="Buscar" onclick="goBack()" >
                            </form>
                        </div>
                        <div class="tit" id="mat"> <label>Instrucciones</label></div>
                        <div>
                            <form>
                         <p id="instrucciones">
                    Indique el grado de logro que considera ha sido desempeñado por el alumno durante el presente parcial, por cada uno se valorarán tres aspectos.<br> <br> A= Asistencia,  B= Buen desempeño y C=Conducta,  marcando con una “X” la casilla que consideren más adecuada con base en la siguiente escala:
                    </p>
                                <label id="al">Nombre del Alumno:</label>
                    <table class="demo">
                        <thead>
                        <tr>
                            <th>E = Excelente</th>
                            <th>B = Bien</th>
                            <th>NM = Necesita mejorar</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Asiste puntualmente a clases</td>
                            <td>Entrega las actividades de aprendizaje</td>
                            <td>Su conducta es adecuada y respetuosa</td>
                        </tr>
                        <tr>
                            <td>
                                <select name="color">
                                    <option value="E">Excelente</option>
                                    <option value="B">Bien</option>
                                    <option value="NM">Necesita mejorar</option>
                                </select>
                            </td>
                            <td>
                                <select name="color">
                                    <option value="E">Excelente</option>
                                    <option value="B">Bien</option>
                                    <option value="NM">Necesita mejorar</option>
                                </select>
                            </td>
                            <td>
                                <select name="color">
                                    <option value="E">Excelente</option>
                                    <option value="B">Bien</option>
                                    <option value="NM">Necesita mejorar</option>
                                </select>
                            </td>
                            </tr>
                        </tbody>
                        </table>
                                <input type="submit"  id="btn" value="Buscar" onclick="goBack()" >
                     </form>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </body>
</html>