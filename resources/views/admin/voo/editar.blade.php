@extends('admin')

@section('conteudo')

<h3>Editar voo</h3>

@include('admin.errors')

<form action="" method="post">

    {{ csrf_field() }}
    @include('admin.voo._form')

    <button type="submit" class="btn">Atualizar voo</button>
</form>

@endsection