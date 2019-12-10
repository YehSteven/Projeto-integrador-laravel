@extends('layouts.app')

@section('content')

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
          <h1 class="h2">Inserir Pedido</h1>
      </div>

    <form>
      <div class="form-row">
        <div class="col-md-4 mb-3">
          <label for="pedPedCodi">Cód Cliente</label>
          <div class="input-group">
            <input name="idCliente" type="text" class="form-control is-invalid" id="pedPedCodi" placeholder="1234" aria-describedby="inputGroupPrepend3" required>
            <div class="invalid-feedback">
              Por favor, digite o Cód do Cliente.
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-3">
          <label for="pedDtEmissao">Data da Emissão</label>
          <div class="input-group">
            <input name="dataPedido" type="text" class="form-control is-invalid" id="pedDtEmissao" placeholder="dd/mm/aaaa" aria-describedby="inputGroupPrepend3" required>
            <div class="invalid-feedback">
              Por favor, digite a data de emissão.
            </div>
          </div>
        </div>
              
        <div class="col-md-4 mb-3">
          <label for="cliCNPJ">Cód. Fonecedor</label>
          <input name="idFornecedor" type="text" class="form-control is-valid" id="cliCNPJ" placeholder="12.123.123/0001-12" required>
          <div class="valid-feedback">
            Tudo certo!
          </div>
        </div>

        <div class="form-group col-md-6">
            <label for="cliNome">Cód. Usuário</label> 
            <input name="idUsuario" type="text" name="cliNome" id="cliNome" class="form-control" value="Nome do Cliente">
        </div>
        
        <div class="form-group col-md-6">
            <label for="vendedor">Valor total</label> 
            <input name="valorTotal" type="text" name="vendedor" id="vendedor" class="form-control" value="Vendedor">
        </div>

        <!-- Botão para adicionar o item preenchido -->
        <form method="POST" action="/pedidos/novoPedido">
          @csrf
          {{ method_field('POST') }}
          <button type="submit" class="btn btn-primary">
            Adicionar
          </button>
        </form>
      
      </div>

      <!-- Tabela com os itens do pedido que está sendo visualizado -->
      <h3></h3>
      <h3 class="h2">Itens do Pedido</h3>
      <table class="table table-striped">
          <thead>
              <tr>
                  <th scope="col">PRODCODI</th>
                  <th scope="col">DESCRICAO</th>
                  <th scope="col">QTDE</th>
                  <th scope="col">VALOR UNIT</th>
                  <th scope="col">D/A (%)</th>
                  <th scope="col">VALOR CALC</th>
                  <th scope="col">VALOR TOTAL</th>
                  <th scope="col">EDITAR</th>
              </tr>
          </thead>
          <tbody>
              <tr>
                  <th scope="row">0130010</th>
                  <td>ARGOLA 20 MM - DOURADO</td>
                  <td>200</td>
                  <td>5,30</td>
                  <td>0</td>
                  <td>5,30</td>
                  <td>1.060,00</td>
                  <td>
                      <!-- Botão para acionar modal de cancelamento -->
                      <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#excluirItemPedido">
                          Excluir
                      </button>
                      <!-- Botão para alterar Item de Pedido -->
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cadastroPedidoItem">
                          Alterar
                      </button>
                  </td>
              </tr>
              <tr>
                  <th scope="row">1631116</th>
                  <td>RODIZIO ROMANO KIT (100 PC) - BRANCO</td>
                  <td>2000</td>
                  <td>10,16</td>
                  <td>0</td>
                  <td>10,16</td>
                  <td>20.320,00</td>
                  <td>
                      <!-- Botão para acionar modal de excluir Item de Pedido -->
                      <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#excluirItemPedido">
                          Excluir
                      </button>
                      <!-- Botão para alterar Item de Pedido -->
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cadastroPedidoItem">
                          Alterar
                      </button>
                  </td>
              </tr>
          </tbody>
      </table>  
       
    <!-- Botão e modal para cancelar alterações-->
      <button class="btn btn-secondary" type="data-dismiss" data-toggle="modal" data-target="#excluirAlteracoes">Fechar</button>
    
      <div class="modal fade" id="excluirAlteracoes" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="TituloModalCentralizado">Atenção!</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              Tem certeza que deseja cancelar alterações?
            </div>
            <div class="modal-footer">
              <a class="btn btn-secondary" href="verPedido.php" role="button">Fechar</a>
              <a class="btn btn-primary" href="pedidos.php" role="button">Cancelar alterações</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Botão e Modal Cancelar Pedido -->
      <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#cancelarPedido">
          Cancelar Pedido
      </button>
      
      <div class="modal fade" id="cancelarPedido" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="TituloModalCentralizado">Atenção!</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                      Tem certeza que deseja cancelar o Pedido?
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                      <button type="button" class="btn btn-primary" type="submit" value="Submit">Cancelar</button>
                  </div>
              </div>
          </div>
      </div>


      <!-- Botão e modal para alterar -->
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#alterarPedido">
          Salvar Alterações
      </button>

      <div class="modal fade" id="alterarPedido" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="TituloModalCentralizado">Atenção!</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                      Tem certeza que deseja alterar o Pedido?
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                      <button type="button" class="btn btn-primary" type="submit" value="Submit">Alterar</button>
                  </div>
              </div>
          </div>
      </div>
</main>
  

@endsection