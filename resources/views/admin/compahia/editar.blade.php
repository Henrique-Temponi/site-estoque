@extends('layout.admin')

@section('conteudo')

<h3>Editar Compahia</h3>

@include('admin.errors')

<form action="" method="post">

    {{ csrf_field() }}
    @include('admin.compahia._form')

    <button type="submit" class="btn">Atualizar compahia</button>
</form>

@endsection