<style>.nav-item:focus{color: black!important;}</style>
<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color:white;">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon">
            <img src="{{asset('images/bg-logo.png')}}" width="100%" style="height: 4.375rem;">
        </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li <?php if ($page == 'Dashboard') echo 'class="nav-item active"';else echo 'class="nav-item"'; ?>>
        <a class="nav-link" href="{{url('home')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Nav Item - Pages Collapse Menu -->
    <li <?php if ($page == 'Users') echo 'class="nav-item active"';else echo 'class="nav-item"'; ?>>
        <a class="nav-link" href="{{url('home/users')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Users List</span></a>
    </li>
    <!-- Nav Item - Pages Collapse Menu -->
    <li <?php if ($page == 'Salers') echo 'class="nav-item active"';else echo 'class="nav-item"'; ?>>
        <a class="nav-link" href="{{url('home/salers')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Salers</span></a>
    </li>
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Payments</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{url('home/payments')}}">Payments</a>
            </div>
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{url('home/payments/history')}}">Payments History</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
