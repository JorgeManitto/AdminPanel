<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ELEVAR agradece tu interés en el curso en asunto.</title>
</head>
<body>

    <p>ELEVAR agradece tu interés en el curso en asunto. {{$titulo}}</p>
    <p>
        Te invitamos a ingresa al siguiente enlace y buscar en el listado este curso. Allí podrás visualizar o descargar la información completa de la actividad (objetivo, temario, modalidad de cursada, costos y formas de pago)
        <a href="{{ $url_info }}">Ver</a>
    </p>
    <p>
        Una vez efectivizado el pago, dentro de las 24 horas posteriores se envía por mail el usuario y contraseña para comenzar la cursada desde la plataforma de capacitación de ELEVAR
    </p>
    <p><strong>Recuerda consultarnos por descuentos a partir de 2 alumnos.</strong></p>
    <p>Quedamos a disposición</p>
    <p>
        <img src="{{ asset('img/logo.png') }}" alt="elevar">
    </p>
    <p>
        <strong>Área Capacitación</strong>
        <br>
        info@elevar.com.ar
        <br>
        C: (+54 9 3446) 507779
    </p>
</body>
</html>
