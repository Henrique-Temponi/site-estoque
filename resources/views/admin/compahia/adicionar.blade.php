@extends('admin')

@section('conteudo')

<h3>Adicionar destino</h3>

@include('admin.errors')

<form action="" method="post">

    {{ csrf_field() }}
    @include('admin.destino._form')

    <button type="submit" class="btn">Adicionar destino</button>
</form>

@endsection