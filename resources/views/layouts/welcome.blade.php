<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DAVRI´S</title>
    <link rel="icon" href="{{ asset('img/logo2.png') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="antialiased">
    @include('header')

    <main>

        @include('whastapp')
    {{-- CONTAINER CARRUSEL START --}}
       {{--  <section class="container-carrusel">
            <div>
                <div>
                    <img src="{{ asset('img/logo.png') }}" alt="pro1">
                </div>

                <div>
                    <img src="{{ asset('img/logo.png') }}" alt="pro1">
                </div>

                <div>
                    <img src="{{ asset('img/logo.png') }}" alt="pro1">
                </div>

                <div>
                    <img src="{{ asset('img/logo.png') }}" alt="pro1">
                </div>

                <div>
                    <img src="{{ asset('img/logo.png') }}" alt="pro1">
                </div>
            </div>
        </section> --}}

    
    {{-- CONTAINER DESTACADOS --}}

        <section class="container-destacados">

        </section>


    {{-- CONTAINER PRODUCTOS START --}}
        <section class="container-productos">

            <div class="container-productos__container-cart">
                <img class="container-productos__container-cart--img" src="{{ asset('img/logo.png') }}" alt="pro1">
                <div class="container-productos__container-cart__container-text">
                    <h3 class="container-productos__container-cart__container-text--h3">TITLE PRODUCT</h3>
                    <p class="container-productos__container-cart__container-text--p">$ 1.000.000 COP</p>
                </div>
            </div>

            <div class="container-productos__container-cart">
                <img class="container-productos__container-cart--img" src="{{ asset('img/logo.png') }}" alt="pro1">
                <div class="container-productos__container-cart__container-text">
                    <h3 class="container-productos__container-cart__container-text--h3">TITLE PRODUCT</h3>
                    <p class="container-productos__container-cart__container-text--p">$ 1.000.000 COP</p>
                </div>
            </div>
            
            <div class="container-productos__container-cart">
                <img class="container-productos__container-cart--img" src="{{ asset('img/logo.png') }}" alt="pro1">
                <div class="container-productos__container-cart__container-text">
                    <h3 class="container-productos__container-cart__container-text--h3">TITLE PRODUCT</h3>
                    <p class="container-productos__container-cart__container-text--p">$ 1.000.000 COP</p>
                </div>
            </div>

        </section>

    </main>

    @include('footer')
</body>
</html>
