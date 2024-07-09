<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
          <div class="search-element">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
            <div class="search-backdrop"></div>
            <div class="search-result">
              <div class="search-header">
                Histories
              </div>
              <div class="search-item">
                <a href="#">How to hack NASA using CSS</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-item">
                <a href="#">Kodinger.com</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-item">
                <a href="#">#Stisla</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-header">
                Result
              </div>
              <div class="search-item">
                <a href="#">
                  <img class="mr-3 rounded" width="30" src="../assets/img/products/product-3-50.png" alt="product">
                  oPhone S9 Limited Edition
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <img class="mr-3 rounded" width="30" src="../assets/img/products/product-2-50.png" alt="product">
                  Drone X2 New Gen-7
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <img class="mr-3 rounded" width="30" src="../assets/img/products/product-1-50.png" alt="product">
                  Headphone Blitz
                </a>
              </div>
              <div class="search-header">
                Projects
              </div>
              <div class="search-item">
                <a href="#">
                  <div class="search-icon bg-danger text-white mr-3">
                    <i class="fas fa-code"></i>
                  </div>
                  Stisla Admin Template
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <div class="search-icon bg-primary text-white mr-3">
                    <i class="fas fa-laptop"></i>
                  </div>
                  Create a new Homepage Design
                </a>
              </div>
            </div>
          </div>
        </form>
        <ul class="navbar-nav navbar-right">
          
          <li class="dropdown"><a href="#" class="nav-link nav-link-lg nav-link-user">
          
            <div class="d-sm-none d-lg-inline-block">Welcome <?php echo $this->session->userdata('nama') ?></div></a>

          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
           <img class="navbar-brand" src="<?php echo base_url('assets'); ?> /logo/ptpc.png" style="width:100px;height:100px;">
          </div>
          <br><br><span></span><br>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
          </div>
          <ul class="sidebar-menu">
            <li class="<?php echo ($this->uri->segment(2) == 'dashboard') ? 'active' : ''; ?>">
                <a class="nav-link" href="<?php echo base_url('admin/dashboard') ?>">
                    <i class="fas fa-tachometer-alt"></i> <span>Dashboard</span>
                </a>
            </li>

            <li class="<?php echo ($this->uri->segment(2) == 'data_properti') ? 'active' : ''; ?>">
                <a class="nav-link" href="<?php echo base_url('admin/data_properti') ?>">
                    <i class="fas fa-home"></i> <span>Data Properti</span>
                </a>
            </li>

            <li class="<?php echo ($this->uri->segment(2) == 'tipe_properti') ? 'active' : ''; ?>">
                <a class="nav-link" href="<?php echo base_url('admin/tipe_properti') ?>">
                    <i class="fas fa-grip-horizontal"></i> <span>Tipe Properti</span>
                </a>
            </li>

            <li class="<?php echo ($this->uri->segment(2) == 'data_customer') ? 'active' : ''; ?>">
                <a class="nav-link" href="<?php echo base_url('admin/data_customer') ?>">
                    <i class="fas fa-file"></i> <span>Data Penyewa</span>
                </a>
            </li>

            <li class="<?php echo ($this->uri->segment(2) == 'transaksi') ? 'active' : ''; ?>">
                <a class="nav-link" href="<?php echo base_url('admin/transaksi') ?>">
                    <i class="fas fa-random"></i> <span>Transaksi</span>
                </a>
            </li>

            <li class="<?php echo ($this->uri->segment(2) == 'laporan') ? 'active' : ''; ?>">
                <a class="nav-link" href="<?php echo base_url('admin/laporan') ?>">
                    <i class="fas fa-clipboard-list"></i> <span>Laporan</span>
                </a>
            </li>
          </ul>

            <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
              <a href="<?php echo base_url('auth/logout') ?>" class="btn btn-danger btn-lg btn-block btn-icon-split">
                <i class="fas fa-external-link-square-alt"></i>Log Out</a>
                <a href="<?php echo base_url('auth/ganti_password') ?>" class="btn btn-warning btn-lg btn-block btn-icon-split">
                <i class="fas fa-lock"></i>Ganti Password</a>
            </div>
        </aside>
      </div>
