<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title ?></title>
  <link rel="shortcut icon" href="<?php echo base_url() ?>asset/gambar/icon.png" />
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url() ?>adminLTE/bower_components/bootstrap/dist/css/bootstrap.min.css">  
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() ?>adminLTE/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons --> 
  <link rel="stylesheet" href="<?php echo base_url() ?>adminLTE/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style --> 
  <link rel="stylesheet" href="<?php echo base_url() ?>adminLTE/dist/css/AdminLTE.css">

  <link rel="stylesheet" href="<?php echo base_url() ?>adminLTE/dist/css/skins/_all-skins.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url() ?>adminLTE/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url() ?>adminLTE/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url() ?>adminLTE/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url() ?>adminLTE/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url() ?>adminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <!-- Data Table -->
  <link rel="stylesheet" href="<?php echo base_url() ?>adminLTE/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url() ?>adminLTE/bower_components/select2/dist/css/select2.min.css">

  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url() ?>adminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <link rel="stylesheet" type="text/css" href="<?php echo base_url('adminLTE/datatable/datatables.min.css') ?>">

  <!-- jQuery 3 -->
  <script src="<?php echo base_url() ?>adminLTE/bower_components/jquery/dist/jquery.min.js"></script>
  
  <script type="text/javascript" src="<?php echo base_url('adminLTE/datatable/datatables.min.js') ?>"></script>


<style type="text/css">
  /*timer*/
  .without_ampm::-webkit-datetime-edit-ampm-field {
   display: none;
 }
 input[type=time]::-webkit-clear-button {
   -webkit-appearance: none;
   -moz-appearance: none;
   -o-appearance: none;
   -ms-appearance:none;
   appearance: none;
   margin: -10px; 
 }

 /*form step wizard*/
 .stepwizard-step p {
    margin-top: 10px;
}

.stepwizard-row {
    display: table-row;
}

.stepwizard {
    display: table;
    width: 100%;
    position: relative;
}

.stepwizard-step button[disabled] {
    opacity: 1 !important;
    filter: alpha(opacity=100) !important;
}

.stepwizard-row:before {
    top: 14px;
    bottom: 0;
    position: absolute;
    content: " ";
    width: 100%;
    height: 1px;
    background-color: #ccc;
    z-order: 0;

}

.stepwizard-step {
    display: table-cell;
    text-align: center;
    position: relative;
}

.btn-circle {
  width: 30px;
  height: 30px;
  text-align: center;
  padding: 6px 0;
  font-size: 12px;
  line-height: 1.428571429;
  border-radius: 15px;
}

</style>

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <?php if ($this->session->userdata('level') == 3): ?>

      <!-- Logo -->
      <a class="logo" style="font-size: 15px;">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>MDU</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"> <b>MONITORING DATA UMKM</b></span>
      </a>

    <?php else: ?>

      <!-- Logo -->
      <a class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>DU</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"> <b>DATA UMKM</b></span>
      </a>

    <?php endif ?>
    
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <?php if (@$this->session->userdata('foto') == ''): ?>
                <img src="<?php echo base_url() ?>asset/gambar/user/no.jpg" class="user-image" alt="User Image">
              <?php else: ?>
                <img src="<?php echo base_url() ?>asset/gambar/user/<?php echo $this->session->userdata('foto'); ?>" class="user-image" alt="User Image">
              <?php endif ?>

              <span class="hidden-xs"><?php echo $this->session->userdata('name'); ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">

                <?php if (@$this->session->userdata('foto') == ''): ?>
                  <img src="<?php echo base_url() ?>asset/gambar/user/no.jpg" class="img-circle" alt="User Image">
                <?php else: ?>
                  <img src="<?php echo base_url() ?>asset/gambar/user/<?php echo $this->session->userdata('foto'); ?>" class="img-circle" alt="User Image">
                <?php endif ?>

                <p>
                  <span id="date"></span>
                  <small id="clock" style="color: #23427F; background-color: white; margin-top: 4%;"></small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?php echo base_url() ?>profile" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo base_url('login/logout') ?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">

          <?php if ($this->session->userdata('foto') == ''): ?>
            <img src="<?php echo base_url() ?>asset/gambar/user/no.jpg" class="img-circle" alt="User Image"  style="height: 45px;">
          <?php else: ?>
            <img src="<?php echo base_url() ?>asset/gambar/user/<?php echo $this->session->userdata('foto'); ?>" class="img-circle" alt="User Image"  style="height: 45px;">
          <?php endif ?>
          
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('name'); ?></p>
          <a><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        
        <?php if ($this->session->userdata('level') == 0): ?>
          <li <?php echo @$dashboard; ?>>
            <a href="<?php echo base_url() ?>dashboard">
              <i class="fa fa-dashboard "></i> <span>Dashboard</span>
            </a>
          </li>

           <li <?php echo @$user; ?>>
            <a href="<?php echo base_url() ?>user">
              <i class="fa fa-user-o "></i> <span>User Control</span>
            </a>
          </li>

          <li class="treeview">
            <a href="#">
              <i class="fa fa-check-square-o"></i> <span>Validasi</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu" style="<?php echo @$tree; ?>">
              <!-- <li><a href="<?php echo base_url('validasi/umkm') ?>"><i class="fa fa-minus"></i> UMKM</a></li> -->
              <li><a href="<?php echo base_url('validasi/bumn') ?>"><i class="fa fa-minus"></i> BUMN</a></li>
            </ul>
          </li>

        <?php endif ?>

        <?php if ($this->session->userdata('level') == 2): ?>
          <li <?php echo @$umkm; ?>>
            <a href="<?php echo base_url() ?>umkm">
              <i class="fa fa-home"></i> <span>UMKM RUMAH BUMN BNI</span>
            </a>
          </li>
          <li <?php echo @$pembiayaan; ?>>
            <a href="<?php echo base_url() ?>pembiayaan">
              <i class="fa fa-money"></i> <span>UMKM PEMBIAYAAN BNI</span>
            </a>
          </li>
        <?php endif ?>

        <?php if ($this->session->userdata('level') == 1): ?>
          <li <?php echo @$bumn; ?>>
            <a href="<?php echo base_url() ?>bumn">
              <i class="fa fa-home"></i> <span>BUMN</span>
            </a>
          </li>
        <?php endif ?>

        <?php if ($this->session->userdata('level') < 2): ?>
          <!-- <li <?php echo @$data_umkm; ?>>
            <a href="<?php echo base_url() ?>data_umkm">
              <i class="fa fa-users"></i> <span>Data UMKM</span>
            </a>
          </li> -->

          <li class="treeview">
            <a href="#">
              <i class="fa fa-users"></i> <span>UMKM</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu" style="<?php echo @$tree_umkm; ?>">
              <li><a href="<?php echo base_url() ?>data_umkm"><i class="fa fa-minus"></i>UMKM RUMAH BUMN BNI</a></li>
              <li><a href="<?php echo base_url() ?>data_pembiayaan"><i class="fa fa-minus"></i> UMKM PEMBIAYAAN BNI</a></li>
            </ul>
          </li>
        <?php endif ?>

        <?php if ($this->session->userdata('level') == 1): ?>

          <li class="treeview">
            <a href="#">
              <i class="fa fa-file-text-o"></i> <span>Log Book</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu" style="<?php echo @$log; ?>">
              <li <?php echo @$log_kunjungan; ?>><a href="<?php echo base_url('log_kunjungan') ?>"><i class="fa fa-minus"></i> Kunjungan UMKM</a></li>
              <li <?php echo @$log_pelatihan; ?>><a href="<?php echo base_url('log_pelatihan') ?>"><i class="fa fa-minus"></i> Pelatihan</a></li>
              <li <?php echo @$log_pameran; ?>><a href="<?php echo base_url('log_pameran') ?>"><i class="fa fa-minus"></i> Pameran</a></li>
            </ul>
          </li>

        <?php endif ?>

        <?php if ($this->session->userdata('level') == 0): ?>
          <li <?php echo @$data_bumn; ?>>
            <a href="<?php echo base_url() ?>data_bumn">
              <i class="fa fa-home"></i> <span>Rumah BUMN</span>
            </a>
          </li>
        <?php endif ?>

        <?php if ($this->session->userdata('level') == 0): ?>

          <li class="treeview">
            <a href="#">
              <i class="fa fa-file-text-o"></i> <span>Log Book</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu" style="<?php echo @$log; ?>">
              <li <?php echo @$log_kunjungan; ?>><a href="<?php echo base_url('data_log/kunjungan') ?>"><i class="fa fa-minus"></i> Kunjungan UMKM</a></li>
              <li <?php echo @$log_pelatihan; ?>><a href="<?php echo base_url('data_log/pelatihan') ?>"><i class="fa fa-minus"></i> Pelatihan</a></li>
              <li <?php echo @$log_pameran; ?>><a href="<?php echo base_url('data_log/pameran') ?>"><i class="fa fa-minus"></i> Pameran</a></li>
            </ul>
          </li>

        <?php endif ?>

        <li <?php echo @$profile; ?>>
          <a href="<?php echo base_url() ?>profile">
            <i class="fa fa-user-circle-o"></i> <span>Profile</span>
          </a>
        </li>

        <?php if ($this->session->userdata('level') == 0): ?>
          <li <?php echo @$data_setting; ?>>
            <a href="<?php echo base_url() ?>setting">
              <i class="fa fa-cog"></i> <span>Setting</span>
            </a>
          </li>
        <?php endif ?>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->