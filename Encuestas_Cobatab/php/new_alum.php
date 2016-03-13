<?php
    include ('conexion.php');
    $NOMBRE=$_GET["NOMBRE"];
    $APP=$_GET["APP"];
        $APM=$_GET["APM"];
        $GENERO=$_GET["GENERO"];
        $NACIONALIDAD=$_GET["NACIONALIDAD"];
        $ESTADO=$_GET["ESTADO"];
        $FECHA=$_GET["FECHA"];
        $CURP=$_GET["CURP"];
        $MATRICULA=$_GET["MATRICULA"];
        $CALLE=$_GET["CALLE"];
        $COLONIA=$_GET["COLONIA"];
        $EXTERIOR=$_GET["EXTERIOR"];
        $INTERIOR=$_GET["INTERIOR"];
        $POSTAL=$_GET["POSTAL"];
        $ENTIDAD=$_GET["ENTIDAD"];
        $MUNICIPIO=$_GET["MUNICIPIO"];

$query1='INSERT INTO ALUMNOS (ID_ALUMNO) VALUES ()';
$query3='INSERT INTO DOMICILIOS (ID_MUNICIPIO, CALLE, COLONIA, N_EXTERIOR, N_INTERIOR, CP) VALUES("NULL";"'$CALLE'","'$COLONIA'","'$EXTERIOR'","'$INTERIOR'","'$POSTAL'")';

$CONSULTA=mysql_query($query3,$link);
if($CONSULTA){
    $id=mysql_insert_id(); 
}

$query2='INSERT INTO PERSONAS (ID_PERSONA,ID_DOMICILIO, NOMBRE,AP_PATERNO,AP_MATERNO, GENERO, NACIONALIDAD, LUGAR_NAC,FEHCA_NAC, CURP) VALUES ("'$MATRICULA'","'$id'","'$NOMBRE'","'$APP'","'$APM'","'$GENERO'","'$NACIONALIDAD'","'$ESTADO'","'$FECHA'","'CURP'")';
$CONSULTA2=mysql_query($query2,$link);
$CONSULTA3=mysql_query($query3,$link);
?>

