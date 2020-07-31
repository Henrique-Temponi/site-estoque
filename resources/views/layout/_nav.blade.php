<nav class="navbar navbar-expand navbar-primary navbar-dark">
    <!-- Left navbar links -->
    <div class="container">
        <ul class="navbar-nav">
        <!-- <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li> -->
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('site.home') }}" class="nav-link">Home</a>
        </li>
        </ul>
        <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      @if(Auth::guest())
        <li class="nav-item d-none d-sm-inline-block">
            <a class="nav-link" href="{{ route('site.login') }}">Fazer login</a>
        </li>

        <li class="nav-item d-none d-sm-inline-block">
            <a class="nav-link" href="{{ route('site.registrar') }}">Registrar-se</a>
        </li>
      @else
        <li class="nav-item d-none d-sm-inline-block">
            <a class="nav-link" href="#">Bem vindo, {{Auth::user()->name}}</a>
        </li>
        @if(Auth::user()->admin)
            <li class="nav-item d-none d-sm-inline-block">
                <a class="nav-link" href="{{ route('admin.index') }}">Painel admin</a>
            </li>
        @endif
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="fas fa-bars"></i>
            <!-- <span class="badge badge-danger navbar-badge">3</span> -->
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <a href="{{ route('usuario.voos') }}" class="dropdown-item">
                    <i class="fas fa-plane"></i> Meus voos
                </a>
                <a href="{{ route('site.logout') }}" class="dropdown-item">
                    <i class="fas fa-sign-out-alt"></i> Sair
                </a>
            </div>
      </li>
      @endif
    </ul>
    </div>
    
    <!-- <form class="form-inline ml-3">
    <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
        <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
        </button>
        </div>
    </div>
    </form> -->
</nav>