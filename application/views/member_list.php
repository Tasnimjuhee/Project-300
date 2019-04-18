<?php $this->load->view('partial/header');?>


    
   
    
    <section class="container members">
        <div class="row">
            <div class="col-md-12">
                <div id="test-list">

                    <h4>Take a Look to the Member List</h4>
                    <ul class="grid cs-style-5 list">
                    <!-- All List -->
                    <!-- Search Bar Result Starts -->
                    <?php
                    if(!isset($view_member)){ $sl=0;
                        foreach ($view_all_list_member as $count) { 
                            $member_id     = $count['member_id'];
                            $member_full_name   = $count['member_full_name'];
                            $member_phone = $count['member_phone'];
                            $member_division = $count['member_division'];
                            $member_age = $count['member_age'];
							$member_image= $count['member_image'];
                    ?>
                
                        <li class="col-md-3 list-item">
                            <figure>
                                <img src="<?php echo base_url()."$member_image"?>">
                                <!-- <figcaption> -->
                                    <h3 class="membername"><?php echo $member_full_name; ?></h3>
                                    <p><?php echo $member_division; ?></p>
                                    <p><?php echo $member_age; ?></p>
                                    <p><?php echo $member_phone; ?></p>
                                    <a href="<?php echo base_url('')."members/details/$member_id"; ?>">View Details</a>
                                <!-- </figcaption> -->
                            </figure>
                        </li>
                        <?php
                        ++$sl; }  } 
                    ?>
                </ul>
                    <!-- Search Bar Result Starts -->
                    <ul class="grid cs-style-5 list">
                    <?php
                    if(isset($view_member)){ $sl=0;
                        foreach ($view_member as $count) { 
                            $member_id     = $count['member_id'];
                            $member_full_name   = $count['member_full_name'];
                            $member_phone = $count['member_phone'];
                            $member_division = $count['member_division'];
                            $member_age = $count['member_age'];
                            $member_image= $count['member_image'];
                    ?>
                
                        <li class="col-md-3">
                            <figure>
                                <img src="<?php echo base_url()."$member_image"?>">
                                <!-- <figcaption> -->
                                    <h3 class="bookname"><?php echo $member_full_name; ?></h3>
                                    <p><?php echo $member_division; ?></p>
                                    <p><?php echo $member_age; ?></p>
                                    <p><?php echo $member_phone; ?></p>
                                    <a href="<?php echo base_url('')."members/details/$member_id"; ?>">View Details</a>
                                <!-- </figcaption> -->
                            </figure>
                        </li>
                        <?php
                        ++$sl; }  } 
                        ?>
                        </ul>
                        
	</div>
                </div>
            </div>
        </div>
    </section>

    
    
    <?php $this->load->view('partial/footer');?>