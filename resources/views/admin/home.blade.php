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
            <h5 class="card-title">Grafico 1</h5>
          </div>
          <div class="card-body">
            <canvas id="myChart"></canvas>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title">Grafico 2</h5>
          </div>
          <div class="card-body">
            <canvas id="userline"></canvas>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection