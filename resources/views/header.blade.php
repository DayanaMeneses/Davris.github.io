<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DAVRI´S</title>
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <script src="https://kit.fontawesome.com/11d65e2e30.js" crossorigin="anonymous"></script>
</head>

<body class="antialiased">
    <header class="header">
        
        <div class="header__container-openNavbarMobile">
            <i class="header__container-openNavbarMobile--btn fas fa-bars"></i>
        </div>

        <section class="header__container-section1">
            <div class="header__container-section1__container-logo">
                <img class="header__container-section1__container-logo--img" src="{{ asset('img/logo2.png') }}" alt="Logo">
            </div>
        </section>

        <section class="header__container-section2">
            <div class="header__container-section2__container-btn">
                <a class="header__container-section2__container-btn--i" href="">
                    <i class="fas fa-shopping-basket"><i class="header__container-section2__container-btn--i__contadorProductos">999</i></i>
                </a>
                <a class="header__container-section2__container-btn--i" href="./login"><i class="fas fa-user"></i></a>
            </div>
        </section>

        <nav class="header__nav">
            <ul class="header__nav__ul">
                <li class="header__nav__li"><a href="#">INICIO</a></li>
                
                <li class="header__nav__li header__nav__li--modify">PRODUCTOS<a href="#">PRODUCTOS</a>
                
                    <ul class="header__nav__li__ul-submenu">
                        <li class="header__nav__li__li-submenu"><a href="#">REPOSTERIA</a></li>
                        <li class="header__nav__li__li-submenu"><a href="#">PANADERIA</a></li>
                        <li class="header__nav__li__li-submenu"><a href="#">COMIDAS RAPIDAS</a></li>
                        <li class="header__nav__li__li-submenu"><a href="#">COMIDA GOURMET</a></li>
                    </ul>
                
                </li>
                
                <li class="header__nav__li"><a href="#">SERVICIOS</a></li>

                <li class="header__nav__li"><a href="#">SOBRE NOSOTROS</a></li>
                
                <li class="header__nav__li"><a href="#">AYUDA Y SOPORTE</a></li>
            </ul>
            <div class="header__container-closeNavbarMobile">
                <i class="header__nav__li fas fa-times"></i>
            </div>
        </nav>
    </header>
    <script src="{{ asset('js/header.js') }}"></script>
</body>
</html>
