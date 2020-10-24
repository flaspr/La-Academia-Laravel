<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    Tienes una nueva solicitud de matrícula de {{$mensaje['name']}} {{$mensaje['subname']}}.

    Quiere matricularse en las asignaturas de *Rellenar con las asignaturas*

    Mensaje adjunto:
    {{$mensaje['mensaje']}}

    Correo de contacto del solicitante: {{$mensaje['email']}}
</body>
</html>