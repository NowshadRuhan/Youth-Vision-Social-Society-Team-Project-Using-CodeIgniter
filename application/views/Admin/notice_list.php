
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
          <a href="<?php echo site_url('Admin/Admin_controller/add_notice'); ?>" class="btn btn-success"><i class="fa fa-plus-circle"></i> <?php echo " New Notice"; ?> </a>
        </h1>
      </div> 
    
     
     
      <!-- Small boxes (Stat box) -->
      <div class="row">
       
      <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
                <h5 class="box-title" style="margin-left: 30px; margin-top: 20px; font-size: 14px;">Notices List</h5>
            </div>
            <!-- /.box-header -->
            <div class="box-body">


                
                

              <div class="container" style="margin-top: 20px;">
                <div class="container-fluid">
                  <div class="alert alert-warning">
                    <?php echo "Please Active Four Notice Only..";?>
                  </div>
                    <?php
                      if($this->session->flashdata('success_ch')){
                      ?>
                      <div class="alert alert-success">
                        <?php echo $this->session->flashdata('success_ch');?>
                        
                      </div>
                      <?php
                      }
                  ?>

                  <?php
                      if($this->session->flashdata('error_change')){
                      ?>
                      <div class="alert alert-danger">
                        <?php echo $this->session->flashdata('error_change');?>
                        
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
                    <th>Notice Titel</th>
                    <th>Notice Discription</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                
                   
                          
                  <?php 
                  $i=0;

                  if($notice_lists): foreach($notice_lists as $notice_list): ?>
                
                <tr>
                  
                  <td style="width: 50px;"><a href="#"><?php $i=$i+1; echo '<b>'.$i.'</b>'; ?></a></td>
                  <td style="width: 200px;"><?php echo $notice_list->notice_titel; ?></td>
                  <td style="width: 450px;"><?php echo $notice_list->notice_discription; ?></td>
                  <td ><?php echo $notice_list->start_time; ?></td>     
                  <td><?php echo $notice_list->end_time; ?></td>  
                   
                 


                  <td>
                      <?php 
                        if ($notice_list->notice_activation == 0) {
                           
                      ?>
                      <a href="<?php echo base_url('Admin/Admin_controller/active_notice/'.$notice_list->notice_id); ?>"> <i style="color: red; font-size: 30px; margin-left: 10px;" class="fa fa-times" aria-hidden="true"></i>  </a>
                      <?php

                          }else{
                      ?>
                      <a href="<?php echo base_url('Admin/Admin_controller/inactive_notice/'.$notice_list->notice_id); ?>"><i style="color: green; font-size: 30px; margin-left: 10px;" class="fa fa-check" aria-hidden="true"></i></a>
                      <?php
                          }
                      ?>
                  </td>

                  <td>
                      <a href="<?php echo base_url('Admin/Admin_controller/notice_delete/'.$notice_list->notice_id); ?>" onclick="return confirm('<?php echo 'Are you Sure!'; ?>');"><i style="color: red; font-size: 30px; margin-left: 10px;" class="fa fa-trash" aria-hidden="true"></i></a>
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
