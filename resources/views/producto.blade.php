<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ficha de producto</title>
</head>
<body>

    @if (isset($productos[$numero]))
        <h1>{{ $productos[$numero]['nombre'] }}</h1>
        <p>Precio: {{ $productos[$numero]['precio'] }} €</p>
    @else
        <p>Producto no encontrado</p>
    @endif

</body>
</html>