<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <link rel="stylesheet" href="<?php echo base_url()?>public/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>public/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>public/css/now.css">
  
  
 
  <title><?php echo $title;?></title>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary fixed-top">
  <a class="navbar-brand" href="#">E-Couple-match</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('home');?>">Home <span class="sr-only">(current)</span></a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('Memberdashboard');?>">View Details </a>
      </li><li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('Memberdashboard/edit_user');?>">Update </a>
      </li>
      
    </ul>
  </div>
</nav>


<div class="main mt-5">
  <div class="container"> 
    
    <div class="row justify-content-center"> 
  <div class="col-md-5 mt-5"> 
            
               
                  <form action="<?php echo base_url('Memberdashboard/update_profile/'.$members['member_id']);?>" method="post">
          


      <div class="form-group">
    
    
   
      <div class="form-group">
     <label for="">Member Name</label>
    <input type="text" class="form-control"  value="<?php echo $members['member_full_name'];?>" name="member_full_name">
     </div>
  <div class="form-group">
    <label for="">Member Phone</label>
   
    <input type="text" class="form-control" value="<?php echo $members['member_phone'];?>" name="member_phone">
  </div>
  
 
  <div class="form-group">
    <label for="">Member Present Address</label>
   
    <input type="text" class="form-control" value="<?php echo $members['member_present_address'];?>" name="member_present_address">
  </div>
  
  <div class="form-group">
    <label for="">Member Permanent Address</label>
   
    <input type="text" class="form-control" value="<?php echo $members['member_parmanent_address'];?>" name="member_parmanent_address">
  </div>
  
  
  <div class="form-group">
    <label for="">Member Age</label>
   
    <input type="text" class="form-control" value="<?php echo $members['member_age'];?>" name="member_age">
  </div>
  <div class="form-group">
    <label for="">Educational Qualification</label>
   
    <input type="text" class="form-control" value="<?php echo $members['member_edu_qualification'];?>" name="member_edu_qualification">
  </div>
  <div class="form-group">
    <label for="">Member Profession</label>
   
    <input type="text" class="form-control" value="<?php echo $members['member_profession'];?>" name="member_profession">
  </div>
  <div class="form-group">
    <label for="">Member Division</label>
   
   
	<select  name="member_division" class="form-control selectpicker" data-live-search="true" title="Select DIVISION..." id="division">
     
      <option value="<?php echo $members['member_division'];?>"><?php echo $members['member_division'];?></option>
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
    <label for="">Member Height</label>
   
    <input type="text" class="form-control" value="<?php echo $members['member_height'];?>" name="member_height">
  </div>
  
  <div class="form-group">
    <label for="">Member Weight</label>
   
    <input type="text" class="form-control" value="<?php echo $members['member_weight'];?>" name="member_weight">
  </div>
  
  
  <div class="form-group">
    <label for="">Member_Marital_Status </label>
	
	<select  name="member_marital_status" class="form-control selectpicker" data-live-search="true" title="Member_Marital_Status..." id="status">
     
      <option value="<?php echo $members['member_marital_status'];?>"><?php echo $members['member_marital_status'];?></option>
      <option value="Single">Single</option>
      <option value="Married">Married</option>
      <option value="Widow">Widow</option>
      
     </select>
  </div>
	
   
  
  <div class="form-group">
    <label for="">Member Date Of Birth</label>
   
    <input type="text" class="form-control" value="<?php echo $members['member_birth'];?>" name="member_birth">
  </div>
  
 
  
  <div class="form-group">
    <label for="">Smoke </label>
	
	<select  name="member_smoke " class="form-control selectpicker" data-live-search="true" title="member_smoke ..." id="smoke">
     
      <option value="<?php echo $members['member_smoke'];?>"><?php echo $members['member_smoke'];?></option>
      <option value="Yes">Yes</option>
      <option value="No">No</option>
      
      
     </select>
  </div>
   	
  <div class="form-group">
    <label for="">Diet </label>
	
	<select  name="member_diet " class="form-control selectpicker" data-live-search="true" title="member_diet ..." id="diet">
     
      <option value="<?php echo $members['member_diet'];?>"><?php echo $members['member_diet'];?></option>
      <option value="Vegetarian">Vegetarian</option>
      <option value="Non-Vegetarian">Non-Vegetarian</option>
      
      
     </select>
  </div>
  
  <div class="form-group">
    <label for="">Father Name</label>
   
    <input type="text" class="form-control" value="<?php echo $members['member_father_name'];?>" name="member_father_name">
  </div>
  
  
  <div class="form-group">
    <label for="">Father Occupation</label>
   
    <input type="text" class="form-control" value="<?php echo $members['member_father_occupation'];?>" name="member_father_occupation">
  </div>
  
  
  <div class="form-group">
    <label for="">Mother Name</label>
   
    <input type="text" class="form-control" value="<?php echo $members['member_mother_name'];?>" name="member_mother_name">
  </div>
  
  
  <div class="form-group">
    <label for="">Mother Occupation</label>
   
    <input type="text" class="form-control" value="<?php echo $members['member_mother_occupation'];?>" name="member_mother_occupation">
  </div>
  
  
  <div class="form-group">
    <label for="">Sibling Details </label>
	
	   
	 <textarea name="memeber_sibling_details" value="<?php echo $members['memeber_sibling_details'];?>" rows="4" cols="45"></textarea>
  

  
  </div>
  
  
  <div class="form-group">
    <label for="">SSC Pass Year</label>
   
    <input type="text" class="form-control" value="<?php echo $members['ssc_pass_year'];?>" name="ssc_pass_year">
  </div>
  
  <div class="form-group">
    <label for="">SSC CGPA</label>
   
    <input type="text" class="form-control" value="<?php echo $members['ssc_cgpa'];?>" name="ssc_cgpa">
  </div>
  
  
  
  <div class="form-group">
    <label for="">HSC Pass Year</label>
   
    <input type="text" class="form-control" value="<?php echo $members['hsc_pass_year'];?>" name="hsc_pass_year">
  </div>
  
  <div class="form-group">
    <label for="">HSC CGPA</label>
   
    <input type="text" class="form-control" value="<?php echo $members['hsc_cgpa'];?>" name="hsc_cgpa">
  </div>
  
  <div class="form-group">
    <label for="">Occupation</label>
   
    <input type="text" class="form-control" value="<?php echo $members['occupation'];?>" name="occupation ">
  </div> 
  
  <div class="form-group">
    <label for="">Working Industry</label>
   
    <input type="text" class="form-control" value="<?php echo $members['working_industry'];?>" name="working_industry">
  </div>
  
  
  <div class="form-group">
    <label for="">Monthly Income </label>
   
    <input type="text" class="form-control" value="<?php echo $members['monthly_income'];?>" name="monthly_income">
  </div>
  
  
  <div class="form-group">
    <label for="">Office Address</label>
   
    <input type="text" class="form-control" value="<?php echo $members['office_address'];?>" name="office_address">
  </div>
  
  
  <div class="form-group">
    <label for="">Write Yourself</label>
	
	   
	
	 <?php $textarea_options = array('class' => 'form-control', 'name' => 'write_yourself', 'rows' => 4,   'cols' => 40);

echo form_textarea('write_yourself', set_value('write_yourself'),  $textarea_options);?>
  

  
  </div>
  
 
  
  
  
  
  
  
  
  
  <br>
     <div class="form-group">
    <label for="">Member Image</label>
   
    <input type="file" class="form-control-file" name="member_image">
  </div>

     <button type="submit" class="btn btn-primary">Update</button>
       </form>
   </div>

</div>
</div>
</div>
  

</body>
</html>






