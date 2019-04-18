<?php $this->load->view('partial/header'); ?>
  <!-- Carousel Slider -->
  <section id="showcase">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-slide-to="0" data-target="#myCarousel" class="active"></li>
        <li data-slide-to="1" data-target="#myCarousel"></li>
       
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item carousel-img-1 active">
          <div class="container">
           
          </div>
        </div>
        <div class="carousel-item carousel-img-2">
          <div class="container">
          
          </div>
        </div>
        
      </div>
      <a href="#myCarousel" class="carousel-control-prev pb-5" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a href="#myCarousel" class="carousel-control-next pb-5" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>
  </section>
  
  <!-- Home Get Started -->
  <section id="home-getstarted" class="text-center text-light">
    <div class="dark-overlay">
      <div class="container">
        <div class="row py-5">
          <div class="col">
            <h2>Are You Ready To Get Started?</h2>
            <p class="lead mt-3">Then,Start your searching !!!</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--search option-->
  
    <section class="searchoption">
       <form class="form-inline" action="<?php echo base_url('Members/search');?>" method="post">
        <div class="container">
            <div class="row">
               
                <div class="col-md-2">
                    <div class="form-group">
    <select  name="member_division" class="form-control selectpicker" data-live-search="true" title="Select DIVISION..." id="division">
     
      <option value="Sylhet">Sylhet</option>
      <option value="Dhaka">Dhaka</option>
      <option value="Rajshahi">Rajshahi</option>
      <option value="Barisal">Barisal</option>
       <option value="Chittagong">Chittagong</option>
        <option value="Khulna">Khulna</option>
        <option value="Rangpur">Rangpur</option>
    </select>
  </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
    <select name="member_age" class="form-control selectpicker" data-live-search="true" title="Select age..." id="age">
      <option value="18">18</option>
      <option value="19">19</option>
      <option value="20">20</option>
      <option value="21">21</option>
      <option value="22">22</option>
      <option value="23">23</option>
      <option value="24">24</option>
      <option value="25">25</option>
      <option value="26">26</option>
      <option value="27">27</option>
      <option value="28">28</option>
      <option value="29">29</option>
      <option value="30+">30+</option>
    </select>
  </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
    <select name="member_gender" class="form-control selectpicker" data-live-search="true" title="Select gender..." id="gender">
      <option value="Female">Female</option>
      <option value="Male">Male</option>
     
    </select>
	</div>
                </div>
	
	
	<div class="col-md-3">
                    <div class="form-group">
    <select name="member_profession" class="form-control selectpicker" data-live-search="true" title="Select profession" id="profession">
      <option value="Doctor">Doctor</option>
      <option value="Student">Student</option>
     
     
    </select>
	

	
  </div>
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-unique btn-block waves-effect waves-light">Search</button>
                </div>
                
            </div>
        </div>
        </form>
    </section>
  
  
  
  

  <!-- Home Icon -->
  <section id="home-icon" class="py-5 text-center">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <i class="fa fa-gear"></i>
          <h3 class="my-2">Searching Match</h3>
          
        </div>
        <div class="col-md-4">
          <i class="fa fa-cloud"></i>
          <h3 class="my-2">Finding perfect one</h3>
          
        </div>
        <div class="col-md-4">
          <i class="fa fa-cart-plus"></i>
          <h3 class="my-2">Union</h3>
         
        </div>
      </div>
    </div>
  </section>
  
  
  
  
  
  
  <!-- Home Info -->
  <section id="home-info">
    <div class="container">
      <div class="row py-5">
        <div class="col-md-6 align-self-center">
          <h3>Perfect_Match_Best_Life</h3>
          <br>
          <p class="lead my-3">"It's so easy to fall in love but hard to find someone who will catch you."</p>
          
         <p class="lead my-3">  "Sometimes the one thing you are looking for is the one thing you can't see." "Nothing compares with the finding of true love; because once you do your heart is complete." "It is never too late to fall in love."</p>
          
        </div>
        <div class="col-md-6">
          <img src="<?php echo base_url()?>public/img/4.jpg" class="img-fluid rounded my-3" alt="PC">
        </div>
      </div>
    </div>
  </section>
  <!-- Home Video 
  <section id="home-video" class="text-center text-light">
    <div class="dark-overlay">
      <div class="container">
        <div class="row py-5 my-3">
          <div class="col">
            <div uk-lightbox>
              <iframe width="853" height="480" src="https://www.youtube.com/embed/aXRS-YzWyJw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <h2 class="mt-4">Look the Wedding video</h2>
          </div>
        </div>
      </div>
    </div>
  </section >-->
  
  <section class="about">
        <div class="container">
           
            <div class="about-video">
                <div class="video-area">
                    <div class="row">
                        <div class="col-md-8">
                            <h3 class="text-center">Check in. Step out. See the world.</h3> <br>
                            <p class="text-center">Watch an amazing couple</p>
                        </div>
                        <div class="col-md-4">
                            <div class="video-content">
                                <a class="video" target="_blank" title="Video Button" href=" https://www.facebook.com/weddingstorysylhetbykhaled/videos/1804570256301291/?t=6"><img src="<?php echo base_url()?>public/img/play-btn.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  
  

	<section class="feature">
		<div class="container">
			<div class="row">
        <div class="col">
			<div class="feature-title">
				<h2>Recent Uploaded profile</h2>
                   <h2 class="lead"> You can check</h2>
			</div>
          
        </div>
      </div>
			<div class="row">
				
			
			<?php
                    
                        foreach ($view_all_list_member as $count) { 
                            $member_id     = $count['member_id'];
                            $member_full_name   = $count['member_full_name'];
                            $member_phone = $count['member_phone'];
                            $member_division = $count['member_division'];
                            $member_age = $count['member_age'];
							$member_image= $count['member_image'];
			
			?>
			<div class="col-md-4">
				<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="<?php echo base_url()."$member_image"?>" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?php echo $member_full_name; ?></h5>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><?php echo $member_division; ?></li>
    <li class="list-group-item"><?php echo $member_age; ?></li>
  </ul>
  <div class="card-body">
    <a class="btn btn-unique btn-block waves-effect waves-light" href="<?php echo base_url('')."members/details/$member_id"; ?>">View Details</a>
    
  </div>
</div>
			</div>
			<?php
                          } 
                    ?>
			</div>
		</div>
	</section>
	
	
	
	
	
	
	
	
	
  <!-- Photo Gallery 
  <section id="gallery" class="py-5 text-center" uk-lightbox>
    <div class="container">
      <div class="row">
        <div class="col">
          <h2>Recent Uploaded profile</h2>
          <p class="lead">You can check</p>
        </div>
      </div>
      <div class="row py-0 py-sm-3">
        <div class="col-md-4">
          <div>
            <a href="img/image1.jpeg">
              <img src="img/image1.jpeg" class="img-fluid" alt="">
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div>
            <a href="img/bg1.jpeg">
              <img src="img/bg1.jpeg" class="img-fluid" alt="">
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div>
            <a href="img/image3.jpeg">
              <img src="img/image3.jpeg" class="img-fluid" alt="">
            </a>
          </div>
        </div>
      </div>
      <div class="row py-0 py-sm-2">
        <div class="col-md-4">
          <div>
            <a href="img/image4.jpeg">
              <img src="img/image4.jpeg" class="img-fluid" alt="">
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div>
            <a href="img/image5.jpeg">
              <img src="img/image5.jpeg" class="img-fluid" alt="">
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div>
            <a href="img/image6.jpeg">
              <img src="img/image6.jpeg" class="img-fluid" alt="">
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>-->
  
<?php $this->load->view('partial/footer'); ?>
