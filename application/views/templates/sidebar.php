<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sidenav shadow-right sidenav-light">
            <div class="sidenav-menu">
                <div class="nav accordion" id="accordionSidenav">
                    <div class="sidenav-menu-heading"></div>
                    <!-- Sidenav Accordion (Dashboard)-->
                    <a class="nav-link <?php echo menuAktif('dashboard') ?>" href="<?= base_url('dashboard') ?>">
                        <div class="nav-link-icon"><i class="fa-solid fa-house"></i></div>
                        Home
                    </a>
                    <?php
                        $seg = $this->uri->segment(1);

                        $activeBaju = '';
                        $colapsedBaju = 'collapsed';
                        $showBaju = '';
                        $activeCelana = '';
                        $colapsedCelana = 'collapsed';
                        $showCelana = '';
                        $activeJaketSweater = '';
                        $colapsedJaketSweater = 'collapsed';
                        $showJaketSweater = '';
                        $activePakaian = '';
                        $colapsedPakaian = 'collapsed';
                        $showPakaian = '';

                        $baju = ['kemeja', 'tshirt'];
                        $celana = ['jeans', 'kargo', 'chinos', 'bahan'];
                        $jaketSweater = ['jaketpria', 'jaketwanita', 'sweater'];
                        $pakaian = ['olahraga', 'pakaianwanita', 'pakaianpria'];

                        if (in_array($seg, $baju)) {
                            $activeBaju = 'active';
                            $colapsedBaju = '';
                            $showBaju = 'show';
                        } elseif (in_array($seg, $celana)) {
                            $activeCelana = 'active';
                            $colapsedCelana = '';
                            $showCelana = 'show';
                        } elseif (in_array($seg, $jaketSweater)) {
                            $activeJaketSweater = 'active';
                            $colapsedJaketSweater = '';
                            $showJaketSweater = 'show';
                        } elseif (in_array($seg, $pakaian)) {
                            $activePakaian = 'active';
                            $colapsedPakaian = '';
                            $showPakaian = 'show';
                        }
                    ?>

                    <!-- Sidenav Heading (Custom)-->
                    <div class="sidenav-menu-heading">Produk</div>
                    <!-- Sidenav Accordion (Pages)-->
                    <a class="nav-link <?= $colapsedBaju ?> <?= $activeBaju ?>" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                        <div class="nav-link-icon"><i class="fa-solid fa-shirt"></i></div>
                        Baju
                        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse <?= $showBaju ?>" id="collapsePages" data-bs-parent="#accordionSidenav">
                        <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPagesMenu">
                            <!-- Nested Sidenav Accordion (Pages -> Account)-->
                            <a class="nav-link <?php echo menuAktif('kemeja') ?>" href="<?= base_url('kemeja') ?>">Kemeja</a>
                            <a class="nav-link <?php echo menuAktif('tshirt') ?>" href="<?= base_url('tshirt') ?>">T-Shirt</a>
                        </nav>
                    </div>

                    <a class="nav-link <?= $colapsedCelana ?> <?= $activeCelana ?>" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseCelana" aria-expanded="false" aria-controls="collapsePages">
                        <div class="nav-link-icon"><i class="fa-classic fa-solid fa-pants"></i></div>
                        Celana
                        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse <?= $showCelana ?>" id="collapseCelana" data-bs-parent="#accordionSidenav">
                        <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPagesMenu">
                            <!-- Nested Sidenav Accordion (Pages -> Account)-->
                            <a class="nav-link <?php echo menuAktif('jeans') ?>" href="<?= base_url('jeans') ?>">Celana Jeans</a>
                            <a class="nav-link <?php echo menuAktif('kargo') ?>" href="<?= base_url('kargo') ?>">Celana Kargo</a>
                            <a class="nav-link <?php echo menuAktif('chinos') ?>" href="<?= base_url('chinos') ?>">Celana Chinos</a>
                            <a class="nav-link <?php echo menuAktif('bahan') ?>" href="<?= base_url('bahan') ?>">Celana Bahan</a>
                        </nav>
                    </div>

                    <a class="nav-link <?= $colapsedJaketSweater ?> <?= $activeJaketSweater ?>" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseJaketSweater" aria-expanded="false" aria-controls="collapsePages">
                        <div class="nav-link-icon"><i class="fa-classic fa-solid fa-vest-patches"></i></div>
                        Jaket / Sweater
                        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse <?= $showJaketSweater ?>" id="collapseJaketSweater" data-bs-parent="#accordionSidenav">
                        <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPagesMenu">
                            <!-- Nested Sidenav Accordion (Pages -> Account)-->
                            <a class="nav-link <?php echo menuAktif('jaketpria') ?>" href="<?= base_url('jaketpria') ?>">Jaket Pria</a>
                            <a class="nav-link <?php echo menuAktif('jaketwanita') ?>" href="<?= base_url('jaketwanita') ?>">Jaket Wanita</a>
                            <a class="nav-link <?php echo menuAktif('sweater') ?>" href="<?= base_url('sweater') ?>">Sweater</a>
                        </nav>
                    </div>

                    <a class="nav-link <?= $colapsedPakaian ?> <?= $activePakaian ?>" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapsePakaian" aria-expanded="false" aria-controls="collapsePages">
                        <div class="nav-link-icon"><i class="fa-classic fa-solid fa-clothes-hanger"></i></div>
                        &nbsp;Pakaian
                        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse <?= $showPakaian ?>" id="collapsePakaian" data-bs-parent="#accordionSidenav">
                        <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPagesMenu">
                            <!-- Nested Sidenav Accordion (Pages -> Account)-->
                            <a class="nav-link <?php echo menuAktif('olahraga') ?>" href="<?= base_url('olahraga') ?>">Pakaian Olahraga</a>
                            <a class="nav-link <?php echo menuAktif('pakaianwanita') ?>" href="<?= base_url('pakaianwanita') ?>">Pakaian Wanita</a>
                            <a class="nav-link <?php echo menuAktif('pakaianpria') ?>" href="<?= base_url('pakaianpria') ?>">Pakaian Pria</a>
                        </nav>
                    </div>

                    <a class="nav-link <?php echo menuAktif('sepatu') ?>" href="<?= base_url('sepatu') ?>">
                        <div class="nav-link-icon"><i class="fa-solid fa-shoe-prints"></i></div>
                        Sepatu
                    </a>
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