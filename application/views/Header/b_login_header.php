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
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>resource/new_all/assets/css/home.css">

  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>resource/assets/css/footer.css">

    <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

    
</head>
<body>



<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light" >
  <div class="container">
 
   

  <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-top: -35px;">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item" style="color: white;">
        <a class="nav-link" style="color: white;" href="<?php echo base_url(); ?>BoforeLogin">Home</a>
      </li>
      <li class="nav-item" style="color: white;">
        
         <a class="nav-link" style="color: white;" href="<?php echo base_url('Account/login');?>">Login</a>
    
        
      </li>
      <li class="nav-item" style="color: white;">
        
          <a class="nav-link" style="color: white;" href="<?php echo base_url('Account/index');?>">Registation</a>
        
      </li>

      <li class="nav-item dropdown" style="color: white;">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">
          Services
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="color: white;">
          <a class="dropdown-item" href="<?php echo base_url('BoforeLogin/event_before_login');?>" >Event</a>
          <a class="dropdown-item"  href="<?php echo base_url('BoforeLogin/our_program_b');?>" >Our Program</a>
          
        </div>
      </li>
       <li class="nav-item" style="color: white;">
        <a class="nav-link" style="color: white;" href="<?php echo base_url(); ?>BoforeLogin/about_b">About</a>
      </li>
       <li class="nav-item" style="color: white;">
        <a class="nav-link" style="color: white;" href="<?php echo base_url(); ?>BoforeLogin/contact_before_login">Contact</a>
      </li>
    </ul>
  
  </div>
</div>
</nav>