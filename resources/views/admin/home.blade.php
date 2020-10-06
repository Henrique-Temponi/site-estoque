@extends('layout.admin')

@section('conteudo')

<div class="content-header">
  <div class="container-fluid">
    <h1>Bem Vindo, {{ Auth::user()->name }}</h1>
  </div>
</div>

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title">Quantidade de entidates</h5>
          </div>
          <div class="card-body">
            <canvas id="myChart"></canvas>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title">Destinos mais reservados</h5>
          </div>
          <div class="card-body">
            <canvas id="vooschart"></canvas>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title">Novos usuarios cadastrados</h5>
          </div>
          <div class="card-body">
            <canvas id="userline" height="50px"></canvas>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection