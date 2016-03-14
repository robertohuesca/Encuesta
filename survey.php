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
          <title>Encuesta</title>
          <link rel="stylesheet" href="css/Style.css">
          <link rel="stylesheet" href="css/styles.css">
          <link rel="stylesheet" href="css/container-div.css">
          <link rel="stylesheet" href="css/reset.css">    
          <link rel="stylesheet" href="css/model-box.css">  
          <link rel="stylesheet" href="css/encuesta_original.css">
            <link rel="stylesheet" href="../css/general.css">
        
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
                        <li><a href="javascript:Enviar('pages/family.php','column_right')" title="Prueba">Familiares</a></li>
                        <li><a href="javascript:Enviar('pages/economy.php','column_right')" title="Prueba" >Ambiente Socioeconómico</a></li>
                        <li><a href="javascript:Enviar('pages/sante.php','column_right')" title="Prueba">Salud</a></li>
                        <li><a href="javascript:Enviar('pages/clinic.php','column_right')" title="Prueba">Enfermedades Familiares</a></li>
                        <li><a href="javascript:Enviar('pages/alimentos.php','column_right')" title="Prueba">Alimentación</a></li>
                        <li><a href="javascript:Enviar('default.php','column_right')" title="Prueba">Hábitos</a></li>
                        <li><a href="javascript:Enviar('default.php','column_right')" title="Prueba">Tiempo Libre y Recreación</a></li>
                        <li><a href="javascript:Enviar('default.php','column_right')" title="Prueba">Finalizar</a></li>
                    </ul>
                </div>
                <div id="column_right">
                    <br style="clear:both;" />
                    <div class="container-body">
        <div class="body">
            <div class="container-inputs">
                <div class="input">
                    <div class="title" style="overflow:auto"><h1>Registrar nuevo alumno</h1></div>
                    <div id="formAlum">
                        <form name="ALUMNO" id="ALUMNO">
                            <ul>
                            <div class="textArea">
                              <li><label for="cuerpo">Nombre</label></li>
                              <li><input name="nombre" type="text" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" ></li>
                            </div>
                            <div class="textArea">
                              <li><label for="cuerpo">Apellido Paterno</label></li>
                              <li><input type="text" name="paterno" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"></li>
                            </div>
                            <div class="textArea">
                              <li><label for="cuerpo">Apellido Materno</label></li>
                              <li><input type="text" name="materno"  style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"></li>
                            </div>
                            <div class="textArea">
                              <li><label for="cuerpo">Genero</label></li>
                              <li><select name="genero">
                                <option value="MASCULINO">Masculino</option>
                                <option value="FEMENINO">Femenino</option>
                                </select>
                              </li>
                            </div>
                            <div class="textArea">
                              <li><label for="cuerpo">Nacionalidad</label></li>
                              <li><select name="nacionalidad">
                                <option value="MEXICANA">Mexicana</option>
                                <option value="EXTRANJERA">Extranjera</option>
                                </select>
                              </li>
                            </div>
                            <div class="textArea">
                              <li><label for="cuerpo">Lugar de Nacimiento</label></li>
                              <li><select name="estado">
                                <option value=" ">Selecciona una opción</option>
                                <option value="1" rel="01">AGUASCALIENTES</option>
                                <option value="2" rel="02">BAJA CALIFORNIA</option>
                                <option value="3" rel="03">BAJA CALIFORNIA SUR</option>
                                <option value="4" rel="04">CAMPECHE</option>
                                <option value="5" rel="05">COAHUILA DE ZARAGOZA</option>
                                <option value="6" rel="06">COLIMA</option>
                                <option value="7" rel="07">CHIAPAS</option>
                                <option value="8" rel="08">CHIHUAHUA</option>
                                <option value="9" rel="09">DISTRITO FEDERAL</option>
                                <option value="10" rel="10">DURANGO</option>
                                <option value="11" rel="11">GUANAJUATO</option>
                                <option value="12" rel="12">GUERRERO</option>
                                <option value="13" rel="13">HIDALGO</option>
                                <option value="14" rel="14">JALISCO</option>
                                <option value="15" rel="15">MEXICO</option>
                                <option value="16" rel="16">MICHOACAN DE OCAMPO</option>
                                <option value="17" rel="17">MORELOS</option>
                                <option value="18" rel="18">NAYARIT</option>
                                <option value="19" rel="19">NUEVO LEON</option>
                                <option value="20" rel="20">OAXACA</option>
                                <option value="21" rel="21">PUEBLA</option>
                                <option value="22" rel="22">QUERETARO</option>
                                <option value="23" rel="23">QUINTANA ROO</option>
                                <option value="24" rel="24">SAN LUIS POTOSI</option>
                                <option value="25" rel="25">SINALOA</option>
                                <option value="26" rel="26">SONORA</option>
                                <option value="27" rel="27">TABASCO</option>
                                <option value="28" rel="28">TAMAULIPAS</option>
                                <option value="29" rel="29">TLAXCALA</option>
                                <option value="30" rel="30">VERACRUZ DE IGNACIO DE LA LLAVE</option>
                                <option value="31" rel="31">YUCATAN</option>
                                <option value="32" rel="32">ZACATECAS</option>
                                <option value="33" rel="33">EXTRANJERO</option>
                                </select>
                              </li>
                            </div>
                            <div class="textArea">
                              <li><label for="cuerpo">Fecha de Nacimiento</label></li>
                              <li><input name="fecha" type="date" value="<?php echo date("Y-m-d")?>"></li>
                            </div>
                            <div class="textArea">
                              <li><label for="cuerpo">CURP</label></li>
                              <li><input type="text" name="curp" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"></li>
                            </div>
                                <div class="textArea">
                              <li><label for="cuerpo">Matrícula</label></li>
                              <li><input type="text" name="matricula" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"></li>
                            </div>
                                                
                            </ul>
                             
                        
                    </div>
                    <div class="title" style="overflow:auto"><h1>Domicilio</h1></div>
                    <div id="formAlum">
                       
                            <ul>
                            <div class="textArea">
                              <li><label for="cuerpo">Calle</label></li>
                              <li><input type="text" name="calle" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"></li>
                            </div>
                            <div class="textArea">
                              <li><label for="cuerpo">Colonia</label></li>
                              <li><input type="text" name="colonia"  style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"></li>
                            </div>
                            <div class="textArea">
                              <li><label for="cuerpo">Numero Ext.</label></li>
                              <li><input type="text" name="exterior"></li>
                            </div>
                            <div class="textArea">
                              <li><label for="cuerpo">Numero Int.</label></li>
                              <li><input type="text" name="interior" ></li>
                            </div>
                            <div class="textArea">
                              <li><label for="cuerpo">Codigo Postal</label></li>
                              <li><input type="text" name="postal" ></li>
                            </div>
                            <div class="textArea">
                              <li><label for="cuerpo">Entidad</label></li>
                              <li><input type="text" name="entidad" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"></li>
                            </div>
                            <div class="textArea">
                              <li><label for="cuerpo">Municipio</label></li>
                              <li><input type="text" name="municipio"  style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"></li>
                            </div>
                               
                            <input type="submit"  id="guardars" value="Guardar" onclick="goBack()" > 
       
                        </form>
                    </div>
                        
                </div>
                
            </div>
        </div>
    </div>
                    
                </div>
            </div>
        </div>
    </body>
</html>