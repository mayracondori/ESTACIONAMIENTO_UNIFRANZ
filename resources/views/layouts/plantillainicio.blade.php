<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--  <meta http-equiv="refresh" content="5" />-->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>


    <title> @yield('title') Unifranz</title>

</head>
<body onload="startTime()">
<style>
@import url(https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css);

module.exports = {
    plugins: [
        require('tailwindcss-inset')({
            insets: {
                full: '100%'
            }
        })
    ]
};

.inset-l-full {
    left: 100%;
}
</style>

  <div class="py-3 px-5 bg-white rounded shadow-xl">
        <div class="-mx-1">
            <ul class="flex w-full flex-wrap items-center h-10">
            <li class="block relative">
            
                    <img src="{{url('https://assets.change.org/photos/8/gn/xg/ZbGnxGCVhLlGsTC-1600x900-noPad.jpg?1586969275')}}" width="96" height="156" oncontextmenu="return false"/>
               
            </li>
            
               
             

<script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
  <script type="text/javascript">
  function toggleModal(modalID){
    document.getElementById(modalID).classList.toggle("hidden");
    document.getElementById(modalID + "1").classList.toggle("hidden");
    document.getElementById(modalID).classList.toggle("flex");
    document.getElementById(modalID + "1").classList.toggle("flex");
  }
</script>
                <?php // }
               ?>
               
              <li style=" align-items:left"> <div  id="clockdate">
                <div class="clockdate-wrapper">
                  <div id="clock"></div>
                  <div id="date"></div>
                </div>
              </div></li>
             
                    <a href="{{route('layouts/cerrarsesion')}}" class="flex items-center h-10 leading-10 px-4 rounded cursor-pointer no-underline hover:no-underline transition-colors duration-100 mx-1 hover:bg-gray-100" @click.prevent="showChildren=!showChildren">
                        <span class="mr-3 text-xl"> <i class="mdi mdi-widgets-outline"></i> </span>
                       
                    </a>
                   
            </ul>
        </div>
    </div>




    @yield('content')
<?php
        $coneccion = mysqli_connect ("localhost", "root", "" );
        $basededatos = 'cotel';
        $bd =mysqli_select_db ($coneccion, $basededatos);
        ?>
    <footer style="bottom: 0" class="text-center text-white bg-black  py-6">
        <ul class="md:flex justify-center">


            <li><a href="http://">Unifranz Sede La Paz &nbsp;</a></li>
            <script>
                var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
                var f=new Date();
                document.write(f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
                </script>

        </ul>

    </footer>

    @yield('script')
    @yield('script2')
    @yield('script3')
}
</body>
</html>
   
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>

<script>
    function startTime() {
    var today = new Date();
    var hr = today.getHours();
    var min = today.getMinutes();
    var sec = today.getSeconds();
    ap = (hr < 12) ? "<span>AM</span>" : "<span>PM</span>";
    hr = (hr == 0) ? 12 : hr;
    hr = (hr > 12) ? hr - 12 : hr;
    //Add a zero in front of numbers<10
    hr = checkTime(hr);
    min = checkTime(min);
    sec = checkTime(sec);
    document.getElementById("clock").innerHTML = hr + ":" + min + ":" + sec + " " + ap;

    var months = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
    var days = ['Dom.', 'lun', 'mart', 'miérc', 'juev', 'vier', 'sáb'];
    var curWeekDay = days[today.getDay()];
    var curDay = today.getDate();
    var curMonth = months[today.getMonth()];
    var curYear = today.getFullYear();
    var date = curWeekDay+", "+curDay+" "+curMonth+" "+curYear;
    document.getElementById("date").innerHTML = date;

    var time = setTimeout(function(){ startTime() }, 500);
}
function checkTime(i) {
    if (i < 10) {
        i = "0" + i;
    }
    return i;
}
</script>

<script type="text/javascript" language="Javascript">
    document.oncontextmenu = function(){return false}
    </script>
<style>

#clock{



    font-size:12px;
    text-shadow:0px 0px 1px #fff;
    color:#000;
}


</style>
