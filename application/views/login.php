<?php $this->load->view('partial/header'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/css/main.css">

	
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
			
				<form action="<?php echo base_url('Login');?>" method="post" class="login100-form validate-form">
					<span class="login100-form-title p-b-34">
						Account Login
					</span>
					<span class="login100-form-title p-b-34" style="color:red"><?php echo validation_errors(); ?></span>
					<div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type user name">
						<input id="first-name" class="input100" type="text" name="member_email" placeholder="Email">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Type password">
						<input class="input100" type="password" name="member_pass" placeholder="Password">
						<span class="focus-input100"></span>
					</div>
					
					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Sign in
						</button>
					</div>

					<!--<div class="w-full text-center p-t-27 p-b-239">
						<span class="txt1">
							Forgot
						</span>

						<a href="#" class="txt2">
							User name / password?
						</a>
					</div>-->

					<div class="w-full text-center">
						<a href="<?php echo base_url('signup')?>" class="txt3">
							Sign Up
						</a>
					</div>
				</form>

				<div class="login100-more" style="background-image: url('<?php echo base_url()?>public/images/8.jpg');"></div>
			</div>
		</div>
	</div>
	

<?php $this->load->view('partial/footer'); ?>