function objetoAjax(){
	var xmlhttp=false;
	try {
		xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
	} catch (e) {

	try {
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	} catch (E) {
		xmlhttp = false;
	}
}

if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
	  xmlhttp = new XMLHttpRequest();
	}
	return xmlhttp;
}

function agregar(){

    XMLHttp=objetoAjax();

    if(XMLHttp){
        //FAMILIAR1
        NOMBRE1=document.FAMILIAR.nombre1.value;
        APELLIDOS1=document.FAMILIAR.apellidos1.value;
        GENERO1=document.FAMILIAR.genero1.value;
        EDAD1=document.FAMILIAR.edad1.value;
        OCUPACION1=document.FAMILIAR.ocupacion1.value;
        PARENTESCO1=document.FAMILIAR.parentesco1.value;
        //FAMILIAR2
        NOMBRE2=document.FAMILIAR.nombre2.value;
        APELLIDOS2=document.FAMILIAR.apellidos2.value;
        GENERO2=document.FAMILIAR.genero2.value;
        EDAD2=document.FAMILIAR.edad2.value;
        OCUPACION2=document.FAMILIAR.ocupacion2.value;
        PARENTESCO2=document.FAMILIAR.parentesco2.value;
        //DATOS DE LA MADRE
        NOMBREMADRE=document.FAMILIAR.nmadre.value;
        APELLIDOMADRE=document.FAMILIAR.amadre.value;
        FECHAMADRE=document.FAMILIAR.fmadre.value;
        LUGARMADRE=document.FAMILIAR.nacmadre.value;
        CURPMADRE=document.FAMILIAR.cmadre.value;
        ESTUDIOMADRE=document.FAMILIAR.esmadre.value;
        //DATOS DEL PADRE
        NOMBREPADRE=document.FAMILIAR.npadre.value;
        APELLIDOPADRE=document.FAMILIAR.nmadre.value;
        FECHAPADRE=document.FAMILIAR.fpadre.value;
        LUGARPADRE=document.FAMILIAR.nacpadre.value;
        CURPPADRE=document.FAMILIAR.cpadre.value;
        ESTUDIOPADRE=document.FAMILIAR.espadre.value;

        XMLHttp.open('POST','F_Familiares.php',true);


        XMLHttp.onreadystatechange=function(){

            if (XMLHttp.readyState==4) {

                //alert("Registro insertado");
                alert("Registro insertado");

                //window.location.href=="javascript:Enviar('pages/family.php','column_right')";

	           }

        }
        XMLHttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded");

            XMLHttp.send("NOMBRE1="+NOMBRE1+"&APELLIDOS1="+APELLIDOS1+"&GENERO1="+GENERO1+"&EDAD1="+EDAD1+"&OCUPACION1="+OCUPACION1+
                         "&PARENTESCO1="+PARENTESCO1+"&NOMBRE2="+NOMBRE2+"&APELLIDOS2="+APELLIDOS2+"&GENERO2="
                         +GENERO2+"&EDAD2="+EDAD2+"&OCUPACION2="+OCUPACION2+
                         "&PARENTESCO2="+PARENTESCO2+"&NOMBREMADRE="+NOMBREMADRE+"&APELLIDOMADRE="+APELLIDOMADRE+
                         "&FECHAMADRE="+FECHAMADRE+"&LUGARMADRE="+LUGARMADRE+"&CURPMADRE="+CURPMADRE+"&ESTUDIOMADRE="+ESTUDIOMADRE+
                         "&NOMBREPADRE="+NOMBREPADRE+"&APELLIDOPADRE="+APELLIDOPADRE+"&FECHAPADRE="+FECHAPADRE+"&LUGARPADRE="+LUGARPADRE+
                         "&CURPPADRE="+CURPPADRE+"&ESTUDIOPADRE="+ESTUDIOPADRE)

    }
}
