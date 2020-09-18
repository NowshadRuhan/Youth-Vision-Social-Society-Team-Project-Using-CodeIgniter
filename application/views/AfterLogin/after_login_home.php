



 <head>
 <style>

      .head1 {
      width: 100%;
      height:600px;
      background-image: url(http://localhost/Youth_Vision/resource/new_all/assets/img/bg_img.jpg);
      background-size: cover;
      background-repeat: no-repeat;
      background-attachment: fixed;

    }
    
    </style>

</head>


<div class="head1" style="margin-top: -50px;" >
  
  <div class="container">

      <div class="row">

        <div class="col-md-6">
        
          <h1 align="center"style="padding-top: 180px; color: #FFFFFF; font-size: 4em; font-family: serif;">Welcome</h1>
          <p style="color:white; font-size: 26px;  text-align: center;"><?php echo $this->session->userdata('welcome_name');?></p>
        </div>
      </div>


  </div>

</div>









 <div class="container" style="margin-top: 40px;">
      <div class="row">
        <div align="center;"class="col-md-8">
            <h3 style="text-align: center; font-size: 35px; color:#142B46; font-family: Times New Roman; font-weight: bold"> Organization Details</h3>
            <hr align="center" style="margin-top: -5px; width: 350px; height: 5px; border-color: blue;">
            <p style="text-align: justify;">Youth Vision is an educational and social organization of youth.
            It was established on 31st January 2019.
            It's President is Aleya Khatun and the Secretary is Nahida Akther.
            The organizations have 20 mambers and 25 users.
            Almost one year, it has been working for those people who are struggling to survive.
            Its work for those people who are unable to live due to various suffering.
            Our Organization extends its help to those students who cannot afford the cost of education for various reasons.
            We try our best to stand up to those people who are facing problems due to natural disasters like floods, colds and hunger.</p>
        </div>

        <div align="center"class="col-md-4">

          <h3 style="text-align: center; font-size: 35px; color:#142B46; font-family: Times New Roman; font-weight: bold">Notice Board</h3>
          <hr align="center" style="margin-top: -5px; width: 250px; height: 5px; border-color: blue;">
           <div class="notice-wrapper-scroll-y my-custom-scrollbar" style="height: 70%;">


              <?php 
                  if ($all_notices) {
                    
                    foreach ($all_notices as $all_notice) {
                      
                 ?>
                
                <div class="notce-link">
                  <h5 style="text-align: left;"> 
                  <?php 
                      echo $all_notice->notice_titel;
                  ?>   
                    <b style="font-size: 10px;">Date: 
                      <?php 
                        echo $all_notice->start_time;
                      ?>
                    
                    </b>
                  </h5>

                  <hr align="left" style="margin-top: -5px; width: 80px; height: 5px; border-color: blue;">
                  <p style=" margin-top: -15px;margin-left: 0px; font-size: 14px;
                  font-family: 'Times New Roman', Times, serif;">
                  <strong style="color: red;">*</strong>
                  <?php 
                      echo $all_notice->notice_discription;
                  ?> 
                </p> 
                <br>
                  
                </div>

              <?php 

                    }
               }
              ?>
      
            </div>



        </div>
    </div>
  </div>

  <div class="container" style="margin-top: -10px;">
     <h3 style="text-align: center; font-weight: bold; font-size: 35px; font-family: times new roman; color:#142B46;"> Recent Program</h3>
     <hr align="center" style="margin-top: -5px; width: 270px; height: 5px; border-color: blue;">


    <div class="row" style="margin-top: 40px;">

    <?php
          if($all_recent_programs){
              foreach ($all_recent_programs as $all_recent_program) {
               
    ?>  

      <div class="col-md-4" >

        <img class="program-img" src="<?php echo base_url($all_recent_program->program_photo)?>" alt="program-img">
        <h3 style="text-align: center; font-family: times new roman; color:blue">
        <?php 
            echo $all_recent_program->program_title;
        ?>
          <b style="font-size: 10px;">Date: 
            <?php 
                echo $all_recent_program->program_date;
            ?>
                      
          </b>
        </h3>
        <p style="text-align: center;">
         <?php

             echo $all_recent_program->program_description;
         ?>
        </p>

        
      </div>

    <?php

        }

      }

    ?>    
    </div>


    
    

  </div>
