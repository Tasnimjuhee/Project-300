<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <link rel="stylesheet" href="<?php echo base_url()?>public/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>public/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>public/css/now.css">
  
  
 
  <title>gsh</title>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary fixed-top">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
<div class="sidenav">
  
  <a href="#clients" class="text-light">Profile</a>
  <a href="#contact" class="text-light">Update</a>
</div>

<div class="main mt-5">
  <div class="container"> 

    <div class="row justify-content-center"> 
  <div class="col-md-4 mt-5"> 
    <form action="<?php echo base_url('Login/see_profile');?>" method="post">
  <div class="form-group">
    <label>Email address</label>
    <input type="eamil" class="form-control" name="member_email" placeholder="Enter Your Email Address">
  </div>


   <div class="text-center"> 
    <button type="submit" class="btn btn-primary">Profile</button>
   </div>
</form>
 </div>

</div>
</div>
</div>
  

</body>
</html>






















 
         <!--  <div class="picture-container">
          <div class="picture">
              <img src="public/member_img/noimage.jpg" class="picture-src" id="wizardPicturePreview" title=""/>
                <input type="file" id="wizard-picture">
           </div>
                 <h6>Choose Picture</h6>
          </div> -->
                     
            
