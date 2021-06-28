<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php if(!empty($SEO_status)){echo $SEO_status[0]['rm_title'];}else{ echo "Feetup | 404 Not Found";}?></title>
	<meta name="description" content="<?php if(!empty($SEO_status)){ echo $SEO_status[0]['rm_description']; }?>"/>
	<meta name="keywords" content="<?php if(!empty($SEO_status)){ echo $SEO_status[0]['rm_keyword']; }?>"/>
	<meta name="robots" content="INDEX,FOLLOW" />
	<link rel="canonical" href="https://feetupholidays.com">
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/jpeg" href="<?php echo base_url().'assets/images/logo.png'?>"/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-152047937-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());
	  gtag('config', 'UA-152047937-1');
	</script>

	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-W42MR9K');</script>
	<!-- End Google Tag Manager -->
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //for-mobile-apps -->
	<link href="<?=base_url()?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/style.css" />
	<link href="<?=base_url()?>assets/css/font-awesome.css" rel="stylesheet"> 
	<link rel="stylesheet" href="<?=base_url()?>assets/css/jquery-ui.css" />
	<script type="text/javascript" src="<?=base_url()?>assets/js/modernizr-2.6.2.min.js"></script>
	<!--/web-fonts-->
	<link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
	<link href="<?=base_url()?>assets/sweetalert/sweetalert.css" rel="stylesheet">
<!--//web-fonts-->
	<style type="text/css">
		body{
			background-color: #fff;
		}
		.spa-agile {
    text-align: center;
    padding: 3em 0 0 0;
}
.theme-config {
    position: fixed;
    top: 90px;
    right: 0;
    overflow: hidden;
    z-index: 3000;
}
.special{
	padding: 1em 0;
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
.error{
	color: red;
    font-size: smaller;
    padding-left: 2%;
}
input.error{
	border-color: red;
}
.navbar-nav > li:nth-child(6){
	border-right:none;
}
.navbar-nav > li:nth-child(5){
	border-right:1px solid #ffffff;
}
.inner-header-agile{
	background-color: #f5f5f5;
	background-image: url(<?=base_url()?>assets/images/5_slider.jpg);
	background-repeat:no-repeat;
	background-size:100% auto;
	background-position:center -40px;
	height:160px;
}
.error-container{
	padding-top:30px;
	padding-bottom:30px;
}
.error-h1{
	margin:20px 0 15px;
}
.error-p{
	margin:15px 0;
}
@media (max-width: 1440px){
	ul.nav.navbar-nav {
		margin-top: 1.25em;
	}
}	
@media (max-width: 800px){
	.baner-info {
		display:none; 
	}
	.flex-control-nav {
	    display: none;
	}
}
</style>	
</head>
<body>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W42MR9K"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<div class="theme-config">
	    <div class="theme-config-box verify" id="spin">
	        <div class="spin-icon" id="spin-this">
	           <!-- <img src="<?php echo base_url() ?>assets/images/make.call.png"> -->
	           <i class="fa fa-phone fa-lg"> &nbsp<span style="writing-mode: vertical-rl;transform: rotate(180deg);"> Request a Call </span> </i>
	        </div>
	        <div class="skin-settings">
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
							<button type="submit" value="" class="btn btn-success" style="border-color: #f36c21;border-radius: 10%;background-color: #f36c21;">Request a Call</button>
						</div>
					</div>
				</form>
	        </div>
	    </div>
	</div>
	<div class="w3layouts-top-strip">
		<div class="top-srip-agileinfo">
			<!-- <div class="w3ls-social-icons text-left">
				<a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
				<a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
				<a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a>
				<a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
			</div> -->
			<div class="agileits-contact-info text-left" style="float: left;">
				<ul>
					<li><i class="fa fa-volume-control-phone" aria-hidden="true"></i> 70308 66442 || 70308 66443</li>
					<!-- <li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:info@example.com">mail@example.com</a></li> -->
				</ul>
			</div>
			<div class="agileits-contact-info text-right">
				<ul>
					<!-- <li><i class="fa fa-volume-control-phone" aria-hidden="true"></i> +090 480 088</li> -->
					<li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:sales@feetupholidays.com">sales@feetupholidays.com</a></li>
					<li><i class="fa fa-user" aria-hidden="true"></i> <a href="https://feetupholidays.com/Resort/">Admin Login</a></li>
				</ul>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div id="">
		<div class="demo-inner-content">
			<!--/header-w3l-->
			<div class="header-w3-agileits" id="home">
				<div class="inner-header-agile">	
					<nav class="navbar navbar-default">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a href="<?php echo site_url('/') ?>"><img src="<?php echo base_url().'assets/images/feetup_logo.png'?>" height="90px;"></a>
						</div>
						<!-- navbar-header -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav" style="margin-left: 14%;">
								<li class="active"><a href="<?php echo site_url('/') ?>">Home</a></li>
								<li><a href="https://feetupholidays.com/Blog/about-us/">About Us</a></li>
								<!-- <li class="dropdown">
									<a href="#" class="dropdown-toggle hvr-bounce-to-bottom" data-hover="Destinations" data-toggle="dropdown" aria-expanded="false">Destinations <b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="#">Domestic Destinations</a></li>
										<li><a href="#">Internationl Destinations</a></li>	
										<li><a href="#">Corporate Offerings</a></li>	
									</ul>
								</li> -->
								<li><a href="#destinations">Destinations</a></li>
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
			</div> 
		</div> 
	</div> 