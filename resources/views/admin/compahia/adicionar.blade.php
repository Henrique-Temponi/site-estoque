@extends('admin')

@section('conteudo')

<h3>Adicionar Compahia</h3>

@include('admin.errors')

<form action="" method="post">

    {{ csrf_field() }}
    @include('admin.compahia._form')

    <button type="submit" class="btn">Adicionar compahia</button>
</form>

@endsection