<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
	<title>Feetup | Resort details</title>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/jpeg" href="<?php echo base_url().'assets/images/logo.png'?>"/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<!-- //for-mobile-apps -->
	<link href="<?=base_url()?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/style.css" />
	<link href="<?=base_url()?>assets/css/font-awesome.css" rel="stylesheet"> 
	<link rel="stylesheet" href="<?=base_url()?>assets/css/jquery-ui.css" />
	<link rel="stylesheet" href="<?=base_url()?>assets/css/jquery.bootstrap-touchspin.css" />
	<script type="text/javascript" src="<?=base_url()?>assets/js/modernizr-2.6.2.min.js"></script>
	<!--/web-fonts-->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/jquery.bootstrap-touchspin.css" />
	<link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.0/css/ion.rangeSlider.min.css"/>
	<link rel="stylesheet" href="<?=base_url()?>assets/css/lightslider.css" />
	<style type="text/css">
		.form-horizontal .form-group{
			margin-right: 0px;
	     	margin-left: 0px;
		}
		.form-horizontal .col-sm-2{
			padding-right: 0px;
	     	padding-left: 0px;
	     	border-top: 1px solid white;
	     	border-bottom: 1px solid white;
	     	border-left: 1px solid white;	     	
		}
		.btn-default{
			background-color: #1cb363;
			border-color: #1cb363;
			border-radius: 4%;
			color: #ffffff;
			border-top-right-radius: 35%;
    		border-bottom-right-radius: 35%;
		}
		.btn-default:hover{
			background-color: #705345;
			border-color: #705345;
			border-radius: 4%;
			color: #ffffff;
			border-top-right-radius: 35%;
    		border-bottom-right-radius: 35%;
		}
		.agileits-contact-info ul li a:hover {
		    /*color: #f36b21;*/
		}
		h1, h2, h3, h4, h5, h6 {
			text-transform: capitalize;
			font-family: serif,sans-serif;
		}
		.navbar-nav > li:nth-child(6){
			border-right:none;
		}
		.navbar-nav > li:nth-child(5){
			border-right:1px solid #ffffff;
		}		
	</style>
</head>
<body>
	<div class="w3layouts-top-strip">
		<div class="top-srip-agileinfo">
			<div class="agileits-contact-info text-left" style="float: left;">
				<ul>
					<li><i class="fa fa-volume-control-phone" aria-hidden="true"></i> 70308 66442 || 70308 66443</li>
				</ul>
			</div>
			<div class="agileits-contact-info text-right">
				<ul>
					<li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:sales@feetupholidays.com">sales@feetupholidays.com</a></li>
					<li><i class="fa fa-user" aria-hidden="true"></i> <a href="https://feetupholidays.com/Resort/">Admin Login</a></li>
				</ul>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div id="demo-1" data-zs-src='["<?=base_url()?>assets/images/4.jpg"]' data-zs-overlay="dots">
		<div class="demo-inner-content">
			<!--/header-w3l-->
			<div class="header-w3-agileits">
				<div class="inner-header-agile" style="background: rgba(243, 115, 33, 0.19);">	
					<nav class="navbar navbar-default">
						<div class="navbar-header col-sm-3">
							<a href="<?php echo site_url('/') ?>"><img src="<?php echo base_url().'assets/images/feetup_logo.png'?>" height="90px;"></a>							
						</div>
						<!-- navbar-header -->
						
						<div class="clearfix"> </div>	
					</nav>
					<!-- <div class="w3ls_search">
						<div class="cd-main-header">
							<ul class="cd-header-buttons">
								<li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
							</ul> cd-header-buttons
						</div>
						<div id="cd-search" class="cd-search">
							<form action="#" method="post">
								<input name="Search" type="search" placeholder="Search...">
							</form>
						</div>
					</div>	 -->				
				</div>
				<div class="inner-header-agile" style="background: rgb(134, 79, 52);   padding: 1em 0.5em;">	
					<nav class="navbar navbar-default">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<!-- <a href="<?php echo site_url('/') ?>"><img src="<?php echo base_url().'assets/images/feetup_logo.png'?>" height="90px;"></a> -->
						</div>
						<!-- navbar-header -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav" style="margin-left: 18%;">
								<li class=""><a href="<?php echo site_url('/');?>">Home</a></li>
								<li><a href="https://feetupholidays.com/Blog/about-us/">About Us</a></li>
								<!-- <li class="dropdown">
									<a href="#" class="dropdown-toggle hvr-bounce-to-bottom" data-hover="Destinations" data-toggle="dropdown" aria-expanded="false">Destinations <b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="#">Domestic Destinations</a></li>
										<li><a href="#">Internationl Destinations</a></li>	
										<li><a href="#">Corporate Offerings</a></li>	
									</ul>
								</li> -->
								<li><a href="<?php echo site_url('/');?>#destinations">Destinations</a></li>
								
								<!-- <li class="dropdown">
									<a href="#destinations" class="dropdown-toggle hvr-bounce-to-bottom" data-hover="Destinations" data-toggle="dropdown" aria-expanded="false">Destinations <b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="https://feetupholidays.com/destinations/Mahabaleshwar">Mahabaleshwar</a></li>
										<li><a href="https://feetupholidays.com/destinations/Dapoli">Dapoli</a></li>	
										<li class="dropdown"><a href="#Pune class="dropdown-toggle hvr-bounce-to-bottom" data-hover="Pune" data-toggle="dropdown" aria-expanded="false">Pune <b class="caret"></b></a>
											<ul class="dropdown-menu">
												<li><a href="https://feetupholidays.com/destinations/Pune">Mulashi</a></li>
												<li><a href="https://feetupholidays.com/destinations/Pune">Bhor</a></li>
											</ul>										</li>	
										<li><a href="https://feetupholidays.com/destinations/Panchgani">Panchgani</a></li>	
										<li><a href="https://feetupholidays.com/destinations/Satara">Satara</a></li>	
									</ul>
								</li> -->
								<li><a href="https://feetupholidays.com/Blog/gallery/">Gallery</a></li>
								<li><a href="https://feetupholidays.com/Blog/">Blogs</a></li>
								<li><a href="https://feetupholidays.com/Blog/contact-us/">Contact</a></li>
							</ul>
						</div>
						<div class="clearfix"> </div>	
					</nav>
				</div>