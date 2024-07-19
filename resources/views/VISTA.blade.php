<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AppWeb</title>
    <!--font awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!--google font-->
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <!-- ANIMATE CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/vista.css')}}">
    <link rel="stylesheet" href="{{asset('css/vista2.css')}}">
    <link rel="stylesheet" href="{{asset('css/vista3.css')}}">
    <link rel="stylesheet" href="{{asset('css/tabla.css')}}">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{asset('css/slidder.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    <div class="main">
    <header class="cabeza">
        <div class="logo">
            <img src="img1/logo_tienda51.png" alt="logo-hamburguesa">
        </div>
        <nav class="navegacion">
            <a href="rutaVista" class="link">Inicio</a>
            <a href="rutaCatal" class="link">Novedades</a>
            <a href="consulta1" class="link">Productos</a>
            <a href="rutaCaru" class="link">Galeria</a>
            <a href="rutaConta" class="link">Contacto</a>
            <a href="rutaLogin" class="link">Iniciar sesion</a>
            <a href="rutaVista4" class="link">Crear cuenta</a>
            <a href="rutaPreguntas" class="link">Preguntas frecuentes</a>
        </nav>
        <div class="carrito">
            <img src="img1/carrito1.png" alt="carrito de compras">
        </div>
    </header>

    <div id="secciones">
        @yield('secciones')
    </div>

    <div id="contacto">
        @yield('section')
    </div>

    <div id="prod">
        @yield('productos')
    </div>

    <div id="login">
        @yield('logueo')
    </div>

    <div id="slid">
        @yield('Slidder')
    </div>

    <div id="precio">
        @yield('precio1')
    </div>       

    <div id="muestra1">
        @yield('burguer')
    </div>  
    
    <div id="consulta1">
        @yield('consulta1')
    </div> 

    <div id="consulta2">
        @yield('consulta2')
    </div> 

    <div id="consulta3">
        @yield('consulta3')
    </div>

    <div id="muestra2">
        @yield('comps')
    </div>

    <div id="muestra3">
        @yield('pos')
    </div>

    <div id="muestra4">
        @yield('carrousel')
    </div>

    <div id="clientes1">
        @yield('clientes')
    </div>

    <div id="preguntas">
        @yield('preguntas')
    </div>

    <footer>
        <div class="container2">
            <ul class="social">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://twitter.com/burguer_chesse"><i class="fa fa-twitter"></i></a></li>
                <li><a href="https://www.instagram.com/burguerchesee/"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>                
            </ul>
            </div>
            <div class="footer-texto">
                <p>Derechos Reservados &copy; 2023 Christtian Uriel</p>
            </div>
    </footer>
    </div>

    <script src="https://kit.fontawesome.com/96b7cbe9fc.js" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="{{asset('js/script.js')}}"></script>
</body>
</html>