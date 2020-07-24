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
            <th>Numero de Reservas</th>
            <th>Opcões</th>

        </thead>
        <tbody>
            @foreach($voos as $voo)
            <tr>
                <td>{{ $voo->voo }}</td>
                <td>{{ $voo->destino }}</td>
                <td>{{ $voo->user()->count()}}</td>
                @if($voo->user()->count())
                    <td><a class="btn green disabled" href="#">Editar</a></td>
                    <td><a class="btn red disabled" href="#">Deletar</a></td>
                @else
                    <td><a class="btn green" href="{{ route('admin.voos.editar', $voo->id) }}">Editar</a></td>
                    <td><a class="btn red" href="{{ route('admin.voos.deletar', $voo->id) }}">Deletar</a></td>
                @endif
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection