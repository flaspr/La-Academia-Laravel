<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $subject }}</title>
</head>

<body>
    <p>
        <h2> Tienes una nueva <strong>{{ $subject }}</strong> de {{ $mensaje->name }} {{ $mensaje->subname }}. </h2>
        <hr>
        <h3>Correo de contacto del solicitante:</h3>
        <p>{{ $mensaje->email }}</p>
    </p>

</body>

</html>
