<ul class="navbar-nav  sidebar sidebar-dark accordion" id="accordionSidebar" style="background:black">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Ecommerce</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span style="font-weight:bold">CategorieS</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-dark py-2 collapse-inner rounded">
                {{-- <h6 class="collapse-header">Custom Components:</h6> --}}
                <a class="collapse-item text-white" href="{{route('categorie.index')}}" id="sidenav_item">Categorie</a>
                <a class="collapse-item text-white" href="" id="sidenav_item">Sub Categorie</a>
                <a class="collapse-item text-white" href="" id="sidenav_item">Child Categorie</a>
                <a class="collapse-item text-white" href="" id="sidenav_item">Brand</a>
            </div>
        </div>
    </li>
    <!-- Divider -->
    {{-- <hr class="sidebar-divider"> --}}


    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="">
            <i class="fas fa-fw fa-cog"></i>
            {{-- <i class="fas fa-fw fa-chart-area"></i> --}}
            <span>Settings</span></a>
    </li>
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>