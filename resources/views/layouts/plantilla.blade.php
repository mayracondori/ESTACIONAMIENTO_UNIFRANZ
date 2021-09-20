<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Cotel</title>
</head>
<body>
    <header class="bg-orange-500 shadow-md">
        <nav class="flex justify-between items-center text-gray-200 px-4 shadow-md sm:py-4 sm:justify-around">
            <div>
                <img src="https://unifranz.edu.bo/wp-content/themes/unifranz/dist/images/logo_583717f4.png" class="object-left-top object-scale-down h-16 w-full ">
            </div>
            <div class="sm:hidden text-2xl">&equiv;</div>
            <ul class="text-right hidden sm:flex justify-between w-64">
                <li>
                    <a href="">Inicio</a>
                </li>
                <li>
                    <a href="">Informaciòn y tutoriales</a>
                </li>
                <li>
                    <a href="">Iniciar sesion </a>
                </li>
            </ul>
            <ul class="flex justify-between w-20">
                <li>
                    <a href="http://">
                        <i class="fab fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="http://">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </li>
                <li>
                    <a href="http://">
                        <i class="fas fa-rss"></i>
                    </a>
                </li>
            </ul>
        </nav>

    </header>
        @yield('content')

    <footer class="text-center text-white bg-teal-500  py-4">
        <ul class="md:flex justify-center">


            <li><a href="http://">Unifranz Sede La Paz &nbsp;</a></li>
            <script>
                var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
                var f=new Date();
                document.write(f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
                </script>

        </ul>
    </footer>
</body>
</html>
