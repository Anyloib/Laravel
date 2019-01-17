<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ANYLOIB</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1>
        Hola ANYLOIB
    </h1>

    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Telefono</th>
                <th>Correo</th>
            </tr>
        </thead>

        <tbody>
            @foreach($contactos as $contactos)
            <tr>
                <td>{{$contactos->nombre}}</td>
                <td>{{$contactos->telefono}}</td>
                <td>{{$contactos->correo}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>