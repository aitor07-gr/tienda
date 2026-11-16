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
    <nav>
        <a href="{{ route('portada') }}">Inicio</a> |
        <a href="{{ route('productos') }}">Productos</a> |
        <a href="{{ route('clientes') }}">Clientes</a> |
        <a href="{{ route('contacto') }}">Contacto</a> |
        <a href="{{ route('acerca') }}">Acerca de</a> |
        <a href="{{ route('envios') }}">Envíos</a>
    </nav>
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