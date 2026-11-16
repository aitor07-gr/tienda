<nav>
    <a href="{{ route('portada') }}">Inicio</a> |
    <a href="{{ route('productos') }}">Productos</a> |
    <a href="{{ route('clientes') }}">Clientes</a> |
    <a href="{{ route('contacto') }}">Contacto</a> |
    <a href="{{ route('acerca') }}">Acerca de</a> |
    <a href="{{ route('envios') }}">Envíos</a>
</nav>
<h1>Productos</h1>
<ul>
    @foreach ($productos as $id => $producto)
        <li>
            <a href="{{ route('producto', ['id' => $id]) }}">{{ $producto['nombre'] }}</a>
            — {{ $producto['precio'] }} €
        </li>
    @endforeach
</ul>