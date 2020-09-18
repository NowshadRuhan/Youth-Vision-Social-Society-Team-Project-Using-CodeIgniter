<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="margin-top:  50px;">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">
     
  
     
     
      <!-- Small boxes (Stat box) -->
      <div class="row">
       
      <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
                <h5 class="box-title" style="margin-left: 30px; margin-top: 20px; font-size: 14px;">Members List</h5>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="col-sm-12 table-responsive">
                  <table class="table table-bordered">
                <tbody>
                  <tr>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>City</th>
                    <th>Phone</th>
                    <th>Status</th>
                    <th>Membership</th>
                </tr>
                <?php if($users): foreach($users as $user): ?>
                <tr>
                  
                  <td style="width: 220px;"><a href="#"><?php echo $user->full_name; ?></a></td>
                  <td><?php echo $user->user_email; ?></td>
                  <td><?php echo $user->user_city; ?></td>
                  <td><?php echo $user->user_phone; ?></td>     
                   
                  <td>
                      <?php 
                        if($user->user_status == 0){
                      ?>
                      <a href="<?php echo base_url('Admin/Admin_controller/change_status_in_active/'.$user->user_id); ?>" > 
                      <i style="color: red; font-size: 30px; margin-left: 10px;" class="fa fa-times" aria-hidden="true"></i></a>
                      <?php

                        }else{
                      ?>
                      <a href="<?php echo site_url('Admin/Admin_controller/change_status_in_not_active/'.$user->user_id); ?>" >
                      <i style="color: green; font-size: 30px; margin-left: 10px;" class="fa fa-check" aria-hidden="true"></i></a>
                      <?php
                        }

                      ?></a>
                  </td>



                  <td>
                      <?php 
                        if($user->confirm_to_member == 0){
                      ?>
                      <a href="<?php echo site_url('Admin/Admin_controller/change_membership_in_active/'.$user->user_id); ?>" class="btn btn-danger btn-xs">
                      <?php
                            echo "Not Member";
                      ?></a>
                      <?php

                        }else{
                      ?>
                      <a href="<?php echo site_url('Admin/Admin_controller/change_membership_in_not_active/'.$user->user_id); ?>" class="btn btn-success btn-xs">
                      <?php

                         echo "Member";
                      ?></a>
                      <?php
                        }

                      ?></a>
                  </td>

                  
                </tr>
                <?php endforeach; endif; ?>
                
              </tbody>
              </table>
             
              </div>
            </div>
          </div>
        </div>
       
       
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
