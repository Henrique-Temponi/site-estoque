@extends('layout.admin')

@section('conteudo')

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Destino</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Painel Admin</a></li>
          <li class="breadcrumb-item active">listagem de destino</li>
        </ol>
      </div>
    </div>
  </div>
</div>

<div class="content">
  <div class="content-fluid">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Destino registrados</h3>
        </div>
        <div class="card-body">
          <div class="dataTables_wrapper dt-bootstrap4">
            <div class="row">
              <div class="col-sm-12">
                <table class="table table-bordered table-striped dataTable">
                  <thead>
                    <th>Nome</th>
                    <th>Abreviação</th>
                    <th>Quant. voos registrados</th>
                    <th>Opcões</th>
                  </thead>
                  <tbody>
                    @foreach($registro as $r)
                      <tr class="even">
                        <td>{{ $r->nome }}</td>
                        <td>{{ $r->abreviacao }}</td>
                        <td>{{ $r->flight()->count()}}</td>
                        <td>
                            <a class="btn btn-warning" href="{{ route('admin.destinos.editar', $r->id) }}">Editar</a>
                            <a class="btn btn-danger btn-space" href="{{ route('admin.destinos.deletar', $r->id) }}">Deletar</a>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection