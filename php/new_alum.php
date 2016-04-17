<?php
    include ('conexion.php');
        session_start();
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


$query2="INSERT INTO DOMICILIOS (ID_MUNICIPIO, CALLE, COLONIA, N_EXTERIOR, N_INTERIOR, CP)                                  VALUES('$MUNICIPIO','$CALLE','$COLONIA','$EXTERIOR','$INTERIOR','$POSTAL')";
    $CONSULTA2=mysql_query($query2);
    $id=mysql_insert_id();

$query3="INSERT INTO PERSONAS (ID_PERSONA,ID_DOMICILIO, NOMBRE,AP_PATERNO,AP_MATERNO, GENERO, NACIONALIDAD, LUGAR_NAC,FECHA_NAC, CURP) VALUES ('$MATRICULA','$id','$NOMBRE','$APP','$APM','$GENERO','$NACIONALIDAD','$ESTADO','$FECHA','$CURP')";
    $CONSULTA3=mysql_query($query3);



//consulta para ver nuestro numero de folio
$buscar_folio="SELECT folio_encuesta FROM Parametros";

$resultado=mysql_query($buscar_folio);

while ($Num=mysql_fetch_row($resultado))
    {
        $FOLIO=$Num[0];
    }
    if ( $FOLIO=='NULL')
    {
    $FOLIO=1;
    }else {
    $FOLIO++;
    }
    $queryparametr="INSERT INTO Parametros (FOLIO_ENCUESTA) VALUES ('$FOLIO') ";
    $Rqparam=mysql_query($queryparametr);
    $folio_formateado="ENC-000".$FOLIO;

    $queryFolio="INSERT INTO ENCUESTAS (FOLIO) VALUES ('$folio_formateado')";
    $queryF=mysql_query($queryFolio);

    $query1="INSERT INTO ALUMNOS (ID_ALUMNO, ID_GRUPO, FOLIO) VALUES ('$MATRICULA','".$_SESSION['id_grupo']."','$folio_formateado')";
    $query=mysql_query($query1);



?>

