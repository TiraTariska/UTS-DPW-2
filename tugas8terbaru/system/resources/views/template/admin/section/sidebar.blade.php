<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->


    <!-- Sidebar -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{url('public')}}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Tira Admin</span>
    </a>

        <!-- SidebarSearch Form -->


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->

                <li class="nav-item">
                    <a href="{{ url('admin/dashboard') }}" class="nav-link">
                        <p>Dashboard </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('admin/article') }}" class="nav-link">
                        <p>Articles</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('admin/user') }}" class="nav-link ">
                        <p>Users</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('admin/coment') }}" class="nav-link ">
                        <p>Comments</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('home') }}" class="nav-link ">
                        <p>Go to Blogs</p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
