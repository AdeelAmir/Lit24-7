
<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color:white;">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon">
            <img src="{{asset('logo/logo2.png')}}" width="100%">
        </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li <?php if ($page == 'Dashboard') echo 'class="nav-item active"';else echo 'class="nav-item"'; ?>>
        <a class="nav-link" href="{{url('admin/dashboard')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Nav Item - Pages Collapse Menu -->
    <li <?php if ($page == 'Survey Records') echo 'class="nav-item active"';else echo 'class="nav-item"'; ?>>
        <a class="nav-link" href="{{url('admin/surveyRecords')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Survey Records</span></a>
    </li>
    <li <?php if ($page == 'Antique Maps') echo 'class="nav-item active"';else echo 'class="nav-item"'; ?>>
        <a class="nav-link" href="{{url('admin/antiqueMaps')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Antique Maps</span></a>
    </li>
    <li <?php if ($page == 'Geolearn') echo 'class="nav-item active"';else echo 'class="nav-item"'; ?>>
        <a class="nav-link" href="{{url('admin/geolearn')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Geolearn</span></a>
    </li>

    
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{url('pages/contactUs')}}">Contact Us</a>
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
