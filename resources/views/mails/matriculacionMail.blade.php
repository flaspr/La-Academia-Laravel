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
   <h2>Tienes una nueva solicitud de matrícula de {{$mensaje['nameM']}} {{$mensaje['subnameM']}}.</h2> <br>

    
    Quiere matricularse en las asignaturas de *Rellenar con las asignaturas* <br>

    <strong>Mensaje adjunto: </strong>
    <br>
    {{$mensaje['mensajeM']}}
    <br>

    Correo de contacto del solicitante: {{$mensaje['emailM']}}   
    </p> 

</body>
</html>