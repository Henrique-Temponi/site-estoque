@extends('home')

@section('conteudo')

<div class="row">

    <h2>Criar novo usuario</h2>

    <form action="" method="POST">
        {{ csrf_field() }}
        @include('login.formLogin')
    </form>
</div>

@endsection