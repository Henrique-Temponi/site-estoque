<html>
    <head>
        <title>Nao Trivago</title>
        <link rel="stylesheet" href="{{ asset('css/materialize.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    <body>

    <nav>
        <div class="nav-wrapper blue">

            <div class="container">
                <a href="{{ route('site.home') }}" class="brand-logo">MaxVoos</a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    
                    @if (Auth::guest())
                        <li><a href="{{ route('site.login') }}">Fazer Log-in</a></li>
                        <li><a href="{{ route('site.registrar') }}">Regisrar-se</a></li>
                    @else
                        <li><a href="{{ route('site.home') }}">Todos os voos</a></li>
                        <li><a href="#" class="dropdown-trigger" data-target="dropdown1">Bem vindo, {{ Auth::user()->name }}</a></li>
                    @endif
                    
                    <ul id="dropdown1" class="dropdown-content">
                        <li><a href="{{ route('usuario.voos') }}">Meus Voos</a></li>
                        <li class="divider"></li>
                        <li><a href="{{ route('site.logout') }}">Sair</a></li>
                    </ul>

                </ul>
            </div>
        </div>
    </nav>

    @if(Session::has('msg'))
    <div class="container">
        <div class="row">
            <div align="center" class="card-panel {{ Session::get('msg')['class'] }}">
                <span class="white-text">
                    {{ Session::get('msg')['mensagem'] }}
                </span>
            </div>
        </div>
    </div>
    @endif

    <div class="container">
        @yield('conteudo')
    </div>


    <ul class="sidenav" id="mobile-demo">
        @if (Auth::guest())
            <li><a href="{{ route('site.login') }}">Entrar</a></li>
            <li><a href="{{ route('site.registrar') }}">Regisrar-se</a></li>
        @else
            <li><a href="{{ route('site.novo') }}">Novo</a></li>
            <li><a href="{{ route('site.listar') }}">Listar</a></li>
            <li><a href="{{ route('site.logout') }}">Sair</a></li>
        @endif
    </ul>

        <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
        <script src="{{ asset('js/materialize.min.js') }}"></script>
        <script src="{{ asset('js/init.js') }}"></script>
    </body>
</html>