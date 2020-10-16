@extends('layout.admin')

@section('conteudo')

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Usuarios</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Painel Admin</a></li>
          <li class="breadcrumb-item active">Lista de usuarios</li>
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
          <h3 class="card-title">Usuarios registrados</h3>
        </div>
        <div class="card-body">
          <div class="dataTables_wrapper dt-bootstrap4">
            <div class="row">
              <div class="col-sm-12">
                <table class="table table-bordered table-striped dataTable">
                  <thead>
                    <th>ID</th>   
                    <th>Email</th>
                    <th>Nome</th>
                    <th>isAdmin</th>
                    <th>Opcões</th>
                  </thead>
                  <tbody>
                    @foreach($registros as $registro)
                      <tr class="even">
                        <td>{{ $registro->id }}</td>
                        <td>{{ $registro->email }}</td>
                        <td>{{ $registro->name }}</td>
                        @if($registro->admin)
                            <td>Sim</td>
                        @else
                            <td>Não</td>
                        @endif
                        <td>
                            <a class="btn btn-danger btn-space" href="{{ route('admin.usuarios.deletar', $registro->id) }}">Deletar</a>
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