
<html>
    <head>
        <meta charset="utf-8">
       <link rel="stylesheet" href="../css/reset.css">
       <link rel="stylesheet" href="../css/general.css">
    </head>
    <body>
        <div class="main" id="fam">
            <label class="title">En caso de emergencia llamar a</label>
            <form>
            <div>
                <table class="tableuser">
                                <tr>
                                <th>Nombre</th>
                                <th>Apellidos</th>
                                <th>Genero</th>
                                <th>Edad</th>
                                <th>Ocupacion</th>
                                <th>Parentesco</th>
                                </tr>
                                <tr>
                                    <td><input type="text" name="nombre1" ></td>
                                    <td><input type="text" name="apellidos1" ></td>
                                    <td><select class="select" name="genero1">
                                        <option value="0">MASCULINO</option>
                                        <option value="1">FEMENINO</option></select>
                                    </td>
                                    <td><input type="number" name="edad1" min="1" max="100" required></td>
                                    <td><input type="text" name="ocupacion1"></td>
                                    <td><input type="text" name="parentesco1"></td>
                                </tr>
                                <tr >
                                    <td><input type="text" name="nombre2" ></td>
                                    <td><input type="text" name="apellidos2" ></td>
                                    <td><select class="select" name="genero2">
                                        <option value="0">MASCULINO</option>
                                        <option value="1">FEMENINO</option></select>
                                    </td>
                                    <td><input type="number" name="edad2" min="1" max="100" required></td>
                                    <td><input type="text" name="ocupacion2"></td>
                                    <td><input type="text" name="parentesco2"></td>
                                </tr>
                            </table>
            </div>
            <label class="title">Datos de la madre</label>
            <div id="datos_padres">
                     <ul> 
                            <div class="textArea">
                                <li><label for="nombre">Nombre</label></li>
                                <li><input type="text" placeholder="" size="20" required></li>
                            </div>
                            <div class="textArea">
                                <li><label for="nombre">Apellidos</label></li>
                                <li><input type="text" placeholder="" size="20" required></li>
                            </div>
                            <div class="textArea">
                                <li><label for="f_nacimiento">Fecha de Nacimiento</label></li>
                                <li><input type="date" name="fecha"></li>
                            </div>
                            <div class="textArea">
                                <li><label for="f_nacimiento">Lugar de Nacimiento</label></li>
                                <li><select name="lugar_nac">
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
                                <li><label for="curp">(CURP)</label></li>
                                <li><input type="text" placeholder="" maxlength="18" required></input></li>
                            </div>
                            <div class="textArea">
                                <li><label for="curp">Grado Maximo de Estudio</label></li>
                                <li><select name="estudio">
                                    <option value=" ">Selecciona una opción</option>
                                    <option value="">SIN ESTUDIOS</option>
                                    <option value="">PRIMARIA INCOMPLETA</option>
                                    <option value="">PRIMARIA CONCLUIDA</option>
                                    <option value="">SECUNDARIA INCOMPLETA</option>
                                    <option value="">SECUNDARIA CONCLUIDA</option>
                                    <option value="">CARRERA TECNICA</option>
                                    <option value="">BACHILLERATO INCOMPLETO</option>
                                    <option value="">BACHILLERATO CONCLUIDO</option>
                                    <option value="">TEC. SUP. UNIVERSITARIO</option>
                                    <option value="">LICENCIATURA INCOMPLETA</option>
                                    <option value="">LICENCIATURA CONCLUIDA</option>
                                    <option value="">ESPECIALIDAD</option>
                                    <option value="">MAESTRIA</option>
                                    <option value="">DOCTORADO</option>
                                    <option value="">OTRO</option>
                                    </select></li>
                            </div>
                        </ul>
            </div>
            <label class="title">Datos del padre</label>
            <div id="datos_padres">
                        <ul> 
                            <div class="textArea">
                                <li><label for="nombre">Nombre</label></li>
                                <li><input type="text" placeholder="" size="20" required></li>
                            </div>
                            <div class="textArea">
                                <li><label for="nombre">Apellidos</label></li>
                                <li><input type="text" placeholder="" size="20" required></li>
                            </div>
                            <div class="textArea">
                                <li><label for="f_nacimiento">Fecha de Nacimiento</label></li>
                                <li><input type="date" name="fecha"></li>
                            </div>
                            <div class="textArea">
                                <li><label for="f_nacimiento">Lugar de Nacimiento</label></li>
                                <li><select name="lugar_nac">
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
                                <li><label for="curp">(CURP)</label></li>
                                <li><input type="text" placeholder="" maxlength="18" required></input></li>
                            </div>
                            <div class="textArea">
                                <li><label for="curp">Grado Maximo de Estudio</label></li>
                                <li><select name="estudio">
                                    <option value=" ">Selecciona una opción</option>
                                    <option value="">SIN ESTUDIOS</option>
                                    <option value="">PRIMARIA INCOMPLETA</option>
                                    <option value="">PRIMARIA CONCLUIDA</option>
                                    <option value="">SECUNDARIA INCOMPLETA</option>
                                    <option value="">SECUNDARIA CONCLUIDA</option>
                                    <option value="">CARRERA TECNICA</option>
                                    <option value="">BACHILLERATO INCOMPLETO</option>
                                    <option value="">BACHILLERATO CONCLUIDO</option>
                                    <option value="">TEC. SUP. UNIVERSITARIO</option>
                                    <option value="">LICENCIATURA INCOMPLETA</option>
                                    <option value="">LICENCIATURA CONCLUIDA</option>
                                    <option value="">ESPECIALIDAD</option>
                                    <option value="">MAESTRIA</option>
                                    <option value="">DOCTORADO</option>
                                    <option value="">OTRO</option>
                                    </select></li>
                            </div>
                        </ul>
                    </div>
                    <input type="submit"  id="guardars" value="Guardar" onclick="goBack()" > 
                </form>
            </div>
    </body>
</html>