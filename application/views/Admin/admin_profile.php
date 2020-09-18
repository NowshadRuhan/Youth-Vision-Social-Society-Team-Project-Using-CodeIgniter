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
              <img src="<?php echo base_url('resource/admin-icon.png');?>" alt="Mike" style="width:30%">
              <div class="container">
                <h2><?php echo $admin->full_name;?></h2>
                <p class="title"><?php echo $admin->user_email;?></p>
                <p><?php echo $admin->user_city;?></p>
                <p><?php echo $admin->user_phone;?></p>
                <a href="<?php echo base_url('Admin/Admin_controller/profile_admin_edit');?>"><p><button class="button">Edit</button></p></a>
              </div>
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


