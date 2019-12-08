@extends('layouts.app')

@section('content')

<div class="container-fluid">
        <div class="row">
          <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
              <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link active" href="cadastros.php">
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
                  <a class="nav-link" href="produtos.php">
                    <span data-feather="users"></span>
                    Produtos
                  </a>
                </li>

              </ul>
            </div>
          </nav>
  
          <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
              <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            
                  <div class="card text-white bg-dark mb-3" style="max-width: 18rem;" >
                      <a class="nav-link" href="distribuidores">
                      <div class="card-body"  >
                          <h5 class="card-title">Distribuidores</h5>
                          <p class="card-text">Acompanhe e gerencie o cadastro dos seus distribuidores</p>
                      </div>
                  </div>
  
                  <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                  <a class="nav-link linkCaixas" href="fabricantes/adicionar" >
                      <div class="card-body"  >
                          <h5 class="card-title">Fabricantes</h5>
                          <p class="card-text">Acompanhe e gerencie o cadastro dos seus fabricantes</p>
                      </div>
                  </div>    
                  
                  <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                      <a class="nav-link" href="produtos">
                      <div class="card-body"  >
                          <h5 class="card-title">Produtos</h5>
                          <p class="card-text">Acompanhe e gerencie os produtos que você vende</p>
                      </div>
                  </div>
  

  
              </div>
          </main>
        </div>
      </div>

@endsection