<ul class="navbar-nav bg-black bg-gradient sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard">
        <div class="sidebar-brand-icon">
            <img src="{{ asset('img/logo.png') }}" style="width: 60px" alt="">
        </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item @if ($link == "dash")
    active
    @endif">
        <a class="nav-link" href="/dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>


    <li class="nav-item @if ($link == "product")
    active
    @endif">
        <a class="nav-link" href="/dashboard/product">
            <i class="fas fa-box"></i>
            <span>Data Product</span></a>
    </li>

    <!--Pesanan Customer-->
    <li class="nav-item @if ($link == "penjualan")
    active
    @endif">
        <a class="nav-link" href="/dashboard/penjualan">
            <i class="fas fa-hand-holding-usd"></i>
            <span>Data Penjualan</span></a>
    </li>

    <!--Apriori-->
    <li class="nav-item @if ($link == "proses")
    active
    @endif">
        <a class="nav-link" href="/dashboard/proses">
            <i class="fas fa-square-root-alt"></i>
            <span>Data Proses</span></a>
    </li>

    <!-- Nav Item - Charts -->
    <li class="nav-item @if ($link == "hasil")
    active
    @endif">
        <a class="nav-link" href="/dashboard/hasil">
            <i class="fas fa-calculator"></i>
            <span>Data Hasil</span></a>
    </li>

    <li class="nav-item @if ($link == "user")
    active
@endif">
        <a class="nav-link " href="/dashboard/user">
            <i class="fas fa-fw fa-user"></i>
            <span>Dashboard Admin</span></a>
    </li>
    <hr class="sidebar-divider">


    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


</ul>
