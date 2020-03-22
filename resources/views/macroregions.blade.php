<html>
    <h1>Bem vindo ao Omnisciente!</h1>
    <table>
        <tr>
            <th> Código IBGE </th>
            <th> Nome </th>
        </tr>
        @foreach ($macroregions as $macroregion)
            <tr>
                <td> {{ $macroregion->code }} </td>
                <td> {{ $macroregion->name }} </td>
            </tr>
        @endforeach
        @foreach ($state in $states)
            <tr>
                <td> {{ $state->code }} </td>
                <td> {{ $state->name }} </td>
            </tr>
        @endforeach
    </table>
<html>

