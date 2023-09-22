<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html"> <img alt="image" src="/admin/assets/img/logo.png" class="header-logo" /> <span
                class="logo-name">Otika</span>
            </a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown active">
                <a href="index.html" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>
            <li class="dropdown">
                <a href="{{ route('admin.users.index') }}" class="menu-toggle nav-link"><i
                    data-feather="briefcase"></i><span>Users</span></a>
            </li>
            <li class="dropdown">
                <a href="{{ route('admin.phones.index') }}" class="menu-toggle nav-link"><i
                    data-feather="briefcase"></i><span>Phones</span></a>
                {{-- <ul class="dropdown-menu">
                    <li><a class="nav-link" href="widget-chart.html">Chart Widgets</a></li>
                    <li><a class="nav-link" href="widget-data.html">Data Widgets</a></li>
                </ul> --}}
            </li>
            <li class="dropdown">
                <a href="{{ route('admin.categories.index') }}" class="menu-toggle nav-link"><i
                    data-feather="briefcase"></i><span>Categories</span></a>
            </li>
            <li class="dropdown">
                <a href="{{ route('admin.posts.index') }}" class="menu-toggle nav-link"><i
                    data-feather="briefcase"></i><span>Posts</span>
                </a>
            </li>
            <li class="dropdown">
                <a href="{{ route('admin.services.index') }}" class="menu-toggle nav-link"><i
                    data-feather="briefcase"></i><span>Services</span>
                </a>
            </li>
        </ul>
    </aside>
</div>
