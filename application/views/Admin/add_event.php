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
                <h5 class="box-title" style="margin-left: 30px; margin-top: 20px; font-size: 14px;">Add Event</h5>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="container">
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



              <div class="container" >
                <form action="<?php echo  base_url('Admin/Admin_controller/addEvent');?>" method="POST">
                  <label for="fname">Event Date</label><br>
                  <input type="date" style="width: 50%; height: 40px;  border-radius: 4px;"  id="fname" name="event_date" placeholder="Enter Notice Titel" value="<?php echo date('Y-m-d');?>"  min="<?php echo date('Y-m-d');?>"><br><br>

                  <label for="fname">Event Titel</label><br>
                  <input type="text" style="width: 50%; height: 40px;  border-radius: 4px;" id="fname" name="event_titel" placeholder="Enter Event Titel" required="required"><br><br>

                  <label for="fname">Event Place</label><br>
                  <input type="text" style="width: 50%; height: 40px;  border-radius: 4px;" id="fname" name="event_place" placeholder="Enter Event Place" required="required"><br><br>

                  <label for="fname">Event Chief Guest</label><br>
                  <input type="text" style="width: 50%; height: 40px;  border-radius: 4px;" id="fname" name="event_Chief_Guest" placeholder="Enter Event Chief Guest" required="required"><br><br>

                  <label for="subject">Event Description</label><br>
                  <textarea id="subject" style="width: 50%; height: 500px;  border-radius: 4px;" name="event_description" placeholder="Write Event Description" style="height:200px" required="required"></textarea><br>

                  

                  

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

