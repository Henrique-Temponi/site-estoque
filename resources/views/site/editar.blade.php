@extends('home')

@section('conteudo')

<div class="row">
    <h2>Editar</h2>

    <form action="{{ route('site.editar', $registro->id) }}" method="POST">
        {{ csrf_field() }}
        @include('formulario.formFlight')
        @include('formulario.formConexoes')
        <button type="submit" class="btn final-submit">Registrar</button>
    </form>

</div>
@endsection