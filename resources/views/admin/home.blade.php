@extends('layout.admin')

@section('conteudo')

<div class="content-header">
  <div class="container-fluid">
    <h1>Bem Vindo, {{ Auth::user()->name }}</h1>
  </div>
</div>

<canvas id="myChart"></canvas>


<div class="content">
  <div class="container-fluid">
  </div>
</div>

<!-- <div class="content">

  <div class="col-lg-6">
      <div class="card card-primary card-outline">
          <div class="card-body">
            <h5 class="card-title">Voos disponiveis</h5>
            <p class="card-text">
                Numero Total de voos: {{ $voos_quantidade }}
            </p>
            <a href="{{ route('admin.voos.adicionar') }}" class="card-link">Adicionar Voo</a>
            <a href="{{ route('admin.voos.listar') }}" class="card-link">Listar Voos</a>
          </div>
      </div>
  </div>

  <div class="col-lg-6">
      <div class="card card-primary card-outline">
          <div class="card-body">
            <h5 class="card-title">Usuarios cadastrados</h5>
            <p class="card-text">
              Numero total de usuarios: {{ $user_quantidade}}
            </p>
              <a href="{{ route('admin.usuarios.listar') }}" class="card-link">Listar usuarios</a>
          </div>
      </div>
  </div>

  <div class="col-lg-6">
      <div class="card card-primary card-outline">
          <div class="card-body">
            <h5 class="card-title">Compahias cadastradas</h5>
            <p class="card-text">
              Numero de Compahia cadastradas: {{ $compahia_quantidades }}
            </p>
              <a href="{{ route('admin.compahias.adicionar') }}" class="card-link">Cadastrar compahia</a>
              <a href="{{ route('admin.compahias.listar') }}" class="card-link">Listar compahias</a>
          </div>
      </div>
  </div>

  <div class="col-lg-6">
      <div class="card card-primary card-outline">
          <div class="card-body">
            <h5 class="card-title">Destinos cadastrados</h5>
            <p class="card-text">
              Numero de destinos cadastrados: {{ $destino_quantidades }}
            </p>
              <a href="{{ route('admin.destinos.adicionar') }}" class="card-link">Cadastrar Destino</a>
              <a href="{{ route('admin.destinos.listar') }}" class="card-link">Listar destinos</a>
          </div>
      </div>
  </div>

</div> -->

@endsection