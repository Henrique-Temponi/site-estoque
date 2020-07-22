@extends('home')

@section('conteudo')

<div class="row">

    <h2>Criar novo usuario</h2>

    @if($errors->any())
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    @endif

    <form action="{{ route('site.registrar') }}" method="POST">
        {{ csrf_field() }}
        @include('web.login._form')

        <button type="submit" class="btn">Registrar</button>
    </form>
</div>

@endsection