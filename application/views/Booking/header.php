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
		body{
			font-family: Poppins;
		}
		.navbar-default .navbar-nav > li > a{
			color: #000;
		}
		.inner-header-agile{
			background-color: #f5f5f5;
		}	
		.navbar-default .navbar-nav>li>a.active, .navbar-default .navbar-nav>li>a:focus, .navbar-default .navbar-nav>li>a:hover, .navbar-default .navbar-nav>.open>a, .navbar-default .navbar-nav>.open>a:focus, .navbar-default .navbar-nav>.open>a:hover{
			color: #000;
		}
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
		.search-bar-input{
			padding: 0px 4px;
		}
		.theme-config {
			position: relative;
		    top: 0px;
		    right: 0;
		    overflow: hidden;
		    z-index: 3000;
			margin: 0px !important;
		}
		.flex-control-nav{
			border:none !important;
		}
		.theme-config-box {
			position: fixed;
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
		    border-radius: 5px !important;
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
			background: #ffffff;
			box-shadow: 0px 2px 9px 0px #00000029;
			opacity: 1;
			z-index: 99;
			border-radius: 20px;
			border: 1px solid #6d2586;
			border-width: 4px 1px 5px 1px !important;
			max-width: 300px;
			width: 300px;
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
	<div id="demo-1">
		<div class="demo-inner-content ">
			<!--/header-w3l-->
			<div class="header-w3-agileits" id="home">
				<div class="inner-header-agile" style="padding-bottom: 0px !important;">	
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
							<ul class="nav navbar-nav" style="margin-top:2%;margin-left: 0px;">
								<li></li>
								<li></li>
								<li class="nav-item dropdown" style="z-index: 5000;">
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
							    <li><a href="#">Call Us : <b>+91 96736 11111</b></a></li>
							</ul>
						</div>
						<div class="clearfix"> </div>	
					</nav>
				</div> 