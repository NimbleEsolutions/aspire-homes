<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php if(!empty($SEO_status)){echo $SEO_status[0]['rm_title'];}else{ echo "Aspire | Resort details";}?></title>
	<meta name="description" content="<?php if(!empty($SEO_status)){ echo $SEO_status[0]['rm_description']; }?>"/>
	<meta name="keywords" content="<?php if(!empty($SEO_status)){ echo $SEO_status[0]['rm_keyword']; }?>"/>
	<meta name="robots" content="INDEX,FOLLOW" />
	<link rel="canonical" href="https://aspirevillastays.com/destinations/<?php echo str_replace('"','',$dest); ?>">
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/jpeg" href="<?php echo base_url().'assets/images/aspire-logo-web.png'?>"/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<!--<script async src="https://www.googletagmanager.com/gtag/js?id=UA-152047937-1"></script>-->
	<!--<script>-->
	<!--  window.dataLayer = window.dataLayer || [];-->
	<!--  function gtag(){dataLayer.push(arguments);}-->
	<!--  gtag('js', new Date());-->
	<!--  gtag('config', 'UA-152047937-1');-->
	<!--</script>-->

	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-W42MR9K');</script>
	<!-- End Google Tag Manager -->

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
	<style type="text/css">
	    .featured, .team-section {
		    background: #ffffff;
		}
		.theme-config {
		    position: fixed;
		    top: 90px;
		    right: 0;
		    overflow: hidden;
		    z-index: 3000;
		}
		.w3layouts-top-strip{
        	background:#292a2b!important;
        }
        .w3agile_footer_copy {
            background: #f47720!important;
        }
        .w3l-footer {
            background-color: #292a2b;
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
		.form-horizontal .form-group{
			margin-right: 0px;
	     	margin-left: 0px;
		}
		.form-horizontal .col-sm-4,.col-sm-3,.col-sm-2{
			padding-right: 0px; 
	     	padding-left: 0px;
	     	border-top: 1px solid white;
	     	border-bottom: 1px solid white;
	     	border-left: 1px solid white;	     	
		}
		.btn-default{
			background-color: #f47720;
			border-color: #f47720;
			border-radius: 4%;
			color: #ffffff;
			border-top-right-radius: 35%;
    		border-bottom-right-radius: 35%;
		}
		.btn-default:hover{
			background-color: #0599a9;
			border-color: #0599a9;
			border-radius: 4%;
			color: #ffffff;
			border-top-right-radius: 35%;
    		border-bottom-right-radius: 35%;
		}
		
		.btn-primary:hover {
            background-color: #0599a9;
            border-color: #0599a9;
            border-radius: 4%;
            color: #ffffff;
        }
        .btn-primary {
            background-color: #f47720;
            border-color: #f47720;
            border-radius: 4%;
            color: #ffffff;
        }
		.agileits-contact-info ul li a:hover {
		    color: #f36b21;
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
		.navbar-default .navbar-nav > li > a {
			color: #646c73;
		}
		@media (max-width: 800px){
			.sortResort,.filter {
				display:none; 
			}
			.hotel_picture, .carousel{
				width: 100% !important;
			}
			.spin-icon{
				padding: 7px 10px 7px 6px;
			}
		}
		@media (max-width: 1440px){
		    ul.nav.navbar-nav {
                margin-left: 17em;
                margin-top: 0em;
            }
		}
		.agileits-contact-info {
            float: left;
            width: 42.333%;
            margin-left: 60px;
		}
	</style>
<!--//web-fonts-->
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
	           <i class="fa fa-envelope fa-lg"> &nbsp;&nbsp;<span style="writing-mode: vertical-rl;transform: rotate(180deg);"> Send Inquiry </span> </i>
	        </div>
	        <div class="skin-settings">
	        	<form class="form-horizontal" method="post" id="callRequest" action="<?=site_url('callRequest')?>" style="padding:0px 5% 1%;    border-left: 2px solid #0ea94f;border-bottom: 2px solid #0ea94f;">
	        		<div class="form-group" style="background: #f36d21;padding: 0px;border-bottom: 2px solid #0ea94f;">
	        			<!-- <h2 style="text-transform: none;"> &nbsp Request a Call</h2> -->
	        		</div>
					<div class="form-group">
						<div class="col-sm-12">
							<label class="control-label">Name</label>
	                        <input type="text" name="request_person" class="form-control" placeholder="Please enter name..">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12">
							<label class="control-label">Contact No.</label>
	                        <input type="text" name="request_contact" class="form-control" placeholder="Please enter contact no..">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12">
							<label class="control-label">Email ID</label>
	                        <input type="email" name="request_email" class="form-control" placeholder="Please enter email id..">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12"><br>
							<button type="submit" value="" class="btn btn-primary">Send</button>
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
			<div class="agileits-contact-info">
				<ul>
					<li><i class="fa fa-volume-control-phone" aria-hidden="true"></i> +91 9673611111 </li>
					<!-- <li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:info@example.com">mail@example.com</a></li> -->
				</ul>
			</div>
			<div class="agileits-contact-info text-right">
				<ul>
					<!-- <li><i class="fa fa-volume-control-phone" aria-hidden="true"></i> +090 480 088</li> -->
					<li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:info@aspirevillastays.com">info@aspirevillastays.com </a></li>
					<li><i class="fa fa-user" aria-hidden="true"></i> <a href="#">Login</a></li>
				</ul>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div id="demo-1" data-zs-src='["<?=base_url()?>assets/images/4.jpg"]' data-zs-overlay="dots">
		<div class="demo-inner-content">
			<!--/header-w3l-->
			<div class="header-w3-agileits" style="background-color: #ffffff">
				<div class="inner-header-agile">	
					<nav class="navbar navbar-default">
						<div class="navbar-header col-sm-3 text-center" style="border: none; margin-left:-30px">
							<a href="<?php echo site_url('/') ?>"><img src="<?php echo base_url().'assets/images/aspire-logo-web.png'?>" height="90px;"></a>			
						</div>
						<?php if($start_date == $till_date){ $start_date = '';$till_date = '';} ?>
						<!-- <div class="col-sm-2" style="border:none;"></div> -->
						<div class="col-sm-7 sortResort" style="padding-top: 2%;padding-left:2%;">
							<form class="form-horizontal" action="#">
								<div class="form-group">
									<div class="col-sm-3">
										<div class="input-group date" >
				                        	<input type="text" name="form_dates" class="form-control" placeholder="Check In" value="<?php echo $start_date; ?>"><span class="input-group-addon"><i class="fa fa-calendar"></i></span>
				                    	</div>
									</div>
									<div class="col-sm-3">
										<div class="input-group date">
				                        	<input type="text" name="till_dates" class="form-control" placeholder="Check Out" value="<?php echo $till_date; ?>"><span class="input-group-addon"><i class="fa fa-calendar"></i></span>
				                    	</div>						
									</div>
									<div class="col-sm-3">
										<select class="form-control" name="adult">
											<option value="0">Please Select Guests</option>
											<option value="1" <?php if($adult == 1){ echo "selected"; }?> >1 Guests</option>
											<option value="2" <?php if($adult == 2){ echo "selected"; }?> >2 Guests</option>
											<option value="3" <?php if($adult == 3){ echo "selected"; }?> >3 Guests</option>
											<option value="4" <?php if($adult == 4){ echo "selected"; }?> >4 Guests</option>
											<option value="5" <?php if($adult == 5){ echo "selected"; }?> >5 Guests</option>
											<option value="6" <?php if($adult == 6){ echo "selected"; }?> >6 Guests</option>
											<option value="7" <?php if($adult == 7){ echo "selected"; }?> >7 Guests</option>
											<option value="8" <?php if($adult == 8){ echo "selected"; }?> >8 Guests</option>
											<option value="9" <?php if($adult == 9){ echo "selected"; }?> >9 Guests</option>
											<option value="10" <?php if($adult == 10){ echo "selected"; }?> >10 Guests</option>
										</select>
									</div>
									<div class="col-sm-2 hidden">
										<select class="form-control" name="child">
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
									<div class="col-sm-2 hidden">
										<select class="form-control" name="rooms">
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
									<div class="col-sm-2">
										<span value="" class="btn btn-default update_resort_room">Search</span>
									</div>
								</div>
							</form>	
						</div>
						<!-- navbar-header -->
						
						<div class="clearfix"> </div>	
					</nav>			
				</div>
				<div class="inner-header-agile" style="background: #ffffff; padding: 1em 0.5em;box-shadow: 0px 2px #eee;">	
					<nav class="navbar navbar-default">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<!-- <a href="<?php echo site_url('/') ?>"><img src="<?php echo base_url().'assets/images/aspire-logo-web.png'?>" height="90px;"></a> -->
						</div>
						<!-- navbar-header -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav" style="margin-left: 18%;">
								<li class=""><a href="<?php echo site_url('/');?>">Home</a></li>
								<li><a href="https://aspirevillastays.com/Blog/about-us/">About Us</a></li>
								<li><a href="<?php echo site_url('/');?>#destinations">Destinations</a></li>
								<li><a href="https://aspirevillastays.com/Blog/gallery/" target="_blank">Gallery</a></li>
								<li><a href="https://aspirevillastays.com/Blog/">Blogs</a></li>
								<li><a href="https://aspirevillastays.com/Blog/contact/">Contact</a></li>
							</ul>
							</ul>
						</div>
						<div class="clearfix"> </div>	
					</nav>
				</div>