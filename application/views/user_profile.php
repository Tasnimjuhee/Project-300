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
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('Memberdashboard/edit_user');?>">Update </a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('Memberdashboard/logout');?>">Logout </a>
      </li>
      
    </ul>
  </div>
</nav>

<div class="main mt-5">
  <div class="container"> 
    
    <div class="row justify-content-center"> 
     <div class="personal_info_view col-md-10 offset-md-1">
	    <div class="text-center std-img">
                        <img style="width:300px;height:300px;"src="<?php echo base_url($members['member_image']);?>" alt="" >
                        <hr> <br>
                    </div>
     </div>
	 <table class="table table-striped std_view_tab">
                        <tbody>
                            <tr>
                                <th scope="row">Member Name</th>
                                <td>
                                    <?php echo $members['member_full_name']?>
                                </td>

                                <th scope="row">Member Email</th>
                                <td>
                                    <?php echo $members['member_email']?>
                                </td>
                            </tr>
							<tr>
                                <th scope="row">Member Phone</th>
                                <td>
                                    <?php echo $members['member_phone']?>
                                </td>

                                <th scope="row">Member Age</th>
                                <td>
                                    <?php echo $members['member_age']?>
                                </td>

                            </tr>
							<tr>
							
							


                                <th scope="row">Member Gender</th>
                                <td>
                                    <?php echo $members['member_gender']?>
                                </td>
								
								 <th scope="row">Member division</th>
                                <td>
                                    <?php echo $members['member_division']?>
                                </td>
								
								
								
                            </tr>
							<tr>
                                <th scope="row">Educational Qualification</th>
                                <td>
                                    <?php echo $members['member_edu_qualification']?>
                                </td>

                                <th scope="row">Member Profession</th>
                                <td>
                                    <?php echo $members['member_profession']?>
                                </td>
                            </tr>
							<tr>
                                

                                 <th scope="row">Member Present Address</th>
                                <td>
                                    <?php echo $members['member_present_address']?>
                                </td>
								
								<th scope="row">Member parmanent address</th>
                                <td>
                                    <?php echo $members['member_parmanent_address']?>
                                </td>
                            </tr>
							<tr>
                                <th scope="row">Member height</th>
                                <td>
                                    <?php echo $members['member_height']?>
                                </td>

                                <th scope="row">Member Weight</th>
                                <td>
                                    <?php echo $members['member_weight']?>
                                </td>
                            </tr>
							
							
							<tr>
                                <th scope="row">Member Marital Status</th>
                                <td>
                                    <?php echo $members['member_marital_status']?>
                                </td>

                                <th scope="row">Member Date Of Birth</th>
                                <td>
                                    <?php echo $members['member_birth']?>
                                </td>
                            </tr>
											
							<tr>
                                <th scope="row">Smoke</th>
                                <td>
                                    <?php echo $members['member_smoke']?>
                                </td>

                                <th scope="row">Member-Diet</th>
                                <td>
                                    <?php echo $members['member_diet']?>
                                </td>
                            </tr>
							
							<tr>
                                <th scope="row">Father Name </th>
                                <td>
                                    <?php echo $members['member_father_name']?>
                                </td>

                                <th scope="row">Father Occupation</th>
                                <td>
                                    <?php echo $members['member_father_occupation']?>
                                </td>
                            </tr>
										
							<tr>
                                <th scope="row">Mother Name </th>
                                <td>
                                    <?php echo $members['member_mother_name']?>
                                </td>

                                <th scope="row">Mother Occupation</th>
                                <td>
                                    <?php echo $members['member_mother_occupation']?>
                                </td>
                            </tr>
										
							<tr>
                                <th scope="row">Siblings Details</th>
                                <td>
                                    <?php echo $members['memeber_sibling_details']?>
                                </td>
								</tr>
                             
							 <tr>
                                <th scope="row"> SSC Pass Year</th>
                                <td>
                                    <?php echo $members['ssc_pass_year']?>
                                </td>

                                <th scope="row">SSC CGPA </th>
                                <td>
                                    <?php echo $members['ssc_cgpa']?>
                                </td>
                            </tr>
							 
							 
							  <tr>
                                <th scope="row"> HSC Pass Year</th>
                                <td>
                                    <?php echo $members['hsc_pass_year']?>
                                </td>

                                <th scope="row">HSC CGPA </th>
                                <td>
                                    <?php echo $members['hsc_cgpa']?>
                                </td>
                            </tr> 
							
							<tr>
                                <th scope="row"> Occupation</th>
                                <td>
                                    <?php echo $members['occupation']?>
                                </td>
								

                                <th scope="row">Working Industry </th>
                                <td>
                                    <?php echo $members['working_industry']?>
                                </td>
                            </tr>
							
							<tr>
                                <th scope="row"> Monthly Income </th>
                                <td>
                                    <?php echo $members['monthly_income']?>
                                </td>

                                <th scope="row">Office Address </th>
                                <td>
                                    <?php echo $members['office_address']?>
                                </td>
                            </tr>
							
							<tr>
                                <th scope="row">Write Yourself </th>
                                <td>
                                    <?php echo $members['write_yourself']?>
                                </td>
								</tr>
                               
                            		
							
							
							
		</tbody>
                    </table>
					<a class="nav-link" href="<?php echo base_url('Memberdashboard/edit_user/'.$members['member_id']);?>">Update <span class="sr-only">(current)</span></a>
					<a class="nav-link" href="<?php echo base_url('Memberdashboard/member_delete/'.$members['member_id']);?>" onclick="return confirm('Are you sure to delete?')">Delete <span class="sr-only">(current)</span></a>
					
</div>
</div>
</div>
  

</body>
</html>






