<?php
 require('conexion.php');
 //consulta todos los empleados
   $sql=mysql_query("select id_usuario,usuario,password,tutor from usuarios");
 //muestra los datos consultados
   //haremos uso de tabla para tabular los resultados
   ?>
    <table class="tableuser">
                    <tr>
                        <td>#</td>
                        <td>Usuario</td>
                        <td>Password</td>
                        <td>Tutor de grupo</td>
                        <td>Eliminar</td>
                    </tr>
<?php
   while($row = mysql_fetch_array($sql)){
   echo "	<tr>";
   //mediante el evento onclick llamaremos a la funcion eliminarDato(), la cual tiene como parametro
   //de entrada el ID del empleado 
   echo " 		<td>".$row['id_usuario']."</td>";
   echo " 		<td>".$row['usuario']."</td>";
   echo " 		<td>".$row['password']."</td>";
   echo " 		<td>".$row['tutor']."</td>";
    echo " 		<td><button class=\"btn-primary\" onclick=\"eliminarDato('".$row['id_usuario']."');mostrar()\">Eliminar</button></td>";
   echo "	</tr>";
   }
   ?>
   </table>
