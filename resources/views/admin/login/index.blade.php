@extends('admin')

@section('conteudo')

<div class="row">
    <h2>Entrar painel admin</h2>
    
    <form action="{{ route('admin.login') }}" method="POST">
        {{ csrf_field() }}
        @include('admin.login._form')

        <button type="submit" class="btn">Entrar</button>
    </form>
</div>

@endsection