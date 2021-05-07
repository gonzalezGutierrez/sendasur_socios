<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contacto</title>
    <style>
        .container {
            width: 100%;
        }

        .card{
            border: 1px solid rgba(0,0,0,0.3);
            padding: 10px 5px;
        }
        .card-body {
            padding: 10px;
        }

        .btn{
            padding: 10px;
            background-color: darkgrey;
            color: white;
            border-radius: 5px;
            text-decoration: none;
        }

        .btn:hover {
            cursor: pointer;
        }

        .btn-success {
            background-color: #1c2a48 !important;
            color:white;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="card">
        <div class="card-body">

            <h4>Nuevo mensaje</h4>

            <hr>

            <h4>Asunto: {{$contactData['asunto']}}</h4>

            <h4>Nombre del cliente: {{$contactData['nombre']}}</h4>

            <h4>Correo electronico: {{$contactData['email']}}</h4>

            <h4>Número de telefono: {{$contactData['telefono']}}</h4>

            <h4>Mensaje: </h4>

            <p style="text-align:justify;">
                {{$contactData['message']}}
            </p>


        </div>
    </div>
</div>

</body>
</html>
