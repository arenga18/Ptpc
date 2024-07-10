
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>SIPP &mdash; PTPC</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">


    <link rel="stylesheet" href="<?php echo base_url()?>/assets/assets_agency/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/assets_agency/css/animate.css">
    
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/assets_agency/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/assets_agency/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/assets_agency/css/magnific-popup.css">

    <link rel="stylesheet" href="<?php echo base_url()?>/assets/assets_agency/css/aos.css">

    <link rel="stylesheet" href="<?php echo base_url()?>/assets/assets_agency/css/ionicons.min.css">

    <link rel="stylesheet" href="<?php echo base_url()?>/assets/assets_agency/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/assets_agency/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/assets_agency/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/assets_agency/css/icomoon.css">
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/assets_agency/css/style.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
          <img width="100px" class="navbar-brand" src="<?php echo base_url('assets/logo/ptpc.png')?>">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="oi oi-menu"></span> Menu
          </button>

          <div class="collapse navbar-collapse" id="ftco-nav">
              <ul class="navbar-nav ml-auto">
                  <li class="nav-item <?php echo ($this->uri->segment(2) == 'dashboard') ? 'active' : ''; ?>">
                      <a href="<?php echo base_url('customer/dashboard') ?>" class="nav-link">Home</a>
                  </li>
                  <li class="nav-item <?php echo ($this->uri->segment(2) == 'data_properti') ? 'active' : ''; ?>">
                      <a href="<?php echo base_url('customer/data_properti') ?>" class="nav-link">Property</a>
                  </li>
                  <li class="nav-item <?php echo ($this->uri->segment(2) == 'transaksi') ? 'active' : ''; ?>">
                      <a href="<?php echo base_url('customer/transaksi') ?>" class="nav-link">Transaksi</a>
                  </li>
                  <li class="nav-item <?php echo ($this->uri->segment(1) == '#about') ? 'active' : ''; ?>">
                      <a href="#about" class="nav-link">About</a>
                  </li>
                  <li class="nav-item <?php echo ($this->uri->segment(1) == '#contact') ? 'active' : ''; ?>">
                      <a href="#contact" class="nav-link">Contact</a>
                  </li>
                  <?php if($this->session->userdata('nama')) { ?>
                      <li class="nav-item users">
                          <a href="<?php echo base_url('customer/dashboard')?>" class="nav-link"> Welcome <b><?php echo $this->session->userdata('nama') ?></b></a>
                      </li>
                      <li class="nav-item">
                          <a href="<?php echo base_url('auth/logout')?>"
                          id="logout-btn" class="nav-link ml-lg-2 logout-btn">Log-Out</a>
                      </li>
                  <?php } else { ?>
                      <li class="nav-item cta">
                          <a href="<?php echo base_url('auth/login') ?>" class="nav-link ml-lg-2">
                              <span class="icon-user"></span> Sign-In
                          </a>
                      </li>
                      <li class="nav-item cta cta-colored">
                          <a href="<?php echo base_url('register') ?>" class="nav-link">
                              <span class="icon-pencil"></span> Sign-Up
                          </a>
                      </li>
                  <?php } ?>
              </ul>
          </div>
      </div>
  </nav>
    <!-- END nav -->

