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
        NOMBRE=document.ALUMNO.nombre.values;
        APP=document.ALUMNO.paterno.values;
        APM=document.ALUMNO.materno.values;
        GENERO=document.ALUMNO.genero.values;
        NACIONALIDAD=document.ALUMNO.nacionalidad.values;
        ESTADO=document.ALUMNO.estado.values;
        FECHA=document.ALUMNO.fecha.values;
        CURP=document.ALUMNO.curp.values;
        MATRICULA=document.ALUMNO.matricula.values;
        CALLE=document.ALUMNO.calle.values;
        COLONIA=document.ALUMNO.colonia.values;
        EXTERIOR=document.ALUMNO.exterior.values;
        INTERIOR=document.ALUMNO.interior.values;
        POSTAL=document.ALUMNO.postal.values;
        ENTIDAD=document.ALUMNO.entidad.values;
        MUNICIPIO=document.ALUMNO.municipio.values;
        url="php/new_alum.php?NOMBRE="+NOMBRE+"&APP=" + APP+"&APM=" + APM+"&GENERO=" + GENERO+"&NACIONALIDAD=" + NACIONALIDAD+"&ESTADO=" + ESTADO +"&FECHA=" + FECHA +"&CURP=" + CURP +"&MATRICULA=" + MATRICULA +"&CALLE=" + CALLE+"&COLONIA=" + COLONIA+"&EXTERIOR=" + EXTERIOR+"&INTERIOR=" + INTERIOR+"&POSTAL=" + POSTAL +"&ENTIDAD=" + ENTIDAD+"&MUNICIPIO=" + MUNICIPIO
        XMLHttp.open("POST",url,true);
        XMLHttp.onreadystatechange=;
    }
    else{
        alert("no se puede crear instancia");
    }
}