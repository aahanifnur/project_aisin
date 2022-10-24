<div id="wrapper">
    <!-- Sidebar #4c60da-->
    <!-- style="background-color: #0000a0 !important;
    border-color: #0000a0;" -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
        <a style="background-color: #0000a0 !important;
    border-color: #0000a0;" class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('user'); ?>">
            <div class="sidebar-brand-icon">
                <img width="100px" height="90px" src="<?= base_url('assets/'); ?>img/logo/aisinnew.png">
            </div>
        </a>
        <hr class="sidebar-divider my-0">
        <li class="nav-item active">
            <a class="nav-link" href="<?= base_url('user'); ?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span class="">Dashboard</span></a>
        </li>
        <hr class="sidebar-divider">
        <div class="sidebar-heading">
            Features
        </div>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap" aria-expanded="true" aria-controls="collapseBootstrap">
                <i class="far fa-fw fa-window-maximize"></i>
                <span>Menu</span>
            </a>
            <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Menu</h6>
                    <a class="collapse-item" href="<?= base_url('user'); ?>">Izin Pekerjaan Khusus</a>
                    <a class="collapse-item" href="alerts.html">Contractor Patrol</a>
                </div>
            </div>
        </li>
        <hr class="sidebar-divider">
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>Buat IPK</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Izin Pekerjaan Khusus</h6>
                    <a class="collapse-item" href="<?= base_url('user/hpw_c'); ?>">High Place Work</a>
                    <a class="collapse-item" href="<?= base_url('user/cs_c'); ?>">Confined Space</a>
                    <a class="collapse-item" href="<?= base_url('user/hw_c'); ?>">Hot Work</a>
                    <a class="collapse-item" href="<?= base_url('user/g_c'); ?>">General</a>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Addons
        </div>

        <li class="nav-item">
            <a class="nav-link" href="javascript:void(0);" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-sign-out-alt fa-fw"></i>
                <span>Logout</span>
            </a>
        </li>

        <hr class="sidebar-divider">
        <div class="version" id="">Version 1.1 2022</div>
    </ul>
    <!-- Sidebar -->