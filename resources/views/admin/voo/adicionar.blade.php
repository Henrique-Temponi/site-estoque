@extends('layout.admin')

@section('conteudo')

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Adicionar</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Painel Admin</a></li>
          <li class="breadcrumb-item"><a href="{{ route('admin.voos.listar') }}">Voos</a></li>
          <li class="breadcrumb-item active">Adicionar voo</li>
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
          <h5 class="card-title">Adicionar voo</h5>
        </div>
        <form action="{{ route('admin.voos.adicionar') }}" method="post">
          {{ csrf_field() }}
          <div class="card-body">
            @include('admin.voo._form')
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Adicionar voo</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection