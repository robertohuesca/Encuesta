<!DOCTYPE>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/login.css">
        <script src="js/jquery-1.12.0.js"></script>
        <script src="js/login.js"></script>
    </head>
    <body background="images/back.png">
                
        <form id="login-form" action="php/sesion.php"  class="formulario">
           
            <div id="login">
            <img src="images/IMG.png" width="230px">
            </div>
            <ul>
                <li>
                   <div id="fond"><img src="images/user.png" id="img"></div>
                   <input type="text" id="user" name="user" placeholder="Ingrese usuario" required> 
                </li>
                <li>
                   <div id="fond"><img src="images/pass.png" id="img"></div>
                     <input type="password" id="password" name="password" placeholder="Ingrese password" required>
                    
                </li>
                <li>
                    <div id="error-form"></div>
                </li>
                <li>
                   <input type="submit" id="submit" value="Login">
                </li>
            </ul>
        </form>
    </body>
    
</html>