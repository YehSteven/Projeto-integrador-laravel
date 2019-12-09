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
                  <a class="nav-link" href="fabricantes.php">
                    <span data-feather="shopping-cart"></span>
                    Fabricantes
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="produtos.php">
                    <span data-feather="users"></span>
                    Produtos
                  </a>
                </li>
              </ul>
            </div>
          </nav>  
      
      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Produtos cadastrados</h1>
        </div>
  
        <!-- Tabela com os Produtos adicionados anteriormente -->
        <div>
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Nome do Produto</th>
                <th scope="col">Cód. Produto</th>
                <th scope="col">Preço</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($produtos as $produto)
                <tr>
                  <td scope="row">{{ $produto->nomeProduto }}</td>
                  <td>{{ $produto->id }}</td>
                  <td>{{ $produto->preco }}</td>
                  <td>
                    <!-- Botão para acionar modal de exclusão -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#excluirProduto{{ $produto->id }}">
                      Excluir
                    </button>
                    <!-- Modal excluir Produto -->
                    <div class="modal fade" id="excluirProduto{{ $produto->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="TituloModalCentralizado">Atenção!</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                              Tem certeza que deseja excluir o produto {{ $produto->nomeProduto }} ?
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                            <button type="submit" class="btn btn-primary" formmethod="POST" formaction="/produtos/excluir/{{ $produto->id }}">Excluir</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
          {{ $produtos->links() }}
        </div>

  
        <!-- Formulário para adicionar produto-->
        <div> 
          <h2>Adicionar Produto</h2>
          <form method="POST" action="/produtos/adicionar">
            @csrf
            {{ method_field('POST') }}
            <div class="form-row">
              <div class="col-md-4 mb-3">
                <label for="validationNomeProd">Nome do Produto</label>
                <input type="text" class="form-control is-valid" id="validationNomeProd" placeholder="Nome do Produto" required name="nomeProduto">
                <!-- ADICIONAR CONDICIONAL PARA A VALIDAÇÃO -->
                <div class="invalid-feedback">Por favor, digite o nome do produto.</div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationUnMedida">Preço</label>
                <input type="text" class="form-control is-valid" id="validationUnMedida" placeholder="Unidade de medida" required name="preco">
                <!-- ADICIONAR CONDICIONAL PARA A VALIDAÇÃO -->
                <div class="invalid-feedback">Por favor, digite o preço do produto.</div>
              </div>
            </div>
            <button class="btn btn-primary" type="submit">Adicionar Produto</button>
          </form>
        </div>
           
      </main>

@endsection