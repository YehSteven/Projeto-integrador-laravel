<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- CDN FontAweomse -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Nosso estilo -->
    <link rel="stylesheet" href="{{ asset('css/cadastro.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contato.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="workdesk/public/css/css/estilo.css">
</head>

<body>
    <div id="app">

        @guest
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="/#top">
                <span>Workdesk</span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/#top" title="Acessar início">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/#myCarousel">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/#produto">Planos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contato">Contato</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Cadastrar') }}</a>
                    </li>
                    @endif
                </ul>
            </div>
        </nav>
        @else
        <header>
            <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="/">
                    <span>Workdesk</span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">

                    <!-- header da área logada -->

                    <ul class="navbar-nav ml-auto">
                        <!-- <li class="nav-item active">
                            <a class="nav-link" href="/meusDados">Meus dados</a>
                        </li> -->
                        <li class="nav-item active">
                            <a class="nav-link" href="/cadastros">Cadastros</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="/pedidos">Pedidos</a>
                        </li>
                        <!-- <li class="nav-item active">
                            <a class="nav-link" href="/dashboard">Relatórios</a>
                        </li> -->
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        <!-- <li class="nav-item active">
                            <a class="nav-link" href="dashboard">Painel De Controle</a>
                        </li> -->
                    </ul>
                </div>
            </nav>
        </header>
        @endguest

        <main class="py-4">
            @yield('content')
        </main>

        <footer id="contato" class="bg-dark container-fluid">
            <div style="margin-right: 0;" class="icons pt-5 row d-flex justify-content-center">
                <a href="https://twitter.com" title="Twitter" target="_blank"><i class="fab fa-twitter mx-3"></i></a>
                <a href="https://facebook.com" title="Facebook" target="_blank"><i
                        class="fab fa-facebook-square mx-3"></i></a>
                <a href="https://instagram.com" title="Instagram" target="_blank"><i
                        class="fab fa-instagram mx-3"></i></a>
                <div class="col-md-4">
                    <dl class="contact-list">
                        <dt>Endereço:</dt>
                        <dd>Av.Santo Amaro 213</dd>
                    </dl>
                    <dl class="contact-list">
                        <dt>Email:</dt>
                        <dd><a href="mailto:#">workdesk@gmail.com</a></dd>
                    </dl>
                    <dl class="contact-list">
                        <dt>Telefone:</dt>
                        <dd><a href="tel:#">(11)98181-0321</a>
                        </dd>
                    </dl>
                </div>
                <div class="col-md-4 col-xl-3">

                <ul class="nav-list">
                    <li><a href="/">Home</a></li>
                    <li><a href="login">Login</a></li>
                    <li><a href="register">Cadastro</a></li>
                    <li><a href="contato">Contato</a></li>
                </ul>

                </div>
                <span class="copy col-12 my-3"> Copyright &copy; Workdesk</span>
            </div>
        </footer>

        <!-- Icons -->
        <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
        <script>
            feather.replace()

        </script>

        <!-- Graphs -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
        <script>
            var ctx = document.getElementById("myChart");
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
                    datasets: [{
                        data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
                        lineTension: 0,
                        backgroundColor: 'transparent',
                        borderColor: '#007bff',
                        borderWidth: 4,
                        pointBackgroundColor: '#007bff'
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: false
                            }
                        }]
                    },
                    legend: {
                        display: false,
                    }
                }
            });

        </script>

</body>

</html>
