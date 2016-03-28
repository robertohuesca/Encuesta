   <div class="main" id="alimen">
                        <label class="title" id="">Habitos de Consumo</label>
                        <table id="consumo">
                                <tr>
                                    <th><h1>Consumes</h1></th>
                                    <th><h1>No</h1></th>
                                    <th><h1>Si</h1></th>
                                    <th><h1>Veces por semana</h1></th>
                                </tr>
                                <tr>
                                <td>Cerveza</td>
                                    <td><input type="radio" value="no" name="cerveza"></td>
                                    <td><input type="radio" value="si" name="cerveza"></td>
                                    <td>
                                        <select id="select">
                                            <option value="">Una vez por semana</option>
                                            <option value="">2 o 3 por semana</option>
                                            <option value="">4 o más por semana</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                <td>Vinos de Mesa</td>
                                    <td><input type="radio" value="no" name="vinos"></td>
                                    <td><input type="radio" value="si" name="vinos"></td>
                                    <td>
                                        <select id="select">
                                            <option value="">Una vez por semana</option>
                                            <option value="">2 o 3 por semana</option>
                                            <option value="">4 o más por semana</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                <td>Cocteles</td>
                                    <td><input type="radio" value="no" name="coctel"></td>
                                    <td><input type="radio" value="si" name="coctel"></td>
                                    <td>
                                        <select id="select">
                                            <option value="">Una vez por semana</option>
                                            <option value="">2 o 3 por semana</option>
                                            <option value="">4 o más por semana</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                <td>Licores</td>
                                    <td><input type="radio" value="no" name="licor"></td>
                                    <td><input type="radio" value="si" name="licor"></td>
                                    <td>
                                        <select id="select">
                                            <option value="">Una vez por semana</option>
                                            <option value="">2 o 3 por semana</option>
                                            <option value="">4 o más por semana</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                <td>Otros</td>
                                    <td><input type="radio" value="no" name="otro"></td>
                                    <td><input type="radio" value="si" name="otro"></td>
                                    <td>
                                        <select id="select">
                                            <option value="">Una vez por semana</option>
                                            <option value="">2 o 3 por semana</option>
                                            <option value="">4 o más por semana</option>
                                        </select>
                                    </td>
                                </tr>
                            </table>

                         <div class="move">
                                <label for="">¿Fumas?</label>
                                <input type="radio" value="no" name="fumas" checked>No
                                <input type="radio" value="si" name="fumas" onClick="CompruebaCheckBox(this,'DivMuestra3');">Sí
                                <div id="DivMuestra3" class="div" style="display:none">¿Cuantos cigarros al día?:
                                    <select>
                                        <option value="">Seleccione una opcion</option>
                                        <option value="">1 a 5 cigarros</option>
                                        <option value="">6 a 10 cigarros</option>
                                        <option value="">10 o más cigarros</option>
                                    </select>
                                </div>
                        </div>
                        <div class="move">
                                <label for="">Consideras que tus amigos ¿tienen alguna adicción?</label>
                                <input type="radio" value="no" name="adic" checked>No
                                <input type="radio" value="si" name="adic" onClick="CompruebaCheckBox(this,'DivMuestra4');">Sí
                                <div id="DivMuestra4" class="div" style="display:none">Especifica:
                                    <input type="text" name="adiccion">
                                </div>
                        </div>
                        <div class="move">
                                <label for="">Consideras que tus amigos ¿consumen alguna droga?</label>
                                <input type="radio" value="no" name="adrog" checked>No
                                <input type="radio" value="si" name="adrog" onClick="CompruebaCheckBox(this,'DivMuestra');">Sí
                                <div id="DivMuestra" class="div" style="display:none">Especifica:
                                    <input type="text" name="droga">
                                </div>
                        </div>
        </div>
