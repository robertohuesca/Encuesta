<?php
    include('conexion.php');

    $DESAYUNO=$_POST['DESAYUNO'];
    $COMIDA=$_POST['COMIDA'];
    $CENA=$_POST['CENA'];
    $EJERCICIO=$_POST['EJERCICIO'];
    $DEPORTE=$_POST['DEPORTE'];

        $ultimo_folio="Select FOLIO from alumnos order by FOLIO desc limit 1";
        $resultado=mysql_query($ultimo_folio);
        $id=mysql_fetch_row($resultado);
        $folio=$id[0];

    $queryA="INSERT INTO ALIMENTACIONES (FREC_DESAYUNO, FREC_COMIDA, FREC_CENA) VALUES ('$DESAYUNO', '$COMIDA', '$CENA')";
    $resA=mysql_query($queryA);
    $id_fam=mysql_insert_id();
    $queryAe="UPDATE ENCUESTAS SET ID_ALIMENTACION =('$id_fam') WHERE FOLIO='$folio'";
    $resq=mysql_query($queryAe);

    $queryE="INSERT INTO DEPORTES (frecuencia, deporte) VALUES ('$EJERCICIO', '$DEPORTE')";
    $resE=mysql_query($queryE);
    $id_dep=mysql_insert_id();
    $queryEe="UPDATE ENCUESTAS SET ID_DEPORTE =('$id_dep') WHERE FOLIO='$folio'";
    $resq1=mysql_query($queryEe);
?>
