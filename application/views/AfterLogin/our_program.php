<!DOCTYPE html>
<html>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo base_url('resource/assets/css/program.css');?>">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey">

<!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" style="max-width:1400px">

<!-- Header -->
<header class="w3-container w3-center w3-padding-32"> 
  <h1><b>Our Program</b></h1>
  <p>Welcome to the blog of our program</p>
</header>



<!-- Grid -->


<?php
  if ($all_our_programs) {
   
?>

<div class="w3-row">

<!-- Blog entries -->
<div class="w3-col l8 s12">
  <!-- Blog entry -->


  <div class="w3-card-4 w3-margin w3-white">
    <img src="<?php echo base_url($all_our_programs[0]->program_photo);?>" alt="Nature" style="width:100%; height: 450px;">
    <div class="w3-container">
      <h3><b><?php echo $all_our_programs[0]->program_title; ?></b>
      <span class="w3-opacity" style="font-size: 14px;"><?php echo $all_our_programs[0]->program_date; ?></span></h3>
    </div>

    <div class="w3-container">
      <p><?php echo $all_our_programs[0]->program_description; ?></p>
      <div class="w3-row" style="padding-bottom: 20px; ">
        
        
      </div>
    </div>
  </div>

  <hr>



  <!-- Blog entry -->
  <div class="w3-card-4 w3-margin w3-white">
  <img src="<?php echo base_url($all_our_programs[1]->program_photo);?>" alt="Nature" style="width:100%; height: 600px;">
    <div class="w3-container">
      <h3><b><?php echo $all_our_programs[1]->program_title; ?></b>
      <span class="w3-opacity" style="font-size: 14px;"><?php echo $all_our_programs[1]->program_date; ?></span></h3>
    </div>

    <div class="w3-container">
      <p><?php echo $all_our_programs[1]->program_description; ?></p>
      <div class="w3-row" style="padding-bottom: 20px; ">
        
        
      </div>
    </div>
  </div>
<!-- END BLOG ENTRIES -->


</div>

<!-- Introduction menu -->
<div class="w3-col l4">
  <!-- About Card -->
  <div class="w3-card w3-margin w3-margin-top">
  <img src="<?php echo base_url($all_our_programs[2]->program_photo);?>" style="width:100%; height: 300px;">
    <div class="w3-container w3-white" style="padding-bottom: 20px; ">
      <h3><b><?php echo $all_our_programs[2]->program_title; ?></b>
      <span class="w3-opacity" style="font-size: 14px;"><?php echo $all_our_programs[2]->program_date; ?></span></h3>

      <p><?php echo $all_our_programs[2]->program_description; ?></p>
    </div>
  </div>
  <hr>
  

  <!-- Posts -->
<div class="w3-card w3-margin w3-margin-top" style="margin-top: 100px; ">
<img src="<?php echo base_url($all_our_programs[3]->program_photo);?>" style="width:100%; height: 300px;">    <div class="w3-container w3-white" style="padding-bottom: 20px; ">
      <h3><b><?php echo $all_our_programs[3]->program_title; ?></b>
      <span class="w3-opacity" style="font-size: 14px;"><?php echo $all_our_programs[3]->program_date; ?></span></h3>

      <p><?php echo $all_our_programs[3]->program_description; ?></p>
    </div>
  </div>
  <hr>


 

  <div class="w3-card w3-margin w3-margin-top" style="margin-top: 100px; ">
 <img src="<?php echo base_url($all_our_programs[4]->program_photo);?>" style="width:100%; height: 300px;">
 
    <div class="w3-container w3-white" style="padding-bottom: 20px; ">

      <h3><b><?php echo $all_our_programs[4]->program_title; ?></b>
      <span class="w3-opacity" style="font-size: 14px;"><?php echo $all_our_programs[4]->program_date; ?></span></h3>

      <p><?php echo $all_our_programs[4]->program_description; ?></p>
    </div>
  </div>
  <hr>
  <!-- Labels / tags -->
  
  
<!-- END Introduction Menu -->
</div>

<!-- END GRID -->
</div><br>

<?php
  }
   
?>

<!-- END w3-content -->




</div>


</body>
</html>
