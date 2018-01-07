<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>jithire</title>

    <!-- Bootstrap core CSS -->
    

    <!-- Custom fonts for this template -->
    <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet"> 
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/agency.min.css" rel="stylesheet">
    <!-- FONT ICONS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/icons/toicons/css/styles.css">
  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="<?php echo site_url() ?>user">jithire</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary btn-lg text-uppercase" data-toggle="modal" id="myModel" data-target="#myModal">Sign Up</button>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Services</a>
            </li> -->
          <!--   <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo site_url() ?>user/about">About Us</a>
            </li>
            <!--  <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#team">Team</a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo site_url() ?>user/contact">Contact Us</a>
            </li>
          
          </ul>
        </div>
        <?php if($this->session->userdata('role')=='company'){ ?>
         <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
          
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo site_url() ?>post_job/job_posting_page">Post a Job</a>
            </li>
          
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo site_url() ?>post_job/posted_jobs">Posted Jobs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo site_url() ?>user/logout">Logout</a>
            </li>
          </ul>
        </div>
        <?php } ?>
        <?php if($this->session->userdata('role')=='candidate'){ ?>
         <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
          
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo site_url() ?>user/user_details">Profile</a>
            </li>
          
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo site_url() ?>browse_jobs">Browse Jobs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo site_url() ?>user/logout">Logout</a>
            </li>
          </ul>
        </div>
        <?php } ?>
      </div>
    </nav>
