@extends('layouts.app')

@section('content')

<!-- barra lateral -->
<div class="container-fluid">
    <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
        <div class="sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
            <a class="nav-link active" href="/pedidos">
                <span data-feather="layers"></span>
                Pedidos Enviados
            </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/pedidos/novoPedido">
                <span data-feather="layers"></span>
                Inserir Pedido
            </a>
            </li>
        </ul>
        </div>
    </nav>

  <!-- parte principal -->
  <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <!-- parte principal -->
    <div id= "pedidosEnviados" class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Pedidos Enviados</h1>
    </div>

    <!-- tabela de dados -->
    <!-- PedidoList -->
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Cód. Produto<</th>
          <th scope="col">Data Emissão</th>
          <th scope="col">Cód. Cliente</th>
          <th scope="col">Valor</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          @foreach ($pedidos as $pedido)
          <td scope="row">{{ $pedido->id }}</th>
          <td>{{ $pedido->dataPedido }}</td>
          <td>{{ $pedido->idCliente }}</td>
          <td>{{ $pedido->valorTotal }}</td>
          <td>
            <!-- Botão para acionar página de visualização -->
            <a class="btn btn-primary" href="/pedidos/verPedido" role="button">Detalhes</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </main>
</div> 
@endsection