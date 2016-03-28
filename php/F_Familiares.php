<?php
    include('conexion.php');

    $ultimo_folio="Select FOLIO from alumnos order by FOLIO desc limit 1";
    $resultado=mysql_query($ultimo_folio);
    $id=mysql_fetch_row($resultado);
    $folio=$id[0];

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

        $NOMBREPADRE=$_POST['NOMBREPADRE'];
        $APELLIDOPADRE=$_POST['APELLIDOPADRE'];
        $FECHAPADRE=$_POST['FECHAPADRE'];
        $LUGARPADRE=$_POST['LUGARPADRE'];
        $CURPPADRE=$_POST['CURPPADRE'];
        $ESTUDIOPADRE=$_POST['ESTUDIOPADRE'];

        $queryFam1="INSERT INTO FAMILIARES (FOLIO, NOMBRE, APELLIDOS, GENERO, EDAD, OCUPACION, PARENTESCO)
        VALUES ('$folio', $NOMBRE1, $APELLIDOS1, $GENERO1, $EDAD1, $OCUPACION1, $PARENTESCO1 )";
        $queryF=mysql_query($queryFam1);

        if (!isset($NOMBRE2)||!isset($APELLIDOS2)||!isset($GENERO2){
            $queryFam2="INSERT INTO FAMILIARES (FOLIO, NOMBRE, APELLIDOS, GENERO, EDAD, OCUPACION, PARENTESCO)
            VALUES ('$folio', $NOMBRE2, $APELLIDOS2, $GENERO2, $EDAD2, $OCUPACION2, $PARENTESCO2 )";
            $queryF2=mysql_query($queryFam2);
        }

        /*********************************************/

        /*
            //consulta para ver nuestro numero de folio
            $buscar_folio="SELECT ID_PERSONA FROM PERSONAS";

            $resultado=mysql_query($buscar_folio);

            while ($Num=mysql_fetch_row($resultado))
                {
                    $ID_P=$Num[0];
                }
                if ( $ID_P!='0')
                {
                $ID_P=0001;
                }else {
                $ID_P++;
                }
        $queryMadre="INSERT INTO PERSONAS (ID_PERSONA, NOMBRE, AP_PATERNO, FECHA_NAC, LUGAR_NAC, CURP) VALUES
                    ('$ID_P', '$NOMBREMADRE', '$APELLIDOMADRE', '$FECHAMADRE', '$LUGARMADRE', '$CURPMADRE')";
        $Rquery=mysql_query($queryMadre);

        $queryMadre2="INSERT INTO PADRES (ID_PADRE, ESTUDIO, TRABAJA, HRS, GENERO ) VALUES
                    ('$ID_P', '$ESTUDIOMADRE', '$TRABAJAMADRE', '$HRSMADRE', '0')"; */

        /**********************************************/

       /* $queryPadre="INSERT INTO PERSONAS (ID_PERSONA, NOMBRE, AP_PATERNO, FECHA_NAC, LUGAR_NAC, CURP) VALUES
                    ('$ID_P', '$NOMBREPADRE', '$APELLIDOPADRE', '$FECHAPADRE', '$LUGARPADRE', '$CURPPADRE')";
        $Rquery2=mysql_query($queryPadre);

        $queryPadre2="INSERT INTO PADRES (ID_PADRE, ESTUDIO, TRABAJA, HRS, GENERO ) VALUES
                    ('$ID_P', '$ESTUDIOPADRE', '$TRABAJAPADRE', '$HRSPADRE', '1')";    */
?>
