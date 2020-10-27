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
        <h3> Quiere matricularse en las asignaturas: </h3>
        @isset($mensaje->horas2)
            <h4>Asignaturas de 2 horas semanales</h4>
            <ul>
                @foreach($mensaje->horas2 as $asignatura)
                    <li>{{ $asignatura }}</li>
                @endforeach
            </ul>
        @endisset
        @isset($mensaje->horas3)
            <h4>Asignaturas de 3 horas semanales</h4>
            <ul>
                @foreach($mensaje->horas3 as $asignatura)
                    <li>{{ $asignatura }}</li>
                @endforeach
            </ul>
        @endisset
        @isset($mensaje->mensaje)
            <hr>
            <h3>Mensaje adjunto: </h3>
            <p> {{ $mensaje->mensaje }} </p>
        @endisset
        <hr>
        <h3>Correo de contacto del solicitante:</h3>
        <p>{{ $mensaje->email }}</p>
    </p>

</body>

</html>
