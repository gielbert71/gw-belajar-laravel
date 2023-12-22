<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="index3.html" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>


    <div class="sidebar">

        @auth
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ auth()->user()->name }}</a>
            </div>
        </div>
        @endauth

        @guest
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="{{route('login')}}" class="d-block">Guest</a>
            </div>
        </div>

        @endguest

        <div class="form-inline">
            <form action="{{route('crud')}}" method="get">
                <div class="input-group">

                    <input class="form-control form-control-sidebar" type="text" name="query" placeholder="Cari produk..." aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-sidebar" type="submit" value="Search">
                            <i class="fas fa-search fa-fw"></i>
                        </button>

            </form>
        </div>
    </div>
    </div>
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item menu-open">
                <a href="#" class="nav-link active">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Pages
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('dashboard')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    
                    <li class="nav-item">
                        <a href="{{route('crud')}}" class="nav-link active">
                            <i class="far fa-circle nav-icon"></i>
                            <p>CRUD Products</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('chart')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Charts</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        @guest
                        <a href="{{route('login')}}" class="nav-link">
                            <i class="far fas fa-sign-in-alt nav-icon"></i>
                            <p>Login</p>
                        </a>
                        @endguest
                        @auth
                        <form action="{{route('logout')}}" method="post">
                            @csrf
                            <a href="{{route('logout')}}" onclick="event.preventDefault();
                                        this.closest('form').submit();" class="nav-link"><i class="fas far fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400 nav-icon"></i><p>Logout</p></a>
                        </form>
                        @endauth
                    </li>
                </ul>
            </li>

        </ul>
    </nav>

    </div>

</aside>