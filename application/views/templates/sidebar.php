<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion sidebar-bar" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center brand-fix" href="<?php echo base_url()?>dashboard">
                <div class="logo">
                    <img src="<?php echo base_url() ?>assets/img/logo.png" width="50px">
                </div>
                <div class="sidebar-brand-text mx-3 title-logo">MEDIA DATA COMPUTER</div>
                <hr>
            </a>

            <div class="navbar-fix" style="margin-top: 70px">

                <!-- Nav Item - Dashboard -->
                <div class="navbar-content">
                    <li class="nav-item <?php echo menuAktif('dashboard') ?>">

                        <a class="nav-link" href="<?php echo base_url()?>dashboard">
                            <i class="fa-solid fa-house"></i>
                            <span>Home</span></a>
                    </li>

                    <!-- Heading -->
                    <div class="sidebar-heading-s">
                        PRODUK :
                    </div>

                    
                    <!-- Nav Item - Charts -->
                    <li class="nav-item <?php echo menuAktif('kemeja') ?>">
                        <a class="nav-link d-flex align-items-center" href="<?php echo base_url()?>kemeja">
                            <iconify-icon icon="uil:angle-double-right"></iconify-icon>
                            <span>KEMEJA</span></a>
                    </li>

                    <li class="nav-item <?php echo menuAktif('kaos') ?>">
                        <a class="nav-link d-flex align-items-center" href="<?php echo base_url()?>kaos">
                            <iconify-icon icon="uil:angle-double-right"></iconify-icon>
                            <span>KAOS</span></a>
                    </li>

                    <li class="nav-item <?php echo menuAktif('jaket') ?>">
                        <a class="nav-link d-flex align-items-center" href="<?php echo base_url()?>jaket">
                            <iconify-icon icon="uil:angle-double-right"></iconify-icon>
                            <span>JAKET</span></a>
                    </li>

                    <li class="nav-item <?php echo menuAktif('sweater') ?>">
                        <a class="nav-link d-flex align-items-center" href="<?php echo base_url()?>sweater">
                            <iconify-icon icon="uil:angle-double-right"></iconify-icon>
                            <span>SWEATER</span></a>
                    </li>

                    <!-- Nav Item - Tables -->
                    <li class="nav-item <?php echo menuAktif('aksesoris') ?>">
                        <a class="nav-link d-flex align-items-center" href="<?php echo base_url()?>aksesoris">
                            <iconify-icon icon="uil:angle-double-right"></iconify-icon>
                            <span>AKSESORIS</span></a>
                    </li>

                    <!-- Divider -->
                </div>

                <!-- Sidebar Toggler (Sidebar) -->
                <div class="sidebar-toggler box-toglsdb">
                    <div class="text-center">
                        <button class="rounded-circle border-0" id="sidebarToggle"></button>
                    </div>
                </div>
            </div>
        </ul>