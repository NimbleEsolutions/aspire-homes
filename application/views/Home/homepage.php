<style type="text/css">
	.baner-info .row {
	    text-align: center;
	    font-size: 1em;
	    margin: 11em 0 2em 0;
	    font-weight: 500;
	    letter-spacing: 10px;
	    color: #ffcc33;
	    /*background: rgba(0, 0, 0, 0.45);*/
	    padding: 15px 0;
	    padding-top: 2%
	}
	.btn-default {
		background-color: #1cb363;
		border-color: #1cb363;
		border-radius: 4%;
		color: #ffffff;
	}
	.btn-default:hover{
		background-color: #705345;
		border-color: #705345;
		border-radius: 4%;
		color: #ffffff;
	}
	
	.w3_agileits_services_grid_agile h3:hover{
	    color:#8e0fb9;
	}
	
	
	.w3_agileits_services_grid{
		margin-bottom: 1%;
	}
	#carousel-custom .carousel-control.left {
	    background-image: none;
	    width: 54px;
	    height: 54px;
	    top: 50%;
	    left: 20px;
	    margin-top: -27px;
	    line-height: 54px;
	    /*border: 2px solid #fff;*/
	    opacity: 1;
	    text-shadow: none;
	    -webkit-transition: all 0.2s ease-in-out 0s;
	    -o-transition: all 0.2s ease-in-out 0s;
	    transition: all 0.2s ease-in-out 0s;
	}
	#carousel-custom .carousel-control.right {
	    background-image: none;
	    width: 54px;
	    height: 54px;
	    top: 50%;
	    right: 20px;
	    margin-top: -27px;
	    line-height: 54px;
	    /*border: 2px solid #fff;*/
	    opacity: 1;
	    text-shadow: none;
	    -webkit-transition: all 0.2s ease-in-out 0s;
	    -o-transition: all 0.2s ease-in-out 0s;
	    transition: all 0.2s ease-in-out 0s;
	}
	.w3_agileits_services_grid{
		width: 50%;
		border:0px;
		letter-spacing: 1px;
	}
	.featured{
		background-color: #ffffff;
	}
	.w3l_about_bottom_right{
	 	background: #ffffff;
	}
	.package_name{
		padding-left:0px;
		background-color: #000000;
		height: 280px;
		padding: 7% 0;
		text-align: center;
		border-top-right-radius: 10px;
		border-bottom-right-radius: 10px;
	}
	.package_image{
		width: 100%;
    	height: 280px;
    	border-top-left-radius: 10px;
    	border-bottom-left-radius: 10px;
	}
	.review_img1{
		width:23.5%;
		margin: 1em;
		margin-left: 0em;
		box-shadow: 2px 2px 2px 2px #c3c3c3;
    	border-radius: 10px;
	}
	.all_reviews_btn{
		writing-mode: vertical-rl;
		transform: rotate(0deg); 
		background-color: #f47720;
		border-color: #f47720;
		font-weight: bold;
		padding-left: 2%;
		font-size:large;
		width: 10px;
		border-top-right-radius: 20px;
		border-bottom-right-radius: 20px;
		border-top-right-radius: 20px;
		border-bottom-right-radius: 20px;
		font: normal normal normal 14px/1 FontAwesome;
		font-size: 1.33333333em;
	}
	@media( max-width: 800px){
		.w3_agileits_services_grid{
			width: 100%;
		}
		.w3_agileits_services_grid_agile{
			padding: 1em 0 1em 0;
		}
		.package_name{
			height: 200px;
			padding: 15% 5%;
			border-top-right-radius: 0px;
    		border-bottom-left-radius: 10px;
		}
		.package_image{
			width: 100%;
			height: 200px;
			border-top-left-radius: 10px;
			border-top-right-radius: 10px;
			border-bottom-left-radius: 0px;
		}
		.review_img1{
			width: 100%;
			margin: 1em 0 0;
			padding-right: 1em;
		}
		.all_reviews_btn{
			padding-left: 8%;
		}
	}
</style>
<div class="baner-info">  
	<div class="row">
	<!-- <h3>Welcome To   <span>Feet Up </span> <span1>Holidays</span1></h3><br> -->
		<div class="col-sm-10 col-sm-offset-2">
			<form class="form-horizontal" method="get" action="<?=site_url('search')?>">
				<div class="form-group">
					<div class="col-sm-3" style="padding-right:0px;">
						<div class="input-group date">
                        	<input type="text" name="form_dates" class="form-control" placeholder="Check In" style="height:45px;"><span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                    	</div>
					</div>
					<div class="col-sm-3" style="padding-right:0px;">
						<div class="input-group date">
                        	<input type="text" name="till_dates" class="form-control" placeholder="Check Out" style="height:45px;"><span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                    	</div>						
					</div>
					
					<div class="col-sm-2 " style="padding-right:0px;">
						<select class="form-control" id="adult" name="adult" style="height:45px;">
							<option value="">Guests</option>
							<?php for ($i=1; $i <= 30; $i++) { 
								echo "<option value='".$i."'>".$i." Guests</option>";
							} ?>
						</select>
					</div>				
					<div class="col-sm-2 hidden">
						<select class="form-control" name="child">
							<option value="0">Please Select Childs</option>
							<option value="1">1 Child</option>
							<option value="2">2 Child</option>
							<option value="3">3 Child</option>
							<option value="4">4 Child</option>
							<option value="5">5 Child</option>
							<option value="6">6 Child</option>
							<option value="7">7 Child</option>
							<option value="8">8 Child</option>
							<option value="9">9 Child</option>
							<option value="10">10 Child</option>
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
						<button type="submit" value="" class="btn btn-primary btn-lg">Check Availability</button>
					</div>
				</div>
			</form>		
		</div>
	</div>
	<!-- <p style="font-style: oblique;">unwind explore escape</p> -->
</div>
</div>
</div>
</div>
<div class="special featured" id="destinations">
	<div class="container">
		<div class="ab-w3l-spa col-sm-4" style="padding-left : 2rem;">
			<h3 class="tittle">Browse Villas in Goa</span></h3>
			<hr class="hr-line mt-2 mb-3 mr-5">					
		</div>
		<!-- services -->
		<div class="col-sm-12">		
			<div class="w3_agileits_services_grids" >
				<?php foreach ($destinations as $key) { ?>
				<a href="<?php echo site_url('destinations/'.$key['des_name'].'/'.$key['des_id'].'') ?>">
				<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 w3_agileits_services_grid hvr-overline-from-center">
					<div class="w3_agileits_services_grid_agile">
						<div class="w3_agileits_services_grid_1">
						<?php if($key['des_img'] == ''){ ?>
							<img src="<?=base_url()?>assets/images/image-not-available.jpg" alt="service-img">
						<?php }else{ ?>
							<img src="<?php echo $key['des_img']; ?>" alt="service-img" style="border-radius: 10px;">
						<?php } ?>
						</div>
						<h3><b><?php echo ucfirst(strtolower($key['des_name'])); ?></b></h3>
					</div>
				</div>
				</a>	
				<?php } ?>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
</div>
<div class="special featured" id="packages">
	<div class="container">
		<!-- services -->
			<?php foreach ($packages as $key) { ?>
				<span type="button"  data-toggle="modal" data-target="#exampleModal" style="cursor: pointer;">
					<div class="w3_agileits_services_grids" >
						<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12" id="packages_section" style="border-radius:10px;">
							<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12" style="padding:0px;">
								<img src="//res.cloudinary.com/www-saffronstays-com/image/upload/f_auto,fl_force_strip.progressive:steep,c_limit,q_40,e_auto_contrast,h_800,w_1500/v1600154230/p8qwoaepqkvzx5ouvihr.jpg" class="package_image">
							</div>
							<div class="col-sm-12 col-md-6 col-lg-6 col-xs-12 package_name">
								<img src="https://res.cloudinary.com/www-saffronstays-com/image/upload/h_100,w_320/v1/mewtwo/images/Final_INTRO_X_Series.svg" alt="" height="100" style="width: 100%;">
							</div>
						</div>
					</div>
				</span>
			<?php } ?>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<div class="special featured" id="destinations">
	<div class="container">
		<div class="ab-w3l-spa col-sm-4" style="padding-left : 2rem;">
			<h3 class="tittle">The AspireStays Experience</span></h3>
			<hr class="hr-line mt-2 mb-3 mr-5">					
		</div>
		<!-- services -->
		<div class="col-sm-12" style="padding-right: 0px;">		
			<div class="w3_agileits_services_grids" >
				<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 w3_agileits_services_grid hvr-overline-from-center review_img1">
					<div class="w3_agileits_services_grid_agile" style="border-radius: 3%;padding: 0;">
						<div class="w3_agileits_services_grid_1">
							<img src="https://files.elfsight.com/storage/b97a3685-42c2-4a78-95f5-9cecc1d26b12/6d058586-293d-4292-8854-5f9766c18d65.png" alt="service-img" style="border-top-left-radius: 3%;border-top-right-radius: 3%;">
						
						</div>
						<h3 style="margin: 2em 0 1.5em;letter-spacing: 1px;"><b><?php echo ucfirst(strtolower("Food")); ?></b></h3>
					</div>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 w3_agileits_services_grid hvr-overline-from-center review_img1">
					<div class="w3_agileits_services_grid_agile" style="border-radius: 3%;padding: 0;">
						<div class="w3_agileits_services_grid_1">
							<img src="https://files.elfsight.com/storage/b97a3685-42c2-4a78-95f5-9cecc1d26b12/6d058586-293d-4292-8854-5f9766c18d65.png" alt="service-img" style="border-top-left-radius: 3%;border-top-right-radius: 3%;">
						
						</div>
						<h3 style="margin: 2em 0 1.5em;letter-spacing: 1px;"><b><?php echo ucfirst(strtolower(" Privacy & safety")); ?></b></h3>
					</div>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 w3_agileits_services_grid hvr-overline-from-center review_img1">
					<div class="w3_agileits_services_grid_agile" style="border-radius: 3%;padding: 0;">
						<div class="w3_agileits_services_grid_1">
							<img src="https://files.elfsight.com/storage/b97a3685-42c2-4a78-95f5-9cecc1d26b12/6d058586-293d-4292-8854-5f9766c18d65.png" alt="service-img" style="border-top-left-radius: 3%;border-top-right-radius: 3%;">
						
						</div>
						<h3 style="margin: 2em 0 1.5em;letter-spacing: 1px;"><b><?php echo ucfirst(strtolower("Pool")); ?></b></h3>
					</div>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 w3_agileits_services_grid hvr-overline-from-center review_img1">
					<div class="w3_agileits_services_grid_agile" style="border-radius: 3%;padding: 0;">
						<div class="w3_agileits_services_grid_1">
							<img src="https://files.elfsight.com/storage/b97a3685-42c2-4a78-95f5-9cecc1d26b12/6d058586-293d-4292-8854-5f9766c18d65.png" alt="service-img" style="border-top-left-radius: 3%;border-top-right-radius: 3%;">
						
						</div>
						<h3 style="margin: 2em 0 1.5em;letter-spacing: 1px;"><b><?php echo ucfirst(strtolower("Info graphics for no. of customers & no. of years")); ?></b></h3>
					</div>
				</div>
			</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
</div>
<!-- <div style="padding: 2em;">
    <h3 class="tittle">Guest's Reviews</h3>
</div> -->
<div class="guests-agile" style="padding-top: 3em;">
	<a href="https://aspirevillastays.com/Blog/" target="_blank"><span class="btn btn-primary all_reviews_btn"><i class="fa fa-list "></i> All Reviews</span></a>
	<div class="w3_agileits_testimonial_grids">
		<section class="slider">
			<div class="flexslider">
				<ul class="slides">
					<?php if(!empty($review)){foreach ($review as $key) { ?>
					<li>
						<div class="w3_agileits_testimonial_grid">
							<i class="fa fa-quote-right" aria-hidden="true"></i>
							<p><?php echo $key['post_excerpt']; ?></p>
							<img src="<?php echo base_url().'assets/images/tag.png'?>" style="width: 10%;"alt=" " class="img-responsive" />
							<p><?php echo substr($key['post_title'],19,(strrpos($key['post_title'], 'stayed')-19)); ?></p>
						</div>
					</li>
					<?php } }else{ ?>
					<li>
						<div class="w3_agileits_testimonial_grid">
							<i class="fa fa-quote-right" aria-hidden="true"></i>
							<p><?php echo "Welcome to post first review."; ?></p>
							<img src="<?php echo base_url().'assets/images/tag.png'?>" style="width: 10%;" alt=" " class="img-responsive" />
						</div>
					</li>
					<?php } ?>
				</ul>
			</div>
		</section>

		<!-- //flexSlider -->
	</div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  	<div class="modal-dialog" role="document">
    	<div class="modal-content">
	    	<form class="form-horizontal" id="packageEnquiry" method="post" action="<?= site_url('Home/package_enquiry') ?>">
	      		<div class="modal-header">
	        		<h5 class="modal-title" id="exampleModalLabel">Enquiry For Packages Booking</h5>
		      	</div>
		      	<div class="modal-body">
		        	<div class="form-group">
		        		<div class="col-sm-12">
		        			<label class="control-label">Name <span style="color: red;">*</span></label>
		        			<input type="text" name="contact_name" class="form-control">
		        		</div>
		        	</div>
		        	<div class="form-group">
		        		<div class="col-sm-12">
		        			<label class="control-label">Email <span style="color: red;">*</span></label>
		        			<input type="email" name="contact_email" class="form-control">
		        		</div>
		        	</div>
		        	<div class="form-group">
		        		<div class="col-sm-12">
		        			<label class="control-label">Mobile No. <span style="color: red;">*</span></label>
		        			<input type="text" name="contact_mobile" class="form-control">
		        		</div>
		        	</div>
		        	<div class="form-group">
		        		<div class="col-sm-12">
		        			<label class="control-label">Message </label>
		        			<textarea name="contact_msg" class="form-control" rows="5"></textarea>
		        		</div>
		        	</div>
		      	</div>
		      	<div class="modal-footer">
		        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        	<button type="submit" class="btn btn-primary">Submit</button>
		      	</div>
		    </form>
    	</div>
  	</div>
</div>
<!-- //testimonials -->
