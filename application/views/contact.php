<?php $this->load->view('partial/header'); ?>
  

<body>
 
  <header id="page-header">
    <div class="container">
      <div class="row">
        <div class="col-md-6 m-auto text-center text-light">
          <h1>Contact Us</h1>
          <p class="lead">Any kind of info send your opinion.</p>
        </div>
      </div>
    </div>
  </header>
  <!-- Contact Section -->
  <section id="contact" class="py-5">
    <div class="container">
      <div class="row pt-5">
        <div class="col-md-8">
          <div class="card">
            <div class="card-body">
              <h4 class="mb-4 text-center">Please fill out this form to contact us</h4>
			  <p style="color: green;"><?php echo $flash;?></p>
              <div class="row">
                <div class="col-md-6">
				<form action="<?php echo site_url('Contact/sendmail')?>" method ='post'>
                  <div class="form-group">
                    <input type="text" placeholder="Name" name="name" class="form-control">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" placeholder="Subject" name="subject" class="form-control">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="email" placeholder="Email" name="email" class="form-control">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" placeholder="Phone Number" name="phone" class="form-control">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <textarea cols="30" rows="5" placeholder="Message" name="message" class="form-control"></textarea>
                  </div>
                </div>
                <div class="col-md-12">
                  <input type="submit" class="btn  btn-block btn-dark" value="Send">
                </div>
				</form>
              </div>
            </div>
          </div>
        </div>
         <div class="col-md-4">
          <div class="card">
            <div class="card-body">
              <h4>Get In Touch</h4>
              <p>E_Couple_match_website.com</p><br>
              <h4>Address</h4>
              <p>House #100, Kuarpar, Sylhet</p>
              <h4>Email</h4>
              <p>tj_e_match@gmail.com</p>
              <h4>Phone</h4>
              <p class="mb-2">0821-343433</p>
              <p>+88 0174343 6567</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


<?php $this->load->view('partial/footer'); ?>