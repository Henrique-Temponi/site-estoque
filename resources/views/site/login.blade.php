@extends('home')

@section('conteudo')

<div class="row">
    <h2>login</h2>
    
    <form action="{{ route('site.login') }}" method="POST">
        {{ csrf_field() }}
        <div class="input-field row">
            <label for="nome">nome: </label>
            <input type="text" name="name" id="nome">
        </div>
        <div class="input-field row">
            <label for="password">password: </label>
            <input type="text" name="password" id="password">
        </div>
        <button type="submit" class="btn">Registrar</button>
    </form>
</div>
@endsection