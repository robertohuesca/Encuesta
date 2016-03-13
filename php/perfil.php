 <?php
        $dir = "upload/".$_SESSION['usuario']; // Indicar ruta
            $abrir = opendir($dir); // Abrir archivos
                while (($file = readdir($abrir)) !=FALSE) {
                    if ($file != "." && $file != ".." && $file != "Thumbs.bd")  {          
                            
                             echo "<img src='$dir/$file' id='mostrar' class='circular' />"; 
                        }
                }
?>