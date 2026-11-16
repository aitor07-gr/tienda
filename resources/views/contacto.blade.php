<nav>
    <a href="{{ route('portada') }}">Inicio</a> |
    <a href="{{ route('productos') }}">Productos</a> |
    <a href="{{ route('clientes') }}">Clientes</a> |
    <a href="{{ route('contacto') }}">Contacto</a> |
    <a href="{{ route('acerca') }}">Acerca de</a> |
    <a href="{{ route('envios') }}">Envíos</a>
</nav>
<h1>Contacto</h1>
<form method="POST" action="{{ route('contacto.enviar') }}">
    @csrf
    <button type="submit">Enviar</button>
</form>