<div class="main" id="alimen">
     <label class="title">Alimentación</label>
    <form>
        <div class="textArea" id="alimentacion">
                                <ul>
                                <li><label>¿Con que frecuancia?</label></li>
                                <li>
                                    Desayunas: <select>
                                    <option value="" >De 1 a 2 veces por semana</option>
                                    <option value="" >De 3 a 4 veces por semana</option>
                                    <option value="" >De 5 a 7 veces por semana</option>
                                    </select>
                                    Comes: <select>
                                    <option value="" >De 1 a 2 veces por semana</option>
                                    <option value="" >De 3 a 4 veces por semana</option>
                                    <option value="" >De 5 a 7 veces por semana</option>
                                    </select>
                                    Cenas: <select>
                                    <option value="" >De 1 a 2 veces por semana</option>
                                    <option value="" >De 3 a 4 veces por semana</option>
                                    <option value="" >De 5 a 7 veces por semana</option>
                                    </select>
                                </li>
                                </ul>

                            <div>
                                <div class="box"><label for="">Cuando tomas algún alimento ¿te sientes mal o cansado?</label></div>
                                <div class="box">
                                <input type="radio" value="si" name="servic-salud" checked>No
                                <input type="radio" value="si" name="servic-salud" onClick="CompruebaCheckBox(this,'DivMuestra1');">Sí
                                <div id="DivMuestra1" class="div" style="display:none">Frecuencia:
                                <select>
                                <option value="">Select de multiples selecciones</option>
                                </select></div></div>
                            </div>

            <div class="">
                    <label class="title" id="ejercicio">Ejercicio y Deporte</label>

                    <div id="">
                        <ul>
                            <div>
                                <li><label>¿Cuantas veces por semana haces ejercicio fisico?</label></li>
                                <li><select>
                                    <option value="" >De 1 a 2 veces por semana</option>
                                    <option value="" >De 3 a 4 veces por semana</option>
                                    <option value="" >De 5 a 7 veces por semana</option>
                                    <option value="">Nunca</option>
                                    </select>
                                </li>
                            </div>
                        </ul>
                    </div>
                        <div class="Div-Box">
                                <div class="box"><label for="">¿Practicas algún deporte?</label></div>
                                <div class="box">
                                <input type="radio" value="no" name="servic-salud" checked>No
                                <input type="radio" value="si" name="servic-salud" onClick="CompruebaCheckBox(this,'DivMuestra2');">Sí
                                <div id="DivMuestra2" class="div" style="display:none">Frecuencia:
                                    <select>
                                        <option value="">Select de multiples selecciones</option>
                                        <option value="">Futbol</option>
                                        <option value="">Tenis</option>
                                        <option value="">Boxeo</option>
                                        <option value="">Béisbol</option>
                                        <option value="">Gimnasia</option>
                                        <option value="">Lucha</option>
                                        <option value="">Basquetbol</option>
                                        <option value="">Judo</option>
                                        <option value="">Ciclismo</option>
                                        <option value="">Natación</option>
                                        <option value="">Karate</option>
                                        <option value="">Charreria</option>
                                        <option value="">Atletismo</option>
                                        <option value="">Halterofilia</option>
                                        <option value="">Otro especificar</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
    </form>
</div>
