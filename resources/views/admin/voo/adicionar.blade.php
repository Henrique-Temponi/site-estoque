@extends('admin')

@section('conteudo')

<h3>Adicionar voo</h3>

<form action="" method="post">

    {{ csrf_field() }}
    @include('admin.voo._form')

    <button type="submit" class="btn">Adicionar voo</button>
</form>

@endsection