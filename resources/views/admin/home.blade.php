@extends('layout.admin')

@section('conteudo')

<div class="content-header">


</div>

<div class="content">

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

</div>


  <!-- <div class="row"> -->
    <div class="col s12 m6">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">Usuarios cadastrados</span>
          <p>Numero total de usuarios: {{ $user_quantidade}}</p>
        </div>
        <div class="card-action">
          <!-- <a href="">Cadastrar usuario</a> -->
          <a href="{{ route('admin.usuarios.listar') }}">Listar usuarios</a>
        </div>
      </div>
    </div>

    <div class="col s12 m6">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">Compahias cadastradas</span>
          <p>Numero de Compahia cadastradas: {{ $compahia_quantidades }}</p>
        </div>
        <div class="card-action">
          <a href="{{ route('admin.compahias.adicionar') }}">Cadastrar compahia</a>
          <a href="{{ route('admin.compahias.listar') }}">Listar compahias</a>
        </div>
      </div>
    </div>

    <div class="col s12 m6">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">Destinos cadastrados</span>
          <p>Numero de destinos cadastrados: {{ $destino_quantidades }}</p>
        </div>
        <div class="card-action">
          <a href="{{ route('admin.destinos.adicionar') }}">Cadastrar Destino</a>
          <a href="{{ route('admin.destinos.listar') }}">Listar destinos</a>
        </div>
      </div>
    </div>
  </div>

@endsection