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

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
 
 

  <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-top: 15px;">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item" style="margin-left: -55px;">
        <a class="nav-link" href="<?php echo base_url(); ?>After_login_home">Home</a>
      </li>

      <li class="nav-item dropdown" style="margin-left: -55px;">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Services
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo base_url('After_login_home/after_login_event');?>">Event</a>
          <a class="dropdown-item" href="<?php echo base_url('After_login_home/our_program');?>">Our Program</a>
          
        </div>
      </li>
       <li class="nav-item" style="margin-left: -55px;">
        <a class="nav-link" href="<?php echo base_url(); ?>After_login_home/after_login_about">About</a>
      </li>
       <li class="nav-item" style="margin-left: -55px;">
        <a class="nav-link" href="<?php echo base_url(); ?>After_login_home/after_login_contact">Contact</a>
      </li>

      <li class="nav-item" style="margin-left: -55px;">
        <a class="nav-link" href="<?php echo base_url('Account/index'); ?>"><b>Logout</b></a>
      </li>
    </ul>
  
  </div>
</div>
</nav>







<section class="banner-bottom-wthree py-lg-5 py-md-4  py-3">
        <div class="container">
            <div class="inner-sec-w3ls py-lg-5   py-md-3 py-3">
                <h3 class="tittle text-center mb-lg-5 mb-3">Event Process</h3>

                <div class="mid-info text-center mt-5">
                    <div class="parent-chart">
                        <div class="level lev-one top-level">
                            <div class="flow-position">
                                <img src="<?php echo base_url('resource/event_all/images/s1.jpg');?>" alt=" " class="img-fluid rounded-circle">
                                <br>
                                <strong>Recruitment Process</strong>
                                <br> Lorem ipsum
                            </div>
                        </div>
                        <div class="flow-chart">
                            <div class="level lev-two last-lev">
                                <div class="flow-position">
                                    <img src="<?php echo base_url('resource/event_all/images/s2.jpg');?>" alt=" " class="img-fluid rounded-circle">
                                    <br>
                                    <strong>1.Job Vacancy</strong>
                                    <br> Lorem ipsum
                                </div>

                                <div class="flow-position">
                                    <img src="<?php echo base_url('resource/event_all/images/s3.jpg');?>" alt=" " class="img-fluid rounded-circle">
                                    <br>
                                    <strong>2. Job Analysis
                                    </strong>
                                    <br> Lorem ipsum
                                </div>

                                <div class="flow-position">
                                    <img src="<?php echo base_url('resource/event_all/images/s1.jpg');?>" alt=" " class="img-fluid rounded-circle">
                                    <br>
                                    <strong>3. Attracting Candidates
                                    </strong>
                                    <br> Lorem ipsum
                                </div>

                                <div class="flow-position">
                                    <img src="<?php echo base_url('resource/event_all/images/s2.jpg');?>" alt=" " class="img-fluid rounded-circle">
                                    <br>
                                    <strong>4.Screening </strong>
                                    <br> Lorem ipsum
                                </div>

                                <div class="flow-position">
                                    <img src="<?php echo base_url('resource/event_all/images/s3.jpg');?>" alt=" " class="img-fluid rounded-circle">
                                    <br>
                                    <strong>5.Interviewing Candidates
                                    </strong>
                                    <br> Lorem ipsum
                                </div>

                                <div class="flow-position">
                                    <img src="<?php echo base_url('resource/event_all/images/s1.jpg');?>" alt=" " class="img-fluid rounded-circle">
                                    <br>
                                    <strong>6.Selecting</strong>
                                    <br> Lorem ipsum
                                </div>

                                <div class="flow-position">
                                    <img src="<?php echo base_url('resource/event_all/images/s2.jpg');?>" alt=" " class="img-fluid rounded-circle">
                                    <br>
                                    <strong>7.Employee Evaluation
                                    </strong>
                                    <br> Lorem ipsum
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>












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