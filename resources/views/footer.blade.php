<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mundo Pasteliri´s</title>
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
</head>

<body>
    <footer class="container-ft">
        <section>
            <h4 class="container-ft--copy">COPYRIGHT DERECHOS RESERVADOS</h4>
            <p class="container-ft--NameWebsite">- DAVRI´S © 2023 -</p>
        </section>

        <section class="container-ft__container-social">
            <i class="container-ft__container-social--i container-ft__container-social--fb fab fa-facebook"><span> Facebook</span></i>
            <i class="container-ft__container-social--i container-ft__container-social--ins fab fa-instagram"><span> Instagram</span></i>
            <i class="container-ft__container-social--i container-ft__container-social--tk fab fa-tiktok"> Tik<span>Tok</span></i>
            <i class="container-ft__container-social--i container-ft__container-social--wspp fab fa-whatsapp"><span> WhatsApp</span></i>
            <i class="container-ft__container-social--i container-ft__container-social--wspp fas fa-envelope-open"><span> Gmail</span></i>
        </section>

        <section class="container-ft__container-ubi">
            <h3 class="container-ft__container-ubi--h3">Estamos Ubicados En:</h3>
            <iframe class="container-ft__container-ubi--maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d38163.433038784024!2d-76.57216906201323!3d3.4524239267500256!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e30a5d7f65a6ea9%3A0xab043d30c37bd7a2!2sPortada%20Al%20Mar!5e0!3m2!1ses-419!2sco!4v1688691467029!5m2!1ses-419!2sco" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>

        <section class="container-ft__container-contacto">
            <p class="container-ft__container-contacto--p container-ft__container-contacto--contact"><a href="">Contactanos</a></p>
            <p class="container-ft__container-contacto--p container-ft__container-contacto--work"><a href="">Trabaja con Nosotros</a></p>
            <p class="container-ft__container-contacto--p container-ft__container-contacto--aboutUs"><a href="">Sobre Nosotros</a></p>
            <p class="container-ft__container-contacto--p container-ft__container-contacto--contacto"><a href="">Ayuda y soporte</a></p>
        </section>
    </footer>
</body>
</html>
