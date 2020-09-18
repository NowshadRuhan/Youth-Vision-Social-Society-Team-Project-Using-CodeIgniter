<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>resource/assets/css/reg.css">

<form class="reg-form" action="<?php echo base_url('Account/reg_account');?>" method="post">

  <?php
      if($this->session->flashdata('error_in_pass')){
      ?>
      <div class="alert alert-danger">
        <?php echo $this->session->flashdata('error_in_pass');?>
        
      </div>
      <?php
      }

      if($this->session->flashdata('error_in_validation')){
      ?>
      <div class="alert alert-danger">
        <?php echo $this->session->flashdata('error_in_validation');?>
        
      </div>
      <?php
      }

   

  ?>

  <label class="lav">
    <p class="label-txt">FULL-NAME</p>
    <input type="text" name="full_name" required="required" class="in1">
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>


  <label class="lav">
    <p class="label-txt">EMAIL</p>
    <input type="email" name="user_email" required="required" class="in1">
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>


  <label class="lav">
    <p class="label-txt">PASSWORD</p>
    <input type="password" name="user_pass" required="required" class="in1">
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>

  <label class="lav">
    <p class="label-txt">RE-PASSWORD</p>
    <input type="password" name="user_re_pass" required="required" class="in1">
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>

  <label class="lav">
    <p class="label-txt">CITY</p>
    <input type="text" name="user_city" required="required" class="in1">
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>

  <label class="lav">
    <p class="label-txt">PHONE</p>
    <input type="number" name="user_phone" required="required" class="in1">
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>


  <button class="reg-submit" type="submit">submit</button>
</form>


