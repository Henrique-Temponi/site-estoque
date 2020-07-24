@extends('admin')

@section('conteudo')

<div class="row">

    <h3>Usuarios Ativos</h3>
    <!-- <a class="btn" href="#">Adicionar Usuario</a> -->

</div>


<div class="divider"></div>

<div class="row">
    <table>
        <thead>
            <th>ID</th>
            <th>Email</th>
            <th>Nome</th>
            <th>Opcões</th>

        </thead>
        <tbody>
            @foreach($registros as $registro)
            <tr>
                <td>{{ $registro->id }}</td>
                <td>{{ $registro->email }}</td>
                <td>{{ $registro->name }}</td>
                
                <!-- <td><a class="btn green" href="">Editar</a></td> -->
                <td><a class="btn red" href="{{ route('admin.usuarios.deletar', $registro->id) }}">Deletar</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection