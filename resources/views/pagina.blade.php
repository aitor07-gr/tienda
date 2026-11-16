<nav>
    <a href="{{ route('portada') }}">Inicio</a> |
    <a href="{{ route('productos') }}">Productos</a> |
    <a href="{{ route('clientes') }}">Clientes</a> |
    <a href="{{ route('contacto') }}">Contacto</a> |
    <a href="{{ route('acerca') }}">Acerca de</a> |
    <a href="{{ route('envios') }}">Envíos</a>
</nav>
<h1>Página {{ $numero }}</h1>
<p><a href="{{ route('productos.pagina', ['numero' => $numero + 1]) }}">Página siguiente</a></p>
@if ($numero > 1)
    <p><a href="{{ route('productos.pagina', ['numero' => $numero - 1]) }}">Anterior</a></p>
@endif
