<html>
    <head>
        <meta charset="utf-8">
        <title>encuesta</title>
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/Style.css">
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="css/seguimiento.css">
        <link rel="stylesheet" href="css/MenuStyle.css">
        <link rel="stylesheet" href="css/encuesta.css">

    </head>
    <body>
   <header>
            <div id="logo">
                <img src="images/log.png" height="80px" width="90px">
            </div>
        <nav>
            <ul id="menu">
                <li><a href="index.php"><span class="primero"><i class="icon icon-home3"></i></span>Inicio</a></li>
                <li><a href="#"><span class="segundo"><i class="icon icon-newspaper"></i></span>Encuestas</a>
            <ul>
                <li><a href="Encuesta.php">Iniciar Encuestas</a> </li>  
                <li><a href="#">Finalizar Encuestas</a> </li> 
            </ul>
                </li>
                <li><a href="#"><span class="tercero"><i class="icon icon-address-book"></i></span>Control</a>
            <ul>
                
                <li><a href="alumnos.php">Seguimiento de Alumnos</a> </li> 
            </ul>
                </li>
                <li><a href="#"><span class="cuarto"><i class="icon icon-camera"></i></span>Fotografías</a></li>
            </ul>
        </nav>
    </header>
    <div class="contain">
        <div class="container dimension">
            <div class="container-menu">
                <!--<div style="overflow:auto">
                    <div id="TM"><img src="images/Encuesta.png" alt="encuesta" style="width:40px;height:40px;"></div>
                    <div id="TM"><h2>LISTA</h2></div>
                </div>-->
                <div id='cssmenu'>
                    <ul>
                        <li class='active'><a href="consultas.php" ><span>Seguimiento</span></a></li>
                        <li><a href="control.php" ><span>Referencia</span></a></li>
                        <li><a href="referencias.php"><span>Consulta</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
          <div class="title" ><h1>Control de alumnos</h1></div>
   <div id="container">
                        <form action="query.php" method="post" name="ALUMNO">
                            <table border="1" >
                                <thead>    
                                    <tr>
                                        <th scope="colgroup" colspan="4">Instrucciones<br>
                                        Indique el grado de logro que considera ha sido desempeñado por el alumno durante el presente parcial, por cada uno se valorarán tres aspectos, A= Asistencia,  B= Buen desempeño y C=Conducta,  marcando con una “X” la casilla que consideren más adecuada con base en la siguiente escala: </th>
                                    </tr>
                                </thead>
                                    <tr>
                                        <th scope="rowgroup" rowspan="4">Nombre del alumno: roberto huesca
                                    </tr>
                                    <tr>
                                        <th scope="col">E = Excelente</th>
                                        <th scope="col">B = Bien</th>
                                        <th scope="col">NM = Necesita mejorar</th>
                                    </tr>
                                    <tr>
                                        <th scope="row">Asiste puntualmente a clases</th>
                                        <th scope="row">Entrega las actividades de aprendizaje</th>
                                        <th scope="row">Su conducta es adecuada y respetuosa</th>
                                        
                                    </tr>
                                    <tr>
                                        <th scope="row"><select name="color">
                                            <option value="E">Excelente</option>
                                            <option value="B">Bien</option>
                                            <option value="NM">Necesita mejorar</option>
                                        </select>
                                        </th>
                                        <th scope="row"><select name="color">
                                            <option value="E">Excelente</option>
                                            <option value="B">Bien</option>
                                            <option value="NM">Necesita mejorar</option>
                                        </select>
                                        </th>
                                       <th scope="row"><select name="color">
                                            <option value="E">Excelente</option>
                                            <option value="B">Bien</option>
                                            <option value="NM">Necesita mejorar</option>
                                        </select>
                                        </th>
                                    </tr>
                                 </table>
                            <input id="btn" type="submit" name="submit" value="Aceptar" />
                        </form>
           </div>
</body>
</html>