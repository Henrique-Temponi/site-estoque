@extends('layout.home')

@section('conteudo')

<div class="row">

    <h2>Criar novo usuario</h2>

    @if($errors->any())
        <div class="card-panel red lighten-5">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('site.registrar') }}" method="POST">
        {{ csrf_field() }}
        @include('web.login._form')

        <div class="input-field row">
            <label for="nome">Nome: </label>
            <input type="text" name="name" id="nome">
        </div>

        <button type="submit" class="btn">Registrar</button>
    </form>
</div>

@endsection