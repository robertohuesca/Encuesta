
<html>
    <head>
        <meta charset="utf-8">
       <link rel="stylesheet" href="../css/reset.css">
       <link rel="stylesheet" href="../css/general.css">
    </head>
    <body>
        <div class="main"  id="socio">
            <form>
            <label class="title">Ingresos familiares</label>
            <div id="box">
                        <ul>
                                <div class="textArea">
                                    <li><label>¿Cuántas personas que viven en tu casa tienen ingresos?</label></li>
                                    <li><select>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>5 o más</option>
                                    </select></li>
                                </div>
                                <div class="textArea">
                                    <li><label>¿De quien dependes economicamente?</label></li>
                                    <li><select>
                                    <option>Padre</option>
                                    <option>Madre</option>
                                    <option>Hermano (a)</option>
                                    <option>Otro (especificar)</option>
                                    </select></li>
                                </div>
                        </ul>
                <label class="title">Vivienda</label>
                        <ul>
                                <div class="textArea">
                                    <li><label>La casa donde vives es:</label></li>
                                    <li>
                                        <select style="width:200px;">
                                            <option value="">Seleccione una opción</option>
                                            <option value="">Propia</option>
                                            <option value="">Rentada</option>
                                            <option value="">Prestada</option>
                                            <option value="">Otro (especificar)</option>
                                        </select>
                                    </li>
                                </div>
                                <div class="textArea">
                                    <li><label>Tipo de vivienda</label></li>
                                    <li>
                                        <select>
                                            <option value="">Seleccione una opción</option>
                                            <option value="">Casa</option>
                                            <option value="">Departamento</option>
                                            <option value="">Vecindad</option>
                                            <option value="">Otro (especificar)</option>
                                        </select>
                                    </li>
                                </div>
                                <div class="textArea">
                                    <li><label>Las paredes son de:</label></li>
                                    <li>
                                        <select>
                                            <option value="">Seleccione una opción</option>
                                            <option value="">Tabique</option>
                                            <option value="">Madera</option>
                                            <option value="">Lámina</option>
                                            <option value="">Otro (especificar)</option>
                                        </select>
                                    </li>
                                </div>
                                <div class="textArea">
                                    <li><label>El piso es de:</label></li>
                                    <li>
                                        <select>
                                            <option value="">Seleccione una opción</option>
                                            <option value="">Loseta</option>
                                            <option value="">Cemento</option>
                                            <option value="">Madera</option>
                                            <option value="">Otro (especificar)</option>
                                        </select>
                                    </li>
                                </div>
                                <div class="textArea">
                                    <li><label>El techo es de:</label></li>
                                    <li>
                                        <select>
                                            <option value="">Seleccione una opción</option>
                                            <option value="">Concreto</option>
                                            <option value="">Lámina</option>
                                            <option value="">Madera</option>
                                            <option value="">Otro (especificar)</option>
                                        </select>
                                        
                                    </li>
                                </div>
                            </ul> 
                <label class="title">Ambiente socioeconómico</label>
                            <ul>
                            <div class="textArea">
                                <li><label>Marca los bienes y servicios que tiene tu vivienda</label></li>
                                <div id="cont-tabla">
                                    <table id="bienes-serv">
                                        <tr>
                                            <td id="t"><label>Agua potable</label></td>
                                            <td><input type="radio" name="Agua" checked>No</td>
                                            <td><input type="radio" name="Agua">Sí</td>
                                            <td id="t"><label>Computadora</label></td>
                                            <td><input type="radio" name="PC" checked>No</td>
                                            <td><input type="radio" name="PC">Sí</td>
                                            <td id="t"><label>Drenaje</label></td>
                                            <td><input type="radio" name="Drenaje" checked>No</td>
                                            <td><input type="radio" name="Drenaje">Sí</td>
                                            
                                            
                                        </tr>
                                        <tr>
                                            <td id="t"><label>Electricidad</label></td>
                                            <td><input type="radio" name="Elect" checked>No</td>
                                            <td><input type="radio" name="Elect">Sí</td>
                                            <td id="t"><label>Tableta</label></td>
                                            <td><input type="radio" name="Tablet" checked>No</td>
                                            <td><input type="radio" name="Tablet">Sí</td>
                                            <td id="t"><label>Lavadora de ropa</label></td>
                                            <td><input type="radio" name="Lavadora" checked>No</td>
                                            <td><input type="radio" name="Lavadora">Sí</td>
                                            
                                        </tr>
                                        <tr>
                                            <td id="t"><label>Televisión de paga (Sky, Dish, Cable)</label></td>
                                            <td><input type="radio" name="Tele" checked>No</td>
                                            <td><input type="radio" name="Tele">Sí</td>
                                            <td id="t"><label>Estufa de gas</label></td>
                                            <td><input type="radio" name="Estufa" checked>No</td>
                                            <td><input type="radio" name="Estufa">Sí</td>
                                            <td id="t"><label>Horno de Microhondas</label></td>
                                            <td><input type="radio" name="Microhondas" checked>No</td>
                                            <td><input type="radio" name="Microhondas">Sí</td>
                                            
                                        </tr>
                                        <tr>
                                            <td id="t"><label>Refrigerador</label></td>
                                            <td><input type="radio" name="Refri" checked>No</td>
                                            <td><input type="radio" name="Refri">Sí</td>
                                            <td id="t"><label>DVD</label></td>
                                            <td><input type="radio" name="DVD" checked>No</td>
                                            <td><input type="radio" name="DVD">Sí</td>
                                            <td id="t"><label>Linea telefonica</label></td>
                                            <td><input type="radio" name="Telefono" checked>No</td>
                                            <td><input type="radio" name="Telefono">Sí</td>
                                            
                                        </tr>
                                        <tr>
                                            <td id="t"><label>Laptop</label></td>
                                            <td><input type="radio" name="Laptop" checked>No</td>
                                            <td><input type="radio" name="Laptop">Sí</td>
                                            <td id="t"><label>Internet</label></td>
                                            <td><input type="radio" name="Internet" checked>No</td>
                                            <td><input type="radio" name="Internet">Sí</td>
                                            <td id="t"><label>VHS</label></td>
                                            <td><input type="radio" name="VHS" checked>No</td>
                                            <td><input type="radio" name="VHS">Sí</td>
                                        </tr>
                                        <tr>
                                            <td id="t"><label>Blu-ray</label></td>
                                            <td><input type="radio" name="Blu-ray" checked>No</td>
                                            <td><input type="radio" name="Blu-ray">Sí</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="textArea">
                                <li><label>Para tu uso personal cuentas con:</label></li>
                                <li>
                                    <table>
                                        <tr>
                                            <td><label>Reproductor digital portatil de musica</label></td>
                                            <td><input type="radio" name="reproM" checked>No</td>
                                            <td id="e"><input type="radio" name="reproM">Sí</td>
                                        </tr>
                                        <tr>
                                            <td><label>Tableta</label></td>
                                            <td><input type="radio" name="Tablet" checked>No</td>
                                            <td id="e"><input type="radio" name="Tablet">Sí</td>
                                        </tr>
                                        <tr>
                                            <td><label>Laptop</label></td>
                                            <td><input type="radio" name="Lap" checked>No</td>
                                            <td id="e"><input type="radio" name="Lap">Sí</td>
                                        </tr>
                                    </table>
                                </li>
                            </div>
                            <div class="textArea">
                                <li><label>¿Cuántos focos hay dentro de tu vivienda?</label></li>
                                <li><select>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6 o más</option>
                                    </select>
                                </li>
                            </div>
                            <div class="textArea">
                                <li><label>¿Cuántos televisores hay dentro de tu vivienda?</label></li>
                                <li><select>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5 o más</option>
                                    </select>
                                </li>
                            </div>
                        </ul>
                
                
                
            </div>
                <input type="submit"  id="guardars" value="Guardar" onclick="goBack()" > 
            </form>
        </div>
        
    </body>
</html>