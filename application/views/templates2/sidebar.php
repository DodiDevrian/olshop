<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sidenav shadow-right sidenav-light">
            <div class="sidenav-menu">
                <div class="nav accordion" id="accordionSidenav">
                    <div class="sidenav-menu-heading"></div>
                    <!-- Sidenav Accordion (Dashboard)-->
                     <a class="nav-link active" href="<?= base_url('dashboard') ?>">
                        <div class="nav-link-icon"><i class="fa-solid fa-house"></i></div>
                        Home
                    </a>

                    <!-- Sidenav Heading (Custom)-->
                    <div class="sidenav-menu-heading">Produk</div>
                    <!-- Sidenav Accordion (Pages)-->
                    <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                        <div class="nav-link-icon"><i class="fas fa-shirt"></i></div>
                        Baju
                        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapsePages" data-bs-parent="#accordionSidenav">
                        <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPagesMenu">
                            <!-- Nested Sidenav Accordion (Pages -> Account)-->
                            <a class="nav-link <?php echo menuAktif('kemeja') ?>" href="<?= base_url('kemeja') ?>">Kemeja</a>
                            <a class="nav-link <?php echo menuAktif('tshirt') ?>" href="<?= base_url('tshirt') ?>">T-Shirt</a>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Sidenav Footer-->
            <div class="sidenav-footer">
                <div class="sidenav-footer-content">
                    <div class="sidenav-footer-subtitle">Logged in as:</div>
                    <div class="sidenav-footer-title"><?php echo $this->session->userdata('nama_user') ?></div>
                </div>
            </div>
        </nav>
    </div>
    <div id="layoutSidenav_content">