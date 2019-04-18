<?php $this->load->view('partial/header'); ?>

  
<body>
	
  
    <div class="main">
        <div class="container-fluid">
			<div class="row">
			<div class="col-md-12 text-center">
			<span color="red">
            <?php echo validation_errors(); ?></span>
        <?php
if($this->session->flashdata('mitem')) {
  $message = $this->session->flashdata('mitem');
  ?>
        <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Success!</strong>
            <?php echo $message['message']; ?>
        </div>

        <?php 
}
?>
</div>
            <div class="col-xs-12 col-md-6">
                <div class="signup-img">
                    <img src="<?php echo base_url()?>public/images/26.jpg" alt="">
                </div>
                </div>
				<div class="col-xs-12 col-md-6">
                <div class="signup-form">
                    <form method="POST" action="<?php echo base_url('Signup/member_register');?>" enctype="multipart/form-data" class="register-form" id="register-form">
                        <h2>Member registration form</h2>
                        <br>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">Full Name :</label>
                                <input type="text" name="member_full_name" id="name">
                            </div>
                            <div class="form-group">
                            <label for="email">Email ID :</label>
                            <input type="email" name="member_email" id="email" />
                        </div>
                        </div>
						<div class="form-row">
						<div class="form-group">
                            <label for="password">Password :</label>
                            <input type="password" name="member_pass" id="passord">
                        </div>
                        
                          <div class="form-group">
                            <label for="confirm-password">Confirm-Password :</label>
                            <input type="password" name="member_confirm_pass" id="confirm-passord">
                        </div>
						 </div>
                        <div class="form-group">
                            <label for="address">Present Address :</label>
                            <input type="text" name="member_present_address" id="address" required/>
                        </div>
						<div class="form-group">
                            <label for="paddress">Parmanent Address :</label>
                            <input type="text" name="member_parmanent_address" id="paddress" required/>
                        </div>
                        <div class="form-radio">
                            <label for="gender" class="radio-label">Gender :</label>
                            <div class="form-radio-item">
                                <input type="radio" name="member_gender"  value="Male" id="male" checked>
                                <label for="male">Male</label>
                                <span class="check"></span>
                            </div>
                            <div class="form-radio-item">
                                <input type="radio" name="member_gender"  value="Female" id="female">
                                <label for="female">Female</label>
                                <span class="check"></span>
                            </div>
                        </div>
                    <div class="form-group">
    <select name="member_division">
      <option value="">Select Division</option>
      <option value="Sylhet">Sylhet</option>
      <option value="Dhaka">Dhaka</option>
      <option value="Rajshahi">Rajshahi</option>
      <option value="Barisal">Barisal</option>
       <option value="Chittagong">Chittagong</option>
        <option value="Khulna">Khulna</option>
        <option value="Rangpur">Rangpur</option>
    </select>
  </div>
                        <div class="form-group">
                            <label for="contact">Contact Number :</label>
                             <input type="text" name="member_phone" id="contact">
                            
                            
                        </div>
						<div class="form-row">
                        <div class="form-group">
                            <label for="member_age">Age :</label>
                            <input type="text" name="member_age" id="member_age">
                        </div>
						
						<div class="form-group">
                            <select name="member_profession" id="profession">
      <option value="Doctor">Doctor</option>
      <option value="Student">Student</option>
     <option value="test">test</option>
     
    </select>
                        </div>
                        </div>
                        <div class="form-group">
                            <label for="member_edu_qualification">Educational Qualification :</label>
                            <input type="text" name="member_edu_qualification" id="member_edu_qualification">
                        </div>
						<div class="form-group">
                            <label for="member_image">Upload Image :</label>
                            <input type="file" name="member_image" id="member_image">
                        </div>
                        
                        
                        
                        
                        <div class="form-submit">
                            <input type="submit" value="Reset All" class="submit" name="reset" id="reset" />
                            <input type="submit" value="Submit Form" class="submit" name="submit" id="submit" />
                        </div>
                    </form>
                </div>
            </div>
            </div>
        </div>

    </div>

</body>
</html>
<?php $this->load->view('partial/footer'); ?>