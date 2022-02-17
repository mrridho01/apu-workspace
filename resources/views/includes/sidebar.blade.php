<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #0984e3">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
        <x-application-logo-dashboard/>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('dashboard') }}">
            {{-- <i class="fas fa-fw fa-tachometer-alt"></i> --}}
            <i class="fa-solid fa-house"></i>
            <span class="ml-1">Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    {{-- Progress Section --}}
        <!-- Heading -->
        <div class="sidebar-heading">
            Progress
        </div>

        <!-- Nav Item - Project Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fa-solid fa-screwdriver-wrench"></i>
                <span class="ml-1">Project</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Project Category</h6>
                    <a class="collapse-item" href="buttons.html">DFR</a>
                    <a class="collapse-item" href="cards.html">SPRECON - E</a>
                    <a class="collapse-item" href="cards.html">Service</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - ToDo Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#">
                <i class="fa-solid fa-list-check"></i>
                <span class="ml-1">To - Do</span>
            </a>
        </li>

        <!-- Nav Item - Prospek -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#">
                <i class="fa-solid fa-bullseye"></i>
                <span class="ml-1">Prospek</span>
            </a>
        </li>

        
    {{-- End of Progress Section --}}

    <!-- Divider -->
    <hr class="sidebar-divider">
    
    {{-- Utility --}}
        <!-- Heading -->
        <div class="sidebar-heading">
            Database
        </div>

        <!-- Nav Item - Product -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-fw fa-folder"></i>
                <span>Product</span>
            </a>
            <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Product and Service</h6>
                    <a class="collapse-item" href="login.html">DFR</a>
                    <a class="collapse-item" href="register.html">SPRECON - E</a>
                    <a class="collapse-item" href="404.html">Service</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Drawing -->
        <li class="nav-item">
            <a class="nav-link" href="charts.html">
                <i class="fa-solid fa-scroll"></i>
                <span class="ml-1">Drawing</span></a>
        </li>
    {{-- End of Utility --}}
    
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>