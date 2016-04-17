<div class="main" id="alimen">
     <label class="title">Alimentación</label>
    <form name="ALIMENTACION" onsubmit="insertar_alimentos(); return false">
        <div class="textArea" id="ALIMENTACION">
                                <ul>
                                <li><label>¿Con que frecuancia?</label></li>
                                <li>
                                    Desayunas: <select name="desayuno">
                                    <option value="De 1 a 2 veces por semana" >De 1 a 2 veces por semana</option>
                                    <option value="De 3 a 4 veces por semana" >De 3 a 4 veces por semana</option>
                                    <option value="De 5 a 7 veces por semana" >De 5 a 7 veces por semana</option>
                                    </select>
                                    Comes: <select name="comida">
                                    <option value="De 1 a 2 veces por semana" >De 1 a 2 veces por semana</option>
                                    <option value="De 3 a 4 veces por semana" >De 3 a 4 veces por semana</option>
                                    <option value="De 5 a 7 veces por semana" >De 5 a 7 veces por semana</option>
                                    </select>
                                    Cenas: <select name="cena">
                                    <option value="De 1 a 2 veces por semana" >De 1 a 2 veces por semana</option>
                                    <option value="De 3 a 4 veces por semana" >De 3 a 4 veces por semana</option>
                                    <option value="De 5 a 7 veces por semana" >De 5 a 7 veces por semana</option>
                                    </select>
                                </li>
                                </ul>


            <div class="">
                    <label class="title" id="ejercicio">Ejercicio y Deporte</label>

                    <div id="">
                        <ul>
                            <div>
                                <li><label>¿Cuantas veces por semana haces ejercicio fisico?</label></li>
                                <li><select name="ejercicio">
                                    <option value="De 1 a 2 veces por semana" >De 1 a 2 veces por semana</option>
                                    <option value="De 3 a 4 veces por semana" >De 3 a 4 veces por semana</option>
                                    <option value="De 5 a 7 veces por semana" >De 5 a 7 veces por semana</option>
                                    <option value="Nunca">Nunca</option>
                                    </select>
                                </li>
                            </div>
                        </ul>
                    </div>
                        <div class="Div-Box">
                                <div class="box"><label for="">¿Practicas algún deporte?</label></div>
                                <div class="box">
                                <input type="radio" value="no" name="servic-salud" onClick="cerrar(this,'DivMuestra2');" checked>No
                                <input type="radio" value="si" name="servic-salud" onClick="CompruebaCheckBox(this,'DivMuestra2');">Sí
                                <div id="DivMuestra2" class="div" style="display:none">Deporte:
                                    <select name="deporte">
                                        <option value="">Select de multiples selecciones</option>
                                        <option value="Futbol">Futbol</option>
                                        <option value="Tenis">Tenis</option>
                                        <option value="Boxeo">Boxeo</option>
                                        <option value="Béisbol">Béisbol</option>
                                        <option value="Gimnasia">Gimnasia</option>
                                        <option value="Lucha">Lucha</option>
                                        <option value="Basquetbol">Basquetbol</option>
                                        <option value="Judo">Judo</option>
                                        <option value="Ciclismo">Ciclismo</option>
                                        <option value="Natación">Natación</option>
                                        <option value="Karate">Karate</option>
                                        <option value="Charreria">Charreria</option>
                                        <option value="Atletismo">Atletismo</option>
                                        <option value="Halterofilia">Halterofilia</option>
                                        <option value="Otro especificar">Otro especificar</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                    </div>
            </div>
        <input type="submit"  id="guardars" value="Guardar">
    </form>
</div>
