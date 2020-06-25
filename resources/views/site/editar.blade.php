@extends('home')

@section('conteudo')

<div class="row">
    <h2>Editar</h2>

    <form action="{{ route('site.editar', $registro->id) }}" method="POST">
        {{ csrf_field() }}
        @include('formulario.formFlight')
    </form>

</div>
@endsection