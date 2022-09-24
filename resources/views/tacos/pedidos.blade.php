@extends('tacos.template')
@section('views_content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <div style="text-align:center;">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Pedido</th>
                <th scope="col">Nombre</th>
                <th scope="col">Dirección</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Paquete 1</td>
                <td>Angela</td>
                <td>Calle 20 de noviembre</td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>Paquete 1</td>
                <td>Angela</td>
                <td>Calle 20 de noviembre</td>
                </tr>
            </tbody>
        </table><br>
    </div><br><br><br><br><br>
</body>
</html>

@stop 