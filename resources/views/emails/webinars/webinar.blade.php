<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>
        ELEVAR agradece tu interés en el webinar gratuito {{$titulo}} a desarrollarse el día {{$fecha}} de {{$hora}} (hora de Argentina).
    </p>

    <p>
        Para que puedas acompañarnos te compartimos el enlace de acceso a la sala 👉👉  <a href="{{$url_meet}}">{{$url_meet}}</a>
    </p>

    <p>
        Quedamos a disposición
    </p>
    <img src="{{ asset('img/logo.png') }}" alt="elevar">
    <p>
    Área Capacitación <br>
    <strong>info@elevar.com.ar</strong> <br>
    C: (+54 9 3446) 507779
    </p>

</body>
</html>
