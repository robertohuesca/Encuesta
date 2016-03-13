$(function(){
        $('#error-form').hide();
        $('#login-form').submit( function(e){
        
            e.preventDefault();
            $.post("php/sesion.php", $("#login-form").serialize(), function(data){
            
                $('#error-form').show('slow');
                
                if(data){
                    document.location.href='index.php'}
                    //$('#error-form').text("Sesión iniciada");
                else{
                    $('#error-form').text("Usuario y/o contraseña incorrectos");
                }
                
              
            
            },"json");
             
        
        });
 
});
    

    
    
     /*$('#submit').click(function(){
        var username=$('#user').val();
        var password=$('#pass').val();
       // var result = $('.result').val();
        //result.html('Loading..........'); 
         
         var data=name="+username+" & pwd="+password" ;
        
        $.ajax({
            url:'sesion.php',
            type:'POST',
            data: data,
            success: function(responseText)
            {
                    if (responseText== 'false')
                    {
                        $("#error").html('Usuario y/o contrseña incorrecto');
                    } 
                
                    else 
                    {
                        window.location("index.php");
                    }
            },
            beforeSend:function()  
            {  
                 $("#error").html("Cargando...")  
            }  

        });
        
       /* .done(function(){//true
            setTimeout(function(){
               $('span').php("Usuario y contraseña correcto... Espere un momento estamos redireccionandolo");
            },1000);
            
        })
        
        
         
         
     });*/
        
