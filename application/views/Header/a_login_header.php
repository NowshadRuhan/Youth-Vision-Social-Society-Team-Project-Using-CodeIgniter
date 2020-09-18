<!DOCTYPE html>
<html>
<head>
	<title></title>

	<!-- bootstrap.css -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>resource/vendor/bootstrap-4.3.1/bootstrap.css">

	<!-- Fontawesome.css -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>resource/vendor/fontawesome/all.min.css">

	<!-- header.css -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>resource/assets/css/header.css">

    <!-- home.css -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>resource/assets/css/home.css">

  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>resource/assets/css/footer.css">

    <!-- +++++++++++++++++++++++++++++++++ -->
    

</head>
<body>



<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
 
 

  <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-top: -35px;">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item" style="color: white;">
        <a class="nav-link" style="color: white;" href="<?php echo base_url(); ?>After_login_home/">Home</a>
      </li>

      <li class="nav-item dropdown" style="color: white;" >
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;" >
          Services
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo base_url('After_login_home/after_login_event');?>">Event</a>
          <a class="dropdown-item" href="<?php echo base_url('After_login_home/our_program');?>">Our Program</a>
          
        </div>
      </li>
       <li class="nav-item" style="color: white;" >
        <a class="nav-link" style="color: white;"  href="<?php echo base_url(); ?>After_login_home/after_login_about">About</a>
      </li>
       <li class="nav-item" style="color: white;" >
        <a class="nav-link" style="color: white;"  href="<?php echo base_url(); ?>After_login_home/after_login_contact">Contact</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" style="color: white;"  href="<?php echo base_url("Account/index"); ?>"><b>Logout</b></a>
      </li>

      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <li class="nav-item dropdown"  style="color: white;">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
           <i class="fa fa-user" aria-hidden="true"  style="color: white;" ></i>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo base_url('After_login_home/#');?>">Profile</a>
          <a class="dropdown-item" href="<?php echo base_url('#');?>"></a>
          <a class="dropdown-item" href="<?php echo base_url("Account/index"); ?>">Logout</a>
          
        </div>
      </li>

    </ul>
  
  </div>
</div>
</nav>