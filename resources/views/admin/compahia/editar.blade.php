@extends('layout.admin')

@section('conteudo')

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Editar</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Painel Admin</a></li>
          <li class="breadcrumb-item"><a href="{{ route('admin.compahias.listar') }}">lista de compahias</a></li>
          <li class="breadcrumb-item active">Editar compahia</li>
        </ol>
      </div>
    </div>
  </div>
</div>

@include('admin.errors')

<div class="content">
  <div class="content-fluid">
    <div class="col-8">
      <div class="card">
        <div class="card-header">
          <h5 class="card-title">Editar compahia</h5>
        </div>
        <form action="" method="post">
          {{ csrf_field() }}
          <div class="card-body">
            @include('admin.compahia._form')
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Atualizar compahia</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection