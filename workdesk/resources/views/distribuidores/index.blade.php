@extends('layouts.app')

@section('content')

<div class="container-fluid">
        <div class="row">
          <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
              <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link" href="/cadastros">
                    <span data-feather="home"></span>
                    Cadastros <span class="sr-only">(atual)</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="/distribuidores">
                    <span data-feather="file"></span>
                    Distribuidores
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/fabricantes">
                    <span data-feather="shopping-cart"></span>
                    Fabricantes
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/produtos">
                    <span data-feather="users"></span>
                    Produtos
                  </a>
                </li>
              </ul>
            </div>
          </nav>  
    
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Distribuidores cadastrados</h1>
      </div>
  
      <!-- Tabela com os Distribuidores adicionados anteriormente -->
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">CNPJ</th>
            <th scope="col">Razão Social</th>
            <th scope="col">Nome Fantasia</th>
          </tr>
        </thead>
        
        <tbody>
          @foreach ($distribuidores as $distribuidor)
            <tr>
              <td scope="row">{{ $distribuidor->id }}</th>
              <td>{{ $distribuidor->cnpj }}</td>
              <td>{{ $distribuidor->razaoSocial }}</td>
              <td>{{ $distribuidor->nomeFantasia }}</td>
              <td>
                <!-- Botão para acionar modal de exclusão -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#excluirDistribuidor{{ $distribuidor->id }}">
                  Excluir
                </button>
                <!-- Modal excluir distribuidor-->
                <div class="modal fade" id="excluirDistribuidor{{ $distribuidor->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="TituloModalCentralizado">Atenção!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                          Tem certeza que deseja excluir o distribuidor {{ $distribuidor->nomeFantasia }}?
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-primary" formmethod="POST" formaction="/distribuidores/excluir/{{ $distribuidor->id }}">Excluir</button>
                      </div>
                    </div>
                  </div>
                </div>
              </td>
            </tr>
          @endforeach
        </tbody>
        
      </table>
      
      {{ $distribuidores->links() }}
  

      <!-- Adionar distribuidor-->
      <div>    
        <h2>Adicionar Distribuidor</h2>
        
        <form method="POST" action="/distribuidores/adicionar">
        @csrf
        {{ method_field('POST') }}
          <div class="form-row">
            
            <div class="col-md-4 mb-3">
              <label for="validationServerCNPJ">CNPJ</label>
              <div class="input-group">
                <input name="cnpj" type="text" class="form-control" id="validationServerCNPJ" placeholder="CNPJ" aria-describedby="inputGroupPrepend3" required>
                <div class="invalid-feedback">
                  Por favor, digite um CNPJ.
                </div>
              </div>
            </div>
            
            <div class="col-md-4 mb-3">
              <label for="validationRazaoSocial">Razão Social</label>
              <div class="input-group">
                <input name="razaoSocial" type="text" class="form-control" id="validationRazaoSocial" placeholder="Razão Social" aria-describedby="inputGroupPrepend3" required>
                <div class="invalid-feedback">
                  Por favor, digite a Razão Social.
                </div>
              </div>
            </div>
          
            <div class="col-md-4 mb-3">
              <label for="validationNomeFantasia">Nome Fantasia</label>
              <input name="nomeFantasia" type="text" class="form-control" id="validationNomeFantasia" placeholder="Nome Fantasia"  required>
              <div class="valid-feedback">
                Tudo certo!
              </div>
            </div>
              
            <div class="col-md-4 mb-3">
              <label for="validationServer01">Logradouro</label>
              <input name="logradouro" type="text" class="form-control" id="validationServer01" placeholder="Rua xxxxx" required>
              <div class="valid-feedback">Tudo certo!</div>
            </div>
    
            <div class="col-md-4 mb-3">
              <label for="validationServer01">Número</label>
              <input name="numero" type="text" class="form-control" id="validationServer01" placeholder="546" required>
              <div class="valid-feedback">Tudo certo!</div>
            </div>
    
            <div class="form-row">
              <div class="col-md-6 mb-3">
                <label for="validationServer03">Cidade</label>
                <input name="cidade" type="text" class="form-control" id="validationServer03" placeholder="São Paulo" required>
                <div class="invalid-feedback">
                  Por favor, informe uma cidade válida.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="validationServer04">Estado</label>
                <input name="estado" type="text" class="form-control" id="validationServer04" placeholder="SP" required>
                <div class="invalid-feedback">
                  Por favor, informe um estado válido.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="validationServer05">CEP</label>
                <input name="cep" type="text" class="form-control" id="validationServer05" placeholder="04087001" required>
                <div class="invalid-feedback">
                  Por favor, informe um CEP válido.
                </div>
              </div>
            </div>
    
          </div>
          <hr>
          <button class="btn btn-primary" type="submit">Adicionar</button>
      </div>
    </main>

@endsection