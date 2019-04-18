<?php $this->load->view('partial/header');?>

    
    
    
    <section class="container members">
        <div class="row">
            <div class="col-md-12">
			     <div class="text-center std-img">
                        <img style="width:300px;height:300px;"src="<?php echo base_url($result['member_image']);?>" alt="" >
                        <hr> <br>
                    </div>
                <h2><?php echo $result['member_full_name']; ?></h2>
                <table class="table table-hover">
                    <tr>
                        <td>Member Phone </td>
                        <td><?php echo $result['member_phone']; ?></td>
                    </tr>
					
					<tr>
                        <td>Member Email Adress </td>
                        <td><?php echo $result['member_email']; ?></td>
                    </tr>
					
					
                    <tr>
                        <td>Member Division</td>
                        <td><?php echo $result['member_division']; ?></td>
                    </tr>
					
					<tr>
                        <td>Member age</td>
                        <td><?php echo $result['member_age']; ?></td>
                    </tr>
					<tr>
                        <td>Member Profession</td>
                        <td><?php echo $result['member_profession']; ?></td>
                    </tr>
					
					<tr>
                        <td>Educational Qualification</td>
                        <td><?php echo $result['member_edu_qualification']; ?></td>
                    </tr>
					
					<tr>
                        <td>Present Address</td>
                        <td><?php echo $result['member_present_address']; ?></td>
                    </tr>
					
					<tr>
                        <td>Permanent Address</td>
                        <td><?php echo $result['member_parmanent_address']; ?></td>
                    </tr>
					
					<tr>
                        <td>Division</td>
                        <td><?php echo $result['member_division']; ?></td>
                    </tr>	
					
					<tr>
                        <td>Height</td>
                        <td><?php echo $result['member_height']; ?></td>
                    </tr>	
					
					<tr>
                        <td>Weight</td>
                        <td><?php echo $result['member_weight']; ?></td>
                    </tr>	
					
					<tr>
                        <td>Marital Status</td>
                        <td><?php echo $result['member_marital_status']; ?></td>
                    </tr>	
					
					<tr>
                        <td>Dsate Of Birth</td>
                        <td><?php echo $result['member_birth']; ?></td>
                    </tr>
					
					
				   <tr>
                        <td>Smoke</td>
                        <td><?php echo $result['member_smoke']; ?></td>
                  
                    </tr>
					
					<tr>
                        <td>Diet</td>
                        <td><?php echo $result['member_diet']; ?></td>
                  
                    </tr>
					
					
					<tr>
                        <td>Father Name</td>
                        <td><?php echo $result['member_father_name']; ?></td>
                  
                    </tr>
					
					
					<tr>
                        <td>Father Occupation</td>
                        <td><?php echo $result['member_father_occupation']; ?></td>
                  
                    </tr>
					
					
					<tr>
                        <td>Mother Name</td>
                        <td><?php echo $result['member_mother_name']; ?></td>
                  
                    </tr>
					
					
					<tr>
                        <td>Mother Occupation</td>
                        <td><?php echo $result['member_mother_occupation']; ?></td>
                  
                    </tr>
					
					
					<tr>
                        <td>Sibling Details</td>
                        <td><?php echo $result['memeber_sibling_details']; ?></td>
                  
                    </tr>
					
					
					<tr>
                        <td>SSC Pass Year</td>
                        <td><?php echo $result['ssc_pass_year']; ?></td>
                  
                    </tr>
					
					
					<tr>
                        <td>SSC CGPA</td>
                        <td><?php echo $result['ssc_cgpa']; ?></td>
                  
                    </tr>
					
					
					<tr>
                        <td>HSC Pass Year</td>
                        <td><?php echo $result['hsc_pass_year']; ?></td>
                  
                    </tr>
					
					<tr>
                        <td>HSC CGPA</td>
                        <td><?php echo $result['hsc_cgpa']; ?></td>
                  
                    </tr>
					
					<tr>
                        <td>Occupation</td>
                        <td><?php echo $result['occupation']; ?></td>
                  
                    </tr>
					
					<tr>
                        <td>Working Industry</td>
                        <td><?php echo $result['working_industry']; ?></td>
                  
                    </tr>
					
					<tr>
                        <td>Monthly Income</td>
                        <td><?php echo $result['monthly_income']; ?></td>
                  
                    </tr>
					
					<tr>
                        <td>Office Address</td>
                        <td><?php echo $result['office_address']; ?></td>
                  
                    </tr>
					
					<tr>
                        <td>About Member</td>
                        <td><?php echo $result['write_yourself']; ?></td>
                  
                    </tr>
					
					
					
                </table>
            </div>
        </div>
    </section>
    
    <?php $this->load->view('partial/footer');?>