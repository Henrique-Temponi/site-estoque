@extends('admin')

@section('conteudo')

<div class="row">

    <h3>Voos disponiveis</h3>
    <a class="btn" href="{{ route('admin.voos.adicionar') }}">Adicionar voo</a>

</div>


<div class="divider"></div>

<div class="row">
    <table>
        <thead>
            <th>Nome do voo</th>
            <th>Destino</th>
            <th>Opcões</th>

        </thead>
        <tbody>
            @foreach($voos as $voo)
            <tr>
                <td>{{ $voo->voo }}</td>
                <td>{{ $voo->destino }}</td>
                <td><a class="btn green" href="#">Editar</a></td>
                <td><a class="btn red" href="#">Deletar</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection