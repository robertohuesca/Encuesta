function CompruebaCheckBox(checkerbox,div){
                if(checkerbox.checked){
                document.getElementById(div).style.display="block"
                }
                else{
                document.getElementById(div).style.display="none"
                }
                }

function cerrar(checkerbox,div){
    if(checkerbox.checked){
        document.getElementById(div).style.display="none"
    }
    else{
        document.getElementById(div).style.display="block"
    }
}
