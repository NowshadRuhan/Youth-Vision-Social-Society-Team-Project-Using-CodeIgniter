<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>resource/assets/css/reg.css">

<form class="reg-form" action="<?php echo base_url('Account/loginVerification');?>" method="post">

  <?php
      if($this->session->flashdata('error_login_wrong_pass')){
      ?>
      <div class="alert alert-danger">
        <?php echo $this->session->flashdata('error_login_wrong_pass');?>
        
      </div>
      <?php
      }
  ?>

  <?php
      if($this->session->flashdata('error_login_account_not_valid')){
      ?>
      <div class="alert alert-danger">
        <?php echo $this->session->flashdata('error_login_account_not_valid');?>
        
      </div>
      <?php
      }
  ?>

  <?php
      if($this->session->flashdata('error_login_wrong_email')){
      ?>
      <div class="alert alert-danger">
        <?php echo $this->session->flashdata('error_login_wrong_email');?>
        
      </div>
      <?php
      }
  ?>

  <?php
      if($this->session->flashdata('error_login')){
      ?>
      <div class="alert alert-danger">
        <?php echo $this->session->flashdata('error_login');?>
        
      </div>
      <?php
      }
  ?>

  <?php
      if($this->session->flashdata('check_email')){
      ?>
      <div class="alert alert-warning">
        <?php echo $this->session->flashdata('check_email');?>
        
      </div>
      <?php
      }
  ?>


  <label class="lav">
    <p class="label-txt">EMAIL</p>
    <input type="email" name="user_email_login" required="required" class="in1">
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>


  <label class="lav">
    <p class="label-txt">PASSWORD</p>
    <input type="password" name="user_pass_login" required="required" class="in1">
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>

  


  <button class="reg-submit" type="submit">submit</button>
</form>
