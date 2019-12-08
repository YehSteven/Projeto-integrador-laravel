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
        <h2>Adicionar distribuidor</h2>
        
        <form method="POST" action="/distribuidores/adicionar">
        @csrf
        {{ method_field('POST') }}
          <div class="form-row">
            
            <div class="col-md-4 mb-3">
              <label for="validationServerCNPJ">CNPJ</label>
              <div class="input-group">
                <input type="text" class="form-control is-invalid" id="validationServerCNPJ" placeholder="CNPJ" aria-describedby="inputGroupPrepend3" required>
                <div class="invalid-feedback">
                  Por favor, digite um CNPJ.
                </div>
              </div>
            </div>
              
            <div class="col-md-4 mb-3">
              <label for="validationRazaoSocial">Razão Social</label>
              <div class="input-group">
                <input type="text" class="form-control is-invalid" id="validationRazaoSocial" placeholder="Razão Social" aria-describedby="inputGroupPrepend3" required>
                <div class="invalid-feedback">
                  Por favor, digite a Razão Social.
                </div>
              </div>
            </div>
          
            <div class="col-md-4 mb-3">
              <label for="validationNomeFantasia">Nome Fantasia</label>
              <input type="text" class="form-control is-valid" id="validationNomeFantasia" placeholder="Nome Fantasia" value="Empresa Xpto" required>
              <div class="valid-feedback">
                Tudo certo!
              </div>
            </div>
              
            <div class="col-md-4 mb-3">
              <label for="validationServer01">Logradouro</label>
              <input type="text" class="form-control is-valid" id="validationServer01" placeholder="Logradouro" value="Rua das Flores" required>
              <div class="valid-feedback">Tudo certo!</div>
            </div>
    
            <div class="col-md-4 mb-3">
              <label for="validationServer01">Número</label>
              <input type="text" class="form-control is-valid" id="validationServer01" placeholder="numero" value="123" required>
              <div class="valid-feedback">Tudo certo!</div>
            </div>
    
            <div class="col-md-4 mb-3">
              <label for="validationServer01">Bairro</label>
              <input type="text" class="form-control is-valid" id="validationServer01" placeholder="Bairro" value="Centro" required>
              <div class="valid-feedback">Tudo certo!</div>
            </div>
    
            <div class="form-row">
              <div class="col-md-6 mb-3">
                <label for="validationServer03">Cidade</label>
                <input type="text" class="form-control is-invalid" id="validationServer03" placeholder="Cidade" required>
                <div class="invalid-feedback">
                  Por favor, informe uma cidade válida.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="validationServer04">Estado</label>
                <input type="text" class="form-control is-invalid" id="validationServer04" placeholder="Estado" required>
                <div class="invalid-feedback">
                  Por favor, informe um estado válido.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="validationServer05">CEP</label>
                <input type="text" class="form-control is-invalid" id="validationServer05" placeholder="CEP" required>
                <div class="invalid-feedback">
                  Por favor, informe um CEP válido.
                </div>
              </div>
            </div>
    
          </div>
          
          <button class="btn btn-primary" type="submit">Adicionar</button>
      </div>
    </main>

@endsection