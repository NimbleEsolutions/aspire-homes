<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php if(!empty($SEO_status)){echo $SEO_status[0]['rm_title'];}else{ echo "Aspire Villa Stays | Resort details";}?></title>
	<meta name="description" content="<?php if(!empty($SEO_status)){ echo $SEO_status[0]['rm_description']; }?>"/>
	<meta name="keywords" content="<?php if(!empty($SEO_status)){ echo $SEO_status[0]['rm_keyword']; }?>"/>
	<meta name="robots" content="INDEX,FOLLOW" />
	<link rel="canonical" href="https://aspirevillastays.com/">
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/jpeg" href="<?php echo base_url().'assets/images/tag.png'?>"/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />		
	<link href="<?=base_url()?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="<?=base_url()?>assets/css/flexslider.css" type="text/css" media="screen" property="" />
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/zoomslider.css" />
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/style.css" />
	<link href="<?=base_url()?>assets/css/font-awesome.css" rel="stylesheet"> 
	<link rel="stylesheet" href="<?=base_url()?>assets/css/jquery-ui.css" />
	<script type="text/javascript" src="<?=base_url()?>assets/js/modernizr-2.6.2.min.js"></script>
	<!--/web-fonts-->
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700;800&lang=en">
	<!-- <link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600" rel="stylesheet"> -->
	<!-- <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet"> -->
	<link href="<?=base_url()?>assets/sweetalert/sweetalert.css" rel="stylesheet">
	<!--//web-fonts-->
	<style type="text/css">		
		.spa-agile {
		    text-align: center;
		    padding: 2em 0 0 0;
		}
		.w3layouts-top-strip{
			background:none !important;
		}
		.w3agile_footer_copy {
		    background: #ec0868!important;
		}
		.w3l-footer {
		    background-color: #292a2b;
		}
		.theme-config {
		    position: fixed;
		    top: 90px;
		    right: 0;
		    overflow: hidden;
		    z-index: 3000;
		}
		.special{
			padding: 1.5em 0;
		}
		.flex-control-nav{
			border:none !important;
		}
		.theme-config-box {
		    margin-right: -220px;
		    position: relative;
		    z-index: 2100;
		    transition-duration: 0.8s;
		}
		.btn-primary:hover {
		    background-image: linear-gradient(to right, rgb(142 15 185), rgb(236 8 104)) !important;
		    border-radius: 3%;
		    color: #ffffff;
		}
		.btn-primary {
		    background-image: linear-gradient(to right, rgb(142 15 185), rgb(236 8 104)) !important;
		    border: none;
		    border-radius: 3%;
		    color: #ffffff;
		}
		.spin-icon {
		    background: #f47720;
		    position: absolute;
		    padding: 7px 10px 7px 13px;
		    border-radius: 20px 0 0 20px;
		    font-size: 16px;
		    top: 0;
		    left: 0;
		    width: 40px;
		    color: #fff;
		    cursor: pointer;
		}
		.skin-settings {
		    width: 220px;
		    margin-left: 40px;
		    background: #f3f3f4;
		}
		.skin-settings .title {
		    background: #efefef;
		    text-align: center;
		    text-transform: uppercase;
		    font-weight: 600;
		    display: block;
		    padding: 10px 15px;
		    font-size: 12px;
		}
		.setings-item {
		    padding: 10px 30px;
		}
		.agileits-contact-info ul li a:hover {
			background-color: transparent;
		    color: #f36b21;
		   
		}
		.panel-default > .panel-heading {
		    border-color: #FFF;
		    color: #fffff;
		    background-color: #f47720;
		}
		.panel-default{
			border-color: #f47720;
		}
		.panel-title > a{
			color: #FFF;
		}
		.flex-control-paging li a.flex-active {
		    background: #665245;
		}
		.flex-control-paging li a.flex-active {
		    background: #665245;
		}
		.zs-bullets{
			display: none;
		}
		.offer-banner{
			margin-top: .5rem;
		    font-size: 1.2em;
		    padding: 7px 15px;
    		border: 1.5px solid #8e0fb9;
		    color: #fff;
		    border-radius: 4px;
		    margin-right: 10em;
		    /*background-color: #8e0fb99e;*/
		    font-family: 'Baskerville';
		}
		.error{
			color: red;
		    font-size: smaller;
		    padding-left: 2%;
		}
		input.error{
			border-color: red;
		}
		@media (max-width: 1440px){
			#demo-1 {
			    min-height: 450px;
			}
			.baner-info {
				padding-top: 0em;
			}
		}
		@media (max-width: 767px){
			.navbar-collapse{
				background: transparent !important;
			}
			.offer-banner {
				margin-top: 6.5em;
				margin-right: 0px;
			}
		}
		@media (max-width: 800px){
			.baner-info {
				display:none; 
			}
			
			.navbar-nav{
				display: none;
			}
			
			#bs-example-navbar-collapse-1{
				display: none !important;
			}
			.flex-control-nav {
			    display: none;
			}
		}		
		hr{
			margin-top: 10px;
			margin-bottom: 0px;
			margin-right: 20%;
		}
		hr.hr-line{
			height: 2px;
    		background: #fba919 !important;
		}
</style>	
</head>
<body>
	<!-- Google Tag Manager (noscript) -->
	<!-- <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W42MR9K"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript> -->
	<!-- End Google Tag Manager (noscript) -->
	<div class="theme-config">
	    <div class="theme-config-box verify" id="spin">
	        <div class="spin-icon" id="spin-this">
	           <!-- <img src="<?php echo base_url() ?>assets/images/make.call.png"> -->
	           <i class="fa fa-envelope fa-lg"> &nbsp;&nbsp;<span style="writing-mode: vertical-rl;transform: rotate(180deg);"> Send Inquiry</span> </i>
	        </div>
	        <div class="skin-settings hidden">
	        	<form class="form-horizontal" method="post" id="callRequest" action="<?=site_url('callRequest')?>" style="padding:0px 5% 1%;    border-left: 2px solid #0ea94f;border-bottom: 2px solid #0ea94f;">
	        		<div class="form-group" style="background: #f36d21;padding: 0px;border-bottom: 2px solid #0ea94f;">
	        			<!-- <h2 style="text-transform: none;"> &nbsp Request a Call</h2> -->
	        		</div>
					<div class="form-group">
						<div class="col-sm-12">
							<label class="control-label">Name</label>
	                        <input type="text" class="form-control" name="request_person" placeholder="Please enter name.." required="">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12">
							<label class="control-label">Contact No.</label>
	                        <input type="text" class="form-control" name="request_contact" placeholder="Please enter contact no.." required="">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12">
							<label class="control-label">Email ID</label>
	                        <input type="email" class="form-control" name="request_email" placeholder="Please enter email id.." required="">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12"><br>
							<button type="submit" value="" class="btn btn-primary" style="border-color: #f36c21;border-radius: 10%;background-color: #f36c21;">Send </button>
						</div>
					</div>
				</form>
	        </div>
	    </div>
	</div>
	<div id="demo-1" style="background-image: url(//res.cloudinary.com/www-saffronstays-com/image/upload/c_fill,q_60,b_black,o_50,w_1700/v1617167781/Website_dklyxz.jpg);    background-size: cover;">
		<div class="demo-inner-content ">
			<!--/header-w3l-->
			<div class="header-w3-agileits" id="home">
				<div class="inner-header-agile">	
					<nav class="navbar navbar-default">
						<div class="navbar-header">
							<!-- <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button> -->
							<a href="<?php echo site_url('/') ?>"><img src="<?php echo base_url().'assets/images/aspirestays-logo.png'?>" height="50px;"></a>
						</div>
						<!-- navbar-header -->						
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="display: flex !important;float: right;">
							<div class="offer-banner">
								Winner: LuxeBook Top 100 Most Powerful Indian Luxury Brands 2020
							</div>
							<ul class="nav navbar-nav" style="margin-top:2%;margin-left: 0px;">
								<li></li>
								<li></li>
								<li class="nav-item dropdown">
							        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							          Help
							        </a>
							        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="min-width: max-content;">
							        	<ul style="list-style: none;">
							          		<li class="dropdown-item"><a href="" style="color:#000;">WhatsApp : (+91)96736 11111 </a></li>
							          		<li class="dropdown-item"><a href="" style="color:#000;">Email :  info@aspirevillastays.com</a></li>
							          		<li class="dropdown-item" style="border-bottom:none;"><a href="" style="color:#000;">Policy Center</a></li>							          		
							          	</ul>
							          <div class="dropdown-divider"></div>
							        </div>
							    </li>
							    <li><a href="#">Call Us : +91 96736 11111</a></li>
							</ul>
						</div>
						<div class="clearfix"> </div>	
					</nav>
				</div> 