        <!-- Sidebar -->
        
        <ul class="navbar-nav bg-masthead sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <!-- icon -->
                    <i class="fas fa-user"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Selamat Datang</div>
            </a>

            <?php if (in_groups('admin')) : ?>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Divider -->
            <hr class="sidebar-divider">

            <div class="sidebar-heading">
                User Management
            </div>

            <!-- Nav Item - UserList -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('admin/index'); ?>">
                    <i class="fas fa-users"></i>
                    <span>User List</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            </li>

        <?php endif; ?>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Profilku
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('pages/about'); ?>">
                <i class="fas fa-house-user"></i>
                <span>About</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('user'); ?>">
                <i class="fas fa-id-badge"></i>
                <span>Profil</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        </li>

        <?php if (in_groups('admin')) : ?>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
            <a class="nav-link" href="<?= base_url('pages/data_uji'); ?>">
                    <i class="fas fa-book-medical"></i>
                    <span>Data Uji</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-head-side-virus"></i>
                    <span>Gangguan</span>
                    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item" href="utilities-color.html">Data Gangguan</a>
                            <a class="collapse-item" href="utilities-border.html">Data Basis Gangguan</a>
                        </div>
                    </div>
                </a>
            </li>

        <?php endif; ?>
        
        <li class="nav-item">
            <a class="nav-link" href="charts.html">
                <i class="fas fa-history"></i>
                <span>Konsultasi</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        </li>

        <li class="nav-item">
            <a class="nav-link" href="charts.html">
                <i class="fas fa-history"></i>
                <span>Riwayat Pasien</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        </li>

        <!-- Nav Item - Charts -->
        <li class="nav-item">
            <a class="nav-link" href="charts.html">
                <i class="fas fa-comments"></i>
                <span>Kritik dan Saran</span></a>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('logout'); ?>">
                <i class="fas fa-sign-out-alt"></i>
                <span>LogOut</span></a>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

        </ul>
        <!-- End of Sidebar -->