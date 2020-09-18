<head>
  <style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
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
                <h5 class="box-title" style="margin-left: 30px; margin-top: 20px; font-size: 14px;">Add Notice</h5>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

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




              <div class="container">
                <form action="<?php echo  base_url('Admin/Admin_controller/add_new_notice');?>" method="POST">
                  <label for="fname">Notice Titel</label>
                  <input type="text" id="fname" name="notice_titel" placeholder="Enter Notice Titel" required="required">

                  <label for="subject">Notice Description</label>
                  <textarea id="subject" name="notice_description" placeholder="Write Notice Description" style="height:200px" required="required"></textarea>

                  <?php 


                $date = date('Y-m-d');
                $date = strtotime($date);
                $date = strtotime("+7 day", $date);
                $nextdate = date('Y-m-d', $date);

                
                ?>


                  <label for="fname">Notice Start Date</label><br>
                  <input type="date" style="width: 50%; height: 40px; text-align:center; border-radius: 4px;"  id="fname" name="notice_start_date" placeholder="Enter Notice Titel" value="<?php echo date('Y-m-d');?>" min="<?php echo date('Y-m-d');?>"  max="<?php echo $nextdate;?>"><br><br>

                  
                  <label for="fname">Notice End Date</label><br>
                  <input type="date"style="width: 50%; height: 40px; text-align:center; border-radius: 4px;"  id="fname" name="notice_end_date" placeholder="Enter Notice Titel"
                  value="<?php echo $nextdate;?>" min="<?php echo date('Y-m-d');?>" max="<?php echo $nextdate;?>"><br><br><br>

                  <input type="submit" value="Submit">
                </form>
              </div>




            </div>
          </div>
        </div>
       
       





      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>

