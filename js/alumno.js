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
        NOMBRE=document.ALUMNO.nombre.value;
        APP=document.ALUMNO.paterno.value;
        APM=document.ALUMNO.materno.value;
        GENERO=document.ALUMNO.genero.value;
        NACIONALIDAD=document.ALUMNO.nacionalidad.value;
        ESTADO=document.ALUMNO.estado.value;
        FECHA=document.ALUMNO.fecha.value;
        CURP=document.ALUMNO.curp.value;
        MATRICULA=document.ALUMNO.matricula.value;
        CALLE=document.ALUMNO.calle.value;
        COLONIA=document.ALUMNO.colonia.value;
        EXTERIOR=document.ALUMNO.exterior.value;
        INTERIOR=document.ALUMNO.interior.value;
        POSTAL=document.ALUMNO.postal.value;
        ENTIDAD=document.ALUMNO.entidad.value;
        MUNICIPIO=document.ALUMNO.municipio.value;
        
        
         XMLHttp.open('POST','php/new_alum.php',true);
        
        
        XMLHttp.onreadystatechange=function(){
            
            if (XMLHttp.readyState==4) {
               
                //alert("Registro insertado");
                alert("Registro insertado");
                
                //window.location.href=="javascript:Enviar('pages/family.php','column_right')";

	           }
            
        }
        XMLHttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 
        XMLHttp.send("NOMBRE="+NOMBRE+"&APP=" + APP+"&APM=" + APM+"&GENERO=" + GENERO+"&NACIONALIDAD=" + NACIONALIDAD+"&ESTADO=" + ESTADO +"&FECHA=" + FECHA +"&CURP=" + CURP +"&MATRICULA=" + MATRICULA +"&CALLE=" + CALLE+"&COLONIA=" + COLONIA+"&EXTERIOR=" + EXTERIOR+"&INTERIOR=" + INTERIOR+"&POSTAL=" + POSTAL +"&ENTIDAD=" + ENTIDAD+"&MUNICIPIO=" + MUNICIPIO)
        
    }
    else{
        alert("no se puede crear instancia");
    }
}
