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
							    <li><a href="#">Call Us : <b>+91 96736 11111</b></a></li>
							</ul>
						</div>
						<div class="clearfix"> </div>	
					</nav>
				</div> 
				<div class="inner-header-agile" style="padding-top: 0px !important;">	
					<nav class="navbar navbar-default">
						<?php if($start_date == $till_date){ $start_date = '';$till_date = '';} ?>
						<!-- <div class="col-sm-2" style="border:none;"></div> -->
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 sortResort">
							<form class="form-horizontal" action="#">
								<div class="form-group" style="margin-left: 3em;">
									<div class="col-xs-12 col-sm-12 col-md-3 col-lg-2"></div>
									<div class="col-xs-12 col-sm-12 col-md-3 col-lg-2 search-bar-input">
										<div class="input-group date" >
				                        	<input type="text" name="form_dates" class="form-control" placeholder="Check In" value="<?php echo $start_date; ?>" style="height: 45px;"><span class="input-group-addon"><i class="fa fa-calendar"></i></span>
				                    	</div>
									</div>
									<div class="col-xs-12 col-sm-12 col-md-3 col-lg-2 search-bar-input">
										<div class="input-group date">
				                        	<input type="text" name="till_dates" class="form-control" placeholder="Check Out" value="<?php echo $till_date; ?>" style="height: 45px;"><span class="input-group-addon"><i class="fa fa-calendar"></i></span>
				                    	</div>						
									</div>
									<div class="col-xs-12 col-sm-12 col-md-3 col-lg-2 search-bar-input">
										<select class="form-control" name="adult" style="height: 45px;">
											<option value="">Guests</option>
											<?php for ($i=1; $i <= 30; $i++) { ?>
												<option value="<?=  $i; ?>" <?php if($adult == $i){ echo "selected"; }?>><?=  $i; ?> Guests</option>";
											<?php } ?>
										</select>
									</div>
									<div class="col-xs-12 col-sm-12 col-md-3 col-lg-2 search-bar-input hidden">
										<select class="form-control" name="child" style="height: 45px;">
											<option value="0">Please Select Child</option>
											<option value="1" <?php if($child == 1){ echo "selected"; }?>>1 Child</option>
											<option value="2" <?php if($child == 2){ echo "selected"; }?>>2 Child</option>
											<option value="3" <?php if($child == 3){ echo "selected"; }?>>3 Child</option>
											<option value="4" <?php if($child == 4){ echo "selected"; }?>>4 Child</option>
											<option value="5" <?php if($child == 5){ echo "selected"; }?>>5 Child</option>
											<option value="6" <?php if($child == 6){ echo "selected"; }?>>6 Child</option>
											<option value="7" <?php if($child == 7){ echo "selected"; }?>>7 Child</option>
											<option value="8" <?php if($child == 8){ echo "selected"; }?>>8 Child</option>
											<option value="9" <?php if($child == 9){ echo "selected"; }?>>9 Child</option>
											<option value="10" <?php if($child == 10){ echo "selected"; }?>>10 Child</option>
										</select>
									</div>
									<div class="col-xs-12 col-sm-12 col-md-3 col-lg-2 search-bar-input hidden">
										<select class="form-control" name="rooms" style="height: 45px;">
											<option value="0">Please Select Room</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="col-xs-12 col-sm-12 col-md-3 col-lg-2 search-bar-input" >
										<span value="" class="btn btn-primary update_resort_room" style="padding-top: 12px;padding-bottom: 12px;font-weight: 600;">Check Availability</span>
									</div>
								</div>
							</form>	
						</div>
						<!-- navbar-header -->
						
						<div class="clearfix"> </div>	
					</nav>			
				</div>