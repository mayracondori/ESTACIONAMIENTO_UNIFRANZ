<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sesiones</title>
    
    <link rel="stylesheet" href="{{asset('css/estilo_login.css')}}">
</head>
<body>
    <form action="" method="POST" class="form-login">
        <?php
            if(isset($errorLogin)){
                echo $errorLogin;
            }
        ?>
        <h2 align="center">LOGIN</h2>
       
        <input class="controls" type="text" name="Correo_usu">
        
        <input class="controls" type="password" name="Pass_usu">
        <input class="buttons" type="submit" value="Iniciar Sesión">
    </form>
</body>
</html>