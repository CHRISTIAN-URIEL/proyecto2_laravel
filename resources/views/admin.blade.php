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
            <a href="Admin" class="link">Inicio</a>
            <a href="rutaAgregarInter" class="link">Registrar</a>
            <a href="MostrarAdmin" class="link">Mostrar</a>
            <a href="#" class="link">Ayuda</a>
        </nav>
    </header>

    <h1>PAGINA DE INICIO DE ADMINISTRADOR<h1>

    <div id="inicio_admin">
        @yield('inicio_admin')
    </div>

    <div id="registrar">
        @yield('registrar')
    </div>

    <div id="mostrar">
        @yield('mostrar')
    </div>

    <div id="carrito">
        @yield('carrito')
    </div>

    <footer>
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