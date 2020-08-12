@extends('home')

@section('conteudo')

<h3 align="center">Voos disponiveis</h3>
<div class="divider"></div>

<div class="row">
    @foreach($voo as $p)
        <div class="col s12 m6">
            <div class="card indigo">
                <div class="card-content white-text">
                <span class="card-title">Nome do voo: {{ $p->voo }}</span>
                    <p>Nome do destino: {{ $p->destino->nome }}</p>
                    <p>Abreviao: {{ $p->destino->abreviacao }}</p>
                    <p>Turno: {{ $turno[$p->turno] }}</p>
                </div>
                <div class="card-action">
                    <a href="{{ route('usuario.reservar', $p->id) }}">Reserva</a>
                </div>
            </div>
        </div>
    @endforeach
</div>

@endsection