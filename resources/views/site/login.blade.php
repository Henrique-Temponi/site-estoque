@extends('home')

@section('conteudo')

<div class="row">
    <h2>login</h2>
    
    <form action="{{ route('login.verificar') }}" method="POST" class="">
    
    </form>
</div>

@endsection