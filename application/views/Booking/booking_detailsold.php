<!DOCTYPE html>
<html>
	<head>
		<title>Aspire | Resort details</title>
		<!-- for-mobile-apps -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/jpeg" href="<?php echo base_url().'assets/images/n_logo.png'?>"/>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link href="<?=base_url()?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
		<link rel="stylesheet" href="<?php echo base_url()?>assets/fonts/material-design-iconic-font/css/material-design-iconic-font.css">

		<link href="<?=base_url()?>assets/css/font-awesome.css" rel="stylesheet"> 

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="<?php echo base_url()?>assets/css/wizard/style.css">
		<style type="text/css">
		
		 h1,h2{
           font-family: 'Ubuntu', sans-serif!important;
           margin:0;
               text-transform: uppercase;
        }
        
        h3,h4,h5,h6{
           font-family: 'Roboto', sans-serif!important;
           margin:0;
               text-transform: uppercase;
        }
			body{
				overflow-x: hidden;
				
			}
			.wrapper {
    			height: 85vh !important;
    			background-color: #f5f5f5;
    		}
  
			.text-right {
			    text-align: right;			   
			}
			.agileits-contact-info ul li i {
			    left: -.5em;
			    color: #0599a9;
			}
			.form-content {
    			width: 100%;
    			height: 570px;
    		}
    		.wizard > .steps {
			    right: 50% !important;
			    top: 20.44%;
			}
			.wizard > .content {
			    position: relative;
			    height: auto;
			}
			.wizard {
			    margin-top: 4%;
			    width: 100%;
			}
			.actions {
    			right: 15%;
    			bottom: 2%;
			}
			h3 {
			    font-family: "Muli-SemiBold";
			    font-size: 22px;
			    color: #f36f27;
			    text-transform: uppercase;
			    letter-spacing: 7px;
			    padding: 5px 15px;
			    display: inline-block;
			    border: none;
			    margin-bottom: 75px;
			}
			.content_details{
				padding: 2%;
    			border: 1px solid #000000;
    			border-radius: 0.7%;
			}
			.form-control{
				border-left: 1px solid #e6e6e6;
    			border-right: 2px solid #e6e6e6;
    			font-size: 21px;
			}
			.i.fa.fa-volume-control-phone {
            margin-left: 35px;
        }
        .agileits-contact-info ul li a {
            color: #fff;
            /*vertical-align: text-bottom;*/
        }
        .agileits-contact-info ul li a:hover {
		    color: #f36b21;
		}
        .agileits-contact-info {
            float: left;
            width: 42.333%;
            margin-left: 60px;
            color: #ffffff;
            padding: 1%;
            font-size: medium;
		}
		
		.w3layouts-top-strip {
            background: #292a2b!important;
        }
        
    	</style>
	</head>
	<?php $CI = &get_instance(); ?>
	<body>
		<div class="row">
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
        					<li><i class="fa fa-volume-control-phone" aria-hidden="true" style="margin-left: 10px;"></i> +91 9673611111</li>
        					<!-- <li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:info@example.com">mail@example.com</a></li> -->
        				</ul>
        			</div>
        			<div class="agileits-contact-info text-right">
        				<ul>
        					<!-- <li><i class="fa fa-volume-control-phone" aria-hidden="true"></i> +090 480 088</li> -->
        					<li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:info@aspirevillastays.com" target="_blank">info@aspirevillastays.com</a></li>
        					<li><i class="fa fa-user" aria-hidden="true"></i> <a href="#">Admin Login</a></li>
        				</ul>
        			</div>
        			<div class="clearfix"></div>
        		</div>
        	</div>
		</div>
		<div class="row" style="background:rgb(41 42 43/67%); padding: 1em 0.5em;">
			<div class="col-sm-12 col-md-12 col-xs-12 col-lg-12">
	    		<a href="<?php echo site_url('/') ?>" style="margin-left:4%"><img src="<?php echo base_url().'assets/images/nimble_logo.jpg'?>" height="90px;"></a>
	    	</div>
	    </div>
		<div class="wrapper">
            <form action="<?php echo site_url('newBooking'); ?>" method="POST" id="wizard">
                <h2></h2>
                <section>
					<div class="container">
	                    <div class="inner">
							<div class="form-content">
								<div class="form-header">
									<h3>Booking Details</h3>
								</div>
								<p>Please confirm room details</p>
								<div class="content_details">
									<div class="form-row">
										<h4><?php echo $resort_details[0]['rs_display_name']; ?></h4>
									</div>
									<div class="form-row">
										<h4><?php echo $resort_details[0]['rs_address']; ?></h4>
									</div>
									<div class="form-row">
										<h2>Room Details</h2>
									</div>
									<div class="form-row">          
									  	<table class="table table-striped table-bordered" style="width: 100%;">
										    <thead>
										      	<tr>
										      		<th>#</th>
											        <th>Room</th>
											        <th>Guests</th>
											        <th>Extra Guests</th>
											        <th>No. of Room</th>
											        <th>Checkin Date</th>
											        <th>Checkout Date</th>
											        <th>Room Charge</th>
											    </tr>
										    </thead>
										    <tbody>
										      	<tr>
										      		<td>1</td>
											        <td><?php echo $room_details[0]['rr_display_name']; ?></td>
											        <td><?php echo $guests; ?></td>
											        <td><?php echo $extra; ?></td>
											        <td><?php echo $room; ?></td>
											        <td><?php echo $form_dates; ?></td>
											        <td><?php echo $till_dates; ?></td>
											        <td><i class="fa fa-rupee"></i> <?php echo number_format($totalResortAmount); ?></td>
										      	</tr>
										    </tbody>
										 </table>
									</div>									
								</div>
							</div>
						</div>
					</div>
                </section>
        		<!-- SECTION 1 -->                
                <h2></h2>
                <section> 
                	<div class="container">               	
	                    <div class="inner">
							<div class="form-content" >							
								<div class="form-header">
									<h3>Booking Details</h3>
								</div>
								<p>Please fill with your details</p>
								<div class="content_details">
									<div class="form-row hidden">
										<?php for ($i=0; $i < count($extra_service); $i++) {?>
										<div class="form-holder">
											<input type="text" name="bs_rs_service_id[]" placeholder="First Name" class="form-control" value="<?php echo $extra_service[$i]; ?> ">
										</div>
										<?php } ?>
									</div>
									<div class="form-row hidden">
										<div class="form-holder">
											<input type="text" class="form-control" placeholder="Please enter name" value="1" name="rb_type">
										</div>
										<div class="form-holder">
											<input type="text" name="rb_resort_id" placeholder="First Name" class="form-control" value="<?php echo $resort_details[0]['rs_id']; ?>">
										</div>
										<div class="form-holder">
											<input type="text"  name="rb_roomtype_id"placeholder="Last Name" class="form-control" value="<?php echo $room_rcd ?>">
										</div>
										<input type="text" class="form-control" placeholder="Please enter name" value="0" name="rb_package_id">
										<div class="form-holder">
											<input type="text"  name="rb_start_date"placeholder="Last Name" class="form-control" value="<?php echo $form_dates ?>">
										</div>
										<div class="form-holder">
											<input type="text"  name="rb_till_date"placeholder="Last Name" class="form-control" value="<?php echo $till_dates ?>">
										</div>
									</div>
									<div class="form-row hidden">
										<div class="form-holder">
											<input type="text" name="rb_guest" placeholder="First Name" class="form-control" value="<?php echo $guests; ?>">
										</div>
										<div class="form-holder">
											<input type="text" name="rb_child" placeholder="First Name" class="form-control" value="<?php echo $child; ?>">
										</div>
										<div class="form-holder">
											<input type="text" name="rb_extra" placeholder="First Name" class="form-control" value="<?php echo $extra; ?>">
										</div>
										<div class="form-holder">
											<input type="text"  name="rb_rooms"placeholder="Last Name" class="form-control" value="<?php echo $room; ?>">
										</div>
										<div class="form-holder">
											<input type="text"  name="rb_total_amount"placeholder="Last Name" class="form-control" value="<?php echo $totalNightRate ?>">
										</div>
										<div class="form-holder">
											<input type="text"  name="rb_extra_total_amount"placeholder="Last Name" class="form-control" value="<?php echo $extratotalNightRate ?>">
										</div>
										<div class="form-holder">
											<input type="text"  name="rb_tax_amount" placeholder="Last Name" class="form-control" value="<?php echo $service_tax ?>">
										</div>
									</div>
									<div class="form-row hidden">
										<div class="form-holder">
											<input type="text" name="rb_extra_ser_amt" placeholder="First Name" class="form-control" value="<?php echo $extra_service_charge; ?>">
										</div>
										<div class="form-holder">
											<input type="text"  name="rb_amount"placeholder="Last Name" class="form-control" value="<?php echo $totalResortAmount; ?>">
										</div>
									</div>
									<div class="form-row">
										<div class="form-holder w-100">
											<input type="text" name="bu_user_name" placeholder="Please enter userName" class="form-control" required="">
										</div>
										<!-- <div class="form-holder">
											<input type="text"  name="bu_user_lastName"placeholder="Last Name" class="form-control">
										</div> -->
									</div>
									<div class="form-row">
										<div class="form-holder">
											<input type="number"  name="bu_user_contact" placeholder="Mobile Number" class="form-control">
										</div>
										<div class="form-holder">
											<input type="number"  name="bu_user_mobile" placeholder="Other Contact Number" class="form-control">
										</div>
									</div>
									<div class="form-row">
										<div class="form-holder">
											<input type="text"  name="bu_user_email" placeholder="Your Email" class="form-control">
										</div>
										<div class="form-holder" style="align-self: flex-end; transform: translateY(4px);">
											<div class="checkbox-tick">
												<label class="male">
													<input type="radio" name="bu_user_gender" value="male" checked> Male<br>
													<span class="checkmark"></span>
												</label>
												<label class="female">
													<input type="radio" name="bu_user_gender" value="female"> Female<br>
													<span class="checkmark"></span>
												</label>
											</div>
										</div>
									</div>							
									<div class="form-row">
										<div class="form-holder w-100">
											<input type="text" placeholder="Address" class="form-control" name="bu_user_address">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
                </section>             
            </form>
		</div>

		<!-- JQUERY -->
		<script src="<?php echo base_url()?>assets/js/wizard/jquery-3.3.1.min.js"></script>

		<!-- JQUERY STEP -->
		<script src="<?=base_url()?>assets/js/bootstrap.js"></script>
		<script src="<?php echo base_url()?>assets/js/wizard/jquery.steps.js"></script>
		<script src="<?php echo base_url()?>assets/js/wizard/main.js"></script>
		<script type="text/javascript">
			$( "form" ).submit(function( event ) { 
				if($('input[name="bu_user_name"]').val() == ''){
					alert('Please enter the name.');
					$('input[name="bu_user_name"]').css('border-color','red');
					event.preventDefault();
				}else if($('input[name="bu_user_contact"]').val() == '' ){
					alert('Please enter mobile number.');
					$('input[name="bu_user_contact"]').css('border-color','red');
					event.preventDefault();
				}else if($('input[name="bu_user_email"]').val() == '' ){
					alert('Please enter email.');
					$('input[name="bu_user_email"]').css('border-color','red');
					event.preventDefault();
				}else if($('input[name="bu_user_email"]').val().indexOf('@') == -1 ){
					alert('Please enter proper email, which include @,.');
					$('input[name="bu_user_email"]').css('border-color','red');
					event.preventDefault();
				}  
			});
		</script>
		<!-- Template created and distributed by Colorlib -->
</body>
</html>
