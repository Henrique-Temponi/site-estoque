@extends('home')

@section('conteudo')

<div class="row">
    <h2>Iniciar Sessão</h2>
    
    <form action="{{ route('site.login') }}" method="POST">
        {{ csrf_field() }}
        @include('web.login._form')

        <button type="submit" class="btn">Entrar</button>
    </form>
</div>

@endsection