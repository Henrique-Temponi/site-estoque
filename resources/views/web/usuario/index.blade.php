@extends('layout.home')

@section('conteudo')

<h3 align="center">Meus Voos</h3>
<div class="divider"></div>

<div class="row">
    @foreach($voo as $p)
    <div class="col-lg-6">
        <div class="card card-primary card-outline">
            <div class="card-body">
            <h5 class="card-title">Nome do Voo: {{ $p->voo }}</h5>

            <p class="card-text">
                Destino: {{ $p->destino->nome }} <br>
                Abreviação: {{ $p->destino->abreviacao }}
            </p>
            <a href="{{ route('usuario.reservar.deletar', $p->id ) }}" class="card-link">Cancelar Reserva</a>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection