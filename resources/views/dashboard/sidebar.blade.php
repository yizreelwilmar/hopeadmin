<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset('assets/dist/img/Hope_Channel.png') }}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="{{route('dashboard')}}" class="d-block"><b>Hope</b>Admin</a>
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <!-- <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div> -->

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
             
        <li class="nav-item {{ Request::is('*dashboard*') ? 'menu-open' : ''  }}">
          <!-- <a href="#" class="nav-link ">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Menu
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            </ul> -->
            
            @if (auth()->user()->level=="admin")
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                <span>Administrator</span>
            </h6>
            <li class="nav-item">
              <a href="{{ route('crud') }}" class="nav-link {{ Request::is('crud') ? 'active' : ''  }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Data User Permintaan Doa</p>
              </a>
            </li>
            @endif
            @if (auth()->user()->level=="user")
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                <span>Produksi</span>
            </h6>
            <!-- <li class="nav-item">
              <a href="{{route('dashboard')}}" class="nav-link {{ Request::is('*dashboard') ? 'active' : ''  }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Dashboard</p>
              </a>
            </li> -->
            <li class="nav-item">
            <a href="{{ route('doahariini') }}" class="nav-link {{ Request::is('*doahariini') ? 'active' : ''  }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Doa Hari Ini</p>
              </a>
            </li>
            <!-- <li class="nav-item">
            <a href="{{ route('calendartalent') }}" class="nav-link {{ Request::is('*calendartalent') ? 'active' : ''  }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Calendar Talent</p>
              </a>
            </li> -->
            @endif
            @if (auth()->user()->level=="admin")
            
            <li class="nav-item">
              <a href="{{ route('talent') }}" class="nav-link {{ Request::is('*talent') ? 'active' : ''  }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Talent</p>
              </a>
            </li>
            @endif

            @if (auth()->user()->level=="admin")
            
            <li class="nav-item">
              <a href="{{ route('permintaancrud') }}" class="nav-link {{ Request::is('*permintaancrud') ? 'active' : ''  }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Permintaan Doa</p>
              </a>
            </li>
            @endif
          


          @if (auth()->user()->level=="superadmin")
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                <span>Super Admin</span>
            </h6>
            <li class="nav-item">
            <a href="{{ route('user') }}" class="nav-link {{ Request::is('*user') ? 'active' : ''  }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Users</p>
              </a>
              </li>
              <li class="nav-item">
              <a href="{{ route('permintaancrud') }}" class="nav-link {{ Request::is('*permintaancrud') ? 'active' : ''  }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Permintaan Doa</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('talent') }}" class="nav-link {{ Request::is('*talent') ? 'active' : ''  }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Talent</p>
              </a>
            </li>
            <li class="nav-item">
            <a href="{{ route('doahariini') }}" class="nav-link {{ Request::is('*doahariini') ? 'active' : ''  }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Doa Hari Ini</p>
              </a>
            </li>
            @endif

          @if (auth()->user()->level=="guest")
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                <span>Guest</span>
            </h6>
            <li class="nav-item">
            <a href="{{ route('guest') }}" class="nav-link {{ Request::is('*guest') ? 'active' : ''  }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Doa Hari Ini</p>
              </a>
              </li>
            @endif
        </li>
      </ul>
    </nav>

    
    <!-- /.sidebar-menu -->
  </div>