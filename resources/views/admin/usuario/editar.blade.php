@extends('layout.admin')

@section('conteudo')

<h3>Editar Usuario</h3>

@include('admin.errors')

<form action="" method="post">

    {{ csrf_field() }}
    @include('admin.usuario._form')

    <button type="submit" class="btn">Atualizar usuario</button>
</form>

@endsection