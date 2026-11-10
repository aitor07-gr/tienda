<h1>Horario de la Tienda</h1>
<table>
    @foreach ($horario as $dia => $horas)
        <tr>
            <td>{{ $dia }}</td>
            <td>{{ $horas }}</td>
        </tr>
    @endforeach
</table>