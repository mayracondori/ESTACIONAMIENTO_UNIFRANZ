<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PÁGINA PARA LOS USUARIOS</title>
    <link rel="stylesheet" href="main.css">
   
</head>
<body>
    
    <div id="menu">
        <ul>
            <li class="cerrar-sesion"><a href="logout.php">Cerrar sesión</a></li>
        </ul>
    </div>

    <section>
        <h1>Bienvenido <?php echo $user->getNombre();  ?></h1>
    </section>


</body>
</html>
