@extends('admin')

@section('conteudo')

<div class="row">
    <div class="col s12 m6">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">Voos disponiveis</span>
          <p>Numero total de voos: {{ $voos_quantidade }}</p>
        </div>
        <div class="card-action">
          <a href="{{ route('admin.voos.adicionar') }}">Adicionar voo</a>
          <a href="{{ route('admin.voos.listar') }}">Listar voos</a>
        </div>
      </div>
    </div>
  <!-- </div> -->

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
          <span class="card-title">compahias cadastradas</span>
          <p>Place_holder: numero totais de compahias</p>
        </div>
        <div class="card-action">
          <a href="#">Cadastrar compahia</a>
          <a href="#">Listar compahias</a>
        </div>
      </div>
    </div>

    <div class="col s12 m6">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">destinos cadastrados</span>
          <p>Place_holder: numero totais de destinos</p>
        </div>
        <div class="card-action">
          <a href="#">Cadastrar destino</a>
          <a href="#">Listar destinos</a>
        </div>
      </div>
    </div>
  </div>

@endsection