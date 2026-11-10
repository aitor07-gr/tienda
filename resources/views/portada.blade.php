<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tienda</title>
    <style>
        body { font-family: sans-serif; margin: 2rem; }
        table { border-collapse: collapse; }
        td { border: 1px solid #999; padding: 0.4rem 0.8rem; }
    </style>
</head>
<body>
    <h1>Tienda</h1>
    <table>
        @foreach ($productos as $producto)
            <tr>
                <td>{{ $producto['nombre'] }}</td>
                <td>{{ $producto['precio'] }} €</td>
            </tr>
        @endforeach
    </table>
</body>
</html>
