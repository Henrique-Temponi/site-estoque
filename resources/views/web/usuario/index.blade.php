@extends('home')

@section('conteudo')

<h3 align="center">Meus Voos</h3>
<div class="divider"></div>

<div class="row">
    @foreach($voo as $p)
        <div class="col s12 m6">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                <span class="card-title">Nome do voo: {{ $p->voo }}</span>
                    <p>Nome do destino: {{ $p->destino->nome }}</p>
                    <p>Nome da compahia: {{ $p->compahia->nome }}</p>
                    <p>Turno: {{ $turno[$p->turno] }}</p>
                </div>
                <div class="card-action">
                    <a href="{{ route('usuario.reservar.deletar', $p->id) }}">Deletar Reserva</a>
                </div>
            </div>
        </div>
    @endforeach
</div>

@endsection