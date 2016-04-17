<?php
    include('conexion.php');

    este si fue un pedo we u.u

    //echo "$folio";
    //$query="insert into FAMILIARES where ";
        $NOMBRE1=$_POST['NOMBRE1'];
        $APELLIDOS1=$_POST['APELLIDOS1'];
        $GENERO1=$_POST['GENERO1'];
        $EDAD1=$_POST['EDAD1'];
        $OCUPACION1=$_POST['OCUPACION1'];
        $PARENTESCO1=$_POST['PARENTESCO1'];

        $NOMBRE2=$_POST['NOMBRE2'];
        $APELLIDOS2=$_POST['APELLIDOS2'];
        $GENERO2=$_POST['GENERO2'];
        $EDAD2=$_POST['EDAD2'];
        $OCUPACION2=$_POST['OCUPACION2'];
        $PARENTESCO2=$_POST['PARENTESCO2'];

        $NOMBREMADRE=$_POST['NOMBREMADRE'];
        $APELLIDOMADRE=$_POST['APELLIDOMADRE'];
        $FECHAMADRE=$_POST['FECHAMADRE'];
        $LUGARMADRE=$_POST['LUGARMADRE'];
        $CURPMADRE=$_POST['CURPMADRE'];
        $ESTUDIOMADRE=$_POST['ESTUDIOMADRE'];
        $TRABAJOMADRE=$_POST['TRABAJOMADRE'];
        $HORASMADRE=$_POST['HORASMADRE'];

        $NOMBREPADRE=$_POST['NOMBREPADRE'];
        $APELLIDOPADRE=$_POST['APELLIDOPADRE'];
        $FECHAPADRE=$_POST['FECHAPADRE'];
        $LUGARPADRE=$_POST['LUGARPADRE'];
        $CURPPADRE=$_POST['CURPPADRE'];
        $ESTUDIOPADRE=$_POST['ESTUDIOPADRE'];
        $TRABAJOPADRE=$_POST['TRABAJOPADRE'];
        $HORASPADRE=$_POST['HORASPADRE'];


        $ultimo_folio="Select FOLIO from alumnos order by FOLIO desc limit 1";
        $resultado=mysql_query($ultimo_folio);
        $id=mysql_fetch_row($resultado);
        $folio=$id[0];

          $buscar_folio="SELECT ID_PERSONA FROM PERSONAS";

            $resultado=mysql_query($buscar_folio);

            while ($Num=mysql_fetch_row($resultado))
                {
                    $ID_M=$Num[0];
                }
                if ( $ID_M!=0)
                {
                $ID_M=1;
                }else {
                $ID_M++;
                }


        $queryFam1="INSERT INTO FAMILIARES (FOLIO, NOMBRE, APELLIDOS, GENERO, EDAD, OCUPACION, PARENTESCO)
        VALUES ('$folio', '$NOMBRE1', '$APELLIDOS1', '$GENERO1', '$EDAD1', '$OCUPACION1', '$PARENTESCO1' )";
        $queryF=mysql_query($queryFam1);


        $queryFam2="INSERT INTO FAMILIARES (FOLIO, NOMBRE, APELLIDOS, GENERO, EDAD, OCUPACION, PARENTESCO)
        VALUES ('$folio', '$NOMBRE2', '$APELLIDOS2', '$GENERO2', '$EDAD2', '$OCUPACION2', '$PARENTESCO2' )";
        $queryF2=mysql_query($queryFam2);
         we donde si no se que pedo es en este, bueno si pero no se como pasarlo al ajax


           /*********************************************/


        $queryMadre="INSERT INTO PERSONAS (ID_PERSONA, NOMBRE, AP_PATERNO, FECHA_NAC, LUGAR_NAC, CURP) VALUES
                    ('$ID_M', '$NOMBREMADRE', '$APELLIDOMADRE', '$FECHAMADRE', '$LUGARMADRE', '$CURPMADRE')";
        $Rquery=mysql_query($queryMadre);

        $queryMadre2="INSERT INTO PADRES (ID_PADRE, ESTUDIO, TRABAJA, HRS, GENERO ) VALUES
                    ('$ID_M','$ESTUDIOMADRE', '$TRABAJOMADRE', '$HORASMADRE', '0')";
        $Rquery2=mysql_query($queryMadre2);

        $queryMadre3="UPDATE ENCUESTAS SET ID_MADRE = ('$ID_M') WHERE FOLIO='$folio'";
        $Rquery3=mysql_query($queryMadre3);

        /**********************************************/
        $ID_P=$ID_M+1;

        $queryPadre="INSERT INTO PERSONAS (ID_PERSONA, NOMBRE, AP_PATERNO, FECHA_NAC, LUGAR_NAC, CURP) VALUES
                    ('$ID_P', '$NOMBREPADRE', '$APELLIDOPADRE', '$FECHAPADRE', '$LUGARPADRE', '$CURPPADRE')";
        $RqueryP=mysql_query($queryPadre);

        $queryPadre2="INSERT INTO PADRES (ID_PADRE, ESTUDIO, TRABAJA, HRS, GENERO ) VALUES
                    ('$ID_P', '$ESTUDIOPADRE', '$TRABAJOPADRE', '$HORASPADRE', '1')";
        $RqueryP2=mysql_query($queryPadre2);

        $queryPadre3="UPDATE ENCUESTAS SET ID_PADRE= ('$ID_P') WHERE FOLIO='$folio'";
        $RqueryP3=mysql_query($queryPadre3);


?>


