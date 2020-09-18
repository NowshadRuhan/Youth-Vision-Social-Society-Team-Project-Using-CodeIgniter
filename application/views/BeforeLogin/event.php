<!DOCTYPE html>
<html lang="zxx">

<head>
   
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    
   

    <!-- bootstrap.css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>resource/vendor/bootstrap-4.3.1/bootstrap.css">
        <!-- Fontawesome.css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>resource/vendor/fontawesome/all.min.css">
        <!-- header.css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>resource/assets/css/header.css">


    <link href="<?php echo base_url('resource/event_all/css/style.css');?>" rel='stylesheet' type='text/css' />
    <link href="<?php echo base_url('resource/event_all/css/fontawesome-all.css');?>" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
    

      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>resource/assets/css/footer.css">

    <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

</head>

<body>

    <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
 
   

  <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-top: 10px;">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item" >
        <a class="nav-link" href="<?php echo base_url(); ?>BoforeLogin">Home</a>
      </li>
      <li class="nav-item" style="margin-left: -55px;">
        
         <a class="nav-link" href="<?php echo base_url('Account/login');?>">Login</a>
    
        
      </li>
      <li class="nav-item" style="margin-left: -55px;">
        
          <a class="nav-link" href="<?php echo base_url('Account/index');?>">Registation</a>
        
      </li>

      <li class="nav-item dropdown" style="margin-left: -55px;">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Services
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown" >
          <a class="dropdown-item" href="<?php echo base_url('BoforeLogin/event_before_login');?>">Event</a>
          <a class="dropdown-item" href="<?php echo base_url('BoforeLogin/our_program_b');?>">Our Program</a>
          
        </div>
      </li>
       <li class="nav-item" style="margin-left: -55px;">
        <a class="nav-link" href="<?php echo base_url(); ?>BoforeLogin/about_b">About</a>
      </li>
       <li class="nav-item" style="margin-left: -55px;">
        <a class="nav-link" href="<?php echo base_url(); ?>Contact">Contact</a>
      </li>
    </ul>
  
  </div>
</div>
</nav>













   
    <section class="banner-bottom-wthree py-lg-5 py-md-5 py-3">
        <div class="container">


            <div class="inner-sec-w3ls py-lg-5  py-3">
			<!---728x90--->
                <h3 class="tittle text-center mb-lg-4 mb-3">OUR EVENTS</h3>
					<!---728x90--->

            <?php 
                    if($all_recent_events){

                        if($all_recent_events[0]!=NULL){
            ?>

                <div class="row choose-main mt-5">
                    <div class="col-lg-6 work-grid-right">
                        <div class="work-info">
                            
                            <h4 class="post my-3" style="font-size: 27px;">

                                <?php
                                   echo $all_recent_events[0]->event_titel;

                                ?>

                                <span class="post-color" style="font-size: 12px;">

                                <?php
                                    echo $all_recent_events[0]->event_date;
                                ?>

                                </span>
                            </h4>
                            <?php
                                     echo "<p style='font-size: 16px;'>Our Chief Guest <b>".$all_recent_events[0]->event_Chief_Guest." .</b> And Event held on <b>".$all_recent_events[0]->event_place.".</b></p>";

                                     echo  '<p style="font-size: 16px;">'.$all_recent_events[0]->event_description.'</p>'; 
                            ?>

                            <!-- <button type="button" data-toggle="modal" data-target="#exampleModalCenter" class="btn btn-success" style="margin-top: 20px;">SEE MORE</button> -->

                        </div>
                    </div>
                    <div class="col-lg-6 work-grid-left">
                        <img src="<?php echo base_url($all_recent_events[0]->event_photo);?>" alt="" class="img-fluid">
                    </div>
                </div>
                <?php

            }
                ?>



            <?php
                    if($all_recent_events[1]!=NULL){

            ?>
                <div class="row my-5">

                    <div class="col-lg-6 work-grid-left">
                         <img src="<?php echo base_url($all_recent_events[1]->event_photo);?>" alt="" class="img-fluid">
                    </div>
                    <div class="col-lg-6 work-grid-right">
                        <div class="work-info">
                             <h4 class="post my-3" style="font-size: 27px;">

                                <?php
                                   echo $all_recent_events[1]->event_titel;

                                ?>

                                <span class="post-color" style="font-size: 12px;">

                                <?php
                                    echo $all_recent_events[1]->event_date;
                                ?>

                                </span>
                            </h4>
                            <?php
                                     echo "<p style='font-size: 16px;'>Our Chief Guest <b>".$all_recent_events[1]->event_Chief_Guest." .</b> And Event held on <b>".$all_recent_events[1]->event_place.".</b></p>";

                                     echo  '<p style="font-size: 16px;">'.$all_recent_events[1]->event_description.'</p>'; 
                            ?>


                            <!-- <button type="button" data-toggle="modal" data-target="#exampleModalCenter" class="btn btn-success" style="margin-top: 20px;">SEE MORE</button> -->

                        </div>
                    </div>
                </div>
                <?php
            }
                ?>


            <?php
                    if($all_recent_events[1]!=NULL){

            ?>

                <div class="row mt-5">
                    <div class="col-lg-6 work-grid-right">
                        <div class="work-info">
                            <h4 class="post my-3" style="font-size: 27px;">

                                <?php
                                   echo $all_recent_events[2]->event_titel;

                                ?>

                                <span class="post-color" style="font-size: 12px;">

                                <?php
                                    echo $all_recent_events[2]->event_date;
                                ?>

                                </span>
                            </h4>
                            
                            <?php
                                     echo "<p style='font-size: 16px;'>Our Chief Guest <b>".$all_recent_events[2]->event_Chief_Guest." .</b> And Event held on <b>".$all_recent_events[2]->event_place.".</b></p>";

                                     echo  '<p style="font-size: 16px;">'.$all_recent_events[2]->event_description.'</p>'; 
                            ?>
                            
                            <!-- <button type="button" data-toggle="modal" data-target="#exampleModalCenter" class="btn btn-success" style="margin-top: 20px;">SEE MORE</button> -->

                        </div>
                    </div>
                    <div class="col-lg-6 work-grid-left">
                       <img src="<?php echo base_url($all_recent_events[2]->event_photo);?>" alt="" class="img-fluid">
                    </div>
                </div>



        <?php
            }
        }

        ?>
            </div>




        </div>
    </section>
    <!--//preocess-->
    <!-- banner-bottom-wthree -->
    <section class="banner-bottom-wthree pb-lg-5 py-3">
        <div class="container">



            <div class="inner-sec-w3ls pb-lg-5 py-3">
			
			<!---728x90--->
                <h3 class="tittle text-center mb-lg-4 mb-3">OUR UPCOMMING EVENTS</h3>


                <div class="row populor_category_grids mt-5">

                      <?php
                        if ($upcomming_events) {
                           
                        ?>  

                 
                


                    <div class="col-md-3 category_grid">
                        <div class="view view-tenth">
                            <div class="category_text_box" style="margin-top: 100px;">
                                <h3><?php echo $upcomming_events[0]->event_titel?></h3>
                                <p><?php echo $upcomming_events[0]->event_date."<br>";
                                        echo "<br>Our Chief Guest ".$upcomming_events[0]->event_Chief_Guest;
                                ?></p>
                            </div>
                            <div class="mask">
                                <a href="#">
                                    <img src="<?php echo base_url($upcomming_events[0]->event_photo);?>" class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-3 category_grid">
                        <div class="view view1 view-tenth">
                            <div class="category_text_box" style="margin-top: 100px;">
                               <h3><?php echo $upcomming_events[1]->event_titel?></h3>
                                <p><?php echo $upcomming_events[1]->event_date."<br>";
                                        echo "<br>Our Chief Guest ".$upcomming_events[1]->event_Chief_Guest;
                                ?></p>
                            </div>
                            <div class="mask">
                                <a href="#">
                                    <img src="<?php echo base_url($upcomming_events[1]->event_photo);?>" class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 category_grid">
                        <div class="view view2 view-tenth">
                            <div class="category_text_box" style="margin-top: 100px;">
                                <h3><?php echo $upcomming_events[2]->event_titel?></h3>
                                <p><?php echo $upcomming_events[2]->event_date."<br>";
                                        echo "<br>Our Chief Guest ".$upcomming_events[2]->event_Chief_Guest;
                                ?></p>
                            </div>
                            <div class="mask">
                                <a href="#">
                                    <img src="<?php echo base_url($upcomming_events[2]->event_photo);?>" class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-3 category_grid">
                        <div class="view view3 view-tenth">
                            <div class="category_text_box"style="margin-top: 100px;">
                                <h3><?php echo $upcomming_events[3]->event_titel?></h3>
                                <p><?php echo $upcomming_events[3]->event_date."<br>";
                                        echo "<br>Our Chief Guest ".$upcomming_events[3]->event_Chief_Guest;
                                ?></p>
                            </div>
                            <div class="mask">
                                <a href="#">
                                    <img src="<?php echo base_url($upcomming_events[3]->event_photo);?>" class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                <?php
                        
                    }
                ?>


                </div>
        </div>





        
    </section>
    
    <!--//job -->



    <!--model-forms-->
    <!--/Login-->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="login px-4 mx-auto mw-100" align="center">
                        <h5 class="text-center mb-4">Hello Good Pepole</h5>
                        <h4 align="text-center">Your have to <a href="<?php echo base_url('Account/login');?>">Login</a>  first.</h4>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--//Login-->




    

    <!--//model-form-->
    <!-- js -->
    <!--/slider-->
    <script src="<?php echo base_url('resource/event_all/js/jquery-1.11.1.min.js');?>"></script>
    <script src="<?php echo base_url('resource/event_all/js/modernizr-2.6.2.min.js');?>"></script>
    <!--//slider-->
    <!--search jQuery-->
    <script src="<?php echo base_url('resource/event_all/js/classie-search.js');?>"></script>
    <script src="<?php echo base_url('resource/event_all/js/demo1-search.js');?>"></script>
    <!--//search jQuery-->

    <script>
        $(document).ready(function() {
            $(".dropdown").hover(
                function() {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function() {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
    <!-- //dropdown nav -->
    <!-- password-script -->
    <script>
        window.onload = function() {
            document.getElementById("password1").onchange = validatePassword;
            document.getElementById("password2").onchange = validatePassword;
        }

        function validatePassword() {
            var pass2 = document.getElementById("password2").value;
            var pass1 = document.getElementById("password1").value;
            if (pass1 != pass2)
                document.getElementById("password2").setCustomValidity("Passwords Don't Match");
            else
                document.getElementById("password2").setCustomValidity('');
            //empty string means no validation error
        }
    </script>
    <!-- //password-script -->
    <!-- //js -->
    <script src="<?php echo base_url('resource/event_all/js/bootstrap.js');?>"></script>
    <!--/ start-smoth-scrolling -->
    <script src="<?php echo base_url('resource/event_all/js/move-top.js');?>"></script>
    <script src="<?php echo base_url('resource/event_all/js/easing.js');?>"></script>
    <script>
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            /*
            						var defaults = {
            							  containerID: 'toTop', // fading element id
            							containerHoverID: 'toTopHover', // fading element hover id
            							scrollSpeed: 1200,
            							easingType: 'linear' 
            						 };
            						*/

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <!--// end-smoth-scrolling -->
</body>

</html>