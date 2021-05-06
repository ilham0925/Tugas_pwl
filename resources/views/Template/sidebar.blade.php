<aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
        <img src="{{asset('gambar/gambar2.jpg')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
            <img src="{{asset('gambar/gambar1.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
            <a href="#" class="d-block">{{auth()->user()->name}}</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
                </button>
            </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-users "></i>
                <p>
                    Data User
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
        
                <li class="nav-item">
                    <a href="{{route('data-user')}}" class="nav-link">
                    <i class="fas fa-layer-group nav-icon"></i>
                    <p>User</p>
                    </a>
                </li>
                </ul>
            </li>


            <li class="nav-item menu-open">
                <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Pengelolaan Barang
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                @if (auth()->user()->level=="user")
                <li class="nav-item">
                    <a href="{{route('create-product')}}" class="nav-link active">
                    <i class="fas fa-align-justify nav-icon"></i>
                    <p>Input Data Barang</p>
                    </a>
                </li>
                @endif
        
                <li class="nav-item">
                    <a href="{{route('data-product')}}" class="nav-link">
                    <i class="fas fa-align-center nav-icon"></i>
                    <p>Data Barang</p>
                    </a>
                </li>
                </ul>
            </li>

            <li class="nav-item menu-open">
                <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-align-left"></i>
                <p>
                    Categorie Barang
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
        
                <li class="nav-item">
                    <a href="{{route('data-categorie')}}" class="nav-link">
                    <i class="fa fa-border-all nav-icon"></i>
                    <p>Categorie</p>
                    </a>
                </li>
                </ul>
            </li>



            <li class="nav-item menu-open">
                <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-border-all"></i>
                <p>
                    Brand Barang
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
        
                <li class="nav-item">
                    <a href="{{route('data-brand')}}" class="nav-link">
                    <i class="fas fa-random nav-icon"></i>
                    <p>Brand</p>
                    </a>
                </li>
                </ul>
            </li>


            <li class="nav-item menu-open">
                <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-hotel"></i>
                <p>
                    Laporan
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
        
                <li class="nav-item">
                    <a href="{{route('data-masuk')}}" class="nav-link">
                    <i class="fas fa-flag nav-icon"></i>
                    <p>Laporan masuk</p>
                    </a>
                </li>
                </ul>
            </li>

            
            


            <li class="nav-item">
                <a href="{{route('logout')}}" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                    Logout
                    
                </p>
                </a>
            </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>