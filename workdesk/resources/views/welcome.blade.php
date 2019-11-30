@extends('layouts.app')

@section('content')
    <div class="container-fluid">
    
        <section class="main-content d-flex justify-content-center align-items-center flex-column">
            <h1>Workdesk</h1>
            <p>Agora nós representamos você!</p>
            <a href="login.php" class="btn btn-dark">Acesso</a>
        </section>

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <svg class="carrosel1" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"></svg>
                    <div class="container">
                        <div class="carousel-caption text-allign">
                        <h1>Agora ficou mais fácil</h1>
                        <p>Saiba quanto está ganhando com um simples toque</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <svg class="carrosel2" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"></svg>
                    <div class="container">
                        <div class="carousel-caption text-allign">
                        <h1>Mobilidade</h1>
                        <p>Acesse de onde estiver</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <svg class="carrosel3" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"></svg>
                    <div class="container">
                        <div class="carousel-caption text-allign">
                        <h1>O fim dos papéis</h1>
                        <p>Criamos relatórios perfeitos para você</p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        
    
        <section id="plus" class="plus">
            <div>
                <h1 class="col-12">Faça o teste!</h1>
                <p class="col-10 offset-1">Experimente 30 dias grátis</p>
            </div>
            <a href="login.php" class="btn btn-primary">Experimente!</a>
        </section>
    
        <div id="produto" class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
            <h1 class="display-4">Planos</h1>
            <p class="lead">Escolha o plano certo para a sua necessidade</p>
        </div>
        
        <div class="container">
            <div class="card-deck mb-3 text-center">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Light</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">$0 <small class="text-muted">/ mo</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                        <li>10 users included</li>
                        <li>2 GB of storage</li>
                        <li>Email support</li>
                        <li>Help center access</li>
                        </ul>
                        <button type="button" class="btn btn-lg btn-block btn-primary">Assine Já</button>
                    </div>
                </div>
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Pro</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">$15 <small class="text-muted">/ mo</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                        <li>20 users included</li>
                        <li>10 GB of storage</li>
                        <li>Priority email support</li>
                        <li>Help center access</li>
                        </ul>
                        <button type="button" class="btn btn-lg btn-block btn-primary">Assine Já</button>
                    </div>
                </div>
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Enterprise</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">$29 <small class="text-muted">/ mo</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>30 users included</li>
                            <li>15 GB of storage</li>
                            <li>Phone and email support</li>
                            <li>Help center access</li>
                        </ul>
                        <button type="button" class="btn btn-lg btn-block btn-primary">Assine Já</button>
                    </div>
                </div>
            </div>
        </div>

@endsection



