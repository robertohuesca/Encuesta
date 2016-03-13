 <?php
                include('php/conexion.php'); 
                $sql= mysql_query (select usuario, imagen from usuarios where id=15);
                while ($res=mysql_fetch_array($sql)){
                    echo '<img src="'.$res["imagen"].'"width="400" height="600">';
                }
             
             ?>