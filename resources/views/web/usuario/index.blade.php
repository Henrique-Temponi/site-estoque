@extends('home')

@section('conteudo')

<h3 align="center">Meus Voos</h3>
<div class="divider"></div>

<div class="row">
    @foreach($voo as $p)
        <div class="col s12 m6">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                <span class="card-title">{{ $p->voo }}</span>
                    <p>{{ $p->destino }}</p>
                </div>
            </div>
        </div>
    @endforeach
</div>

@endsection