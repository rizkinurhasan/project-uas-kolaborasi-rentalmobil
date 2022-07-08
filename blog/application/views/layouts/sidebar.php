<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="<?php echo base_url('dist/img/AdminLTELogo.png') ?>" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Rental Mobil</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar d-flex" id="wrapper">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo base_url('dist/img/user2-160x160.jpg') ?>" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Admin</a>
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
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="<?php echo base_url('index.php/jenisperawatan/index') ?>" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Jenis Perawatan</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('index.php/merk/index') ?>" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Merk</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('index.php/mobil/index') ?>" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Mobil</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('index.php/perawatan/index') ?>" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Perawatan</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('index.php/sewa/index') ?>" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Sewa</p>
                    </a>
                </li>

                </li>

            </ul>
        </nav>
    </div>
</aside>