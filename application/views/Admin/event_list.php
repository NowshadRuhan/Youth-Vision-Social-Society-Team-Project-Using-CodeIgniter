
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="margin-top:  50px;">


    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">
      <div class="container">
         <h1>
          <a href="<?php echo site_url('Admin/Admin_controller/event_add'); ?>" class="btn btn-success"><i class="fa fa-plus-circle"></i> <?php echo " New Event"; ?> </a>
        </h1>
      </div>
  
     
     
      <!-- Small boxes (Stat box) -->
      <div class="row">
       
      <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
                <h5 class="box-title" style="margin-left: 30px; margin-top: 20px; font-size: 14px;">Event List</h5>
            </div>
            <!-- /.box-header -->
            <div class="box-body">


                
                

              <div class="container" style="margin-top: 20px;">
                <div class="container-fluid">
                  
                    <?php
                      if($this->session->flashdata('success_add')){
                      ?>
                      <div class="alert alert-success">
                        <?php echo $this->session->flashdata('success_add');?>
                        
                      </div>
                      <?php
                      }
                  ?>

                  <?php
                      if($this->session->flashdata('error_add')){
                      ?>
                      <div class="alert alert-danger">
                        <?php echo $this->session->flashdata('error_add');?>
                        
                      </div>
                      <?php
                      }
                  ?>

                </div>



<!--  -->
                <div class="col-sm-12 table-responsive">
                  <table class="table table-bordered">
                <tbody>
                  <tr>
                    <th>Number</th>
                    <th>Event Photo</th>
                    <th>Event Description</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                
                   
                          
                  <?php 
                  $i=0;

                  if($events): foreach($events as $event): ?>
                
                <tr>
                  
                  <td style="width: 50px;"><a href="#"><?php $i=$i+1; echo '<b>'.$i.'</b>'; ?></a></td>


                  <td style="width: 250px;" align="center">

                    <img style="width: 150px; height: 150px; border-radius: 4px;" src="<?php echo base_url($event->event_photo); ?>" alt="" class="img-responsive">

                    <br>
                      <span class="simple_heading_upload_bar" style="font-size: 12px;"><?php echo "Image Size (600*600) 200kB"; ?></span>
                      <?php echo form_open_multipart('Admin/Admin_controller/event_photo_Upload/'.$event->event_id);?>
                         <form action="" method="post">
                          <input  class="btn btn-outline-success" type="file" style="width: 100%; " name="event_pic" required="required" id="fileToUpload">
                           <p><button ><i style="font-size: 36px; color: blue;" class="fa fa-upload" aria-hidden="true"></i></button></p>
                       </form>
                    <?php echo form_close(); ?>



                  </td>




                  <td style="width: 350px;">
                   
                   <h3 style="margin-top: -40px;"> <b> 
                    <?php

                   echo $event->event_titel.'</b><b style="font-size: 5px;">&nbsp;&nbsp;'.$event->event_date;
                   ?>'</b> </h3> 
                   <?php

                   echo '<p style="font-size:18;">Our Chief Guest <b>'.$event->event_Chief_Guest.' .</b> And Event held on <b>'.$event->event_place.' .</b>'; 
                  
                   echo '<p style="font-size:18;"> <b>'.$event->event_description.'</b></p>'; 


                   ?></td>
                  

                  <td>
                      <?php 
                        if ($event->event_date > date('Y-m-d')) {
                           
                          echo "<b>"."Upcoming event"."</b>";
                        

                          }else{
                            
                            echo "End Event";
                        }
                      ?>
                  </td>
                  


                  <td>
                      <a href="<?php echo base_url('Admin/Admin_controller/delete_event/'.$event->event_id); ?>" onclick="return confirm('<?php echo 'Are you Sure!'; ?>');"><i style="color: red; font-size: 30px; margin-left: 10px;" class="fa fa-trash" aria-hidden="true"></i></a>
                  </td>

                  
                </tr>
                <?php endforeach; endif; ?>
                
              </tbody>
              </table>
             
              </div>




<!--  -->



              </div>
              
            </div>
          </div>
        </div>
       
       
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
