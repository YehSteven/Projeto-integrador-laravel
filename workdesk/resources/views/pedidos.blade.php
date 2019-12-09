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
            <a class="nav-link" href="/novoPedido">
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
          <th scope="col">PEDCODI</th>
          <th scope="col">EMISSAO</th>
          <th scope="col">STATUS</th>
          <th scope="col">CLIENTE</th>
          <th scope="col">VALOR</th>
          <th scope="col">EDITAR</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">5200001</th>
          <td>01/09/2019</td>
          <td>CONCLUIDO</td>
          <td>ABC TECIDOS E DECORACOES</td>
          <td>10.000,00</td>
          <td>
            <!-- Botão para acionar página de visualização -->
            <a class="btn btn-primary" href="/verPedido" role="button">Detalhes</a>
          </td>
        </tr>
      </tbody>
    </table>

  </main>
    
@endsection