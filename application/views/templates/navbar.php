    <body class="nav-fixed">
        <nav class="topnav navbar navbar-expand shadow justify-content-between justify-content-sm-start navbar-light bg-white" id="sidenavAccordion">
            <!-- Sidenav Toggle Button-->
            <button class="btn btn-icon btn-transparent-dark order-1 order-lg-0 me-2 ms-lg-2 me-lg-0" id="sidebarToggle"><i data-feather="menu"></i></button>
            <!-- Navbar Brand-->
            <!-- * * Tip * * You can use text or an image for your navbar brand.-->
            <!-- * * * * * * When using an image, we recommend the SVG format.-->
            <!-- * * * * * * Dimensions: Maximum height: 32px, maximum width: 240px-->
            <a class="navbar-brand pe-3 ps-4 ps-lg-2" href="index.html">MONDAN SHOP</a>
            <!-- Navbar Search Input-->
            <!-- * * Note: * * Visible only on and above the lg breakpoint-->
            <form class="form-inline me-auto d-none d-lg-block me-3" action="<?php echo base_url('dashboard/search') ?>" method="post">
                <div class="input-group input-group-joined input-group-solid">
                    <input class="form-control pe-0" type="text" name="keyword" value="<?php echo set_value('keyword'); ?>" placeholder="Search" aria-label="Search" />
                    <div class="input-group-text">
                        <button type="submit" style="border: none;"><i data-feather="search"></i></button>
                    </div>
                </div>
            </form>
            <!-- Navbar Items-->
             <?php if ($this->session->userdata('username')!=null) { ?>
                <ul class="navbar-nav align-items-center ms-auto">
                    <!-- * * Note: * * Visible only below the lg breakpoint-->
                    <li class="nav-item dropdown no-caret me-3 d-lg-none">
                        <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="searchDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="search"></i></a>
                        <!-- Dropdown - Search-->
                        <div class="dropdown-menu dropdown-menu-end p-3 shadow animated--fade-in-up" aria-labelledby="searchDropdown">
                            <form class="form-inline me-auto w-100" action="<?php echo base_url('dashboard/search') ?>">
                                <div class="input-group input-group-joined input-group-solid">
                                    <input class="form-control pe-0" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                                    <div class="input-group-text" type="submit"><i data-feather="search"></i></div>
                                </div>
                            </form>
                        </div>
                    </li>
                    <!-- Alerts Dropdown-->
                    <li class="nav-item dropdown no-caret d-sm-block dropdown-notifications">
                        <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownAlerts" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="icon-navbar" style="    position: relative; display: inline-block;">
                                <iconify-icon icon="bxs:shopping-bags" class="icon-cart" style="font-size: 20px;"></iconify-icon>
                                <span class="badge-cart" style="
                                                                position: absolute;
                                                                top: -4px;
                                                                right: -2px;
                                                                background: red;
                                                                color: white;
                                                                font-size: 10px;
                                                                padding: 4px;
                                                                border-radius: 50px;
                                                                line-height: 1;">
                                    <?php echo $this->cart->total_items() ?>
                                </span>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownAlerts">
                            <h6 class="dropdown-header dropdown-notifications-header">
                                <iconify-icon icon="bxs:shopping-bags" class="icon-cart"></iconify-icon>&nbsp;
                                Keranjang
                            </h6>
                            <?php foreach ($this ->cart->contents() as $items) : ?>
                                <a class="dropdown-item d-flex align-items-center" href="<?php echo base_url()?>dashboard/detail_keranjang">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <img class="ml-1" src="<?php echo base_url() ?>assets/uploads/<?php echo $items['gambar'] ?>" width="60" class="mr-3">
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">Rp <?php echo number_format($items['price'],0,',','.')  ?> x <?php echo $items['qty'] ?></div>
                                        <span class="font-weight-bold"><?php echo character_limiter($items['name'], 45) ?></span>
                                    </div>
                                </a>
                            <?php endforeach; ?>
                            <a class="dropdown-item text-center small text-gray-500" href="<?php echo base_url()?>dashboard/detail_keranjang">Tampilkan Semua Data Keranjang</a>
                        </div>
                    </li>
                    <!-- Messages Dropdown-->
                    <li class="nav-item dropdown no-caret d-sm-block me-3 dropdown-notifications">
                        <a class="nav-link dropdown-toggle" href="<?php echo base_url() ?>invoice" >
                            <iconify-icon icon="mdi:invoice-check" width="20" height="20"></iconify-icon>
                        </a>
                    </li>
                    <!-- User Dropdown-->
                    <li class="nav-item dropdown no-caret dropdown-user me-3 me-lg-4">
                        <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownUserImage" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="img-fluid" src="<?= base_url('assets/frontend/') ?>assets/img/illustrations/profiles/profile-1.png" /></a>
                        <div class="dropdown-menu dropdown-menu-end border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownUserImage">
                            <h6 class="dropdown-header d-flex align-items-center">
                                <img class="dropdown-user-img" src="<?= base_url('assets/frontend/') ?>assets/img/illustrations/profiles/profile-1.png" />
                                <div class="dropdown-user-details">
                                    <div class="dropdown-user-details-name"><?php echo $this->session->userdata('nama_user') ?></div>
                                </div>
                            </h6>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#!">
                                <div class="dropdown-item-icon"><i data-feather="settings"></i></div>
                                Account
                            </a>
                            <a class="dropdown-item" href="#!">
                                <div class="dropdown-item-icon"><i data-feather="log-out"></i></div>
                                Logout
                            </a>
                        </div>
                    </li>
                </ul>
             <?php  }else { ?>
                <ul class="navbar-nav align-items-center ms-auto">
                    <li><a class="btn btn-primary me-4" href="<?php echo base_url()?>auth/login"><i class="fas fa-sign-in-alt me-1"></i>Login</a></li>
                </ul>
             <?php } ?>
        </nav>