@extends('layouts.app')

@section('content')

<div class="container-fluid">
        <div class="row">
          <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
              <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link" href="cadastros.php">
                    <span data-feather="home"></span>
                    Cadastros <span class="sr-only">(atual)</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="distribuidores.php">
                    <span data-feather="file"></span>
                    Distribuidores
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="fabricantes.php">
                    <span data-feather="shopping-cart"></span>
                    Fabricantes
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="produtos.php">
                    <span data-feather="users"></span>
                    Produtos
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="precos.php">
                    <span data-feather="bell"></span>
                    Tabelas de preços
                  </a>
                </li>
              </ul>
            </div>
          </nav>  
    
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Fabricantes cadastrados</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <button class="btn btn-sm btn-outline-secondary">Share</button>
            <button class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
        </div>
      </div>
  
      <!-- Tabela com os Fabricantes adicionados anteriormente -->
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">CNPJ</th>
            <th scope="col">Razão Social</th>
            <th scope="col">Nome Fantasia</th>
            <th scope="col">Editar</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>123.456.678.0001/12</td>
            <td>XXX LTDA</td>
            <td>Cliente 1</td>
            <td>
              <!-- Botão para acionar modal de exclusão -->
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#excluirFabricante">
              Excluir Fabricante
              </button>
            </td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>123.456.678.0001/12</td>
            <td>YYY LTDA</td>
            <td>Cliente 2</td>
            <td>
              <!-- Botão para acionar modal de exclusão -->
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#excluirFabricante">
              Excluir Fabricante
              </button>
            </td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>123.456.678.0001/12</td>
            <td>ZZZ LTDA</td>
            <td>Cliente 3</td>
            <td>
              <!-- Botão para acionar modal de exclusão -->
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#excluirFabricante">
              Excluir Fabricante
              </button>
            </td>
          </tr>
        </tbody>
      </table>
  
      <!-- Modal excluir fabricante-->
      <div class="modal fade" id="excluirFabricante" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="TituloModalCentralizado">Atenção!</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                Tem certeza que deseja excluir o Fabricante?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
              <button type="button" class="btn btn-primary">Excluir</button>
            </div>
          </div>
        </div>
      </div>
          
      <!-- Formulário para adicionar fabricante-->
      <h2>Adicionar Fabricante</h2>
      
      <!-- Usei o formulário Bootstrap Server-side em https://getbootstrap.com.br/docs/4.1/components/forms/#server-side -->
      <form method="POST" action="/fabricantes/adicionar">
        @csrf
        {{ method_field('POST') }}
        <div class="form-row">
          
          <div class="col-md-4 mb-3">
            <label for="cnpj">CNPJ</label>
            <div class="input-group">
              <input name="cnpj" type="text" class="form-control is-invalid"  id="cnpj" placeholder="CNPJ" aria-describedby="inputGroupPrepend3" required>
              <div class="invalid-feedback">
                Por favor, digite um CNPJ.
              </div>
            </div>
          </div>
            
          <div class="col-md-4 mb-3">
            <label for="razao_social">Razão Social</label>
            <div class="input-group">
              <input name="razao_social" type="text" class="form-control is-invalid" id="razao_social" placeholder="Razão Social" aria-describedby="inputGroupPrepend3">
              <div class="invalid-feedback">
                Por favor, digite a Razão Social.
              </div>
            </div>
          </div>
         
          <div class="col-md-4 mb-3">
            <label for="nome_fantasia">Nome Fantasia</label>
            <input name="nome_fantasia" type="text" class="form-control is-valid" id="nome_fantasia" placeholder="Nome Fantasia" value="Empresa Xpto" required>
            <div class="valid-feedback">
              Tudo certo!
            </div>
          </div>
            
          <div class="col-md-4 mb-3">
            <label for="logradouro">Logradouro</label>
            <input name="logradouro" type="text" class="form-control is-valid" id="logradouro" placeholder="Logradouro" value="Rua das Flores" required>
            <div class="valid-feedback">Tudo certo!</div>
          </div>
  
          <div class="col-md-4 mb-3">
            <label for="numero">Número</label>
            <input name="numero" type="text" class="form-control is-valid" id="numero" placeholder="numero" value="123" required>
            <div class="valid-feedback">Tudo certo!</div>
          </div>
  
          <div class="col-md-4 mb-3">
            <label for="bairro">Bairro</label>
            <input name="bairro" type="text" class="form-control is-valid" id="bairro" placeholder="Bairro" value="Centro" required>
            <div class="valid-feedback">Tudo certo!</div>
          </div>
  
          <div class="form-row">
            <div class="col-md-6 mb-3">
              <label for="cidade">Cidade</label>
              <input name="cidade" type="text" class="form-control is-invalid" id="cidade" placeholder="Cidade" required>
              <div class="invalid-feedback">
                Por favor, informe uma cidade válida.
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <label for="estado">Estado</label>
              <input name="estado" type="text" class="form-control is-invalid" id="estado" placeholder="Estado" required>
              <div class="invalid-feedback">
                Por favor, informe um estado válido.
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <label for="cep">CEP</label>
              <input name="cep" type="text" class="form-control is-invalid" id="cep" placeholder="CEP" required>
              <div class="invalid-feedback">
                Por favor, informe um CEP válido.
              </div>
            </div>
          </div>
  
        </div>
        
        <button class="btn btn-primary" type="submit">Adicionar Fabricante</button>
      </form>
        
          <!-- Modal excluir alterações-->
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
                    Tem certeza que deseja excluir alterações?
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                  <button type="button" class="btn btn-primary">Excluir</button>
                </div>
              </div>
            </div>
          </div>
        </main>
  
      

@endsection