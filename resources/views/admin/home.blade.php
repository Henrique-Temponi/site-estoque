@extends('layout.admin')

@section('conteudo')

<div class="content-header">
  <div class="container-fluid">
    <h1>Bem Vindo, {{ Auth::user()->name }}</h1>
  </div>
</div>




<div class="content">
  <div class="container-fluid">
    <div class="col-lg-6">
      <canvas id="myChart"></canvas>
    </div>
  </div>
</div>


@endsection