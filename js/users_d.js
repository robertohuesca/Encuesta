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

function mostrar(){
	XMLHttp= objetoAjax(); //Dependiendo de la versión del navegador se hace una instancia
	if(XMLHttp)	{
		url="../php/table.php";
		XMLHttp.open("POST",url,true);
		XMLHttp.onreadystatechange= imprimir;
		XMLHttp.send(null);
	} else {alert('No se puede crear la instancia');}
}

function imprimir() {
	if(XMLHttp.readyState==4){  
		document.getElementById("box-table").innerHTML=XMLHttp.responseText;
	}
}


function eliminarDato(id_usuario){
   //donde se mostrará el resultado de la eliminacion
   divResultado = document.getElementById('resultado');
   
   //usaremos un cuadro de confirmacion 
   var eliminar = confirm("De verdad desea eliminar este dato?")
   if ( eliminar ) {
   //instanciamos el objetoAjax
   ajax=objetoAjax();
   //uso del medotod GET
   //indicamos el archivo que realizará el proceso de eliminación
   //junto con un valor que representa el id
   ajax.open("GET", "../php/users_d.php?id_usuario="+id_usuario);
   ajax.onreadystatechange=function() {
   if (ajax.readyState==4) {
   //location.reload();
       document.getElementById("box-table").innerHTML=XMLHttp.responseText;
   }
   }
   //como hacemos uso del metodo GET
   //colocamos null
   ajax.send(null)
   }
}