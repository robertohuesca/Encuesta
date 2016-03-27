<?php
    include ('conexion.php');
        $NOMBRE=$_POST["NOMBRE"];
        $APP=$_POST["APP"];
        $APM=$_POST["APM"];
        $GENERO=$_POST["GENERO"];
        $NACIONALIDAD=$_POST["NACIONALIDAD"];
        $ESTADO=$_POST["ESTADO"];
        $FECHA=$_POST["FECHA"];
        $CURP=$_POST["CURP"];
        $MATRICULA=$_POST["MATRICULA"];
        $CALLE=$_POST["CALLE"];
        $COLONIA=$_POST["COLONIA"];
        $EXTERIOR=$_POST["EXTERIOR"];
        $INTERIOR=$_POST["INTERIOR"];
        $POSTAL=$_POST["POSTAL"];
        $ENTIDAD=$_POST["ENTIDAD"];
        $MUNICIPIO=$_POST["MUNICIPIO"];




    $query3="INSERT INTO DOMICILIOS (ID_MUNICIPIO, CALLE, COLONIA, N_EXTERIOR, N_INTERIOR, CP) VALUES('$MUNICIPIO','$CALLE','$COLONIA','$EXTERIOR','$INTERIOR','$POSTAL')";
    $CONSULTA3=mysql_query($query3);

    $rs = mysql_query("SELECT @@identity AS id");
    if ($row = mysql_fetch_row($rs)) {
    $id = trim($row[0]);
    }
    
        $query2="INSERT INTO PERSONAS (ID_PERSONA,ID_DOMICILIO, NOMBRE,AP_PATERNO,AP_MATERNO, GENERO, NACIONALIDAD, LUGAR_NAC,FEHCA_NAC, CURP) VALUES ('$MATRICULA','$id','$NOMBRE','$APP','$APM','$GENERO','$NACIONALIDAD','$ESTADO','$FECHA','$CURP')";
        $CONSULTA2=mysql_query($query2);
    
           
        $query1="INSERT INTO ALUMNOS (ID_ALUMNO) VALUES ('$MATRICULA')";
       

?>

