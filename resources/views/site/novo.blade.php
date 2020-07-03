@extends('home')

@section('conteudo')
<div class="row">
    <h2>Novo</h2>
    <form action="{{ route('site.novo') }}" method="POST">
        {{ csrf_field() }}
        @include('formulario.formFlight')
    </form>
</div>
@endsection