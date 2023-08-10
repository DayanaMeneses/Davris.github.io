<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
    @include('header')
    
    <div class="content-login">
        <h2>INICIA SESION</h2>
        <form class="form">
            <input class="form__input" type="text">
            <input class="form__input" type="password">
            <input class="form__input form__input-send" type="submit">
        </form>
    </div>


    @include('footer')
</body>
</html>