@extends('home')

@section('conteudo')

<div class="row">
    <h3>Voos registrados</h3>

    <table class="highlight responsive-table">
        <thead>
            <tr>
                <th>Compania</th>
                <th>Origem</th>
                <th>Destino</th>
                <th>Tempo do voo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($registros as $p)
                <tr>
                    <th>{{ $p->compania }}</th>
                    <th>{{ $p->origem }}</th>
                    <th>{{ $p->destino }}</th>
                    <th>{{ $p->horas }}</th>
                    <th>
                        <a href="" class="btn">Editar</a>
                        <a href="" class="btn">Deletar</a>
                    </th>
                    <th></th>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection