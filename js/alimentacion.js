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

function insertar_alimentos(){

    XMLHttp=objetoAjax();

    if(XMLHttp){

        //ALIMENTACION
        DESAYUNO=document.ALIMENTACION.desayuno.value;
        COMIDA=document.ALIMENTACION.comida.value;
        CENA=document.ALIMENTACION.cena.value;
        //EJERCICIO
        EJERCICIO=document.ALIMENTACION.ejercicio.value;
        DEPORTE=document.ALIMENTACION.deporte.value;

         XMLHttp.open('POST','php/F_Alimentacion.php',true);

         XMLHttp.onreadystatechange=function(){

            if (XMLHttp.readyState==4) {

                //alert("Registro insertado");
                alert("Registro insertado");

                //window.location.href=="javascript:Enviar('pages/family.php','column_right')";

	           }

        }

         XMLHttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded");

        XMLHttp.send("DESAYUNO="+DESAYUNO+"&COMIDA="+COMIDA+"&CENA="+CENA+"&EJERCICIO="+EJERCICIO+"&DEPORTE="+DEPORTE)

    }
    else{
        alert("no se puede crear instancia");
    }

}
