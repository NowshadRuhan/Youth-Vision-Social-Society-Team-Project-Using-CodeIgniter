<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 100%;
  margin-top: 50px;
  margin-bottom: 16px;
  padding: 0 8px;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

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
  
     
     
      <!-- Small boxes (Stat box) -->
      <div class="row" align="center">

        <div class="col-md-3"></div>
        
        <div class="col-md-6">

          <?php   
              if($admins){


                  foreach ($admins as $admin) {
                   

          ?>

          <div class="column">
            <div class="card">
              <form action="<?php echo base_url('Admin/Admin_controller/edit_profile');?>" method="POST">
                <img src="<?php echo base_url('resource/admin-icon.png');?>" alt="profile" style="width:30%">
                <div class="container" align="center">
                  <input style="text-align: center; font-size: 26px; font-style: bold;" type="text" name="admin_full_name" value="<?php echo $admin->full_name;?>">
                  
                  <input style="text-align: center; font-size: 20px; font-style: bold;" type="text" name="admin_email" value="<?php echo $admin->user_email;?>">

                  <input style="text-align: center; font-size: 20px; font-style: bold;" type="text" name="admin_city" value="<?php echo $admin->user_city;?>">

                  <input style="text-align: center; font-size: 20px; font-style: bold;" type="text" name="admin_phone" value="<?php echo $admin->user_phone;?>">

                  <p><button class="button">Submit</button></p>
                </div>
              </form>
            </div>
          </div>
         
        </div>

        <?php 

          }
        }
        ?>
       
        <div class="col-md-3"></div>




      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>


