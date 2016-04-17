<div class="main" id="alimen">
    <label class="title" id="">Recreación y Tiempo Libre</label>
    <label id="lab">Marca las actividades que frecuentemente realizas:</label>
                        <table id="table_free">
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td><label>Ir al  parque</label></td>
                                    <td><input type="checkbox"></td>
                                    <td><label>Hacer deporte</label></td>
                                    <td><input type="checkbox"></td>
                                    <td><label>Ver televisión</label></td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td><label>Ir al Cine</label></td>
                                    <td><input type="checkbox"></td>
                                    <td><label>Reunirte con amigos</label></td>
                                    <td><input type="checkbox"></td>
                                    <td><label>Ver películas en casa</label></td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td><label>Ir a bailar</label></td>
                                    <td><input type="checkbox"></td>
                                    <td><label>Salir con mi pareja</label></td>
                                    <td><input type="checkbox"></td>
                                    <td><label>Leer</label></td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td><label>Jugar videojuegos</label></td>
                                    <td><input type="checkbox"></td>
                                    <td><label>Escuchar música</label></td>
                                    <td><input type="checkbox"></td>
                                    <td><input type="text" placeholder="Otro especificar"></td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td><label>Ir de compras</label></td>
                                    <td><input type="checkbox"></td>
                                    <td><label>Usar la computadora</label></td>

                                </tr>
                            </table>

                    <div id="">
                        <label class="title" id="">Participación social</label>
                        <div class="Div-Boxp">
                                <div class="box"><label for="">¿Actualmente participas en alguna asociación, equipo o grupo?</label></div>
                                <div class="box">
                                <input type="radio" value="si" name="part" onClick="cerrar(this,'DivMuestra2');" checked>No
                                <input type="radio" value="si" name="part" onClick="CompruebaCheckBox(this,'DivMuestra2');">Sí
                                <div id="DivMuestra2" class="div" style="display:none">Cuál o Cuáles de ellos:
                                <select>
                                    <option value="">Select de multiples selecciones</option>
                                    <option value="">Estudiantil</option>
                                    <option value="">Beneficencia</option>
                                    <option value="">Político</option>
                                    <option value="">Académico</option>
                                    <option value="">Deportivo</option>
                                    <option value="">Religioso</option>
                                    <option value="">Otro (especificar)</option>
                                </select></div></div>
                            </div>
                    </div>

</div>
