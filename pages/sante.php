  
<html>
    <head>
        <meta charset="utf-8">
       <link rel="stylesheet" href="../css/reset.css">
       <link rel="stylesheet" href="../css/general.css">
    </head>
    <body>                  
        <div class="main" id="salud">
            <label class="title">Salud</label>
                <div id="box">
                        <ul>
                                <div class="textArea">
                                    <li><label for="cuerpo">Tipo de Cuerpo</label></li>
                                    <li><select>
                                        <option value="">Selecciona una opción</option>
                                        <option value="ENDOMORFO">Endomorfo o Grueso</option>
                                        <option value="ECTOMORFO">Ectomorfo o Delgado</option>
                                        <option value="MESOMORFO">Mesomorfo o Atletico</option>
                                        </select>
                                    </li>
                                </div>
                                <div class="textArea">
                                    <li><label for="estatura">Estatura</label></li>
                                    <li><input type="number" name="estatura" required> m</li>
                                </div>
                                <div class="textArea">
                                    <li><label for="peso">Peso</label></li>
                                    <li><input type="number" name="peso" required> k</li>
                                </div>
                                <div class="textArea">
                                    <li><label for="frec_medic">Frecuencia al Medico</label></li>
                                    <li><select>
                                        <option value="">Selecciona una opción</option>
                                        <option value="Cada semana">Cada semana</option>
                                        <option value="Cada mes">Cada mes</option>
                                        <option value="Cada seis meses">Cada seis meses</option>
                                        <option value="Cada año">Cada año</option>
                                        <option value="Cuando me enfermo">Cuando me enfermo</option>
                                        </select></li>
                                </div>
                                <div class="textArea">
                                    <li><label for="frec_dentista">Frecuencia al Dentista</label></li>
                                    <li><select>
                                        <option value="">Selecciona una opción</option>
                                        <option value="Cada semana">Cada semana</option>
                                        <option value="Cada mes">Cada mes</option>
                                        <option value="Cada seis meses">Cada seis meses</option>
                                        <option value="Cada año">Cada año</option>
                                        <option value="Cuando me enfermo">Cuando lo necesito</option>
                                        </select></li>
                                </div>
                                <div class="textArea">
                                    <li><label for="frec_medic">¿Necesita Anteojos?</label></li>
                                    <li><select>
                                        <option value="no necesita">No los necesito</option>
                                        <option value="Sólo para leer">Sólo para leer</option>
                                        <option value="Cada seis meses">Cada seis meses</option>
                                        <option value="Si los necesito pero no los usos">Si los necesito pero no los usos</option>
                                        <option value="No lo sé">No lo sé</option>
                                        </select></li>
                                </div>
                            </ul>
                        <div class="Div-Box">
                        <div class="box"><label for="">Durante el último semestre ¿has tenido algún problema de salud?</label></div>
                        <div class="box">
                            <input type="radio" value="Ninguno" name="problem-salud" checked>No
                            <input type="radio" value="si" name="problem-salud" onClick="CompruebaCheckBox(this,'DivMuestra');">Sí
                        <div id="DivMuestra" class="div" style="display:none">Especificar: <input type="text" name="" size="40"></div></div>
                    </div>
                    <div class="Div-Box">
                        <div class="box"><label for="">¿Actualmente cuenta con algún tipo de servicio de salud?</label></div>
                        <div class="box">
                            <input type="radio" value="si" name="servic-salud" checked>No
                            <input type="radio" value="si" name="servic-salud" onClick="CompruebaCheckBox(this,'DivMuestra1');">Sí
                        <div id="DivMuestra1" class="div" style="display:none">Especificar: 
                            <select>
                                <option value="">Selecione una opcion</option>
                                <option value="IMSS">IMSS</option>
                                <option value="ISSTE">ISSTE</option>
                                <option value="PEMEX">PEMEX</option>
                                <option value="Ejército o Marina">Ejército o Marina</option>
                                <option value="Secretaria de Salud">Secretaria de Salud</option>
                                <option value="Seguro Popular">Seguro Popular</option>
                                <option value="IMSS Oportunidades">IMSS Oportunidades</option>
                                <option value="Medico Privado">Medico privado</option>
                            </select></div></div>
                    </div>
                    <div class="Div-Box">
                        <div class="box"><label for="">¿Actualmente te encuentras bajo algun tratamiento medico?</label></div>
                        <div class="box">
                            <input id="radioN" type="radio" value="Ninguno" name="trat-medic" checked>No
                            <input type="radio" value="si" name="trat-medic" onClick="CompruebaCheckBox(this,'DivMuestra2');">Sí
                        <div id="DivMuestra2" class="div" style="display:none">Especificar: <input type="text" name="" size="40"></div></div>
                    </div>
                    <div class="Div-Box">
                        <div class="box"><label for="">¿Tiene alguna discapacidad fisica?</label></div>
                        <div class="box">
                            <input type="radio" value="si" name="discapacidad" checked>No
                            <input type="radio" value="si" name="discapacidad" onClick="CompruebaCheckBox(this,'DivMuestra3');">Sí
                        <div id="DivMuestra3" class="div" style="display:none">Especificar: <input type="text" name="" size="40"></div></div>
                    </div>
                    <div class="Div-Box">
                        <div class="box"><label for="">¿Has asistido o asistes a tratamiento psicológico o psiquiátrico?</label></div>
                        <div class="box">
                            <input type="radio" value="si" name="psic-psiq" checked>No
                            <input type="radio" value="si" name="psic-psiq" onClick="CompruebaCheckBox(this,'DivMuestra4');">Sí
                        <div id="DivMuestra4" class="div" style="display:none">
                            Lugar: <input type="text" name="" size="20">
                            Desde:<input type="date" name="">
                            Hasta:<input type=date name="">
                        </div></div>
                    </div>
                  </div>              
            </div>
    </body>
</html>