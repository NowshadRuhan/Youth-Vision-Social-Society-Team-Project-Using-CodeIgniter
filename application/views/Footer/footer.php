<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-4 left-footer">
				
				<br><br><br>
				<i style="color: #FFFFFF; font-size: 30px; margin-bottom: -5px;" class="fas fa-phone-square"></i> <span style="color: #FFFFFF; font-size: 15px;"> +8801755845637, +8801779878139</span>
				<br><br>
				<i style="color: #FFFFFF; font-size: 30px; margin-bottom: -5px;" class="fas fa-envelope"></i> <span style="color: #FFFFFF; font-size: 15px;">youth_vision@gmail.com</span>
				<br><br>
				<i style="color: #FFFFFF; font-size: 30px; margin-bottom: -5px;" class="fas fa-location-arrow"></i> <span style="color: #FFFFFF; font-size: 15px;"> Bangladesh</span>
			</div>

			<div class="col-md-2 left-footer">
				
			</div>


			<div class="col-md-6 col-sm-4 left-footer">
				<iframe style="margin-top: 50px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3618.056562934266!2d91.97082851432155!3d24.93014294860234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3750528c2c2cc939%3A0x92db0b91a63cd3c0!2sMetropolitan+University%2C+Sylhet+Main+Campus!5e0!3m2!1sen!2sbd!4v1552746486171" width="100%;" height="250" frameborder="0" style="border:1" allowfullscreen></iframe>
      
			</div>
		</div>
	</div>

	<div style="width: 100%; height: 80px; background-color: black; margin-top: 50px; ">
		<h6 style="text-align: center; color: #3399CC; padding-top: 30px; opacity: .5;">Copyright © 2019-  </h6>
	</div>
</footer>




<!-- MAIN JS -->
<script src="<?php echo base_url(); ?>resource/vendor/jquery/jquery-3.1.0.min.js"></script>

<!-- Fontawesome JS -->
<script src="<?php echo base_url(); ?>resource/vendor/fontawesome/all.min.js"></script>

<!-- Bootstrap JS -->
<script src="<?php echo base_url(); ?>resource/vendor/bootstrap-4.3.1/bootstrap.min.js"></script>

</body>
</html>

<script type="text/javascript">
	

	$(document).ready(function(){

	  $('.in1').focus(function(){
	    $(this).parent().find(".label-txt").addClass('label-active');
	  });

	  $(".in1").focusout(function(){
	    if ($(this).val() == '') {
	      $(this).parent().find(".label-txt").removeClass('label-active');
	    };
	  });

	});
</script>