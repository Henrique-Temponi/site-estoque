@extends('layout.admin')

@section('conteudo')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Starter Page</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Painel Admin</a></li>
                    <li class="breadcrumb-item active">Voos</li>
                </ol>
            </div>
        </div>
    </div>
</div>


<!-- <div class="row">
    <table>
        <thead>
            <th>Nome do voo</th>
            <th>Destino</th>
            <th>Compahia</th>
            <th>Numero de Reservas</th>
            <th>Turno</th>
            <th>Opcões</th>

        </thead>
        <tbody>
            @foreach($voos as $voo)
            <tr>
                <td>{{ $voo->voo }}</td>
                <td>{{ $voo->destino->nome }}</td>
                <td>{{ $voo->compahia->nome }}</td>
                <td>{{ $voo->user()->count()}}</td>
                <td>{{ $voo->turno }}</td>
                <td><a class="btn green" href="{{ route('admin.voos.editar', $voo->id) }}">Editar</a></td>
                <td><a class="btn red" href="{{ route('admin.voos.deletar', $voo->id) }}">Deletar</a></td> -->
                <!-- @if($voo->user()->count())
                    <td><a class="btn green disabled" href="#">Editar</a></td>
                    <td><a class="btn red disabled" href="#">Deletar</a></td>
                @else -->
                    <!-- <td><a class="btn green" href="{{ route('admin.voos.editar', $voo->id) }}">Editar</a></td>
                    <td><a class="btn red" href="{{ route('admin.voos.deletar', $voo->id) }}">Deletar</a></td> -->
                <!-- @endif -->
            <!-- </tr>
            @endforeach
        </tbody>
    </table>
</div> -->

@endsection