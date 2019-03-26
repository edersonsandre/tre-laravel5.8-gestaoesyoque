@include('topo')

@if(!empty($rows[0]))

    <table border="1">
        <tr>
            <th>Nome</th>
            <th>Criação</th>
        </tr>

    @foreach($rows AS $row)
        <tr>
            <td>{!! $row->nome !!}</td>
            <td>{!! $row->created_at->format("d/m/Y H:i:s") !!}</td>
        </tr>
        @endforeach
    </table>
@endif

@include('rodape')