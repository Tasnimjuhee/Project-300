<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <link rel="stylesheet" href="<?php echo base_url()?>public/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>public/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>public/css/bootstrap-select.css">
  <link rel="stylesheet" href="<?php echo base_url()?>public/css/style.css">
 
  <title><?php echo $title;?></title>
</head>
<body>
 <!-- Navigation -->
 <nav class="navbar navbar-dark navbar-expand-md" uk-sticky="top: 200; animation: uk-animation-slide-top; bottom: #sticky-on-scroll-up">
   <div class="container">
     <a href="<?php echo base_url('Home')?>" class="navbar-brand">E-Couple-Match</a>
     <button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarNav">
       <span class="navbar-toggler-icon"></span>
     </button>
     <div id="navbarNav" class="collapse navbar-collapse">
       <ul class="navbar-nav ml-auto">
         <li class="nav-item active">
           <a class="nav-link" href="<?php echo base_url('Home')?>">Home</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="<?php echo base_url('About')?>">About Us</a>
         </li>
		 <li class="nav-item">
           <a class="nav-link" href="<?php echo base_url('members')?>">Members List</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="<?php echo base_url('login')?>">log in</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="<?php echo base_url('signup')?>">sign up</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="<?php echo base_url('Contact')?>">Contact</a>
         </li>
       </ul>
      </div>
    </div>
  </nav>
  