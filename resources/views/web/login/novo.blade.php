@extends('layout.home')

@section('conteudo')

<br>

@if($errors->any())
    <div class="card-panel red lighten-5">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    <div class="card card-success">
        <div class="card-header">
        <h3 class="card-title">All together</h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="card-refresh" data-source="/pages/widgets.html" data-source-selector="#card-refresh-content"><i class="fas fa-sync-alt"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
        </div>
        <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">
        The body of the card
        </div>
        <!-- /.card-body -->
    </div>
@endif
<div class="card card-success">
        <div class="card-header">
        <h3 class="card-title">All together</h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="card-refresh" data-source="/pages/widgets.html" data-source-selector="#card-refresh-content"><i class="fas fa-sync-alt"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
        </div>
        <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">
        The body of the card
        </div>
        <!-- /.card-body -->
    </div>

<br>

<div class="card card-info">
    <div class="card-header bg-blue">
    <h3 class="card-title">Criar novo usuario</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form class="form-horizontal" action="{{ route('site.registrar') }}" method="POST">
        {{ csrf_field() }}
        <div class="card-body">
            @include('web.login._form')

            <div class="form-group row">
                <label for="inputName" class="col-sm-2 col-form-label">Nome</label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" id="inputName" placeholder="Nome">
                </div>
            </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-info bg-blue">Registrar</button>
            <!-- <button type="submit" class="btn btn-default float-right">Cancel</button> -->
        </div>
        <!-- /.card-footer -->
    </form>
</div>

@endsection