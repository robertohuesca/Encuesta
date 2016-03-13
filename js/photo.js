var x;
            x=$(document);
            x.ready(inicializar);
            
            function inicializar(){
                var x=$('#mostrar');
                x.click(muestrame);
            }
            
            function muestrame(){
                var x=$('#obj');
                x.toggle("slow");
            }