@extends('layout.admin')

@section('conteudo')

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Voos</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Painel Admin</a></li>
          <li class="breadcrumb-item active">Voos</li>
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
          <h3 class="card-title">Voos registrados</h3>
        </div>
        <div class="card-body">
          <div class="dataTables_wrapper dt-bootstrap4">

            <div class="row">
              <div class="col-sm-4">
                <form action="{{ route('admin.voos.pesquisar') }}">
                  <div class="form-group">
                    <label for="pesDestino">Pesquisar por Destino: </label>
                    <select name="destino" class="custom-select" id="pesDestino">
                      <option value="0" selected>Todos</option>
                      @foreach($destinos as $destino)
                        <option value="{{$destino->id}}">{{$destino->nome}}</option>
                      @endforeach
                    </select>
                  </div>
                  <button type="submit" class="btn btn-primary">Pesquisar</button>
                </form>
              </div>
            </div>
            
            <div class="row">
              <div class="col-sm-12">
                <table class="table table-bordered table-striped dataTable">
                  <thead>
                    <th>Nome do voo</th>
                    <th>Destino</th>
                    <th>Compahia</th>
                    <th>Numero de Reservas</th>
                    <th>Turno</th>
                    <th>Opcões</th>
                  </thead>
                  <tbody>
                    @foreach($voos as $voo)
                      <tr class="even">
                        <td>{{ $voo->voo }}</td>
                        <td>{{ $voo->destino->nome }}</td>
                        <td>{{ $voo->compahia->nome }}</td>
                        <td>{{ $voo->user()->count() }}</td>
                        <td>{{ $voo->turno }}</td>
                        <td>
                          <a href="{{ route('admin.voos.editar', $voo->id) }}" class="btn btn-warning">Editar</a>
                          <a href="{{ route('admin.voos.deletar', $voo->id) }}" class="btn btn-danger btn-space">Deletar</a>
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