<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link elevation-4">
      <span class="brand-text font-weight-light">Admin Panel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block">dev</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-header">Ações painel</li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                Voos
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.voos.listar') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.voos.adicionar') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Adicionar</p>
                </a>
              </li>
            </li>
          </ul>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                Destinos
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.destinos.listar') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.destinos.adicionar') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Adicionar</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                Compahia
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav-item nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.compahias.listar') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  Listar
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.compahias.adicionar') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  Adicionar
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.usuarios.listar') }}" class="nav-link">
              <i class="fas fa-circle nav-icon"></i>
              <p>Usuario</p>
            </a>
          </li>
          <li class="nav-header">LABELS</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Important</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>Warning</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Informational</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>