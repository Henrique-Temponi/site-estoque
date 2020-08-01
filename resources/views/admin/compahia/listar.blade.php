@extends('admin')

@section('conteudo')

<div class="row">

    <h3>Compahia disponiveis</h3>
    <a class="btn" href="{{ route('admin.compahias.adicionar') }}">Adicionar Compahia</a>

</div>


<div class="divider"></div>

<div class="row">
    <table>
        <thead>
            <th>Nome</th>
            <th>Quant. voos registrados</th>
            <th>Opcões</th>

        </thead>
        <tbody>
            @foreach($registro as $r)
            <tr>
                <td>{{ $r->nome }}</td>
                <td>{{ $r->flight()->count()}}</td>
                <td><a class="btn green" href="{{ route('admin.compahias.editar', $r->id) }}">Editar</a></td>
                <td><a class="btn red" href="{{ route('admin.compahias.deletar', $r->id) }}">Deletar</a></td>
                <!-- @if($r->flight()->count())
                    <td><a class="btn green disabled" href="#">Editar</a></td>
                    <td><a class="btn red disabled" href="#">Deletar</a></td>
                @else -->
                    <!-- <td><a class="btn green" href="{{ route('admin.compahias.editar', $r->id) }}">Editar</a></td>
                    <td><a class="btn red" href="{{ route('admin.compahias.deletar', $r->id) }}">Deletar</a></td> -->
                <!-- @endif -->
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection