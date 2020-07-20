@extends('home')

@section('conteudo')

<div class="row">
    <h2>Editar</h2>

    <form action="{{ route('site.editar', $registro->id) }}" method="POST">
        {{ csrf_field() }}
        @include('formulario.formFlight')
        <button type="submit" class="btn final-submit">Atualizar</button>
    </form>

    <!-- <form action=""> -->
        @include('formulario.formConexoes')
    <!-- <button type="" class=""></button> -->
        <a class="btn final-submit" href="{{ route('site.home') }}">Adicionar</a>
    <!-- </form> -->
        
    <!-- <form action="{{ route('site.home') }}">
    <button type="" class="btn final-submit">Adicionar</button>
    </form> -->
</div>
@endsection