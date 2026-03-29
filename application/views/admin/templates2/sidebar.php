  <body>
    <div class="wrapper">
      <!-- Sidebar -->
      <div class="sidebar" data-background-color="dark">
        <div class="sidebar-logo">
          <!-- Logo Header -->
          <div class="logo-header" data-background-color="dark">
            <a href="<?php echo base_url(); ?>assets/backend/index.html" class="logo">
              <img
                src="<?php echo base_url(); ?>assets/backend/assets/img/kaiadmin/logo_light.svg"
                alt="navbar brand"
                class="navbar-brand"
                height="20"
              />
            </a>
            <div class="nav-toggle">
              <button class="btn btn-toggle toggle-sidebar">
                <i class="gg-menu-right"></i>
              </button>
              <button class="btn btn-toggle sidenav-toggler">
                <i class="gg-menu-left"></i>
              </button>
            </div>
            <button class="topbar-toggler more">
              <i class="gg-more-vertical-alt"></i>
            </button>
          </div>
          <!-- End Logo Header -->
        </div>
        <div class="sidebar-wrapper scrollbar scrollbar-inner">
          <div class="sidebar-content">
            <ul class="nav nav-secondary">
                <li class="nav-item <?php echo menuAktif('produk') ?>">
                    <a href="<?php echo base_url(); ?>admin/produk">
                    <i class="fas fa-layer-group"></i>
                    <p>Produk</p>
                    </a>
                </li>

                <li class="nav-item <?php echo menuAktif('user') ?>">
                    <a href="<?php echo base_url(); ?>admin/user">
                    <i class="fas fa-user"></i>
                    <p>User</p>
                    </a>
                </li>

                <li class="nav-item <?php echo menuAktif('invoice') ?>">
                    <a href="<?php echo base_url(); ?>admin/invoice">
                    <i class="fas fa-file-invoice"></i>
                    <p>Pembelian</p>
                    </a>
                </li>

                <li class="nav-item <?php echo menuAktif('payment') ?>">
                    <a href="<?php echo base_url(); ?>admin/payment">
                    <i class="fas fa-credit-card"></i>
                    <p>Metode Pembayaran</p>
                    </a>
                </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- End Sidebar -->