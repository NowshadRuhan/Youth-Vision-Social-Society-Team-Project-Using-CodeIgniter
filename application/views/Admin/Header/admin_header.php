<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('resource/admin/assets/img/apple-icon.png'); ?>">

  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Youth Vision Admin
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="<?php echo base_url('resource/admin/assets/font-awesome.min.css');?>">
  <!-- CSS Files -->
  <link href="<?php echo base_url('resource/admin/assets/css/material-dashboard.css?v=2.1.1');?>" rel="stylesheet" />
 
  <link href="<?php echo base_url('resource/admin/assets/demo/demo.css');?>" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="<?php echo base_url('resource/admin/assets/img/sidebar-1.jpg');?>">
      


      <div class="logo">
        <a href="" class="simple-text logo-normal">
          Youth Vision
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url('Admin/Admin_controller/');?>">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url('Admin/Admin_controller/userlist');?>">
              <i class="material-icons">person</i>
              <p>Users List</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url('Admin/Admin_controller/all_notice'); ?>">
              <i class="material-icons">content_paste</i>
              <p>Notices List</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url('Admin/Admin_controller/allEvent'); ?>">
              <i class="material-icons">library_books</i>
              <p>Events List</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url('Admin/Admin_controller/allProgram');?>">
              <i class="material-icons">bubble_chart</i>
              <p>Programs List</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url('Admin/Admin_controller/add_notice');?>">
              <i class="material-icons">content_paste</i>
              <p>Add Notices</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url('Admin/Admin_controller/event_add');?>">
              <i class="material-icons">library_books</i>
              <p>Add Events</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('Admin/Admin_controller/programs_add');?>">
              <i class="material-icons">bubble_chart</i>
              <p>Add Programs</p>
            </a>
          </li>
         

          
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#pablo">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">


            <!-- search option  -->
            <form class="navbar-form" action="<?php echo base_url('Admin/Admin_controller/search_option');?>" method="POST">
              <div class="input-group no-border">

                <input type="text" name="search" class="form-control" placeholder="Search...">

                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>

            <!-- search option  -->


            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('Admin/Admin_controller/');?>">
                  <i class="material-icons">dashboard</i>
                  <p class="d-lg-none d-md-block">
                    Stats
                  </p>
                </a>
              </li>
              
              <li class="nav-item dropdown">
                <a class="nav-link" href="#sfb" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="<?php echo base_url('Admin/Admin_controller/admin_profile');?>">Profile</a>
                  <!-- <a class="dropdown-item" href="#">Settings</a> -->
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="<?php echo base_url('Account/login');?>">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->