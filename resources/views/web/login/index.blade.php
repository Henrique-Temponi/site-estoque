@extends('layout.home')

@section('conteudo')

<br>

<div class="card card-info">
    <div class="card-header bg-blue">
    <h3 class="card-title">Iniciar Sessão</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form class="form-horizontal" action="{{ route('site.login') }}" method="POST">
        {{ csrf_field() }}
        @include('web.login._form')

        <div class="card-footer">
            <button type="submit" class="btn btn-info bg-blue">Fazer login</button>
            <!-- <button type="submit" class="btn btn-default float-right">Cancel</button> -->
        </div>
        <!-- /.card-footer -->
    </form>
</div>

@endsection